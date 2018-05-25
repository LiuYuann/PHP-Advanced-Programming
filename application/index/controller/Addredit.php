<?php
namespace app\index\controller;

class Addredit
{
    public function index()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        return view("User-addrEdit");
    }
}