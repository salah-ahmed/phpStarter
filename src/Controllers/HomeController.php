<?php

namespace App\Controllers;

class HomeController
{

   public function index()
   {

      if (isset($_SESSION['user'])) {
         return require "src/Views/userPage.php";
      }

      // TODO: extract this to helpers
      return  header("Location: /login");
   }
}
