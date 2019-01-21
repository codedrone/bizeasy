<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends My_Controller {
	function __construct() {
        parent::__construct();
        $sessiondata=$this->session->userdata('login_info');
        if($sessiondata==null)
        {
           redirect($this->data['base_url'].'Authenticate');
        }
    }
    /* 
        Purpose : Display record - Administrator List
    */
    public function index()
	{
		$columnsToSelect = 'iAdminId,vName,vEmail,vPassword,dtCreatedDateTime,dtUpdatedDateTime,eStatus';
        $comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'));
        $sortingColumnsAndValues = array('eStatus'=>'ASC','iAdminId'=>'DESC');
        $adminData = $this->QueryCreator_model->selectQuery('administrators',$columnsToSelect,$comparisonColumnsAndValues,'multiple',$sortingColumnsAndValues);
        foreach ($adminData as $key => $value){
            if($adminData[$key]['dtCreatedDateTime']!='0000-00-00 00:00:00'){
                $createdDateTime = date_create($adminData[$key]['dtCreatedDateTime']);
                $adminData[$key]['dtCreatedDateTime'] = date_format($createdDateTime, 'jS F Y g:i A');
            }
            else{
                $adminData[$key]['dtCreatedDateTime'] = '';
            }
        }
        $sessiondata=$this->session->userdata('login_info');
        $this->data['adminData']=$adminData;
        $this->data['message']=$this->session->flashdata('message');
        $this->data['login_info']=$sessiondata;
        $this->data['data']=$this->data;
		$this->data['pagename'] = 'administrator';
		$this->data['filename'] = './administrator/listAdministrator.tpl';
		$this->smarty->view('admin/template.tpl', $this->data);
	}
    /* 
        Purpose : Add record - Administrator 
    */
	function add()
    {
        if($this->input->post()){
            $insertRec = $this->input->post();
            $insertRec['vPassword'] = $this->encrypt($insertRec['vPassword']);
            $insertRec['dtCreatedDateTime']=date('Y-m-d H:i:s');
            $insertRec['dtUpdatedDateTime']=date('Y-m-d H:i:s');
            $iAdminId = $this->QueryCreator_model->insertSingle('administrators',$insertRec);
            if($iAdminId>0){
                $this->session->set_flashdata('message','Record Added Successfully.');
            }
            redirect($this->data['base_url'].'admin/Administrator');
            exit();
        }
        $sessiondata=$this->session->userdata('login_info');
        $this->data['login_info']=$sessiondata;
        $this->data['message']=$this->session->flashdata('message');
        $this->data['mode'] = 'add';
		$this->data['pagename'] = 'administrator';
		$this->data['filename'] = './administrator/addEditAdmin.tpl';
		$this->smarty->view('admin/template.tpl', $this->data);
	}
    /* 
        Purpose : Edit record - Administrator 
    */
    function edit()
    {
        if($this->input->post()){
            $targetColumnsAndValues =$this->input->post();
            $iAdminId=$targetColumnsAndValues['iAdminId'];
            if(isset($targetColumnsAndValues['vPassword'])){
                $targetColumnsAndValues['vPassword']=$this->encrypt($targetColumnsAndValues['vPassword']);
            }
            $targetColumnsAndValues['dtUpdatedDateTime']=date('Y-m-d H:i:s');
            $sessiondata=$this->session->userdata('login_info');
            $comparisonColumnsAndValues = array('iAdminId' => array($iAdminId,'where'));
            $totalRows = $this->QueryCreator_model->updateQuery('administrators',$comparisonColumnsAndValues,$targetColumnsAndValues);
            if($targetColumnsAndValues['iAdminId'] == $sessiondata['iAdminId']){
                $columnsToSelect = 'iAdminId,vName,vEmail,vPassword,eStatus';
                $comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'),'iAdminId' => array($iAdminId,'where'));
                $adminArr = $this->QueryCreator_model->selectQuery('administrators',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
                $session_arr['iAdminId'] = $adminArr['iAdminId'];
                $session_arr['vName'] = $adminArr['vName'];
                $session_arr['vEmail'] = $adminArr['vEmail'];
                $session_arr['vPassword'] = $this->decrypt($adminArr['vPassword']);
                $this->session->set_userdata('login_info',$session_arr);
            }
            if($totalRows>0){
               $this->session->set_flashdata('message', 'Record Updated Successfully.');
            } 
            redirect($this->data['base_url'].'admin/Administrator');
            exit();
        }
        $iAdminId=$this->uri->segment('4');
        $columnsToSelect = 'iAdminId,vName,vEmail,vPassword,eStatus';
        $comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'),'iAdminId' => array($iAdminId,'where'));
        $singleRecord = $this->QueryCreator_model->selectQuery('administrators',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
        if(count($singleRecord)==0){
            $this->session->set_flashdata('message', "Record doesn't exists");
            redirect($this->data['base_url'].'admin/Administrator');exit;
        }
        else{
            $singleRecord['vPassword']=$this->decrypt($singleRecord['vPassword']);
            $this->data['singleRecord']=$singleRecord;
            $sessiondata=$this->session->userdata('login_info');
            $this->data['login_info']=$sessiondata;
            $this->data['mode'] = 'edit';
            $this->data['pagename'] = 'administrator';
            $this->data['filename'] = './administrator/addEditAdmin.tpl';
            $this->smarty->view('admin/template.tpl', $this->data);
        }
    }
    /* 
        Purpose : Delete record - Administrator 
    */
    function actionDelete()
    {
        $ids = $this->input->post('iId');
        $action = $this->input->post('action');
        $targetColumnsAndValues['eStatus'] = $action;
        if($action!='Deleted'){
            $targetColumnsAndValues['eStatus'] = $action;
            $targetColumnsAndValues['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
            $comparisonColumnsAndValues = array('iAdminId' => array($ids,'where_in'));
            $totalRows = $this->QueryCreator_model->updateQuery('administrators',$comparisonColumnsAndValues,$targetColumnsAndValues);
            if($totalRows>0){
              $record_title = ($totalRows>1) ? "Records" : "Record";
              $display_msg = ($action=='Archive') ? 'Total ('.$totalRows.') '.$record_title.' Archived Successfully.' : 'Total ('.$totalRows.') '.$record_title.' Updated Successfully.';
              $this->session->set_flashdata('message', $display_msg);
            }
        }
        else{
            $comparisonColumnsAndValues = array('iAdminId' => array($ids,'where_in'));
            $totalRows1 = $this->QueryCreator_model->deleteQuery('administrators',$comparisonColumnsAndValues);
            if($totalRows1>0){
                $record_title = ($totalRows1>1) ? "Records" : "Record";
                $display_msg =  'Total ('.$totalRows1.') '.$record_title.' Deleted Successfully.';
                $this->session->set_flashdata('message', $display_msg);
            }      
        }
        redirect($this->data['base_url'].'admin/Administrator');
        exit();
    }
    /* 
        Purpose : Check Passwored exits all not
    */
    function check_exist_password()
    {
        $password = $this->input->get('password');
        $pass=$this->encrypt($password);
        $iAdminId=$this->input->get('iAdminId'); 
        $comparisonColumnsAndValues = array('vPassword =' => array($pass,'where'),'iAdminId' => array($iAdminId,'where'));
        $singleRecord = $this->QueryCreator_model->noOfRecords('administrators',$comparisonColumnsAndValues);
        print_r($singleRecord);
        exit;
    }
    /* 
        Purpose : Check Email exists or not
    */
    function check_email_exists()
    {
        $vEmail = $this->input->get('vEmail');
        $comparisonColumnsAndValues = array('vEmail' => array($vEmail,'where'));
        $noOfRows = $this->QueryCreator_model->noOfRecords('administrators',$comparisonColumnsAndValues);
        echo $noOfRows;
        exit;
    }
    /* 
        Purpose : Change Password
    */
    function changePassword()
    {   
        if($this->input->post()){
            $user_detail=$this->input->post();
            $iAdminId=$user_detail['iAdminId'];
            unset($user_detail['oldpass']);
            unset($user_detail['retypepass']);
            $user_detail['vPassword']= $this->encrypt($user_detail['newpass']);
            unset($user_detail['newpass']);
            unset($user_detail['iAdminId']);
            $comparisonColumnsAndValues = array('iAdminId' => array($iAdminId,'where'));
            $response = $this->QueryCreator_model->updateQuery('administrators',$comparisonColumnsAndValues,$user_detail);
            if($response>0){ 
                $this->session->set_flashdata('message','Password Successfully Changed.');
            }
            redirect($this->data['base_url'].'admin/Dashboard');
        }
        $iAdminId = $this->uri->segment('4');
        $columnsToSelect = 'iAdminId,vName,vEmail,vPassword,eStatus';
        $comparisonColumnsAndValues = array('iAdminId' => array($iAdminId,'where'));
        $this->data['singleRecord']=$this->QueryCreator_model->selectQuery('administrators',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
        $this->data['vPassword']=$this->decrypt($singleRecord['vPassword']);
        $this->data['iAdminId'] = $iAdminId;
        $sessiondata=$this->session->userdata('login_info');
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['login_info'] = $sessiondata;
        $this->data['pagename'] = 'administrator';
        $this->data['filename'] = './administrator/changePassword.tpl';
        $this->smarty->view('admin/template.tpl', $this->data); 
    }
}
