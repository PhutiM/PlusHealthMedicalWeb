<?php
   $servername = "127.0.0.1";
   $dbname = "id11292783_plushealthdb";
   $dbUserName = "id11292783_root";
   $password="";
   define('DB_SERVER', $servername);
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_DATABASE', 'PlusHealthDB');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
