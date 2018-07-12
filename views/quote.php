<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 14-Jun-17
 * Time: 6:50 AM
 */
include_once "../db/db.conn.php";



    $sql="SELECT quote, author FROM quotes ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    echo"  ".$row["quote"]
	         ." " 
			 .$row["author"]."</br>";


?> 