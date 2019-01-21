<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configurations extends My_Controller {
	function __construct() {
        parent::__construct();
        $sessiondata=$this->session->userdata('login_info');
        if($sessiondata==null)
        {
           redirect($this->data['base_url'].'Authenticate');
        }
    }
     /* 
        Purpose : Display -Configuration Detail
    */
   public function index()
	{  
       if($this->input->post()){
            $configuration_details = $this->input->post();
            $all_keys = array_keys($configuration_details);
            $all_values = array_values($configuration_details);
            for($i=0;$i<count($all_keys);$i++){
                $targetColumnsAndValues['vValue'] = $all_values[$i];
                $targetColumnsAndValues['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
                $comparisonColumnsAndValues = array('vName' => array($all_keys[$i],'where'));
                $totalRows = $this->QueryCreator_model->updateQuery('configurations',$comparisonColumnsAndValues,$targetColumnsAndValues);
            }
            if (isset($_FILES)) {
                    
                $this->load->library('S3');
                define('awsAccessKey', 'AKIAJUGM5ES74UBC6OSA');
                define('awsSecretKey', '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');

                $s3 = new S3(awsAccessKey, awsSecretKey);
                $bucketTitle = 'bizeazy.net';
                $bucketInsideFolderTitle = "Configuration";
                $s3->putBucket($bucketTitle, S3::ACL_PUBLIC_READ);
                if($_FILES['DEFAULT_LOGO']['name']){

                    $DEFAULT_LOGOFilename = rand(1111111,9999999).'.'.pathinfo($_FILES['DEFAULT_LOGO']['name'], PATHINFO_EXTENSION);
                    $DEFAULT_LOGOURLFolderTitle = $bucketInsideFolderTitle."/DEFAULT_LOGO/".$DEFAULT_LOGOFilename;
                    $s3->putObjectFile($_FILES['DEFAULT_LOGO']['tmp_name'], $bucketTitle,$DEFAULT_LOGOURLFolderTitle, S3::ACL_PUBLIC_READ);

                    
                    $targetColumnsAndValues['vValue'] = "https://s3.amazonaws.com/".$bucketTitle.'/'.$DEFAULT_LOGOURLFolderTitle;
                    $targetColumnsAndValues['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
                    $comparisonColumnsAndValues = array('vName' => array('DEFAULT_LOGO','where'));
                    $totalRowsFile = $this->QueryCreator_model->updateQuery('configurations',$comparisonColumnsAndValues,$targetColumnsAndValues);
                   
                } 
                if($_FILES['DEFAULT_WEB_LOGO']['name']){
                    $DEFAULT_WEB_LOGOFilename = rand(1111111,9999999).'.'.pathinfo($_FILES['DEFAULT_WEB_LOGO']['name'], PATHINFO_EXTENSION);
                    $DEFAULT_WEB_LOGOURLFolderTitle = $bucketInsideFolderTitle."/DEFAULT_WEB_LOGO/".$DEFAULT_WEB_LOGOFilename;
                    $s3->putObjectFile($_FILES['DEFAULT_WEB_LOGO']['tmp_name'], $bucketTitle,$DEFAULT_WEB_LOGOURLFolderTitle, S3::ACL_PUBLIC_READ);

                    
                    $targetColumnsAndValues['vValue'] = "https://s3.amazonaws.com/".$bucketTitle.'/'.$DEFAULT_WEB_LOGOURLFolderTitle;
                    $targetColumnsAndValues['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
                    $comparisonColumnsAndValues = array('vName' => array('DEFAULT_WEB_LOGO','where'));
                    $totalRowsFile = $this->QueryCreator_model->updateQuery('configurations',$comparisonColumnsAndValues,$targetColumnsAndValues);
                   
                } 
                if($_FILES['DEFAULT_SHOPS_LOGO']['name']){
                    
                    $DEFAULT_SHOPS_LOGOFilename = rand(1111111,9999999).'.'.pathinfo($_FILES['DEFAULT_SHOPS_LOGO']['name'], PATHINFO_EXTENSION);
                    $DEFAULT_SHOPS_LOGOURLFolderTitle = $bucketInsideFolderTitle."/DEFAULT_SHOPS_LOGO/".$DEFAULT_SHOPS_LOGOFilename;
                    $s3->putObjectFile($_FILES['DEFAULT_SHOPS_LOGO']['tmp_name'], $bucketTitle,$DEFAULT_SHOPS_LOGOURLFolderTitle, S3::ACL_PUBLIC_READ);

                    
                    $targetColumnsAndValues['vValue'] = "https://s3.amazonaws.com/".$bucketTitle.'/'.$DEFAULT_SHOPS_LOGOURLFolderTitle;
                    $targetColumnsAndValues['dtUpdatedDateTime'] = date('Y-m-d H:i:s');
                    $comparisonColumnsAndValues = array('vName' => array('DEFAULT_SHOPS_LOGO','where'));
                    $totalRowsFile = $this->QueryCreator_model->updateQuery('configurations',$comparisonColumnsAndValues,$targetColumnsAndValues);
                   
                   
                } 
            }
           
            
            if($totalRows>0){
                $this->session->set_flashdata('message', 'Record Updated Successfully.');
                redirect($this->data['base_url'].'admin/Configurations');
                exit();
            }
        }
        $columnsToSelect = 'iConfigurationId,eSection,tTitle,vName,eType,tExtra,vValue ,dtUpdatedDateTime';
        $sortingColumnsAndValues = array('iConfigurationId'=>'ASC');
        $all_configurations = $this->QueryCreator_model->selectQuery('configurations',$columnsToSelect,NULL,'Multiple',$sortingColumnsAndValues);
            foreach($all_configurations as $key => $value){
                if ($value['eType'] == 'Array') {
                    if($value['tExtra'] != NULL)
                    {
                        $data_array = explode('|', $value['tExtra']);
                        $all_configurations[$key]['data_array']= $data_array;
                     }
               }
                else if ($value['eType'] == 'Image'){
                    if ($value['vValue'] != NULL){
                        $all_configurations[$key]['vValue'] = $value['vValue'];
                        /*if(file_exists($value['vValue']))
                        {
                        }
                         else
                        {
                            $all_configurations[$key]['vValue']= $this->data['base_upload'].'no-image.png';
                        }*/
                    }
                    else
                    {
                        $all_configurations[$key]['vValue'] = '';
                    }
                }
            }
        $this->data['all_configurations']=$all_configurations;
        $this->data['newsDetail']=$newsDetail;
        $this->data['login_info'] =$this->session->userdata('login_info');
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['pagename'] = 'setting';
        $this->data['filename'] = './configurations/editConfiguration.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    function remove_image(){
        $foldername=$this->uri->segment('4');
        $iConfigurationId = $this->uri->segment('5'); 
        $columnsToSelect = 'iConfigurationId,eSection,tTitle,vName,eType,tExtra,vValue ,dtUpdatedDateTime';
        $comparisonColumnsAndValues = array('iConfigurationId' => array($iConfigurationId,'where'));
        $singleRecord = $this->QueryCreator_model->selectQuery('configurations',$columnsToSelect,$comparisonColumnsAndValues,'Single',NULL);
        if ($singleRecord != '') {
            $path = $this->data['base_upload_path'].'Configuration/'.$foldername.'/'.$singleRecord['vValue'];
            unlink($path);
            $targetColumnsAndValues['vValue'] = '';
            $comparisonColumnsAndValues = array('iConfigurationId' => array($iConfigurationId,'where'));
            $totalRows = $this->QueryCreator_model->updateQuery('configurations',$comparisonColumnsAndValues,$targetColumnsAndValues);
        }
        redirect($this->data['base_url'] . "admin/Configurations");
    }
}
?>