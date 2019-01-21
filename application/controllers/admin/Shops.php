<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shops extends My_Controller {
	function __construct() {
        parent::__construct();
        $sessiondata=$this->session->userdata('login_info');
        if($sessiondata==null)
        {
           redirect($this->data['base_url'].'Authenticate');
        }
    }
    /* 
        Purpose : Display - Shops List
    */
    public function index()
	{ 
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('eStatus !=' => array('Archive','where'));
        $sortingColumnsAndValues = array('eStatus'=>'ASC','iShopId'=>'DESC');
        $shopsDetail = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'Multiple',$sortingColumnsAndValues);
        foreach ($shopsDetail as $key => $value) {
            if($shopsDetail[$key]['dtCreatedDateTime']!='0000-00-00 00:00:00'){
                $createdDateTime = date_create($shopsDetail[$key]['dtCreatedDateTime']);
                $shopsDetail[$key]['dtCreatedDateTime'] = date_format($createdDateTime, 'jS F Y g:i A');
            }
            else{
                $shopsDetail[$key]['dtCreatedDateTime'] = '';
            }
        }
        $this->data['shopsDetail']=$shopsDetail;
        $this->data['login_info'] =$this->session->userdata('login_info');
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['pagename'] = 'shops';
        $this->data['filename'] = './shops/listShops.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    /* 
        Purpose : Display - Shops Information and  Membership
    */
    function info()
    {   
        $iShopId=$this->uri->segment('4');
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('eStatus!=' => array('Archive','where'),'iShopId' => array($iShopId,'where'));
        $shopsDetail = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
        $comparisonColumnsAndValues = array('iShopId' => array($iShopId,'where'));
        $menuList = $this->QueryCreator_model->selectQuery('shop_navs',$columnsToSelect,$comparisonColumnsAndValues,'Multiple',NULL);
         if ($shopsDetail==NULL) {
            $this->session->set_flashdata('message', "Record Doesn't Exits.");
            redirect($this->data['base_url'].'admin/Shops');
            }   
        if($shopsDetail['dtCreatedDateTime']!='0000-00-00 00:00:00'){
            $createdDateTime = date_create($shopsDetail['dtCreatedDateTime']);
            $shopsDetail['dtCreatedDateTime'] = date_format($createdDateTime, 'jS F Y g:i A');
        }
        else{
            $shopsDetail['dtCreatedDateTime'] = '';
        }
        
        if ($shopsDetail['vSplash1']=='') {
            $shopsDetail['vSplash1']= '';
            $shopsDetail['vSplash2']= '';
            $shopsDetail['vSplash3']= '';
        }
        if ($shopsDetail['vSplash2']=='') {
            $shopsDetail['vSplash2']=$this->data['base_upload'].'no-image.png';
        }
        if ($shopsDetail['vSplash3']=='') {
            $shopsDetail['vSplash3']=$this->data['base_upload'].'no-image.png';
        }
        
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('iShopId' => array($iShopId,'where'));
        $sortingColumnsAndValues = array('eMembershipStatus'=>'ASC','iMemberShipId'=>'DESC');
        $totalRecords = $this->QueryCreator_model->selectQuery('memberships',$columnsToSelect,$comparisonColumnsAndValues,'Multiple',$sortingColumnsAndValues);

        foreach ($totalRecords as $key => $value) {
            if($totalRecords[$key]['dStartDate']!='0000-00-00'){
                $createdDateTime = date_create($totalRecords[$key]['dStartDate']);
                $totalRecords[$key]['dStartDate'] = date_format($createdDateTime, 'jS F Y ');
            }
            else{
                $totalRecords[$key]['dStartDate'] = '';
            }

            if($totalRecords[$key]['dEndDate']!='0000-00-00'){
                $updateDateTime = date_create($totalRecords[$key]['dEndDate']);
                $totalRecords[$key]['dEndDate'] = date_format($updateDateTime, 'jS F Y ');
            }
            else{
                $totalRecords[$key]['dEndDate'] = 'Life Time';
            }
        }
        $this->data['membershipsDetail']=$totalRecords;
        $this->data['menuList']=$menuList;
        $this->data['singleRecord']=$shopsDetail;
        
        $this->data['login_info'] =$this->session->userdata('login_info');
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['pagename'] = 'shops';
        $this->data['filename'] = './shops/viewShops.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    public function ShopsDetailView()
    {
        $iShopId = $this->uri->segment('4');
        $deviceViewFile = $this->uri->segment('5');
        $id = $this->uri->segment('6');
  
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('iShopId' => array($iShopId,'where'));
        $singleRecord = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
      
        if ($singleRecord['vLogo'] != NULL || $singleRecord['vSplash1'] != NULL || $singleRecord['vSplash2'] != NULL || $singleRecord['vSplash3'] != NULL) {

            if ($singleRecord['vSplash1']=='') {
                $singleRecord['vSplash1']= '';
                $singleRecord['vSplash2']= '';
                $singleRecord['vSplash3']= '';
            }
        } 
        else
        {
            $singleRecord['vLogo']= $this->data['base_upload'].'user.png';
            $singleRecord['singleRecord'] = '';
        }
        $shop_navColumns='';
        $shop_navscomparison = array('iShopId' => array($singleRecord['iShopId'],'where'),'iParentId' => array('0','where'));
        $shop_navs = $this->QueryCreator_model->selectQuery('shop_navs',$shop_navColumns,$shop_navscomparison,'Multiple',NULL);
        $childShop_navscomparison = array('iShopId' => array($singleRecord['iShopId'],'where'),'iParentId!=' => array('0','where'));
        $childShop_navs = $this->QueryCreator_model->selectQuery('shop_navs',$shop_navColumns,$childShop_navscomparison,'Multiple',NULL);

        $getCollection=$this->getShopifyData($singleRecord['vDomain'],"custom_collections.json?",$singleRecord['vToken']);
        $custom_collections=$getCollection->custom_collections;

        foreach ($custom_collections as $key => $value) {
            $CollectionName=$value->handle;
            $CollectionId=$value->id;
            $json="products.json?collection_id=".$CollectionId."&";
            $product_listings=$this->getShopifyData($singleRecord['vDomain'],$json,$singleRecord['vToken']);
            if ($CollectionName==$deviceViewFile) {
               
                $this->data['shopsProduct']=$product_listings->products;

            }
        }

        $products=$this->getShopifyData($singleRecord['vDomain'],"products.json?",$singleRecord['vToken']);

        $this->data['singleRecord']=$singleRecord;
        $this->data['shop_navs']=$shop_navs;
        $this->data['childShop_navs']=$childShop_navs;
        $this->data['message']=$this->session->flashdata('message');
        $this->data['data']=$this->data;
        $this->data['pagename'] = $deviceViewFile;
        $this->data['productsId']=$id;
        $this->data['type']="Admin";        

        if ($deviceViewFile=='iosCheckout')
        {   
            $this->data['shopsProduct']=$products->products;
            $this->data['filename'] = './iosCheckout.tpl';     
        }
        elseif ($deviceViewFile=='iosProductDetails') {
            $this->data['shopsProduct']=$products->products;
            $this->data['filename'] = './iosProductDetails.tpl';     
        }
        elseif ($deviceViewFile=='iosWishlist') {
            $this->data['shopsProduct']=$products->products;
            $this->data['filename'] = './iosWishlist.tpl';     
        }
        elseif ($deviceViewFile=='iosHome') {
            $this->data['shopsProduct']=$products->products;
            $this->data['filename'] = './iosHome.tpl';     
        }
        else
        {
            $this->data['filename'] = './iosHome.tpl';     
        }
        $this->smarty->view('web/iframe/ios/iosPublishApp.tpl', $this->data);
    
    }
    function actionUpdate(){
        $ids = $this->input->post('iId');
        $action = $this->input->post('action');
        $targetColumnsAndValues['eStatus'] = $action;
        if($action!='Deleted')
        {
            $targetColumnsAndValues['eStatus'] = $action;
            $targetColumnsAndValues['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
            $comparisonColumnsAndValues = array('iShopId' => array($ids,'where_in'));
            $totalRows = $this->QueryCreator_model->updateQuery('shops',$comparisonColumnsAndValues,$targetColumnsAndValues);
           
            if($totalRows>0){
              $record_title = ($totalRows>1) ? "Records" : "Record";
              $display_msg = ($action=='Archive') ? 'Total ('.$totalRows.') '.$record_title.' Archived Successfully.' : 'Total ('.$totalRows.') '.$record_title.' Updated Successfully.';
              $this->session->set_flashdata('message', $display_msg);
            }
        }
        else{
            $comparisonColumnsAndValues = array('iShopId' => array($ids,'where_in'));
            $totalRows= $this->QueryCreator_model->deleteQuery('shops',$comparisonColumnsAndValues);
                if($totalRows>0){
                $record_title = ($totalRows>1) ? "Records" : "Record";
                $display_msg =  'Total ('.$totalRows.') '.$record_title.' Deleted Successfully.';
                $this->session->set_flashdata('message', $display_msg);
            }      
        }
        redirect($this->data['base_url'].'admin/Shops');
        exit();
    }
    public function getShopifyData($shopDomain,$json,$token){
        $url="https://".$shopDomain."/admin/".$json."access_token=".$token;
        // $url="https://".$shopDomain."/collections.json";
        $response = $this->curlHttpResponce($url);
        return $response;   
     }

     
}
?>