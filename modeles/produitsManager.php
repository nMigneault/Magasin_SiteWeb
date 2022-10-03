<?php

require_once("Manager.php");

class produitsManager extends Manager
{
	function getTousLesProduits()
	{
		$pdo = $this->connexionBD();
		$stmt = $pdo->prepare('SELECT * FROM products ORDER BY name ASC');
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}
}