<?php 
	
	function query($sql)
	{
		$db = parse_url(getenv("DATABASE_URL"));
	
			$pdo = new PDO("pgsql:" . sprintf(
			    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
			    $db["host"],
			    $db["port"],
			    $db["user"],
			    $db["pass"],
			    ltrim($db["path"], "/")
											)
						);
			$stmt1= $pdo->prepare($sql);
            $stmt1->execute();
            $result =$stmt1->fetchAll();
            return $result;
	}

	function insert($sql)
	{
		$db = parse_url(getenv("DATABASE_URL"));
	
	$pdo = new PDO("pgsql:" . sprintf(
	    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	    $db["host"],
	    $db["port"],
	    $db["user"],
	    $db["pass"],
	    ltrim($db["path"], "/")
									)
				);
		$stmt= $pdo->prepare($sql);
		$stmt->execute();
	}
	function update($sql)
	{
		$db = parse_url(getenv("DATABASE_URL"));
	
	$pdo = new PDO("pgsql:" . sprintf(
	    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	    $db["host"],
	    $db["port"],
	    $db["user"],
	    $db["pass"],
	    ltrim($db["path"], "/")
									)
				);
		$stmt= $pdo->prepare($sql);
		$stmt->execute();
		
	}
	function delete($sql)
	{
		$db = parse_url(getenv("DATABASE_URL"));
	
	$pdo = new PDO("pgsql:" . sprintf(
	    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	    $db["host"],
	    $db["port"],
	    $db["user"],
	    $db["pass"],
	    ltrim($db["path"], "/")
									)
				);
		$stmt= $pdo->prepare($sql);
		$stmt->execute();
		
	}
		

	
?>