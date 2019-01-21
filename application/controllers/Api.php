<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Api extends My_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library('Shopify' , $data=array());
    }
     
	public function index()
	{
        $this->smarty->view('web/home.tpl', $this->data);
	}

    public function get_shop_info()
    {
      
        if($this->input->post()){
            $shopDomain = $this->input->post('shopify_domain');
            $columnsToSelect = '';
            $comparisonColumnsAndValues = array('vDomain' => array($shopDomain,'where'));
            $singleRecord = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
            if (!empty($singleRecord)) {
                
                $shopInfo['shopify_domain']=$singleRecord['vShopifyDomain'];
                $shopInfo['shopify_token']=$singleRecord['vToken'];
                $shopInfo['created_at']=$singleRecord['dtCreatedDateTime'];
                $shopInfo['updated_at']=$singleRecord['dtUpdatedDateTime'];
                $shopInfo['store_id']=$singleRecord['iShopId'];
                $shopInfo['domain']=$singleRecord['vDomain'];            
                $shopInfo['currency']=$singleRecord['vCurrency'];
                $shopInfo['background_color']=$singleRecord['vBodyColor'];
                $shopInfo['header_color']=$singleRecord['vHeaderColor'];
                $shopInfo['money_format']=$singleRecord['vMoneyFormat'];
                $shopInfo['contact_name']=$singleRecord['vContactName'];
                $shopInfo['contact_email']=$singleRecord['vContactEmail'];
                $shopInfo['contact_province']=$singleRecord['vContactProvince'];
                $shopInfo['contact_country']=$singleRecord['vContactCountry'];
                $shopInfo['contact_address1']=$singleRecord['tContactAddress'];
                $shopInfo['contact_zip']=$singleRecord['vContactZipCode'];
                $shopInfo['contact_city']=$singleRecord['vContactCity'];
                $shopInfo['contact_source']=$singleRecord['vContactSource'];
                $shopInfo['contact_phone']=$singleRecord['vContactPhoneNo'];
                $shopInfo['name']=$singleRecord['vName'];
                $shopInfo['theme_color']=$singleRecord['vThemeColor'];
                $shopInfo['button_color']=$singleRecord['vButtonColor'];
                $shopInfo['button_font_color']=$singleRecord['vButtonFontColor'];
                $shopInfo['logo_file_name']=$singleRecord['vLogo'];
                $shopInfo['logo_content_type']='';
                $shopInfo['logo_file_size']='';
                $shopInfo['splash1_file_name']=$singleRecord['vSplash1'];
                $shopInfo['splash1_content_type']='';
                $shopInfo['splash1_file_size']='';
                $shopInfo['splash1_updated_at']='';
                $shopInfo['splash2_file_name']=$singleRecord['vSplash2'];
                $shopInfo['splash2_content_type']='';
                $shopInfo['splash2_file_size']='';
                $shopInfo['splash2_updated_at']='';
                $shopInfo['splash3_file_name']=$singleRecord['vSplash3'];
                $shopInfo['splash3_content_type']='';
                $shopInfo['splash3_file_size']='';
                $shopInfo['splash3_updated_at']='';
                $shopInfo['design_type']=$singleRecord['eDesignType'];
                $shopInfo['customize_type']=$singleRecord['eCustomizeType'];

                $comparisonMemebership = array('iShopId' => array($singleRecord['iShopId'],'where'));
                $singleMemberShipDetail = $this->QueryCreator_model->selectQuery('memberships',$columnsToSelect,$comparisonMemebership,'Single',NULL);
                $shopInfo['membership_status']=$singleMemberShipDetail['eMembershipStatus'];
                $shopInfo['ask_reason']=$singleRecord['tAskReason'];
                $shopInfo['msg']=1;
                $postShopsInfo = json_encode($shopInfo);
                // $postShopsInfo['msg']=json_encode('1');
                
                echo $postShopsInfo;
                exit();
            }
            else
            {
                    $api_arr['msg']=0;
                    $api_arr['message']='Please Login in Bizeazy Shopify App ';
                    $postShopsInfo = json_encode($api_arr);
                    echo $postShopsInfo;
                    exit();
            }
            
            /*$url ="http://www.bizeazy.net/api/get_shop_info";
            $postShopsInfo=$this->shopify->postShopInfo($url,$shopInfo);
            echo $postShopsInfo;
            exit();
            $postShopsInfo = json_decode($postShopsInfo);
            print_r($postShopsInfo);
            exit();*/
        }
    } 

    public function nav_menu()
    {
        if($this->input->post()){
            $shopDomain = $this->input->post('shopify_domain');
            $columnsToSelect = '';
            $comparisonColumnsAndValues = array('vDomain' => array($shopDomain,'where'));
            $singleRecord = $this->QueryCreator_model->selectQuery('shops',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
            $comparisonMunu = array('iShopId' => array($singleRecord['iShopId'],'where'));
            $MenuList = $this->QueryCreator_model->selectQuery('shop_navs',$columnsToSelect,$comparisonMunu,'Multiple',NULL);
            if (!empty($MenuList)) {
                $postShopsInfo=array();
                foreach ($MenuList as $key => $value) {
                    $shopMenu[$key]['id']=$MenuList[$key]['iShopNavId'];
                    $shopMenu[$key]['parent_id']=$MenuList[$key]['iParentId'];
                    $shopMenu[$key]['shop_id']=$MenuList[$key]['iShopId'];
                    $shopMenu[$key]['name']=$MenuList[$key]['vName'];
                    $shopMenu[$key]['handle']=$MenuList[$key]['vHandle'];
                    $shopMenu[$key]['nav_type']=$MenuList[$key]['eNavType'];
                    $shopMenu[$key]['created_at']=date('Y-m-d H:i:s');
                    $shopMenu[$key]['updated_at']=date('Y-m-d H:i:s');
                    $shopMenu[]['msg']=1;
                    // $url ="http://www.bizeazy.net/api/nav_menu";
                    
                    // $postShopsInfo=$this->shopify->postShopInfo($url,$shopMenu);
                    // echo $postShopsInfo;
                    // exit();
                }
                $postShopsInfo = json_encode($shopMenu);

                echo $postShopsInfo;
                exit();
             }
            else
            {
                    $api_arr['msg']=0;
                    $api_arr['message']='Please Login in Bizeazy Shopify App ';
                    $postShopsInfo = json_encode($api_arr);
                    echo $postShopsInfo;
                    exit();
            }
        }
    } 
}


