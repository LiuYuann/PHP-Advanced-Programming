<?php
namespace app\index\controller;

class Cart
{
    public function index()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        $cart=getCart($_SESSION['mid']);
        return view("cart/Cart-index",["cart"=>$cart]);
    }
    public function addredit()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        return view("User-addrEdit");
    }
    public function goodsdetail()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        $gid=$_GET['gid'];
        $goods=goodsDetail($gid,$_SESSION['mid']);
        if(key($goods)){
            echo $goods[1];
            exit;
        }
        return view("Index-goods",["goods"=>$goods[0]]);
    }
    public function delcart()
    {
        $gid = $_GET['gid'];
        $mid = $_GET['mid'];
        $msg=delCartgoods($mid,$gid);
        echo json_encode($msg); 
    }
}