<?php

$hostname = "localhost";
$database = "pos3";
$username = "root";
$password = "ventrinet";
$connect = mysqli_connect($hostname, $username, $password, $database);

if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}

if(function_exists($_GET['function'])) {
         $_GET['function']();
      }   
   function get_menu()
   {
      global $connect;      
      $query = $connect->query("SELECT * FROM menu");            
      while($row=mysqli_fetch_object($query))
      {
         $data[] =$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Success',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }  
?>