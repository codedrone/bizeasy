<?php defined('BASEPATH') OR exit('No direct script access allowed');
	if($_SERVER["HTTP_HOST"]=='www.bizeazy.net'){
		session_start();
		error_reporting(E_ALL);
	}
	error_reporting(1);

class MY_Controller extends CI_Controller {
	function __construct()
	{
		parent::__construct(); 
		ini_set('post_max_size', '500M');
		ini_set('upload_max_filesize', '500M');
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('email');
		$this->load->helper('file');
		$this->load->library('Image_lib');
		$this->load->library('Upload');
		$this->load->helper('string');
		$this->load->model('QueryCreator_model');
		$this->data['base_path'] = $this->config->item('base_path');
		$this->data['base_url'] = $this->config->item('base_url');
		$this->data['base_upload'] = $this->config->item('base_upload');
		$this->data['base_upload_path'] = $this->config->item('base_upload_path');
		$this->data['redirect_url'] = $this->config->item('redirect_url');
		if ($this->session->userdata('shopArrSession')) {
			$this->data['shopArrSession'] = $this->session->userdata('shopArrSession');
		}
		$columnsToSelect = 'iConfigurationId, eSection,tTitle,vName,eType,tExtra,vValue';
        $comparisonColumnsAndValues = array('iConfigurationId !=' => array('','where'));

        try {
        	$configurations = $this->QueryCreator_model->selectQuery('configurations',$columnsToSelect,$comparisonColumnsAndValues,'Multiple',NULL, [], 0);
        } catch (Exception $e) {
        	echo $e->getMessage();
        	exit;
        }
        foreach ($configurations as $key => $value) {
            
            
            if($value['vName']=='DEFAULT_LOGO')
            {
                $this->data['admin_logo'] = $value['vValue'];
            }
            if($value['vName']=='DEFAULT_ADMIN_EMAIL')
            {
                $this->data['DEFAULT_ADMIN_EMAIL'] = $value['vValue'];
            }
            if($value['vName']=='DEFAULT_LOGO')
            {
                $this->data['admin_logo'] = $value['vValue'];
            }

            if($value['vName']=='DEFAULT_WEB_LOGO')
            {
                $this->data['web_logo'] = $value['vValue'];
                
            }
            if($value['vName']=='DEFAULT_SHOPS_LOGO')
            {
                $this->data['shops_logo'] = $value['vValue'];
            }

            if ($value['vName']=='DEFAULT_RECORD_LIMIT') {
				$this->data['configurations_lenth']=(int)$value['vValue']; 
			}
			   //footer copy rights
			if ($value['vName']=='DEFAULT_COPY_RIGHT_TEXT') {
				$this->data['copyRightText']=$value['vValue']; 
			}
			//footer copy rights
			if ($value['vName']=='CURRENT_LATITUDE') {
				$this->data['CURRENT_LATITUDE']=$value['vValue']; 
			}
			if ($value['vName']=='CURRENT_LONGITUDE') {
				$this->data['CURRENT_LONGITUDE']=$value['vValue']; 
			}
			if ($value['vName']=='DEFAULT_SITE_TITLE') {
				$this->data['site_title']=$value['vValue']; 
			}

		}
		$this->data['HTTP_HOST']=$_SERVER["HTTP_HOST"];
		$this->data['admin_theme_base_css'] = $this->config->item('base_url').'assets/theme/admin/css/';
		$this->data['admin_theme_base_img'] = $this->config->item('base_url').'assets/theme/admin/img/';
		$this->data['admin_theme_base_js'] = $this->config->item('base_url').'assets/theme/js/';
		$this->data['admin_theme_base_plugins'] = $this->config->item('base_url').'assets/theme/plugins/';
	}
	function cronUpdateMembership()
	{
		$columnsToSelect = '';
		$memberships = $this->QueryCreator_model->selectQuery('memberships',$columnsToSelect,NULL,'Multiple',NULL);

		foreach ($memberships as $key => $value) {
			$currentDate=date('Y-m-d');
			$membershipsEndDate=strtotime($memberships[$key]['dEndDate']);
			$iMemberShipId=$memberships[$key]['iMemberShipId'];
			
			$currentDate=strtotime(date($currentDate));
			if ($currentDate>=$membershipsEndDate) {

				$targetColumnsAndValues['dtUpdatedDateTime']=date('Y-m-d H:i:s');
				$targetColumnsAndValues['eChargeStatus']="Expired";
				$targetColumnsAndValues['eMembershipStatus']="Cancel";
				$comparisonColumnsAndValues = array('iMemberShipId' => array($iMemberShipId,'where'));
				$totalRows = $this->QueryCreator_model->updateQuery('memberships',$comparisonColumnsAndValues,$targetColumnsAndValues);   
				/*if ($totalRows>0) {
					$targetColumnsAndValuesShops['dtUpdatedDateTime']=date('Y-m-d H:i:s');
					$targetColumnsAndValuesShops['eStatus']="Inactive";
					$iShopId=$memberships[$key]['iShopId'];
					$comparisonColumnsAndValuesShops = array('iShopId' => array($iShopId,'where'));
					$shopsTotalRows = $this->QueryCreator_model->updateQuery('shops',$comparisonColumnsAndValuesShops,$targetColumnsAndValuesShops);   
				}*/
			}
		}
	   
	}
	function encrypt($data)
	{
		for($i = 0, $key = 27, $c = 48; $i <= 255; $i++){
			$c = 255 & ($key ^ ($c << 1));
			$table[$key] = $c;
			$key = 255 & ($key + 1);
		}
		$len = strlen($data);
		for($i = 0; $i < $len; $i++){
			$data[$i] = chr($table[ord($data[$i])]);
		}
		return base64_encode($data);
	}
	 
