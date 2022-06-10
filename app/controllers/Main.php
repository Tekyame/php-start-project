<?php


namespace App\controller;

use League\Plates\Engine;

class Main{

    private  $plates;

    public function __construct()
    {
        $this->plates = new Engine(dirname(__DIR__).'/view');
    }
    public function index(){

          echo $this->plates->render('home');
          
    }
}