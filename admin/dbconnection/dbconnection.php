<?php

class Dbconnection{

	protected $db;

public function __construct(){

   try{
    
      $this->db = new PDO("mysql:host=localhost;dbname=estore", "root", "");

   }catch(PDOExection $e){
   	

   }

}

}






?>