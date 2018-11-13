<?php
  class Database {
    protected $host, $user, $password, $database, $connection;

    function __construct($host, $user, $password, $database, $connection) {
      $this->host = $host;
      $this->user = $user;
      $this->password = $password;
      $this->database = $database;
      $this->connection = $connection;

      mysql_connect($this->host,$this->user,$this->password, $this->database, $this->connection);
      mysql_select_db($this->database);
    }

    function query(sql){

    }

    function prepare(sql){

    }
  }


 ?>
