<header>
	<div class="headbar">
		
		<?php include 'menu.php'; ?>
		
	</div>
	<div class="clear"></div>
</header>

<?php 

$expiry = 1800;
    if (isset($_SESSION['LAST']) && (time() - $_SESSION['LAST'] > $expiry)) {
    	$_SESSION = array();

	 	unset($_SESSION);
        session_unset();
        session_destroy();
        header("Location:../../index.php");
    }
    $_SESSION['LAST'] = time();


 ?>