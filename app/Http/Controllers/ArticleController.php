<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
     public function index(){
        return 'selamat datang';
    }

     public function about(){
        return '2141720044 --- Alfina Salsabilla';
    }

     public function articles($id){
        return "halaman artikel dengan ID ($id)";
    }
}
