<SCRIPT LANGUAGE='PHP'>

require('func.securite.php');

if ($_SERVER['PHP_AUTH_PW'] == 'admin') {

?>
<script type="text/javascript">
    var connexion_URL = '/index.php?page=admin';
    window.location=connexion_URL;
</script>
<SCRIPT LANGUAGE='PHP'>
} else {
header('WWW-Authenticate: Basic realm="My Realm"');
header('HTTP/1.0 401 Unauthorized');

echo 'Connexion requise';
}
?>
