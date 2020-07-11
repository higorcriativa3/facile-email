<?php
//Pull '$base_url' and '$signin_url' from this file
include 'globalcon.php';

//Set this for global site use
$site_name = 'Facile';

//EMAIL SETTINGS
//SEND TEST EMAILS THROUGH FORM TO https://www.mail-tester.com GENERATED ADDRESS FOR SPAM SCORE
$from_email = 'contato@criativa3.com'; //Webmaster email
$from_name = 'Area poisson'; //"From name" displayed on email

//Find specific server settings at https://www.arclab.com/en/kb/email/list-of-smtp-and-pop3-servers-mailserver-list.html
$mailServerType = 'smtp';
//IF $mailServerType = 'smtp'
$smtp_server = 'mail.criativa3.com';
$smtp_user = 'contato@criativa3.com';
$smtp_pw = 'drumxdjbass1092';
$smtp_port = 465; //465 for ssl, 587 for tls, 25 for other
$smtp_security = 'ssl';//ssl, tls or ''

//Makes readable version of timeout (in minutes). Do not change.
$timeout_minutes = round(($login_timeout / 60), 1);
