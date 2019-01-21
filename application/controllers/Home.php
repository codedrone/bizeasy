<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends My_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        require($this->data['base_path']."/blog/wp-load.php");
        $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC'
                );
        $home_blogs = new WP_Query($args);
        $blogarr = array();
        $i=0;
        foreach( $home_blogs->posts as $bloglist ){
            $blogarr[$i]['ID'] = $bloglist->ID;
            $blogarr[$i]['title'] = $bloglist->post_title;
            $blogarr[$i]['url'] = get_permalink($bloglist->ID);
            $blogarr[$i]['content'] = $bloglist->post_excerpt;
            $blogarr[$i]['date'] = date("M d,Y", strtotime($bloglist->post_date));
            $src = wp_get_attachment_image_src( get_post_thumbnail_id($bloglist->ID),'large');
            $blogarr[$i]['image'] = $src[0];
            $i++;
        }

        $columnsToSelect = 'iFAQId,tQuestion,tAnswer,dtCreatedDateTime,dtUpdatedDateTime,eStatus';
        $comparisonColumnsAndValues = array('eStatus =' => array('Active','where'));
        $sortingColumnsAndValues = array('eStatus'=>'ASC','iFAQId'=>'DESC');
        $faqDetails = $this->QueryCreator_model->selectQuery('faq',$columnsToSelect,$comparisonColumnsAndValues,'multiple',$sortingColumnsAndValues,array(),NULL);
        $this->data['faqs']=$faqDetails; 
        $this->data['blog_data'] = $blogarr;
        $this->smarty->view('web/home.tpl', $this->data);

    }
    public function postNewsletters()
    {
        if($this->input->post()){
            $insertRec = $this->input->post();
            
            $insertRec['eStatus'] = 'Active';
            $insertRec['dtCreatedDateTime']=date('Y-m-d H:i:s');
            $insertRec['dtUpdatedDateTime']=date('Y-m-d H:i:s');
            $iNewsLetterId = $this->QueryCreator_model->insertSingle('newsletters',$insertRec);
            print_r($iNewsLetterId);exit();
        } 
    } 
    public function postContact() 
    {
        if($this->input->post()){
            $insertRec = $this->input->post();

            $insertRec['iShopId']='';
            $insertRec['dtCreatedDateTime']=date('Y-m-d H:i:s');
            $insertRec['dtUpdatedDateTime']=date('Y-m-d H:i:s');
            
            $iTicketId = $this->QueryCreator_model->insertSingle('support_messages',$insertRec);
            
            if($iTicketId>0){
                
                $Name = $insertRec['vName'];
                $Email = $insertRec['vEmail'];
                $Phone = $insertRec['vContact'];
                $Message = $insertRec['tMessage'];
                $siteName = "Bizeazy";
                $MailFooter = "Bizeazy";
                $site_url = $this->data['base_url'];
                $image="https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_LOGO/6876087.png";
                $bodyArr = array("#NAME#", "#EMAIL#", "#MOBILE#", "#MESSAGE#", "#SITEURL#", "#MAILFOOTER#", "#IMAGEURL#");
                $postArr = array($Name, $Email, $Phone, $Message, $site_url, $MailFooter, $image);
            
                $sendUser = $this->SendMailOneToAnothor("CONTACT_US_ADMIN_INFORMATION",$this->data['DEFAULT_ADMIN_EMAIL'],$bodyArr, $postArr, $Email, $Name);
            }
            print_r($sendUser);exit();
        }
    }    
}



 