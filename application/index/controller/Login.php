<?php
namespace app\index\controller;
use think\Controller;
class Login
{
    public function index()
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
        if(isset($_POST["sm"])){
            $user=$_POST["user"];
            $pwd=$_POST["pwd"];
            $mid=checkUserPwd($user, $pwd);//获取该用户mid
            if(key($mid)){
                echo $mid[1];
                return view("User-Login");
            }
            else{
                $_SESSION['user']=$user;
                $_SESSION['mid']=$mid[0];
                return action('cart/index');
            }
        }
//         elseif(isset($_SESSION))
//         {
//             if (!isset($_SESSION['mid']) or $_SESSION['user']=='请登陆'){
//                 return view("User-Login");
//             }
//             else{
//                 var_dump($_SESSION);
//                 return action('cart/index');
//             }
//         }
        else{
            return view("User-Login");
        }
    }
}