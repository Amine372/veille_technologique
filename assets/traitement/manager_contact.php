<?php
require_once('model_contact.php');
class manager_contact
{

  protected $_message;
  protected $_nom;
  protected $_prenom;
  protected $_mail;
  protected $_envoyer;

  public function contact()
  {
    if (isset($envoyer))
    {

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "nakhila@orange.fr";
        $to = "nakhila@orange.fr";
        $subject = $prenom."vous as envoyé un mail par l'addresse".$mail;
        $message = $message;
        $headers = "De :" . $mail;
        mail($to,$subject,$message, $headers);
        echo "L'email a été envoyé.";
    }
}
}


 ?>
