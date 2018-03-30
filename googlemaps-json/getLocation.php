<?php
      
    require 'dbconfig.php';
      
    try {
      
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
          
        $sth = $db->query("SELECT * FROM markers");
        $locations = $sth->fetchAll();
          
        echo json_encode( $locations );
          
    } catch (Exception $e) {
        echo $e->getMessage();
    }