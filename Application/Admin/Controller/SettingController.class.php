<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class SettingController extends Controller {

	//用户管理
    public function user(){
    	$this->display('user');
    }

    //信息管理
    public function infoChange(){
        $this->display('info');
    }

    //栏目管理
    public function column(){
    	$this->display('column');
    }

}