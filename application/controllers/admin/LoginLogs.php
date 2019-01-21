<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginLogs extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $sessiondata=$this->session->userdata('login_info');
        if($sessiondata==null){
           redirect($this->data['base_url'].'Authenticate');
        }
    }
    /* 
        Purpose : Display record - LoginLogs list
    */
    public function index()
    {
        $columnsToSelect = 'iLoginId,vRole,ePlatformType,vName,vEmail,vIPAddress,vDeviceId,dtLoginDateTime,dtLogoutDateTime';
        $sortingColumnsAndValues = array('iLoginId'=>'DESC');
        $loginLogs = $this->QueryCreator_model->selectQuery('login_logs',$columnsToSelect,NULL,'Multiple',$sortingColumnsAndValues);
        foreach ($loginLogs as $key => $value){
            if($loginLogs[$key]['dtLoginDateTime']!='0000-00-00 00:00:00'){
                $loginDatetime = date_create($loginLogs[$key]['dtLoginDateTime']);
                $loginLogs[$key]['dtLoginDateTime'] = date_format($loginDatetime, 'jS F Y g:i A');
            }
            else{
                $loginLogs[$key]['dtLoginDateTime'] = '';
            }
            if($loginLogs[$key]['dtLogoutDateTime']!='0000-00-00 00:00:00'){
                $logoutDatetime = date_create($loginLogs[$key]['dtLogoutDateTime']);
                $loginLogs[$key]['dtLogoutDateTime'] = date_format($logoutDatetime, 'jS F Y g:i A');
            }
            else{
                $loginLogs[$key]['dtLogoutDateTime'] = '';
            }
        }
        $sessiondata=$this->session->userdata('login_info');
        $this->data['loginLogs']=$loginLogs;
        $this->data['message']=$this->session->flashdata('message');
        $this->data['login_info']=$sessiondata;
        $this->data['data']=$this->data;
        $this->data['pagename'] = 'loginLogs';
        $this->data['filename'] = './loginLogs/listLoginLogs.tpl';
        $this->smarty->view('admin/template.tpl', $this->data);
    }
    /* 
        Purpose : Delete record - LoginLogs 
    */
    function actionDelete(){
        $ids = $this->input->post('iId');
        $action=$this->input->post('action');
        $comparisonColumnsAndValues = array('iLoginId' => array($ids,'where_in'));
        $totalRows = $this->QueryCreator_model->deleteQuery('login_logs',$comparisonColumnsAndValues);
        if($totalRows>0){
           $recordTitle = ($totalRows>1) ? "Records" : "Record";
           $displayMsg = 'Total ('.$totalRows.') '.$recordTitle.' Deleted Successfully.';
           $this->session->set_flashdata('message', $displayMsg);
        } 
        redirect($this->data['base_url'].'admin/LoginLogs');
        exit();
    }
}