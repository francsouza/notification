<?php
/**
 * Created by PhpStorm.
 * User: fransouza
 * Date: 10/06/2018
 * Time: 12:13
 */

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl", 'port (465)', "from@email.com", "From Name");
$novoEmail->sendMail("Subject", "Content", "reply@email.com", "Reply Name", "address@email", "Address Name");

var_dump($novoEmail);
