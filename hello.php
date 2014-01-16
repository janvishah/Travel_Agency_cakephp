<?php

   $connect = mysql_connect("127.0.0.1","root","") or die("Could not connect");
   mysql_select_db("travel_agency") or die("Could not find db");

   echo "hello world";

?>