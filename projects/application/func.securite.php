<?
    function checkIfUserIsLoggedIn() {
        if($_SERVER['PHP_AUTH_PW'] != 'admin') {
            ?>
            <script type="text/javascript">
                var connexion_URL = '/index.php?page=admin&action=connexion';
                window.location=connexion_URL;
            </script>
            <?php
        }
    }
