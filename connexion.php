<?php

try
{

$bdd = new PDO('mysql:host=localhost;dbname=Base_Domotic', 'utilisateur', 'mdp',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch (Exception $e)
{
		die('Erreur : ' . $e->getMessage());
}

?>
