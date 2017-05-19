<SCRIPT LANGUAGE='PHP'>

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

require('func.generic.php');

get_all_vars();
date_default_timezone_set(@date_default_timezone_get());

$slug = $page;

if($slug == 'index' || $slug == '') {
    $slug = "/";
    define(IS_HOME, true);
    define(IS_ADMIN, false);
    define(IS_POST, false);
} elseif(preg_match('/admin/', $slug)) {
    define(IS_HOME, false);
    define(IS_ADMIN, true);
    define(IS_POST, false);

    if (!$action) {
        $action = 'ajoute_post';
    }

    include($action.'.php');

} elseif(preg_match('/post/', $slug)) {
    define(IS_HOME, false);
    define(IS_ADMIN, false);
    define(IS_POST, true);
} else {
    define(IS_HOME, false);
    define(IS_ADMIN, false);
    define(IS_POST, false);
}

html_En_Tete();

?>

<?php contenu(); ?>

<?php
htmlmonFooter();
</SCRIPT>
