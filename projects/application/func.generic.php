<SCRIPT LANGUAGE='PHP'>

//error_reporting(0);

mysql_connect("database","root","poop");
mysql_select_db("app") or die("La Base est Down...");

require('db.inc.php');
require('func.pages.php');

function get_all_vars() {
    $array=array('_GET', '_POST', '_COOKIE');
    foreach($array as $key => $var) {
        global $$var;
        foreach ($$var as $k => $v) {
            global $$k;
            $$k=$v;
        }
    }
}

function html_En_Tete(){
    print "<HTML><HEAD><TITLE>Mon Blog Perso</TITLE>
  <STYLE type='text/css'>".file_get_contents('main.css')."</STYLE>
    </HEAD><BODY><H1>Le BLOG DE TAYLOR !</H1><BR>
    <IMG SRC='/images/flames.gif'><BR><BR>";
}


function htmlmonFooter()
{
    include('https://gist.github.com/pyrech/f14274861bcf4c2a1524396e70f9dc16/raw/2b0f6247bd84a30c4ef3b4a7e1c1fbe4fa99090a/compteur-live.php');

    print "<IMG SRC='/images/geocities.jpg'><IMG SRC='/images/counter.gif'></HTML>";
}
