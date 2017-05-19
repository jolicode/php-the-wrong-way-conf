<SCRIPT LANGUAGE='PHP'>

require('func.securite.php');

checkIfUserIsLoggedIn();

if ($TITRE && $contenu) {
    MYSQL_QUERY ("INSERT INTO posts (titre, contenu, date) values ('".$TITRE."', '".$contenu."', '".date('Y-m-d h:i:s')."')");

    ECHO "Article ajouté en base!";

    session_start();
    $_SESSION['post_id'] = []; // On invalide le cache !
} else {

?>

<FORM action="/index.php?page=admin&action=ajoute_post">
<INPUT type=hidden name=page value="admin">
<INPUT type=hidden name=action value="ajoute_post">
Titre: <INPUT TYPE="text" NAME="TITRE"><br/>
Contenu: <TEXTAREA NAME="contenu"></TEXTAREA><br/>
<INPUT TYPE="SUBMIT">
</FORM>
<SCRIPT LANGUAGE='PHP'>
}
?>
