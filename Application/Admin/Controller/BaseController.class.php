<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
    Public function _initialize(){
        if (!isset($_SESSION['id'])){
           $this->error('请重新登录', U('Admin/Login/index'));
        }
        $access = \Org\Util\Rbac::AccessDecision();
        if(!$access){
            $this->error('你没有权限');
        }
   }
}