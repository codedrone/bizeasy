<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Authenticate extends My_Controller {
	function __construct() {
        parent::__construct();
    }
     /* 
        Purpose : Display Login and Check Credentials
    */
	public function index()
	{
		if($this->input->post()){
            $loginCredentials = $this->input->post();
            if(isset($loginCredentials['remember_me'])){
                set_cookie('loginCredentialsEmail',$loginCredentials['vEmail'],'3600');
                set_cookie('loginCredentialsPassword',$loginCredentials['vPassword'],'3600');
            }
            else {
                delete_cookie('loginCredentialsEmail');
                delete_cookie('loginCredentialsPassword');
            } 
        	$loginCredentials['vPassword'] = $this->encrypt($loginCredentials['vPassword']);
        	$vEmail=$this->input->post('vEmail');
        	$columnsToSelect = 'iAdminId,vName,vEmail,vPassword,dtCreatedDateTime,eStatus';
        	$comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'),'vEmail' => array($vEmail,'where'));
        	$loginData = $this->QueryCreator_model->selectQuery('administrators',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL, [], 0);
        	 if($loginData != NULL){
                if ($loginData['eStatus'] != 'Inactive') {
                    if ($loginData['vPassword'] == $loginCredentials['vPassword']) {
                        $session_arr['iAdminId'] = $loginData['iAdminId'];
                        $session_arr['roleTitle'] = 'Admin';
                        $session_arr['vName'] = ucfirst($loginData['vName']);
                        $session_arr['vEmail'] = $loginData['vEmail'];
                        
                        $history_arr['ePlatformType'] = 'Admin';
                        $history_arr['vName'] = ucfirst($loginData['vName']);
                        $history_arr['vRole'] = 'Admin';
                        $history_arr['vEmail'] = $loginData['vEmail'];
                        $history_arr['vIPAddress'] = $this->input->ip_address();
                        $history_arr['vDeviceId'] = '';
                        $history_arr['dtLoginDateTime'] = date('Y-m-d H:i:s');
                        $iLogId=$this->QueryCreator_model->insertSingle('login_logs',$history_arr);
                        $session_arr['iLastLoginId'] = $iLogId;
                        $session=$this->session->set_userdata('login_info',$session_arr);
                        redirect( $this->data['base_url'].'admin/Dashboard');
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "Sorry, Email and password doesn't match");
                        redirect( $this->data['base_url'].'Authenticate');
                    }
                }
                else
                {
                    $this->session->set_flashdata('message', "Sorry, Your account inactiveted");
                    redirect( $this->data['base_url'].'Authenticate');
                }
                
            }
            else{
                $this->session->set_flashdata('message', "Sorry, Bizeazy doesn't recognize that email.");
                redirect($this->data['base_url'].'Authenticate');
            }

        }
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['vEmail'] = (get_cookie('loginCredentialsEmail')) ? get_cookie('loginCredentialsEmail') : '';
        $this->data['vPassword'] = (get_cookie('loginCredentialsPassword')) ? get_cookie('loginCredentialsPassword') : '';
        $this->data['rememberMe'] = (get_cookie('loginCredentialsEmail') && get_cookie('loginCredentialsPassword')) ? 'checked' : '';
		$this->data['message'] = $this->session->flashdata('message');
        $this->smarty->view('admin/login.tpl', $this->data);
	}

     /* 
        Purpose : Display Forogot password page and Send Forgot Password link to User Email
    */
	public function forgotPassword()
	{
		 if($this->input->post())
        {
            $userEmail=$this->input->post('vEmail');
            $columnsToSelect = 'iAdminId,vName,vEmail,vPassword,eStatus';
            $comparisonColumnsAndValues = array('vEmail' => array($userEmail,'where'));
            $userExists=$this->QueryCreator_model->selectQuery('administrators',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
            if(count($userExists)>0)
            {
                if($userExists['eStatus']=='Inactive')
                {
                    $this->session->set_flashdata('message', "Sorry, Your account is inactive.");
                    redirect($this->data['base_url'].'Authenticate/forgotPassword');
                }
                else if($userExists['eStatus']=='Archive')
                {
                    $this->session->set_flashdata('message', 'Your account has been frozen. please contact to super administrators.');
                    redirect($this->data['base_url'].'Authenticate/forgotPassword');
                }
                else
                {
                    $vOTP = random_string('alnum',6);
                    $update_admin_arr['vOTP'] = $vOTP;
                    $comparisonColumnsAndValues = array('iAdminId' => array($userExists['iAdminId'],'where'));
                    $this->QueryCreator_model->updateQuery('administrators',$comparisonColumnsAndValues,$update_admin_arr);
                    $link=$this->data['base_url'].'Authenticate/resetPassword?vOTP='.$vOTP;
                    $logo="https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_LOGO/6876087.png";
                    $bodyArr = array('#EMAIL_LOGO#','#USERNAME#','#LINK#');
                    $postArr = array($logo,$userExists['vName'],$link);
                    $response = $this->send_email('LINK',$userExists['vEmail'],$bodyArr,$postArr);
                    if($response==1){
                        $this->session->set_flashdata('message', 'Kindly check your Registered Email in a moment.');
                        redirect($this->data['base_url'].'Authenticate');
                    }
                    else {
                        $this->session->set_flashdata('message', 'Due to some technical reason, we are not able to send you an email, Please try again later.');
                        redirect($this->data['base_url'].'Authenticate/forgotPassword');
                    }
                }
            }
            else
            {
                $this->session->set_flashdata('message', "Sorry, Bizeazy doesn't recognize that email.");
                redirect($this->data['base_url'].'Authenticate/forgotPassword');
            }

        }   
        $this->data['message'] = $this->session->flashdata('message');   
        $this->data['title'] = 'Bizeazy - Forgot Password';
		$this->smarty->view('admin/forgotPassword.tpl', $this->data);
	}

   
     /* 
        Purpose : Reset page and update Password
    */
    
	public function resetPassword(){
        if($this->input->post())
        {
            $userInfo['vOTP']=$this->input->post('vOTP');
            if($userInfo['vOTP']=='')
            {
                return $this->smarty->view('issue.tpl', $this->data);exit;
            }
            else
            {
                $columnsToSelect = 'iAdminId';
                $comparisonColumnsAndValuesForOTP = array('vOTP' => array($userInfo['vOTP'],'where'));
                $vOTPExists = $this->QueryCreator_model->selectQuery('administrators',$columnsToSelect,$comparisonColumnsAndValuesForOTP,'Single',NULL);
                if($vOTPExists == NULL)
                {
                    $this->session->set_flashdata('message', "Sorry, Bizeazy doesn't recognize that OTP.");
                    $this->data['title'] = 'Bizeazy - Forgot Password';
                    $this->smarty->view( 'forgotPassword.tpl', $this->data );
                }
                else
                {
                    $password=$this->input->post('vPassword');
                    $password = $this->encrypt($password);
                    $update_user_arr['vPassword'] = $password;
                    $update_user_arr['vOTP'] = '';
                    $comparisonColumnsAndValues = array('iAdminId' => array($vOTPExists['iAdminId'],'where'));
                    $response = $this->QueryCreator_model->updateQuery('administrators',$comparisonColumnsAndValues,$update_user_arr);
                    if($response==1){ 
                        $this->session->set_flashdata('message', 'Your new password is set.');
                        redirect($this->data['base_url'].'Authenticate');
                    }
                    else {
                        $this->session->set_flashdata('message', 'Due to some technical reason, we are not able to send you an email, Please try again later.');
                        redirect($this->data['base_url'].'Authenticate/forgotPassword');
                    }
                }
            }
        }
        $this->data['message'] = $this->session->flashdata('message');  
        $this->data['vOTP'] = $this->input->get('vOTP');
        $this->data['title'] = 'Bizeazy - Reset Password';
        $this->smarty->view( 'admin/resetPassword.tpl', $this->data );
    }
    
     /* 
        Purpose : Sign Out User and unset Session
    */
    function signOut(){
        $userdata=$this->session->userdata('login_info');

        $comparisonColumnsAndValues = array('iLoginId' => array($userdata['iLastLoginId'],'where'));
        $logoutdata['dtLogoutDateTime']=date('Y-m-d H:i:s');
        $response = $this->QueryCreator_model->updateQuery('login_logs',$comparisonColumnsAndValues,$logoutdata);
        $this->session->unset_userdata('login_info');
        $this->session->set_flashdata('message','Thanks for using Bizeazy.');
        redirect($this->data['base_url'].'Authenticate');
    }

}


