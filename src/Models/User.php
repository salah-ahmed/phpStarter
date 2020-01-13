<?php

namespace App\Models;

// TODO add IModel interface
class User
{
   private $tableName = "users";

   public $name;
   public $email;
   public $password;

   public function getTableName()
   {
      return $this->tableName;
   }
}
