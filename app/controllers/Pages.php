<?php
class Pages extends Controller{
   public function __construct(){
   }
   public function index(){
      $data = [ 
         'title' => 'SabbirMVC',
   ];
      $this->view("pages/index", $data);
   }

   public function about(){
      $data = [ 
         'title' => 'About Us'
      ];
      $this->view("pages/about", $data);
   }
}