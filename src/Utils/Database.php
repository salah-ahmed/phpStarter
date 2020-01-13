<?php

namespace App\Utils;

use \PDO;

class Database
{
   private $pdo;

   public function __construct()
   {
      // TODO: user .env file for database setting
      $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=simpleAuth', 'root', '');
   }

   public function getById($model, $id)
   {
      $queryTemplate = "select * from %s where id = %s limit 1";

      $statement = $this->pdo->prepare(sprintf($queryTemplate, $model->getTableName(), $id));
      $statement->execute();

      // if you want you can do FETCH_CLASS and pass model className
      return $statement->fetch(PDO::FETCH_ASSOC);
   }
}
