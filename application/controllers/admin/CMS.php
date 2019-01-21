<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMS extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $sessiondata=$this->session->userdata('login_info');
        if($sessiondata==null){
           redirect($this->data['base_url'].'Authenticate');
        }
    }
    /* 
        Purpose : Display record - Cms List
    */
    public function index()
    {
        $columnsToSelect = 'iCMSId,tTitle,vCode,tContent,dtCreatedDateTime,dtUpdatedDateTime,eStatus';
        $comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'));
        $sortingColumnsAndValues = array('iCMSId'=>'DESC');
        $cmsDetails = $this->QueryCreator_model->selectQuery('cms',$columnsToSelect,$comparisonColumnsAndValues,'multiple',$sortingColumnsAndValues);
        foreach ($cmsDetails as $key => $value){
            if($cmsDetails[$key]['dtCreatedDateTime']!='0000-00-00 00:00:00'){
                $CreatedDateTime = date_create($cmsDetails[$key]['dtCreatedDateTime']);
                $cmsDetails[$key]['dtCreatedDateTime'] = date_format($CreatedDateTime, 'jS F Y g:i A');
            }
            else{
                $cmsDetails[$key]['dtCreatedDateTime'] = '';
            }
        }
        $sessiondata=$this->session->userdata('login_info');
        $this->data['cmsDetails']=$cmsDetails;
        $this->data['message']=$this->session->flashdata('message');
        $this->data['login_info']=$sessiondata;
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'setting';
        $this->data['filename'] = './cms/listCMS.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    /* 
        Purpose : Add record - CMS 
    */
    function add()
    {
        if($this->input->post()){
            $insertRec = $this->input->post();
            $insertRec['vCode']=strtoupper($insertRec['vCode']);
            $insertRec['dtCreatedDateTime']=date('Y-m-d H:i:s');
            $insertRec['dtUpdatedDateTime']=date('Y-m-d H:i:s');
            $iAdminId = $this->QueryCreator_model->insertSingle('cms',$insertRec);
            if($iAdminId>0){
                $this->session->set_flashdata('message','Record Added Successfully.');
            }
            redirect($this->data['base_url'].'admin/CMS');
            exit();
        }
        $sessiondata=$this->session->userdata('login_info');
        $this->data['login_info']=$sessiondata;
        $this->data['message']=$this->session->flashdata('message');
        $this->data['mode'] = 'add';
        $this->data['pagename'] = 'setting';
        $this->data['filename'] = './cms/EditCMS.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    /* 
        Purpose : Edit record - CMS 
    */
    function edit()
    {
        if($this->input->post()){
            $cmsEditDetails =$this->input->post();
            $iCMSId=$cmsEditDetails['iCMSId'];
            $cmsEditDetails['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
            unset($cmsEditDetails['iCMSId']);
            $comparisonColumnsAndValues = array('iCMSId' => array($iCMSId,'where'));
            $totalRows = $this->QueryCreator_model->updateQuery('cms',$comparisonColumnsAndValues,$cmsEditDetails);
            if($totalRows>0)
            {
               $this->session->set_flashdata('message', 'Record Updated Successfully.');
            } 
            redirect( $this->data['base_url'].'admin/CMS');
            exit;
        }
        $iCMSId=$this->uri->segment('4');
        $columnsToSelect = 'iCMSId,tTitle,vCode,tContent,eStatus';
        $comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'),'iCMSId' => array($iCMSId,'where'));
        $singleRecord = $this->QueryCreator_model->selectQuery('cms',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
        if ($singleRecord==NULL) {
            $this->session->set_flashdata('message', "Record Doesn't Exists.");
            redirect($this->data['base_url'].'admin/CMS');
        }
        $sessiondata=$this->session->userdata('login_info');
        $this->data['login_info']=$sessiondata;
        $this->data['singleRecord']=$singleRecord;
        $this->data['mode'] = 'edit';
        $this->data['pagename'] = 'setting';
        $this->data['filename'] = './cms/EditCMS.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    /* 
        Purpose : Delete record - CMS 
    */
    function actionDelete()
    {
        $ids = $this->input->post('iId');
        $action = $this->input->post('action');
        $targetColumnsAndValues['eStatus'] = $action;
        if($action!='Deleted'){
            $targetColumnsAndValues['eStatus'] = $action;
            $targetColumnsAndValues['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
            $comparisonColumnsAndValues = array('iCMSId' => array($ids,'where_in'));
            $totalRows = $this->QueryCreator_model->updateQuery('cms',$comparisonColumnsAndValues,$targetColumnsAndValues);
           if($totalRows>0){
              $record_title = ($totalRows>1) ? "Records" : "Record";
              $display_msg = ($action=='Archive') ? 'Total ('.$totalRows.') '.$record_title.' Archived Successfully.' : 'Total ('.$totalRows.') '.$record_title.' Updated Successfully.';
              $this->session->set_flashdata('message', $display_msg);
            }
        }
        else{
            $comparisonColumnsAndValues = array('iCMSId' => array($ids,'where_in'));
            $totalRows1 = $this->QueryCreator_model->deleteQuery('cms',$comparisonColumnsAndValues);
            if($totalRows1>0){
                $record_title = ($totalRows1>1) ? "Records" : "Record";
                $display_msg =  'Total ('.$totalRows1.') '.$record_title.' Deleted Successfully.';
                $this->session->set_flashdata('message', $display_msg);
            }      
        }
        redirect($this->data['base_url'].'admin/CMS');
        exit();
    }
    /* 
        Purpose : Code exists or not - CMS 
    */
    function check_code_exists()
    {
        $vCode = $this->input->get('vCode');
        $comparisonColumnsAndValues = array('vCode' => array($vCode,'where'));
        $noOfRows = $this->QueryCreator_model->noOfRecords('cms',$comparisonColumnsAndValues);
        echo $noOfRows;
        exit;
    }
}
?>