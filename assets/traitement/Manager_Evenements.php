<?php
require_once('Model_Evenements.php');
class Manager_Evenements
{

  protected $_message;
  protected $_nom;
  protected $_prenom;
  protected $_mail;
  protected $_envoyer;

  public function Evenements()
  {

    $bdd = new PDO('mysql:host=localhost;dbname=projet_lycee','root','');
    $bdd->exec("SET CHARACTER SET utf8");
    // SELECT * FROM Users where 0
    // execute()
    $req = $bdd->prepare('SELECT titre, description, date, Comm, utilisateur.nom, utilisateur.prenom from evenements INNER JOIN utilisateur ON evenements.id_utilisateur = utilisateur.id ORDER BY `evenements`.`id` DESC');
    $req->execute();
    $donnee = $req->fetchall();
    if ($donnee)
    {
      return $donnee;
    }

}
}


 ?>
