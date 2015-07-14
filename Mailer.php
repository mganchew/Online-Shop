<?php
/**
 * Created by PhpStorm.
 * User: mladen
 * Date: 15-7-14
 * Time: 16:49
 */
require_once 'vendor/autoload.php';


$mailer = new PHPMailer(true);

// Send a mail from Bilbo Baggins to Gandalf the Grey

// Set up to, from, and the message body.  The body doesn't have to be HTML; check the PHPMailer documentation for details.
$mailer->Sender = 'ev0nappy@abv.bg';
$mailer->AddReplyTo('m.ganchew@gmail.com', 'Bilbo Baggins');
$mailer->SetFrom('ev0nappy@abv.bg', "Monique's Treasures");
$mailer->AddAddress('m.ganchew@gmail.com');
$mailer->Subject = 'Test';
$mailer->isHTML(true);
$mailer->MsgHTML('<p>This is a test mail from Monique\'s Treasures!</p><p style="color:red"><a href="https://www.facebook.com/moniqueTreasures?fref=ts">-Monique\'s Treasures, Online shop for Treasures</a></p>');

// Set up our connection information.
$mailer->IsSMTP();
$mailer->SMTPAuth = true;
$mailer->SMTPSecure = 'ssl';
$mailer->Port = 465;
$mailer->Host = 'smtp.abv.bg';
$mailer->Username = 'ev0nappy@abv.bg';
$mailer->Password = 'tupsiwe';

// All done!
$mailer->Send();

?>