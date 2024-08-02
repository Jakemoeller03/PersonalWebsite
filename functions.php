<?php

function db_connect($db)
{
	$dbUserName="webuser";
	$dbPassword="vqe8Ewtsh2nNMxvn";
	$dblink=new mysqli($host,$dbUserName,$dbPassword,$db);
	return $dblink;
}

function redirect ( $uri )
{ ?>
	<script type="text/javascript">
	document.location.href="<?php echo $uri; ?>";
	</script>
<?php die;	
}
?>