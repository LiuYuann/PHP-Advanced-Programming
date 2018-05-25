<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        if(!isset($_SESSION)){
            session_start();
            if (empty($_SESSION['user']))
                $_SESSION['user']='请登陆';
        }
        $category=getCategory();
        $goods=getGoods();
        if(key($category)){
            echo $category[1];
            exit;
        }
        if(key($goods)){
            echo $goods[1];
            exit;
        }
        return view("Index-index",["category"=>$category[0],'goods'=>$goods[0]]);
    }
}