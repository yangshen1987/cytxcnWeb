<?php
/**
 * Created by PhpStorm.
 * User: liubaini
 * Date: 2016/8/2
 * Time: 15:07
 */
namespace Home\Controller;
use Think\Controller;
class AdminContronller extends Controller
{
    /**
     *显示主页
     */
    public function index()
    {
        $this->show();
    }
    /*
     *登陆过程
     * @parmas $usrName, $userPwd
     */
    public function loginUser($userName, $userPwd){

    }
    /*
     *登出
     */
    public function loginOut(){

    }
    /*
     * 登陆启动
     */
    public function initLogin(){
        $this->show();
    }

}