	function decrypt($data)
	{
		$data = base64_decode($data);
		for($i = 0, $key = 27, $c = 48; $i <= 255; $i++){
			$c = 255 & ($key ^ ($c << 1));
			$table[$c] = $key;
			$key = 255 & ($key + 1);
		}
		$len = strlen($data);
		for($i = 0; $i < $len; $i++){
			$data[$i] = chr($table[ord($data[$i])]);
		}
		return $data;
	}
	function dateTimeFormat($datetime){
		if ($datetime != '0000-00-00 00:00:00') {
		   $date = date_create_from_format("Y-m-d",date('Y-m-d',strtotime($datetime)));
			$time = date_create_from_format("H:i:s",date('H:i:s',strtotime($datetime)));
			return date_format($date,"j M").' at '.date_format($time, 'G:i A');
		}
		else
		{
			return '';
		}
	}
	function dateTimeFormatWithYear($datetime){
		if ($datetime != '0000-00-00 00:00:00') {
		   $date = date_create_from_format("Y-m-d",date('Y-m-d',strtotime($datetime)));
			$time = date_create_from_format("H:i:s",date('H:i:s',strtotime($datetime)));
			return date_format($date,"j M Y").' at '.date_format($time, 'G:i A');
		}
		else
		{
			return '';
		}
	}
	/*  
		Purpose : Date Format
	*/
	function dateFormat($date){
		if ($date != '0000-00-00') {
		   $date = date_create_from_format("Y-m-d",date('Y-m-d',strtotime($date)));
			return date_format($date,"j M");
		}
		else
		{
			return '';
		}
	}
	function dateFormatWithYear($date){
		if ($date != '0000-00-00') {
		   $date = date_create_from_format("Y-m-d",date('Y-m-d',strtotime($date)));
			return date_format($date,"j M Y");
		}
		else
		{
			return '';
		}
	}
	/*  
		Purpose : Date Format
	*/
	function timeFormat($time){
		if ($time != '00:00:00') {
			$time = date_create_from_format("H:i:s",date('H:i:s',strtotime($time)));
			return date_format($time, 'G:i A');
		}
		else
		{
			return '';
		}
	}
	

