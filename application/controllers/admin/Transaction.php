<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends My_Controller {
	function __construct() {
        parent::__construct();
        $sessiondata=$this->session->userdata('login_info');
        if($sessiondata==null)
        {
           redirect($this->data['base_url'].'Authenticate');
        }
    }
    /* 
        Purpose : Display - Transaction List
    */
    public function index()
	{ 
        $columnsToSelect = 'm.iMemberShipId,m.iShopId as memberShopId,m.vChargeId,m.eMembershipType,m.eMembershipName,m.eChargeStatus,m.eMembershipStatus,m.dPrice,m.dStartDate,m.dEndDate,m.dtCreatedDateTime,s.iShopId,s.vName,s.vLogo,s.eStatus';
        $sortingColumnsAndValues = array('m.eMembershipStatus'=>'DESC','m.iMemberShipId'=>'DESC');
        $tableComparisonColumns=array('shops s'=>'','memberships m'=> 'm.iShopId=s.iShopId');
        $comparisonColumnsAndValues = array('eMembershipStatus !=' => array('Cancel','where')); 
        $totalRecords = $this->QueryCreator_model->joinInnerQuery($tableComparisonColumns,$columnsToSelect,$comparisonColumnsAndValues,'Multiple',$sortingColumnsAndValues);
        foreach ($totalRecords as $key => $value) {
            if($totalRecords[$key]['dStartDate']!='0000-00-00'){
                $createdDateTime = date_create($totalRecords[$key]['dStartDate']);
                $totalRecords[$key]['dStartDate'] = date_format($createdDateTime, 'jS F Y ');
            }
            else{
                $totalRecords[$key]['dStartDate'] = '';
            }

            if($totalRecords[$key]['dtCreatedDateTime']!='0000-00-00 00:00:00'){
                $orderDate = date_create($totalRecords[$key]['dtCreatedDateTime']);
                $totalRecords[$key]['dtCreatedDateTime'] = date_format($orderDate, 'jS F Y ');
            }
            else{
                $totalRecords[$key]['dtCreatedDateTime'] = '';
            }
            if($totalRecords[$key]['dEndDate']!='0000-00-00'){
                $updateDateTime = date_create($totalRecords[$key]['dEndDate']);
                $totalRecords[$key]['dEndDate'] = date_format($updateDateTime, 'jS F Y ');
            }
            else{
                $totalRecords[$key]['dEndDate'] = 'Life Time ';
            }
        }
        $this->data['totalRecords']=$totalRecords;
        $this->data['login_info'] =$this->session->userdata('login_info');
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['pagename'] = 'transaction';
        $this->data['filename'] = './transaction/listTransaction.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
      function actionUpdate(){
        $ids = $this->input->post('iId');
        $action = $this->input->post('action');

        $targetColumnsAndValues['eMembershipStatus'] = $action;
        if($action!='Deleted')
        {
            $targetColumnsAndValues['eMembershipStatus'] = $action;
            $targetColumnsAndValues['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
            $comparisonColumnsAndValues = array('iMemberShipId' => array($ids,'where_in'));
            $totalRows = $this->QueryCreator_model->updateQuery('memberships',$comparisonColumnsAndValues,$targetColumnsAndValues);
           
            if($totalRows>0){
              $record_title = ($totalRows>1) ? "Records" : "Record";
              $display_msg = ($action=='Archive') ? 'Total ('.$totalRows.') '.$record_title.' Archived Successfully.' : 'Total ('.$totalRows.') '.$record_title.' Updated Successfully.';
              $this->session->set_flashdata('message', $display_msg);
            }
        }
        redirect($this->data['base_url'].'admin/Transaction');
        exit();
    }
}
?>