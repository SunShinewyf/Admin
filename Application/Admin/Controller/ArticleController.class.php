<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
	//文章列表
    public function index(){
    	$this->display();
    }

    //添加文章
    public function add(){
    	$this->display('add');
    }


}