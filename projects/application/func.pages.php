<?php

function contenu()
{
    if (IS_HOME) html_acceuil();

    if(IS_POST) {
        if ($_GET['id']) { html_post($_GET['id']); } else {
            html_Blog();
        }
    }
}



function html_acceuil() {
    print "<P>COUCOU mon blog est ouvert ! héhéhéhéhé !</P>";
    echo '<A HREF="/index.php?page=post">Lien vers le blog</A>';
}

function html_Blog() {
    GET_posts();
    echo "<UL>";
    foreach($_SESSION['post_id'] as $i => $ID) {
        ?>
        <LI>
            <H2><a HREF="/index.php?page=post&id=<?=$ID?>"><?=$_SESSION['post_titre'][$i]?></a> <?php if ($i == 0): ?><img src="/images/new2.gif"><? endif ?></H2>
            <span>Posté le <?=$_SESSION['post_date'][$i]?></span>
            <P>
                <?=$_SESSION['post_contenu'][$i]?>
            </P>
        </LI>
        <?php
    }
    echo "</UL>";
}

function html_post() {
    $query= MYSQL_QUERY ("SELECT * FROM posts WHERE id = ". $_GET["id"] ." ORDER BY id DESC");
    $resultat=MYSQL_FETCH_ARRAY($query);
?>
        <H2><?=$resultat['titre']?></H2>
        <span>Posté le <?=$resultat['date']?></span>
        <P>
            <?=$resultat['contenu']?>
        </P>
    <?php
}
