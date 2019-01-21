<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends My_Controller {
	function __construct() {
        parent::__construct();
        $sessiondata=$this->session->userdata('login_info');
        if($sessiondata==null)
        {
           redirect($this->data['base_url'].'Authenticate');
        }
    }
    /* 
        Purpose : Display dashboard page
    */ 
	public function index()
	{ 
        $comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'));
        $this->data['totalShops'] = $this->QueryCreator_model->noOfRecords('shops',$comparisonColumnsAndValues);

        $comparisonColumnsAndValues = array('eMembershipStatus !=' => array('Cancel','where'));
        $this->data['totalMemberShip'] = $this->QueryCreator_model->noOfRecords('memberships',$comparisonColumnsAndValues);
      
        $comparisonColumnsAndValues = array('eStatus =' => array('Active','where'));
        $this->data['activeShops'] = $this->QueryCreator_model->noOfRecords('shops',$comparisonColumnsAndValues);

        $comparisonColumnsAndValues = array('eMembershipStatus =' => array('Active','where'));
        $this->data['activeMemberShip'] = $this->QueryCreator_model->noOfRecords('memberships',$comparisonColumnsAndValues);
      
        $comparisonColumnsAndValues = array('eStatus =' => array('Pending','where'));
        $this->data['pendingShops'] = $this->QueryCreator_model->noOfRecords('shops',$comparisonColumnsAndValues);
        
        $comparisonColumnsAndValues = array('eMembershipStatus =' => array('Pending','where'));
        $this->data['pendingMemberShip'] = $this->QueryCreator_model->noOfRecords('memberships',$comparisonColumnsAndValues);
      
        $comparisonColumnsAndValues = array('eStatus =' => array('Inactive','where'));
        $this->data['inactiveShops'] = $this->QueryCreator_model->noOfRecords('shops',$comparisonColumnsAndValues);

        $comparisonColumnsAndValues = array('eMembershipStatus =' => array('Cancel','where'));
        $this->data['cencelMemberShip'] = $this->QueryCreator_model->noOfRecords('memberships',$comparisonColumnsAndValues);
        
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('eStatus =' => array('Active','where'));
        $sortingColumnsAndValues = array('iShopId'=>'DESC');
        $this->data['lastActiveShops'] = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'multiple',$sortingColumnsAndValues, [], 0);
       foreach ($this->data['lastActiveShops'] as $key => $value) {
           if ($this->data['lastActiveShops'][$key]['vLogo']=='') {
              $this->data['lastActiveShops'][$key]['vLogo']=$this->data['base_upload'].'no-image.png';
           }
       }
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('eStatus =' => array('Inactive','where'));
        $sortingColumnsAndValues = array('iShopId'=>'DESC');
        $this->data['lastInactiveShops'] = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'multiple',$sortingColumnsAndValues, [], 0);
        foreach ($this->data['lastInactiveShops'] as $key => $value) {
           if ($this->data['lastInactiveShops'][$key]['vLogo']=='') {
              $this->data['lastInactiveShops'][$key]['vLogo']=$this->data['base_upload'].'no-image.png';
           }
       }
        $columnsToSelect = 'm.iMemberShipId,m.iShopId as memberShopId,m.vChargeId,m.eMembershipType,m.eMembershipName,m.eChargeStatus,m.dPrice,s.iShopId,s.vName,s.vLogo,s.vContactName,s.vContactEmail,s.vContactPhoneNo,s.tContactAddress,s.eStatus';
        $sortingColumnsAndValues = array('m.dPrice'=>'DESC');
        $tableComparisonColumns=array('shops s'=>'','memberships m'=> 'm.iShopId=s.iShopId');
        $limit=array(10);
        $this->data['topShops'] = $this->QueryCreator_model->joinInnerQuery($tableComparisonColumns,$columnsToSelect,NULL,'Multiple',$sortingColumnsAndValues,NULL,$limit);
        foreach ($this->data['topShops'] as $key => $value) {
               if ($this->data['topShops'][$key]['vLogo']=='') {
                  $this->data['topShops'][$key]['vLogo']=$this->data['base_upload'].'no-image.png';
               }
           }
        $columnsToSelect = 'm.iMemberShipId,m.iShopId as memberShopId,m.vChargeId,m.eMembershipType,m.eMembershipName,m.eChargeStatus,m.eMembershipStatus,m.dPrice,m.dStartDate,m.dEndDate,m.dtCreatedDateTime,s.iShopId,s.vName,s.vLogo,s.eStatus';
        $sortingColumnsAndValues = array('m.iMemberShipId'=>'DESC');
        $tableComparisonColumns=array('shops s'=>'','memberships m'=> 'm.iShopId=s.iShopId');
        $comparisonColumnsAndValues = array('eMembershipStatus !=' => array('Cancel','where')); 
        $totalRecords = $this->QueryCreator_model->joinInnerQuery($tableComparisonColumns,$columnsToSelect,$comparisonColumnsAndValues,'Multiple',$sortingColumnsAndValues, [], 0);
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
		$this->data['pagename'] = 'dashboard';
		$this->data['filename'] = './dashboard/dashboard.tpl';
		$this->smarty->view('admin/template.tpl', $this->data);
	}
}
?>