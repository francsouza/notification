<?php
/**
 * Created by PhpStorm.
 * User: fransouza
 * Date: 10/06/2018
 * Time: 12:13
 */

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.theconnect.com.br", "francisco@theconnect.com.br", "Vanessa0312", "ssl", '465', "contato@theconnect.com.br", "Equipe The Connect");
$novoEmail->sendMail("Assunto de Teste", "<p>Corpo da mensagem de <b>teste</b>!</p>", "francisco.ti@morrodopilar.mg.gov.br", "Teste Envio", "fransouza.ti@gmail.com", "Francisco - Mac Os X");

var_dump($novoEmail);
