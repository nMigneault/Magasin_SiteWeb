<?php

require_once("Manager.php");

class produitManager extends Manager
{
	function getUnProduit($idProduit)
	{
		$pdo = $this->connexionBD();

		$req = $pdo->prepare('SELECT * FROM products WHERE id = :product');
		$req->execute(array(
			"product" => $idProduit
		));
		return $req->fetch(PDO::FETCH_ASSOC);

	}
}