	/* 
		Created By : Bhupendra
		Created Date : 26 jan 2018
		Purpose : Curl Http Responce
	*/
	public function  curlHttpResponce($url)
	{
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_URL, $url);
			$result = curl_exec($ch);
			curl_close($ch);
			 $obj = json_decode($result); 
		return $obj;
	}

	/* 
		Created By : Bhupendra
		Created Date : 26 jan 2018
		Purpose : Send Mail
	*/
   function send_email($vEmailCode,$vEmail,$bodyArr,$postArr)
	{   
		if($vEmailCode!=NULL && $vEmailCode!='signup')
		{
		 
			$columnsToSelect = 'iEmailTemplateId,vEmailCode,vFromName,vFromEmail,vFromEmail,vEmailSubject,tEmailMessage,dtCreatedDateTime,eStatus';
			$comparisonColumnsAndValues = array('vEmailCode' => array($vEmailCode,'where'));
			$email_info=$this->QueryCreator_model->selectQuery('email_templates',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
			$subject = strtr($email_info['vEmailSubject'], "\r\n" , "  " );
			$body = stripslashes($email_info['tEmailMessage']);
			$from_name = $email_info['vFromName'];
			$from_email = $email_info['vFromEmail'];
		
		}
		else if($vEmailCode=='signup')
		{
			$body=$bodyArr;
			$from_name= 'Bizeazy';
			$from_email='demo4.testing4@gmail.com';
			$subject = 'Welcome to Bizeazy';
		}
		else
		{
			$body=$bodyArr;
			$from_name= 'Bizeazy';
			$from_email='demo4.testing4@gmail.com';
			$subject = 'Bizeazy - Forgot Password';
		}
		$body = str_replace($bodyArr,$postArr, $body);
		
		$to = stripcslashes($vEmail);
		require_once(APPPATH.'third_party/PHPMailer-master/PHPMailerAutoload.php');
		$mail = new PHPMailer;
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = "smtp.gmail.com";
		$mail->SMTPAuth = true;       
		$mail->SMTPDebug = 0;                     // Enable SMTP authentication
		$mail->Username = 'demo4.testing4@gmail.com';                 // SMTP username
		$mail->Password = 'demo12345';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                  // TCP port to connect to
		$mail->From = 'support@bizeazy.net';
		$mail->FromName = $from_name;
		$mail->addAddress($to);
		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $body;
		$mail->AltBody = ''; 
		if(!$mail->send()) {
			$res = 0;
		} else {
			$res = 1;
		}
		return $res;        
	}
	/* 
		Created By : Bhupendra
		Created Date : 26 jan 2018
		Purpose : Send Mail
	*/
	function SendMailOneToAnothor($vEmailCode,$ToEmail,$bodyArr,$postArr,$FromEmail,$vFromName){

		$columnsToSelect = 'iEmailTemplateId,vEmailCode,vFromName,vFromEmail,vFromEmail,vEmailSubject,tEmailMessage,dtCreatedDateTime,eStatus';
		$comparisonColumnsAndValues = array('vEmailCode' => array($vEmailCode,'where'));
		$email_info=$this->QueryCreator_model->selectQuery('email_templates',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
		$Subject = strtr($email_info['vEmailSubject'], "\r\n" , "  " );
		$body = stripslashes($email_info['tEmailMessage']);
        $body = str_replace($bodyArr,$postArr, $body);
		
		require_once(APPPATH.'third_party/PHPMailer-master/PHPMailerAutoload.php');
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;       
        $mail->SMTPDebug = 0;                               // Enable SMTP authentication
        $mail->Username = 'demo4.testing4@gmail.com';       // SMTP username
        $mail->Password = 'demo12345'; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587;                                  // TCP port to connect to
        $mail->From = $FromEmail;
        $mail->FromName = $vFromName;
        $mail->addAddress($ToEmail);                          // Add a recipient
        
        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $Subject;
        $mail->Body    = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if(!$mail->send()) {
            $res = 0;
        } else {
            $res = 1;
        }
        return $res;			
	}
	/* 
		Created By : Bhupendra
		Created Date : 26 jan 2018
		Purpose :File Upload in Specific Folder
	*/

	function do_upload_various_files($folderId,$folder,$image){
		if(!is_dir('assets/uploads/'.$folder.'/')){
			@mkdir('assets/uploads/'.$folder.'/', 0777);
		}
		if(!is_dir('assets/uploads/'.$folder.'/'.$folderId)){
			@mkdir('assets/uploads/'.$folder.'/'.$folderId, 0777);
		}
		
		$name = date('YmdHis').'_'.$_FILES[$image]['name'];
		$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $name);

		$basepath = $this->data['base_upload_path'].$folder.'/'.$folderId.'/'.$file_name;
		if(move_uploaded_file($_FILES[$image]['tmp_name'],$basepath)){

			return $file_name;
		}
		else {
			return '';
		}
	}/* 
		Created By : Bhupendra
		Created Date : 26 jan 2018
		Purpose :Multiple File  Upload in Specific Folder
	*/
	function do_upload_various_MultipleFiles($folderId,$folder,$image,$i){
		if(!is_dir('assets/uploads/'.$folder.'/')){
			@mkdir('assets/uploads/'.$folder.'/', 0777);
		}
		if(!is_dir('assets/uploads/'.$folder.'/'.$folderId)){
			@mkdir('assets/uploads/'.$folder.'/'.$folderId, 0777);
		}
		
		$name = date('YmdHis').'_'.$_FILES[$image]['name'][$i];
		$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $name);

		$basepath = $this->data['base_upload_path'].$folder.'/'.$folderId.'/'.$file_name;
		if(move_uploaded_file($_FILES[$image]['tmp_name'][$i],$basepath)){

			return $file_name;
		}
		else {
			return '';
		}
	}

}