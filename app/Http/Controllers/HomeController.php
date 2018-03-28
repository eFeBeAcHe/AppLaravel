<?php
//declaramos el namespace
namespace App\Http\Controllers;

class HomeController extends Controller 
{
//metodos
   public function home() {
       return 'Primer Controller !!!';
   }
}