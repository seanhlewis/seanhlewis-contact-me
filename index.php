require_once 'Mail.php';

$wgSMTP = array(
    'host' => 'tls://smtp.sendgrid.net',
    'IDHost' => 'heroku.com',
    'port' => 587,
    'username' => getenv("SENDGRID_USERNAME"), 
    'password' => getenv("SENDGRID_PASSWORD"),
    'auth' => true
 );
