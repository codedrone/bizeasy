<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ShopifyApp extends My_Controller {
	function __construct() {
        parent::__construct();
        $data = array(
            'API_KEY' => $this->config->item('shopify_api_key'),
            'API_SECRET' => $this->config->item('shopify_secret'),
            'SHOP_DOMAIN' => $this->data['shopArrSession']['shop'],
            'ACCESS_TOKEN' => $this->data['shopArrSession']['access_token']
        ); 
        $this->load->library('Shopify' , $data);
        $sessiondata=$this->session->userdata('shopArrSession');
        $sessionData = $this->shopify->shopSessionData();
        if($sessiondata==null && $sessionData==NULL)
        {
           redirect($this->data['base_url']);
        }
    } 
    public function installShopsApp($installApp=array())
    {  
        $session=$this->session->userdata();
        $sessionData = $this->shopify->shopSessionData();
        if($sessionData!=NULL)
        {
            $getCollection=$this->shopify->getCollection();
            $getThemes= $this->shopify->getThemes();
            foreach ($getThemes->themes as $key => $value) {
                if ($value->role='main') {
                    $themesId=$value->id;
                    $getThemesSetting= $this->shopify->getThemesSetting($themesId);
                }
            }
            $getThemesAsset=array();
            $getThemesAsset = json_decode($getThemesSetting->asset->value); 
            if ($getThemesAsset->current=='') {
                $current=$getThemesAsset->current;

                $currentThemesInfo=$getThemesAsset->presets->$current; 
            }
            else
            {
                $currentThemesInfo=$getThemesAsset->presets->Jumpstart; 
            }
            $installApp['vName']=$sessionData->shop->name;
            $installApp['vDomain']=$sessionData->shop->domain;
            $installApp['vShopifyDomain']=$sessionData->shop->myshopify_domain;
            $installApp['vToken']=$session['shopArrSession']['access_token'];
            $installApp['vCurrency']=$sessionData->shop->currency;
            $installApp['vMoneyFormat']=$sessionData->shop->money_format;
            $installApp['vContactName']=$sessionData->shop->shop_owner;
            $installApp['vContactEmail']=$sessionData->shop->email;
            $installApp['vContactPhoneNo']=$sessionData->shop->phone;
            $installApp['tContactAddress']=$sessionData->shop->address1;
            $installApp['vContactCity']=$sessionData->shop->city;
            $installApp['vContactProvince']=$sessionData->shop->province;
            $installApp['vContactCountry']=$sessionData->shop->country;
            $installApp['vContactZipCode']=$sessionData->shop->zip;
            $installApp['vContactSource']=$sessionData->shop->source ?: '';
            $installApp['eStatus']='Active';
            
            //$installApp['vThemeColor']= $currentThemesInfo->color_primary ?: 
            
            $installApp['eCustomizeType']='1';
            $vDomain = $sessionData->shop->domain;
            $columnsToSelect = '';
            $comparisonColumnsAndValues = array('vDomain' => array($sessionData->shop->domain,'where'));
            $singleRecord = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
            $shop_navs=array();
            $getCollection=$this->shopify->getCollection();
            $custom_collections=$getCollection->custom_collections;
           
            if(empty($singleRecord)) {
                $installApp['vButtonColor']=$currentThemesInfo->color_primary ?: '#bbbbbb';
                $installApp['vHeaderColor']=$currentThemesInfo->color_primary ?: '#000000';
                $installApp['vBodyColor']=$currentThemesInfo->color_body_bg ?: '#ffffff';
                $installApp['vButtonFontColor']=$currentThemesInfo->color_secondary ?: '#ffffff';
                $installApp['eDesignType']="Generated";
                $installApp['vThemeColor']=$current ? : '';
                $installApp['dtCreatedDateTime']=date('Y-m-d H:i:s');
                $installApp['dtUpdatedDateTime']=date('Y-m-d H:i:s');
                $iShopId= $this->QueryCreator_model->insertSingle('shops',$installApp);
                
                foreach ($custom_collections as $key => $value) {   
                    $shop_navs['iShopId']=$iShopId;
                    $shop_navs['eNavType']="Col";
                    $shop_navs['vName']=$value->title;
                    $shop_navs['vHandle']=$value->handle;
                    $iShopNavId =$this->QueryCreator_model->insertSingle('shop_navs',$shop_navs);
                }
                
            }
            else
            {
                $iShopId=$singleRecord['iShopId'];
                $installApp['dtUpdatedDateTime']=date('Y-m-d H:i:s');
                $comparisonColumnsAndValues = array('iShopId' => array($iShopId,'where'));
                $totalRows = $this->QueryCreator_model->updateQuery('shops',$comparisonColumnsAndValues,$installApp);
                foreach ($custom_collections as $key => $value) {   
                    $shop_navs['iShopId']=$iShopId;
                    $shop_navs['eNavType']="Col";
                    $shop_navs['vName']=$value->title;
                    $shop_navs['vHandle']=$value->handle;
                    $comparisonColumnsAndValuesShopNav = array('iShopId' => array($iShopId,'where'),'vHandle' => array($value->handle,'where'),'eNavType' => array('Col','where'));
                    $singleRecordShopNav = $this->QueryCreator_model->selectQuery('shop_navs',$columnsToSelect,$comparisonColumnsAndValuesShopNav,'Single',NULL);
                    if (empty($singleRecordShopNav)) {
                        $iShopNavId =$this->QueryCreator_model->insertSingle('shop_navs',$shop_navs);

                    }
                }
                
            } 
        }
        
    }
	public function index()
	{  
        $installAppResponce=$this->installShopsApp();
        $shopArrSession=$this->session->userdata();
        $sessionData = $this->shopify->shopSessionData();
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('vDomain' => array($shopArrSession['shopArrSession']['shop'],'where'));
        $shopSingleRecord = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
        $shopArrSession =array(
                'shopDomain' =>$shopArrSession['shopArrSession']['shop'],
                'shop' =>$shopSingleRecord['vDomain'],
                'access_token' => $shopArrSession['shopArrSession']['access_token'],
                'iShopId'=>$shopSingleRecord['iShopId'],
                'vName'=>$shopSingleRecord['vName'],
                );

        $this->session->set_userdata('shopArrSession',$shopArrSession);
        $this->data['sessionData']=$sessionData;
        $this->data['shopArrSession']=$this->session->userdata();
        $this->data['message']=$this->session->flashdata('message');
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'download';
        $this->data['filename'] = './shopsDashbord/downloadPreviewApp.tpl';
        $pageController=$this->uri->segment('2');
        if ($pageController=='') {
            $this->data['load']='Yes';
        }
        $this->smarty->view('web/shopifyApp.tpl', $this->data);
    }
    public function testApp()
    {
        $shopArrSession=$this->session->userdata();
        $sessionData = $this->shopify->shopSessionData();
        $this->data['sessionData']=$sessionData;
        $this->data['shopArrSession']=$this->session->userdata();
        $this->data['message']=$this->session->flashdata('message');
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'testApp';
        $this->data['filename'] = './shopsDashbord/testApp.tpl';
        $this->smarty->view('web/shopifyApp.tpl', $this->data);
    }
     public function customerMyApp()
    { 
        $shopArrSession=$this->session->userdata();
        $sessionData = $this->shopify->shopSessionData();
        $this->data['sessionData']=$sessionData;
        $this->data['shopArrSession']=$this->session->userdata();
        $this->data['message']=$this->session->flashdata('message');
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'customerMyApp';
        $this->data['filename'] = './shopsDashbord/customerMyApp.tpl';
        $this->smarty->view('web/shopifyApp.tpl', $this->data);
    }
    public function customizeApp()
    {   

        $shopArrSession=$this->session->userdata();
        $sessionData = $this->shopify->shopSessionData();
        $getCollection=$this->shopify->getCollection();
        if($this->input->post()){

            // $targetColumnsAndValuesShops['iShopId'] =$this->input->post('iShopId');
            $iShopId =$this->input->post('iShopId');
            $targetColumnsAndValuesShops['vHeaderColor'] =$this->input->post('vHeaderColor');
            $targetColumnsAndValuesShops['vBodyColor'] =$this->input->post('vBodyColor');
            $targetColumnsAndValuesShops['vButtonColor'] =$this->input->post('vButtonColor');
            $targetColumnsAndValuesShops['vButtonFontColor'] =$this->input->post('vButtonFontColor');
            $targetColumnsAndValuesShops['eDesignType']="Custom";
            $targetColumnsAndValuesShops['eCustomizeType']=1;

            $installAppResponce=$this->installShopsApp($targetColumnsAndValuesShops);
            if ($this->input->post('vName')  && $this->input->post('iShopId')) {
                $targetColumnsAndValuesShopsNav['iShopId'] =$this->input->post('iShopId');
                $targetColumnsAndValuesShopsNav['vHandle'] =$this->input->post('vHandle');
                $targetColumnsAndValuesShopsNav['vName'] =$this->input->post('vName');
                $targetColumnsAndValuesShopsNav['iParentId'] =$this->input->post('iParentId');
                if($this->input->get('iShopNavId')){
                    $targetColumnsAndValuesShopsNav['iShopNavId'] =$this->input->post('iShopNavId');
                    $iShopId =$targetColumnsAndValuesShopsNav['iShopId'];
                    $iShopNavId =$targetColumnsAndValuesShopsNav['iShopNavId'];
                    $comparisonColumnsAndValues = array('iShopNavId' => array($iShopNavId,'where'));
                    $totalRows = $this->QueryCreator_model->updateQuery('shop_navs',$comparisonColumnsAndValues,$targetColumnsAndValuesShopsNav);
                }
                else
                {
                    $iShopNavId= $this->QueryCreator_model->insertSingle('shop_navs',$targetColumnsAndValuesShopsNav);
                }
            }
           
            // $targetColumnsAndValues['vToken']=$session['shopArrSession']['access_token'];
           
            if (isset($_FILES)) {

                $this->load->library('S3');
                define('awsAccessKey', 'AKIAJUGM5ES74UBC6OSA');
                define('awsSecretKey', '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');
                $s3 = new S3(awsAccessKey, awsSecretKey);
                $bucketTitle = 'bizeazy.net';
                $bucketInsideFolderTitle = "Shops";
                                
                if($_FILES['vLogo']['name']){
                    $vLogoURLFilename = rand(1111111,9999999).'.'.pathinfo($_FILES['vLogo']['name'], PATHINFO_EXTENSION);
                    $vLogoURLFolderTitle = $bucketInsideFolderTitle."/".$iShopId.'/Logo/'.$vLogoURLFilename;
                    $s3->putObjectFile($_FILES['vLogo']['tmp_name'], $bucketTitle,$vLogoURLFolderTitle, S3::ACL_PUBLIC_READ);
                    
                    $targetColumnsAndValuesShops['vLogo'] = "https://s3.amazonaws.com/".$bucketTitle.'/'.$vLogoURLFolderTitle;

                }  

                if($_FILES['vSplash']['name']){
                    $count=count($_FILES['vSplash']['name']);
                    for ($i=0; $i < $count; $i++) { 
                        $j=$i+1;
                        $vSplash1="vSplash".$j;
                        $vSplash="vSplash".$i;
                        $vSplashURLFilename = rand(1111111,9999999).'.'.pathinfo($_FILES['vSplash']['name'][$i], PATHINFO_EXTENSION);
                        $vSplashURLFolderTitle = $bucketInsideFolderTitle."/".$iShopId.'/SplashScreen/'.$vSplashURLFilename;
                        $s3->putObjectFile($_FILES['vSplash']['tmp_name'][$i], $bucketTitle,$vSplashURLFolderTitle, S3::ACL_PUBLIC_READ);
                        
                        $targetColumnsAndValuesShopsData[$vSplash1] = "https://s3.amazonaws.com/".$bucketTitle.'/'.$vSplashURLFolderTitle;
                    }
                }
                    $targetColumnsAndValuesShops['vSplash1']=$targetColumnsAndValuesShopsData['vSplash1'];
                    $targetColumnsAndValuesShops['vSplash2']=$targetColumnsAndValuesShopsData['vSplash2'];
                    $targetColumnsAndValuesShops['vSplash3']=$targetColumnsAndValuesShopsData['vSplash3'];
               
                $comparisonColumnsAndValues = array('iShopId' => array($iShopId,'where'));
                $totalRows = $this->QueryCreator_model->updateQuery('shops',$comparisonColumnsAndValues,$targetColumnsAndValuesShops);

            }
            if($totalRows>0){
               $this->session->set_flashdata('message', 'Record Addedd Successfully.');
            } 
            redirect($this->data['base_url'].'ShopifyApp/publishApp');
            exit();
        }
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('vDomain' => array($sessionData->shop->domain,'where'));
        $singleRecord = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
            if ($singleRecord['vSplash1']=='') {
                $singleRecord['vSplash1']= $singleRecord['vSplash1'] ?:'';
                $singleRecord['vSplash2']= $singleRecord['vSplash2'] ?:'';
                $singleRecord['vSplash3']= $singleRecord['vSplash3'] ?:'';
            }
            else
            {
                $singleRecord['vSplash1']= $singleRecord['vSplash1'] ?:$this->data['base_upload'].'no-image.png';
                $singleRecord['vSplash2']= $singleRecord['vSplash2'] ?:$this->data['base_upload'].'no-image.png';
                $singleRecord['vSplash3']= $singleRecord['vSplash3'] ?:$this->data['base_upload'].'no-image.png';
            }
        $shop_navColumns='';
        $shop_navscomparison = array('iShopId' => array($singleRecord['iShopId'],'where'));
        $shop_navs = $this->QueryCreator_model->selectQuery('shop_navs',$shop_navColumns,$shop_navscomparison,'Multiple',NULL);
        $this->data['getCollection']=$getCollection->custom_collections;
        $this->data['sessionData']=$sessionData;
        $this->data['shopArrSession']=$this->session->userdata();

        $this->data['singleRecord']=$singleRecord;
        $this->data['shop_navs']=$shop_navs;
        $this->data['message']=$this->session->flashdata('message');
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'customerMyApp';
        $this->smarty->view('web/shopsDashbord/customizeApp.tpl', $this->data);
    }
    public function shopsChange()
    {
        if($this->input->post('iShopId')){
            $targetColumnsAndValues =$this->input->post();
            $iShopId =$targetColumnsAndValues['iShopId'];
            unset($targetColumnsAndValues['iShopId']);
            $comparisonColumnsAndValues = array('iShopId' => array($iShopId,'where'));
            $targetColumnsAndValues['dtUpdatedDateTime']=date('Y-m-d H:i:s');
            $totalRows = $this->QueryCreator_model->updateQuery('shops',$comparisonColumnsAndValues,$targetColumnsAndValues);
        }

    }
    public function publishApp()
    {
        $session=$this->session->userdata();
        $sessionData = $this->shopify->shopSessionData();
        if($this->input->post())
        {
            $targetColumnsAndValues=$this->input->post();
            $iShopId=$targetColumnsAndValues['iShopId'];
            $iMemberShipId=$targetColumnsAndValues['iMemberShipId'];
            unset($targetColumnsAndValues['iShopId']);
            unset($targetColumnsAndValues['iMemberShipId']);
            $targetColumnsAndValues['dtUpdatedDateTime']=date('Y-m-d H:i:s');
            $targetColumnsAndValues['eMembershipStatus']="Cancel";        

            $comparisonColumnsAndValues = array('iMemberShipId' => array($iMemberShipId,'where'),'iShopId' => array($iShopId,'where'));
            $totalRows = $this->QueryCreator_model->updateQuery('memberships',$comparisonColumnsAndValues,$targetColumnsAndValues);
            redirect($this->data['base_url'].'ShopifyApp/publishApp');
            exit();
        }
        $this->data['sessionData']=$sessionData;
        $this->data['shopArrSession']=$this->session->userdata();
        $this->data['message']=$this->session->flashdata('message');
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('iShopId' => array($session['shopArrSession']['iShopId'],'where'));
        $singleRecord = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
        $membershipsDataComparison = array('iShopId' => array($session['shopArrSession']['iShopId'],'where'),'eMembershipStatus!=' => array('Cancel','where'));
        $membershipsData = $this->QueryCreator_model->selectQuery('memberships',$columnsToSelect,$membershipsDataComparison,'Single',NULL);
        $this->data['membershipsData']=$membershipsData;
        $this->data['singleRecord']=$singleRecord;
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'publishApp';
        $this->data['filename'] = './shopsDashbord/publishApp.tpl';
        $this->smarty->view('web/shopifyApp.tpl', $this->data);
    }
    public function notification()
    {
        if($this->input->post()){
            $insertRec = $this->input->post();
            $insertRec['dtCreatedDateTime']=date('Y-m-d H:i:s');
            $insertRec['dtUpdatedDateTime']=date('Y-m-d H:i:s');
            $iNotificationId = $this->QueryCreator_model->insertSingle('notifications',$insertRec);
            return $iNotificationId;
        }
        $shopArrSession=$this->session->userdata();
        $ShopsessionData = $this->shopify->shopSessionData();
        $this->data['sessionData']=$ShopsessionData;
        $this->data['shopArrSession']=$this->session->userdata();
        $this->data['message']=$this->session->flashdata('message');
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('iShopId' => array($shopArrSession['shopArrSession']['iShopId'],'where'));
        $notificationsRecords = $this->QueryCreator_model->selectQuery('notifications',$columnsToSelect,$comparisonColumnsAndValues,'Multiple',NULL);
        foreach ($notificationsRecords as $key => $value) {
           
            if($notificationsRecords[$key]['dtCreatedDateTime']!='0000-00-00 00:00:00'){
                $notificationsRecords[$key]['dtCreatedDateTime'] =$this->dateTimeFormatWithYear($notificationsRecords[$key]['dtCreatedDateTime']);
            }
            else{
                $notificationsRecords[$key]['dtCreatedDateTime'] = '';
            }
           
        }
        $this->data['notificationsRecords']=$notificationsRecords;
        $this->data['iShopId']=$shopArrSession['shopArrSession']['iShopId'];
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'notification';
        $this->data['filename'] = './shopsDashbord/notification.tpl';
        $this->smarty->view('web/shopifyApp.tpl', $this->data);
    }
    public function faq()
    {
        $shopArrSession=$this->session->userdata();
        $ShopsessionData = $this->shopify->shopSessionData();
        $this->data['sessionData']=$ShopsessionData;
        $this->data['shopArrSession']=$this->session->userdata();
        $this->data['message']=$this->session->flashdata('message');
        $columnsToSelect = '';
        $faqRecords = $this->QueryCreator_model->selectQuery('faq',$columnsToSelect,NULL,'Multiple',NULL);
        foreach ($faqRecords as $key => $value) {
           
            if($faqRecords[$key]['dtCreatedDateTime']!='0000-00-00 00:00:00'){
                $faqRecords[$key]['dtCreatedDateTime'] =$this->dateTimeFormatWithYear($faqRecords[$key]['dtCreatedDateTime']);
            }
            else{
                $faqRecords[$key]['dtCreatedDateTime'] = '';
            }
           
        }
        $this->data['faqRecords']=$faqRecords;
        $this->data['iShopId']=$shopArrSession['shopArrSession']['iShopId'];
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'faq';
        $this->data['filename'] = './shopsDashbord/faq.tpl';
        $this->smarty->view('web/shopifyApp.tpl', $this->data);
    }
    public function supportHelp()
    {
        if($this->input->post()){
            $insertRec = $this->input->post();
            $insertRec['tMessage']=$insertRec['tMessage'];
            $insertRec['dtCreatedDateTime']=date('Y-m-d H:i:s');    
            $insertRec['dtUpdatedDateTime']=date('Y-m-d H:i:s');    
            $iTicketId = $this->QueryCreator_model->insertSingle('support_messages',$insertRec);
            return $iTicketId;
        }
        $shopArrSession=$this->session->userdata();
        $ShopsessionData = $this->shopify->shopSessionData();
        $this->data['sessionData']=$ShopsessionData;
        $this->data['shopArrSession']=$this->session->userdata();
        $this->data['message']=$this->session->flashdata('message');
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('iShopId' => array($shopArrSession['shopArrSession']['iShopId'],'where'));
        $supportMessagesRecords = $this->QueryCreator_model->selectQuery('support_messages',$columnsToSelect,$comparisonColumnsAndValues,'Multiple',NULL);
        foreach ($supportMessagesRecords as $key => $value) {
           
            if($supportMessagesRecords[$key]['dtCreatedDateTime']!='0000-00-00 00:00:00'){
                $supportMessagesRecords[$key]['dtCreatedDateTime'] =$this->dateTimeFormatWithYear($supportMessagesRecords[$key]['dtCreatedDateTime']);
            }
            else{
                $supportMessagesRecords[$key]['dtCreatedDateTime'] = '';
            }
           
        }
        $this->data['supportMessagesRecords']=$supportMessagesRecords;
        $this->data['iShopId']=$shopArrSession['shopArrSession']['iShopId'];
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'help';
        $this->data['filename'] = './shopsDashbord/help.tpl';
        $this->smarty->view('web/shopifyApp.tpl', $this->data);
    }
    public function iosAndroidPublishApps()
    {
        $device = $this->uri->segment('3');
        $deviceViewFile = $this->uri->segment('4');
        $id = $this->uri->segment('5');
        $shopArrSession=$this->session->userdata();
        $sessionData = $this->shopify->shopSessionData();
        $getThemes= $this->shopify->getThemes();
        
        foreach ($getThemes->themes as $key => $value) {
            if ($value->role='main') {
                $themesId=$value->id;
                 $getThemesSetting= $this->shopify->getThemesSetting($themesId);
            }
        }
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('vDomain' => array($sessionData->shop->domain,'where'));
        
        $singleRecord = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
       if ($singleRecord['vLogo'] != NULL || $singleRecord['vSplash1'] != NULL || $singleRecord['vSplash2'] != NULL || $singleRecord['vSplash3'] != NULL) {
            if(file_exists($this->data['base_upload_path'].'shops/'.$singleRecord['iShopId'].'/'.$singleRecord['vLogo']))
            {
                $singleRecord['vLogo'] = $this->data['base_upload'].'shops/'.$singleRecord['iShopId'].'/'.$singleRecord['vLogo'];
            }
            else
            {
                $singleRecord['vLogo']= $this->data['base_upload'].'user.png';
            }
            if(file_exists($this->data['base_upload_path'].'shops/'.$singleRecord['iShopId'].'/'.$singleRecord['vSplash1']))
            {
                $singleRecord['vSplash1'] = $this->data['base_upload'].'shops/'.$singleRecord['iShopId'].'/'.$singleRecord['vSplash1'];
            }
            else
            {
                $singleRecord['vSplash1']= '';
            }
            if(file_exists($this->data['base_upload_path'].'shops/'.$singleRecord['iShopId'].'/'.$singleRecord['vSplash2']))
            {
                $singleRecord['vSplash2'] = $this->data['base_upload'].'shops/'.$singleRecord['iShopId'].'/'.$singleRecord['vSplash2'];
            }
            else
            {
                $singleRecord['vSplash2']= '';
            }
            if(file_exists($this->data['base_upload_path'].'shops/'.$singleRecord['iShopId'].'/'.$singleRecord['vSplash3']))
            {
                $singleRecord['vSplash3'] = $this->data['base_upload'].'shops/'.$singleRecord['iShopId'].'/'.$singleRecord['vSplash3'];
            }
            else
            {
                $singleRecord['vSplash3']= '';
            }
        } 
        else
        {
            $singleRecord['singleRecord'] = '';
            $singleRecord['vLogo']= $this->data['base_upload'].'user.png';
        }

        $shop_navColumns='';
        $shop_navscomparison = array('iShopId' => array($singleRecord['iShopId'],'where'),'iParentId' => array('0','where'));
        $shop_navs = $this->QueryCreator_model->selectQuery('shop_navs',$shop_navColumns,$shop_navscomparison,'Multiple',NULL);
        $childShop_navscomparison = array('iShopId' => array($singleRecord['iShopId'],'where'),'iParentId!=' => array('0','where'));
        $childShop_navs = $this->QueryCreator_model->selectQuery('shop_navs',$shop_navColumns,$childShop_navscomparison,'Multiple',NULL);
        
        $getCollection=$this->shopify->getCollection();
        $custom_collections=$getCollection->custom_collections;

        foreach ($custom_collections as $key => $value) { 
            $CollectionName=$value->handle;
            if ($deviceViewFile=='iosProductDetails') {
                $this->data['CollectionName']=$value->handle;
            }
            if ($CollectionName==$deviceViewFile) {
                $CollectionId=$value->id;
                $product_listings= $this->shopify->productCollectionWise($CollectionId);
                $this->data['shopsProduct']=$product_listings->products;
            }
        }
        $this->data['singleRecord']=$singleRecord;
        $this->data['shop_navs']=$shop_navs;
        $this->data['childShop_navs']=$childShop_navs;
        $this->data['sessionData']=$sessionData;
        $this->data['shopArrSession']=$this->session->userdata();
        $this->data['message']=$this->session->flashdata('message');
        $this->data['data']=$this->data;
        $this->data['pagename'] = $deviceViewFile;
        $this->data['productsId']=$id;
        $this->data['type']="Web";        
        $products= $this->shopify->shopsProduct();
        
        if ($device=='android') {

            if ($deviceViewFile=='androidCheckout')
            {
                $this->data['shopsProduct']=$products->products;
                $this->data['filename'] = './androidCheckout.tpl';     
            }
            elseif ($deviceViewFile=='androidProductDetails') {
                $this->data['shopsProduct']=$products->products;
                $this->data['filename'] = './androidProductDetails.tpl';     
            }
            elseif ($deviceViewFile=='androidWishlist') {
                $this->data['shopsProduct']=$products->products;
                $this->data['filename'] = './androidWishlist.tpl';     
            }
            elseif ($deviceViewFile=='androidHome') {
                $this->data['shopsProduct']=$products->products;
                $this->data['filename'] = './androidHome.tpl';     
            }
            else
            {
                $this->data['filename'] = './androidHome.tpl';     
            }
            $this->smarty->view('web/iframe/android/androidPublishApp.tpl', $this->data);
        }
        else
        {   
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
    }
    public function memberShip()
    {
        $memberShipArr=$this->input->post();        
        $iMemberShipId=$memberShipArr['iMemberShipId'];
        unset($memberShipArr['iMemberShipId']);        

        $payload=array();
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('iShopId' => array($memberShipArr['iShopId'],'where'),'eMembershipStatus' => array('Active','where'));
        $membershipsData = $this->QueryCreator_model->selectQuery('memberships',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
       
        if ($memberShipArr['eMembershipName']=="Business" || $memberShipArr['eMembershipName']=="Standard") {
            $payload['recurring_application_charge']['name']="Super Duper Expensive action";
/*            $payload['recurring_application_charge']['test']="";
*/            $payload['recurring_application_charge']['status']="pending";
            $payload['recurring_application_charge']['return_url']=$this->data['base_url']."ShopifyApp/publishApp";
            if ($memberShipArr['eMembershipName']=="Business") {
                $payload['recurring_application_charge']['price']="49.99";
            }
            else
            {
                $payload['recurring_application_charge']['price']="29.99";
            }
            
            $memberShipArr['eMembershipType']='Monthly';
            $memberShipArr['dEndDate']=date('Y-m-d', strtotime('+1 months'));
             if(empty($membershipsData)) {
                $postApplicationCharge= $this->shopify->monthlyApplicationCharges($payload);
                $postMemebership=$postApplicationCharge->recurring_application_charge;
             }
             else
             {
                $ChargeId=$membershipsData['vChargeId'];
                
                $postApplicationCharge= $this->shopify->monthlyApplicationChargesUpdate($ChargeId,$payload);
                $postMemebership=$postApplicationCharge->recurring_application_charge;  
                
             }
          }
        else
        {
            $payload['application_charge']['name']="Super Duper Expensive action";
/*            $payload['application_charge']['test']="";
*/            $payload['application_charge']['status']="pending";
            $payload['application_charge']['price']="499.00";
            $payload['application_charge']['return_url']=$this->data['base_url']."ShopifyApp/publishApp";
            $memberShipArr['eMembershipType']='Purchase';
            if(empty($membershipsData)) {
                $postApplicationCharge= $this->shopify->oneTimeApplicationCharges($payload);
                $postMemebership=$postApplicationCharge->application_charge; 
            }
        }
        if(empty($membershipsData)) {
            $memberShipArr['vChargeId']=$postMemebership->id;
            $memberShipArr['eChargeStatus']=$postMemebership->status;
            $memberShipArr['dPrice']=$postMemebership->price;
            $memberShipArr['dStartDate']=$postMemebership->created_at;
           
            $memberShipArr['tAskReason']="";
            $memberShipArr['dtCreatedDateTime']=date('Y-m-d H:i:s');
            $memberShipArr['dtUpdatedDateTime']=date('Y-m-d H:i:s');

            $memberShipArr['eMembershipStatus']="Active"; 
            $iMemberShipId= $this->QueryCreator_model->insertSingle('memberships',$memberShipArr);
        }
        else
        {
            
            $memberShipArr['vChargeId']=$postMemebership->id ?: $membershipsData['vChargeId'];
            $memberShipArr['eChargeStatus']=$postMemebership->status ?: 'Pending';
            $memberShipArr['dtUpdatedDateTime']=date('Y-m-d H:i:s');
            $memberShipArr['dStartDate']=date('Y-m-d');
                if ($memberShipArr['eMembershipName']!="One Time Purchase") {
                    $memberShipArr['dEndDate']=date('Y-m-d');
                    if ($memberShipArr['eMembershipName']=="Business") {
                        $memberShipArr['dPrice']=$postMemebership->price ?: "49.99";
                    }
                    else
                    {
                        $memberShipArr['dPrice']=$postMemebership->price ?: "29.99";
                    }
                }
                else
                {
                 $memberShipArr['dEndDate']="0000-00-00";   
                 $memberShipArr['dPrice']=$postMemebership->price ?: '499.00';
                }
               
            $memberShipArr['eMembershipStatus']=$postMemebership->status ?: 'Active';
            $memeberShipcomparisonColumnsAndValues = array('iMemberShipId' => array($iMemberShipId,'where'));
            $totalRows = $this->QueryCreator_model->updateQuery('memberships',$memeberShipcomparisonColumnsAndValues,$memberShipArr);
           

        }
        redirect($this->data['base_url'].'ShopifyApp/publishApp');
    }
    public function removeMenu()
    {
        $iShopNavId=$this->input->post('iShopNavId');
        $comparisonColumnsAndValues = array('iShopNavId' => array($iShopNavId,'where'));
        $totalRows = $this->QueryCreator_model->deleteQuery('shop_navs',$comparisonColumnsAndValues);
        if ($totalRows>0) {
            $comparisonColumnsAndValuesParentMenu=array('iParentId' => array($iShopNavId,'where'));
            $totalRows1 = $this->QueryCreator_model->deleteQuery('shop_navs',$comparisonColumnsAndValuesParentMenu);
        }
        print_r($totalRows1);
        exit();
    }
    public function removeImage(){
        $foldername=$this->input->post('folderName');
        $iShopId=$this->input->post('iShopId');
        $image=$this->input->post('image');
        $columnsToSelect = '';
        $comparisonColumnsAndValues = array('iShopId' => array($iShopId,'where'));
        $singleRecord = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
        if ($singleRecord != '') {
            if ($image=='vLogo') {
                $path = $this->data['base_upload_path'].$foldername.'/'.$iShopId.'/'.$singleRecord['vLogo'];
                $targetColumnsAndValues['vLogo'] = '';
                unlink($path);
            }
            else
            {

                $targetColumnsAndValues['vSplash1'] = '';
                $targetColumnsAndValues['vSplash2'] = '';
                $targetColumnsAndValues['vSplash3'] = '';

                $path1 = $this->data['base_upload_path'].$foldername.'/'.$iShopId.'/'.$singleRecord['vSplash1'];
                $path2 = $this->data['base_upload_path'].$foldername.'/'.$iShopId.'/'.$singleRecord['vSplash2'];
                $path3 = $this->data['base_upload_path'].$foldername.'/'.$iShopId.'/'.$singleRecord['vSplash3'];
                unlink($path1);
                unlink($path2);
                unlink($path3);
            }
            $totalRows = $this->QueryCreator_model->updateQuery('shops',$comparisonColumnsAndValues,$targetColumnsAndValues);
            print_r($totalRows);
            exit();
        }
    }
    
    //find step-by- step instructions in Apple  Developer 
    public function instructionsApple()
    {
        $shopArrSession=$this->session->userdata();
        $ShopsessionData = $this->shopify->shopSessionData();
        $this->data['sessionData']=$ShopsessionData;
        $this->data['shopArrSession']=$this->session->userdata();
        $this->data['message']=$this->session->flashdata('message');
        $this->data['iShopId']=$shopArrSession['shopArrSession']['iShopId'];
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'appleDeveloper';
        $this->data['filename'] = './shopsDashbord/appleDeveloper.tpl';
        $this->smarty->view('web/shopifyApp.tpl', $this->data);
    }

    //find step-by- step instructions in Google  Developer 
    public function instructionsGoogle()
    {        
        $shopArrSession=$this->session->userdata();
        $ShopsessionData = $this->shopify->shopSessionData();
        $this->data['sessionData']=$ShopsessionData;
        $this->data['shopArrSession']=$this->session->userdata();
        $this->data['message']=$this->session->flashdata('message');
        $this->data['iShopId']=$shopArrSession['shopArrSession']['iShopId'];
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'googleDeveloper';
        $this->data['filename'] = './shopsDashbord/googleDeveloper.tpl';
        $this->smarty->view('web/shopifyApp.tpl', $this->data);
    }
    public function termsOfService()
    {        
        $shopArrSession=$this->session->userdata();
        $ShopsessionData = $this->shopify->shopSessionData();
        $this->data['sessionData']=$ShopsessionData;
        $this->data['shopArrSession']=$this->session->userdata();
        $this->data['message']=$this->session->flashdata('message');
        $this->data['iShopId']=$shopArrSession['shopArrSession']['iShopId'];
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'terms Of Service';
        $this->data['filename'] = './shopsDashbord/termsOfService.tpl';
        $this->smarty->view('web/shopifyApp.tpl', $this->data);
    }
}


