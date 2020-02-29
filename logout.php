<?php 
    session_start();
    include('config.php');

    unset($_SESSION['user']);
    session_destroy();

    echo '
		<script>window.location.href="index.html"</script>
	'

?>