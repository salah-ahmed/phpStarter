<?php

namespace App\Controllers;

class AuthController
{

   public function loginView()
   {
      return require "src/Views/login.php";
   }

   public function login()
   {
      // TODO if already logged in redirect
      // fetch from db if match $_POST add to session and redirect
      // if doesn't match redirect to register
   }

   public function registerView()
   {
      return require "src/Views/register.php";
   }

   public function register()
   {
      // validate input types
      // check if user email already registered
      // create user and redirect to home

   }
}
