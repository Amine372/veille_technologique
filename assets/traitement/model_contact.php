<?php
class Model_Evenements
{
  protected $_message;
  protected $_nom;
  protected $_prenom;
  protected $_mail;
  protected $_envoyer;
  // Liste des getters

  public function message()
  {
    return $this->_message;
  }

  public function nom()
  {
    return $this->_nom;
  }
  public function prenom()
  {
    return $this->_prenom;
  }
  public function mail()
  {
    return $this->_mail;
  }
  public function envoyer()
  {
    return $this->_envoyer;
  }
  //Partie Setter
  public function setmessage($message)
  {
    $message = (int) $message;

    if ($message >= 1 && $message <= 100)
    {
      $this->_message = $message;
    }
  }
  public function setnom($nom)
  {
    $nom = (int) $nom;

    if ($nom >= 1 && $nom <= 100)
    {
      $this->_nom = $nom;
    }
  }
  public function setprenom($prenom)
  {
    $prenom = (int) $prenom;

    if ($prenom >= 1 && $prenom <= 100)
    {
      $this->_prenom = $prenom;
    }
  }
  public function setmail($mail)
  {
    $mail = (int) $mail;

    if ($mail>= 1 && $mail <= 100)
    {
      $this->_mail = $mail;
    }
  }
  public function setenvoyer($envoyer)
  {
    $envoyer = (int) $envoyer;

    if ($envoyer >= 1 && $envoyer<= 100)
    {
      $this->_envoyer = $envoyer;
    }
  }
}
?>
