<?php
namespace Admin\Controller;
//use Admin\Controller;
class ManagerController extends AdminController {
    public function index(){
    	$this->assign("name",session("mg_name"));
    	$this->display();
    }
    public function welcome(){

    	$this->assign("last_ip",long2ip(session("last_login_ip")));
    	$this->assign("last_login_time",session("last_login_time"));
    	$this->assign("login_times",session("login_times"));
    	$this->assign("server",$_SERVER);
    	$this->assign("apache_version",apache_get_version());
    	$this->display();
    }
    public function loginout(){
    	session_destroy();
    	$this->redirect("login/index");
    }
}