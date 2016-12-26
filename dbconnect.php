<?php

	 $DBhost = "localhost";
	 $DBuser = "id358014_admin";
	 $DBpass = "Inc0rr3ct";
	 $DBname = "id358014_register";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
