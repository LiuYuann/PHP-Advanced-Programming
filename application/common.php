<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function getCategory(){
    try{
        $sql="select cname from itcast_category";
        $pdo = new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
        $result=$pdo->prepare($sql);
        $result->execute();
        if($result->rowCount()){
            while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $data[]=$row['cname'];
            }
            $fanhui=array(0=>$data);
        }
        return $fanhui;
    }catch(PDOException $e){
        //输出异常信息
        echo $e->getMessage().'<br>';
    }
}
function getGoods(){
    try{
        $sql="select gname,price,thumb from itcast_goods";
        $pdo = new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
        $result=$pdo->prepare($sql);
        $result->execute();
        if($result->rowCount()){
            $i=1;
            while($i<5&&$row=$result->fetch(PDO::FETCH_ASSOC)  ){
                $data[]=$row;
                $i++;
            }
            $fanhui=array(0=>$data);
        }
        return $fanhui;
    }catch(PDOException $e){
        //输出异常信息
        echo $e->getMessage().'<br>';
    }
}
function checkUserPwd($user,$pwd){
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
        $sql="select * from itcast_member where user=:user and pwd=:pwd ";
        $result=$pdo->prepare($sql);
        $result->bindParam(":user", $user);
        $result->bindParam(":pwd", $pwd);
        $result->execute();
        if ($result->rowCount()){
            $row=$result->fetch();
            $data[0]=$row['mid'];
        }else {
            $data = array(1=>"not found this user");
        }
        return $data;
    }catch(PDOException $e){
        //输出异常信息
        echo $e->getMessage().'<br>';
    }
}
// 获得购物车详情
function getCart($mid){
    try{
        $sql="select * from itcast_shopcart_goods where mid=:mid";
        $pdo = new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
        $result=$pdo->prepare($sql);
        $result->bindParam(":mid", $mid);
        $result->execute();
        $allData=[];
        if($result->rowCount()){
            while($row=$result->fetch()){
                $data['gname']=$row['gname'];
                $data['num']=$row['num'];
                $data['price']=$row['price'];
                $data['gid']=$row['gid'];
                $allData[]=$data;
            }
            return (array(0=>$allData));
        }
        else
            return (array(1=>"not found this cart!"));
    }catch(PDOException $e){
        //è¾åºå¼å¸¸ä¿¡æ¯
        return (array(1=>($e->getMessage())));
        //echo $e->getMessage().'<br>';
    }
}

function goodsDetail($gid,$mid){
    try{
        $sql="select gname,price,thumb,identifier,cname,address from itcast_goods,itcast_member,itcast_category where mid=:mid and gid=:gid and itcast_goods.cid=itcast_category.cid";
        $pdo = new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
        $result=$pdo->prepare($sql);
        $result->execute(array(':mid'=>$mid,':gid'=>$gid));
        $allData=[];
        if($result->rowCount()){
            $row=$result->fetch();
            
            return (array(0=>$row));
        }
        else
            return (array(1=>"not found this goods!"));
    }catch(PDOException $e){
        return (array(1=>($e->getMessage())));
    }
}

function delCartgoods($mid,$gid){
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=web;chastset=utf8","root","");
        $sql="delete  from itcast_shopcart where mid=:mid and gid=:gid";
        $result=$pdo->prepare($sql);
        $result->execute(array(':mid'=>$mid,':gid'=>$gid));
        if($result->rowCount()){
            return(array(0=>"ok"));
        }else{
            return(array(1=>"系统错误！！！"));
        }
    }catch(PDOException $e){
        return(array(1=>$e->getMessage()));
    }
}