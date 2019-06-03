<?php 
	include 'conn.php';
	include 'passwd.php';
	
	$user = $_POST('user');
	$passwd = $_POST('passwd');

	# Searching the user
	$table = "user";
	$sql = "SELECT * FROM $table";
	$result = $conn->query($sql);

	$triger = false;
	$id_user = 0;

	while(($row = $result->fetch_assoc()) && (!$triger))
	{
        if ((row["nick"] == $user) && passCheck($passwd, row["passwd"]))
        {
        	$triger = true;
        	$id_user = row["id"];
        }
    }

    if ($triger)
    {
    	#post send with $id_user; (WIP)
    	header('Location: ../index.php') ;
    }
    else
    {
    	header('Location: ../error.html');
    }

	conn -> close();
	exit();
 ?>