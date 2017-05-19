<?


FUNCTION GET_posts() /**
 * Récupère les posts dans la base de données et les mets en session pour de meilleures performances
*/
{
    session_start();
    if (empty($_SESSION['post_id'])) {
        $sql = 'select * from posts order by id;';
        $requete = MYSQL_QUERY ("$sql");

        $i = 0;
        while ($resultat=MYSQL_FETCH_ARRAY($requete)) {
            $_SESSION['post_id'][$i] = $resultat['id'];
            $_SESSION['post_titre'][$i] = $resultat['titre'];
            $_SESSION['post_contenu'][$i] = $resultat['contenu'];
            $_SESSION['post_date'][$i] = $resultat['date'];
            $i++;
        }
        echo(MYSQL_ERROR());
        MYSQL_CLOSE();
    }
}
