<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CodeIgniter\Controllers;

/**
 * Description of Pages
 *
 * @author Administrator
 */
class Pages extends Controller

{
   public function index()
   {
       return view('welcome_message');
   }
   public function view($page = 'home'
           ){
       
   }
}
