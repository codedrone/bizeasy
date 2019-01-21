<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $sessiondata=$this->session->userdata('login_info');
        if($sessiondata==null){
           redirect($this->data['base_url'].'Authenticate');
        }
    }
    /* 
        Purpose : Display record - FAQ Form
    */
    public function index()
    {
        $columnsToSelect = 'iFAQId,tQuestion,tAnswer,dtCreatedDateTime,dtUpdatedDateTime,eStatus';
        $comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'));
        $sortingColumnsAndValues = array('eStatus'=>'ASC','iFAQId'=>'DESC');
        $faqDetails = $this->QueryCreator_model->selectQuery('faq',$columnsToSelect,$comparisonColumnsAndValues,'multiple',$sortingColumnsAndValues);
        foreach ($faqDetails as $key => $value){
            if($faqDetails[$key]['dtCreatedDateTime']!='0000-00-00 00:00:00'){
                $CreatedDateTime = date_create($faqDetails[$key]['dtCreatedDateTime']);
                $faqDetails[$key]['dtCreatedDateTime'] = date_format($CreatedDateTime, 'jS F Y g:i A');
            }
            else{
                $faqDetails[$key]['dtCreatedDateTime'] = '';
            }
        }
        $sessiondata=$this->session->userdata('login_info');
        $this->data['faqDetails']=$faqDetails;
        $this->data['message']=$this->session->flashdata('message');
        $this->data['login_info']=$sessiondata;
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'faq';
        $this->data['filename'] = './faq/listFAQ.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    /* 
        Purpose : Add record - Administrator Form
    */
    function add()
    {
        if($this->input->post()){
            $insertRec = $this->input->post();
            $insertRec['dtCreatedDateTime']=date('Y-m-d H:i:s');
            $insertRec['dtUpdatedDateTime']=date('Y-m-d H:i:s');

            $iFAQId = $this->QueryCreator_model->insertSingle('faq',$insertRec);
            if($iFAQId>0){
                $this->session->set_flashdata('message','Record Added Successfully.');
            }
            redirect($this->data['base_url'].'admin/FAQ');
            exit();
        }
        $sessiondata=$this->session->userdata('login_info');
        $this->data['login_info']=$sessiondata;
        $this->data['message']=$this->session->flashdata('message');
        $this->data['mode'] = 'add';
        $this->data['pagename'] = 'faq';
        $this->data['filename'] = './faq/addEditFAQ.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    /* 
        Purpose : Edit record - FAQ Form
    */
    function edit()
    {
        if($this->input->post()){
            $faqEditDetails =$this->input->post();
            $iFAQId=$faqEditDetails['iFAQId'];
            $faqEditDetails['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
            unset($faqEditDetails['iFAQId']);
            $comparisonColumnsAndValues = array('iFAQId' => array($iFAQId,'where'));
            $totalRows = $this->QueryCreator_model->updateQuery('faq',$comparisonColumnsAndValues,$faqEditDetails);
            if($totalRows>0)
            {
               $this->session->set_flashdata('message', 'Record Updated Successfully.');
            } 
            redirect( $this->data['base_url'].'admin/FAQ');
            exit;
        }
        $iFAQId=$this->uri->segment('4');
        $columnsToSelect = 'iFAQId,tQuestion,tAnswer,eStatus';
        $comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'),'iFAQId' => array($iFAQId,'where'));
        $singleRecord = $this->QueryCreator_model->selectQuery('faq',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
        if ($singleRecord==NULL) {
            $this->session->set_flashdata('message', "Record Doesn't Exists.");
            redirect($this->data['base_url'].'admin/FAQ');
        }
        $sessiondata=$this->session->userdata('login_info');
        $this->data['login_info']=$sessiondata;
        $this->data['singleRecord']=$singleRecord;
        $this->data['mode'] = 'edit';
        $this->data['pagename'] = 'faq';
        $this->data['filename'] = './faq/addEditFAQ.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    /* 
        Purpose : Delete record - FAQ 
    */
    function actionDelete(){
        $ids = $this->input->post('iId');
        $action = $this->input->post('action');
        $targetColumnsAndValues['eStatus'] = $action;
        if($action!='Deleted'){
            $targetColumnsAndValues['eStatus'] = $action;
            $targetColumnsAndValues['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
            $comparisonColumnsAndValues = array('iFAQId' => array($ids,'where_in'));
            $totalRows = $this->QueryCreator_model->updateQuery('faq',$comparisonColumnsAndValues,$targetColumnsAndValues);
           if($totalRows>0){
              $record_title = ($totalRows>1) ? "Records" : "Record";
              $display_msg = ($action=='Archive') ? 'Total ('.$totalRows.') '.$record_title.' Archived Successfully.' : 'Total ('.$totalRows.') '.$record_title.' Updated Successfully.';
              $this->session->set_flashdata('message', $display_msg);
            }
        }
        else{
            $comparisonColumnsAndValues = array('iFAQId' => array($ids,'where_in'));
            $totalRows = $this->QueryCreator_model->deleteQuery('faq',$comparisonColumnsAndValues);
            if($totalRows>0){
               $recordTitle = ($totalRows>1) ? "Records" : "Record";
               $displayMsg = 'Total ('.$totalRows.') '.$recordTitle.' Deleted Successfully.';
               $this->session->set_flashdata('message', $displayMsg);
            }   
        }
        redirect($this->data['base_url'].'admin/FAQ');
        exit();
    }
}