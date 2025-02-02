<?php
use PDO ;
abstract class Crud
{
   protected $connection;
   protected $query;
   protected $stmt;
   public function __construct($dsn, $username, $password)
   {
      $this->connection = new PDO($dsn, $username, $password);
   }
   abstract public function index(string $table, string|array $columns = "*");
   abstract public function store();
   public function execute()
   {
      $this->stmt->execute();
      return $this;
   }

   public function get()
   {
      $data = $this->stmt->fetchAll();
      print_r($data);
   }
}
