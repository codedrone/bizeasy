<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends My_Controller {
	function __construct() {
        parent::__construct();
        $sessiondata=$this->session->userdata('login_info');
        if($sessiondata==null)
        {
           redirect($this->data['base_url'].'Authenticate');
        }
    }
     /* 
        Purpose : Display - Request List 
    */
    
	public function index()
	{

        $columnsToSelect = '';
        $sortingColumnsAndValues = array('iTicketId'=>'DESC');
        $totalRecords = $this->QueryCreator_model->selectQuery('support_messages',$columnsToSelect,NULL,'multiple',$sortingColumnsAndValues);
        foreach ($totalRecords as $key => $value) {
            if ($value['iShopId']!='0') {
                $columnsToSelect = '';
                $comparisonColumnsAndValues = array('iShopId' => array($value['iShopId'],'where'));
                $Shops = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,NULL,'Single',NULL);
                $totalRecords[$key]['shopName']=$Shops['vName'];
                $totalRecords[$key]['eStatus']=$Shops['eStatus'];
            } 
            else
            {
                $totalRecords[$key]['shopName']='';
                $totalRecords[$key]['eStatus']='';
            }
           
            if($totalRecords[$key]['dtCreatedDateTime']!='0000-00-00 00:00:00'){
                $createdDateTime = date_create($totalRecords[$key]['dtCreatedDateTime']);
                $totalRecords[$key]['dtCreatedDateTime'] = date_format($createdDateTime, 'jS F Y g:i A');
            }
            else{
                $totalRecords[$key]['dtCreatedDateTime'] = '';
            }
        }
        $this->data['requestDetail']=$totalRecords;
        $this->data['login_info'] =$this->session->userdata('login_info');
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['pagename'] = 'request';
        $this->data['filename'] = './request/listRequest.tpl';
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
            $comparisonColumnsAndValues = array('iTicketId' => array($ids,'where_in'));
            $totalRows = $this->QueryCreator_model->updateQuery('support_messages',$comparisonColumnsAndValues,$targetColumnsAndValues);
            if($totalRows>0){
              $record_title = ($totalRows>1) ? "Records" : "Record";
              $display_msg = ($action=='Archive') ? 'Total ('.$totalRows.') '.$record_title.' Archived Successfully.' : 'Total ('.$totalRows.') '.$record_title.' Updated Successfully.';
               $this->session->set_flashdata('message', $display_msg);
            }
        }
        else{
            $comparisonColumnsAndValues = array('iTicketId' => array($ids,'where_in'));
            $totalRows= $this->QueryCreator_model->deleteQuery('support_messages',$comparisonColumnsAndValues);
            if($totalRows>0){
                $record_title = ($totalRows>1) ? "Records" : "Record";
                $display_msg =  'Total ('.$totalRows.') '.$record_title.' Deleted Successfully.';
                $this->session->set_flashdata('message', $display_msg);
            }      
        }
        redirect($this->data['base_url'].'admin/Request');
        exit();
    }
}
?>