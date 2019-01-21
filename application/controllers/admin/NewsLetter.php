<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsLetter extends My_Controller {
	function __construct() {
        parent::__construct();
        $sessiondata=$this->session->userdata('login_info');
        if($sessiondata==null)
        {
           redirect($this->data['base_url'].'Authenticate');
        }
    }
    /* 
        Purpose : Display - List OF News Letter 
    */
    
	public function index()
	{
        $columnsToSelect = 'iNewsLetterId,vName,vEmail,dtCreatedDateTime,dtUpdatedDateTime,eStatus';
        $comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'));
        $sortingColumnsAndValues = array('eStatus'=>'ASC','iNewsLetterId'=>'DESC');
        $newsDetail = $this->QueryCreator_model->selectQuery('newsletters',$columnsToSelect,$comparisonColumnsAndValues,'Multiple',$sortingColumnsAndValues);
        foreach ($newsDetail as $key => $value) {
            if($newsDetail[$key]['dtCreatedDateTime']!='0000-00-00 00:00:00'){
                $createdDateTime = date_create($newsDetail[$key]['dtCreatedDateTime']);
                $newsDetail[$key]['dtCreatedDateTime'] = date_format($createdDateTime, 'jS F Y g:i A');
            }
            else{
                $newsDetail[$key]['dtCreatedDateTime'] = '';
            }
        }
        $this->data['newsDetail']=$newsDetail;
        $this->data['login_info'] =$this->session->userdata('login_info');
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['pagename'] = 'newsLetter';
        $this->data['filename'] = './newsLetter/listNewsLetter.tpl';
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
            $comparisonColumnsAndValues = array('iNewsLetterId' => array($ids,'where_in'));
            $totalRows = $this->QueryCreator_model->updateQuery('newsletters',$comparisonColumnsAndValues,$targetColumnsAndValues);
           
            if($totalRows>0){
              $record_title = ($totalRows>1) ? "Records" : "Record";
              $display_msg = ($action=='Archive') ? 'Total ('.$totalRows.') '.$record_title.' Archived Successfully.' : 'Total ('.$totalRows.') '.$record_title.' Updated Successfully.';
              $this->session->set_flashdata('message', $display_msg);
            }
        }
        else{
            $comparisonColumnsAndValues = array('iNewsLetterId' => array($ids,'where_in'));
            $totalRows= $this->QueryCreator_model->deleteQuery('newsletters',$comparisonColumnsAndValues);
                if($totalRows>0){
                $record_title = ($totalRows>1) ? "Records" : "Record";
                $display_msg =  'Total ('.$totalRows.') '.$record_title.' Deleted Successfully.';
                $this->session->set_flashdata('message', $display_msg);
            }      
        }
        redirect($this->data['base_url'].'admin/NewsLetter');
        exit();
    }
}
?>