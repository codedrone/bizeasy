<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Authentication extends My_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function access(){
        if($this->input->get()){
            $shop = $this->input->get('shop');
            $shopData = array(
                'shop' => $this->input->get('shop'),
                'API_KEY' => $this->input->get('API_KEY'),
                'API_SECRET' => $this->input->get('API_SECRET'),
            );
            if(isset($shop)){
                $this->session->set_userdata($shop);
            }
            if($this->session->userdata('access_token')){
                $data = array(
                    'api_key' => $this->config->item('shopify_api_key'),
                    'shop' => $shop
                );
                $api_arr['data'] = $data;
                $api_arr['msg'] = '1';
                $api_arr['display_msg'] = "WElCOME";
                $this->smarty->view('web/welcome.tpl', $data);
               echo json_encode($api_arr);exit;
            }
            else{
                $this->auth($shopData); 
            }

        }
        $this->smarty->view('web/homeInstall.tpl', $this->data);

    }
    function checkShopActive()
    {
        $shop = $this->input->get('shop');
        $comparisonColumnsAndValues = array('vDomain' => array($shop,'where'),'eStatus' => array('Active','where'));
        $noOfRows = $this->QueryCreator_model->noOfRecords('shops',$comparisonColumnsAndValues);
        echo $noOfRows;
        exit;
    }
    public function auth($shopData){
       $data = array(
            'API_KEY' => $this->config->item('shopify_api_key'),
            'API_SECRET' => $this->config->item('shopify_secret'),
            'SHOP_DOMAIN' => $shopData['shop'],
            'ACCESS_TOKEN' => ''
        );
        $this->load->library('Shopify' , $data); 
        $scopes = array('read_themes','write_themes','read_orders','write_orders','read_products','write_products','read_customers','write_customers','read_checkouts','write_checkouts','read_price_rules','write_price_rules','read_product_listings','read_collection_listings','read_analytics'); //what app can do
        $redirect_url = $this->config->item('redirect_url'); //redirect url specified in app setting at shopify

        $paramsforInstallURL = array(
            'scopes' => $scopes,
            'redirect' => $redirect_url
        );
        $permission_url = $this->shopify->installURL($paramsforInstallURL);
        $api_arr['msg'] = '1';
        $api_arr['permission_url'] = $permission_url;
        redirect($permission_url);
        // redirect('https://' . $data['SHOP_DOMAIN'].'.myshopify.com/admin/auth/login');
        // $this->smarty->view('web/escapeIframe.tpl', $api_arr);

    }

    public function callback(){

        $code = $this->input->get('code');
        $shop = $this->input->get('shop');
        if(isset($code)){
            $data = array(
                'API_KEY' => $this->config->item('shopify_api_key'),
                'API_SECRET' => $this->config->item('shopify_secret'),
                'SHOP_DOMAIN' => $shop,
                'ACCESS_TOKEN' => ''
            );
            $this->load->library('Shopify' , $data); 
        }
        $accessToken = $this->shopify->getAccessToken($code);
        
        $shopArrSession = ['shop' => $shop , 'access_token' => $accessToken->access_token];

        $this->session->set_userdata('shopArrSession',$shopArrSession);
        redirect($this->data['base_url'].'ShopifyApp');
    }
    public function signOut(){
        $shopsSession=$this->session->userdata();
        $data = array(
            'API_KEY' => $this->config->item('shopify_api_key'),
            'API_SECRET' => $this->config->item('shopify_secret'),
            'SHOP_DOMAIN' => $shopsSession['shopArrSession']['shop'],
            'ACCESS_TOKEN' => $shopsSession['shopArrSession']['access_token'],
        );
        $redirect = array(
            'bizeazyHome' => $this->data['base_url'],
            'SHOP_DOMAIN' => $shopsSession['shopArrSession']['shop'],
        );
        $this->load->library('Shopify' , $data); 
        $signOutShops = $this->shopify->signOutShops($redirect);
        $userdata=$this->session->userdata('shopArrSession');
        $this->session->unset_userdata('shopArrSession');
        // redirect($signOutShops);
        redirect($this->data['base_url']);
    }
}