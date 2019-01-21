<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailTemplate extends My_Controller {
	function __construct() {
        parent::__construct();
        $sessiondata=$this->session->userdata('login_info');
        if($sessiondata==null)
        {
           redirect($this->data['base_url'].'Authenticate');
        }
    }
     /* 
        Purpose : Display -Email Template list
    */
    
	public function index()
	{
        $columnsToSelect = 'iEmailTemplateId,vEmailCode,vFromName,vFromEmail,vEmailSubject,tEmailMessage,dtCreatedDateTime,dtUpdatedDateTime,eStatus';
        $comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'));
        $sortingColumnsAndValues = array('iEmailTemplateId'=>'DESC');
        $totalRows = $this->QueryCreator_model->selectQuery('email_templates',$columnsToSelect,$comparisonColumnsAndValues,'Multiple',$sortingColumnsAndValues);
        foreach ($totalRows as $key => $value) {
            if($totalRows[$key]['dtCreatedDateTime']!='0000-00-00 00:00:00'){
               $createdDateTime = date_create($totalRows[$key]['dtCreatedDateTime']);
                $totalRows[$key]['dtCreatedDateTime'] = date_format($createdDateTime, 'jS F Y g:i A');
            }
            else{
                $totalRows[$key]['dtCreatedDateTime'] = '';
            }
        }
        $this->data['emailTemplate']=$totalRows;
        $this->data['login_info'] =$this->session->userdata('login_info');
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['pagename'] = 'setting';
        $this->data['title'] = 'EmailTemplate';
        $this->data['filename'] = './emailTemplate/listEmailTemplate.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    /* 
        Purpose : Display -Email Template  Form and Add email Template
    */
    function add()
    {
        if($this->input->post()){
            $targetColumnsAndValues =$this->input->post();
            $targetColumnsAndValues['dtCreatedDateTime']=date('Y-m-d H:i:s');
            $targetColumnsAndValues['dtUpdatedDateTime']=date('Y-m-d H:i:s');
            $iEmailTemplateId = $this->QueryCreator_model->insertSingle('email_templates',$targetColumnsAndValues);
            if($iEmailTemplateId>0){
               $this->session->set_flashdata('message', 'Record Addedd Successfully.');
            } 
            redirect($this->data['base_url'].'admin/EmailTemplate');
            exit();
        }
        $this->data['login_info'] =$this->session->userdata('login_info');
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['pagename'] = 'setting';
        $this->data['title'] = 'EmailTemplate';
        $this->data['mode'] = 'add';
        $this->data['filename'] = './emailTemplate/addEditEmailTemplate.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    /* 
        Purpose : Display edit Email Template  Form and update email Template
    */
    function edit()
    {
        if($this->input->post()){
            $targetColumnsAndValues =$this->input->post();
            $iEmailTemplateId=$targetColumnsAndValues['iEmailTemplateId'];
            unset($targetColumnsAndValues['iEmailTemplateId']);
            $targetColumnsAndValues['dtUpdatedDateTime']=date('Y-m-d H:i:s');
            $comparisonColumnsAndValues = array('iEmailTemplateId' => array($iEmailTemplateId,'where'));
            $totalRows = $this->QueryCreator_model->updateQuery('email_templates',$comparisonColumnsAndValues,$targetColumnsAndValues);
            if($totalRows>0){
               $this->session->set_flashdata('message', 'Record Updated Successfully.');
            } 
            redirect($this->data['base_url'].'admin/EmailTemplate');
            exit();
        }
        $iEmailTemplateId = $this->uri->segment('4');
        
        $columnsToSelect = 'iEmailTemplateId,vEmailCode,vFromName,vFromEmail,vEmailSubject,tEmailMessage,dtCreatedDateTime,dtUpdatedDateTime,eStatus';
        $comparisonColumnsAndValues = array('iEmailTemplateId=' => array($iEmailTemplateId,'where'));
        $singleRecord = $this->QueryCreator_model->selectQuery('email_templates',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
        if ($singleRecord==NULL) {
            $this->session->set_flashdata('message', "Record Doesn't Exits.");
            redirect($this->data['base_url'].'admin/EmailTemplate');
            }   
        $this->data['singleRecord']=$singleRecord;
        $this->data['login_info'] =$this->session->userdata('login_info');
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['pagename'] = 'setting';
        $this->data['title'] = 'EmailTemplate';
        $this->data['mode'] = 'edit';
        $this->data['filename'] = './emailTemplate/addEditEmailTemplate.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
     /* 
        Purpose : Action Perform Active, inactive,Archive,Delete
    */
    
    function actionUpdate(){
        $ids = $this->input->post('iId');
        $action = $this->input->post('action');
        $targetColumnsAndValues['eStatus'] = $action;
        if($action!='Deleted')
        {
            $targetColumnsAndValues['eStatus'] = $action;
            $targetColumnsAndValues['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
            $comparisonColumnsAndValues = array('iEmailTemplateId' => array($ids,'where_in'));
            $totalRows = $this->QueryCreator_model->updateQuery('email_templates',$comparisonColumnsAndValues,$targetColumnsAndValues);
           
            if($totalRows>0){
              $record_title = ($totalRows>1) ? "Records" : "Record";
              $display_msg = ($action=='Archive') ? 'Total ('.$totalRows.') '.$record_title.' Archived Successfully.' : 'Total ('.$totalRows.') '.$record_title.' Updated Successfully.';
              $this->session->set_flashdata('message', $display_msg);
            }
        }
        else{
            $comparisonColumnsAndValues = array('iEmailTemplateId' => array($ids,'where_in'));
            $totalRows= $this->QueryCreator_model->deleteQuery('email_templates',$comparisonColumnsAndValues);
                if($totalRows>0){
                $record_title = ($totalRows>1) ? "Records" : "Record";
                $display_msg =  'Total ('.$totalRows    .') '.$record_title.' Deleted Successfully.';
                $this->session->set_flashdata('message', $display_msg);
            }      
        }
        redirect($this->data['base_url'].'admin/EmailTemplate');
        exit();
    }
    /* 
        Purpose : Code exists or not - EmailTemplate Form
    */
    function check_code_exists()
    {
        $vEmailCode = $this->input->get('vEmailCode');
        $comparisonColumnsAndValues = array('vEmailCode' => array($vEmailCode,'where'));
        $noOfRows = $this->QueryCreator_model->noOfRecords('email_templates',$comparisonColumnsAndValues);
        echo $noOfRows;
        exit;
    }
}
?>