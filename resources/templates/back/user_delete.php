<?php 
require_once("../../config.php");
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query=query("DELETE FROM users where users_id=" . escape_string($id) . " ");
	confirm($query);
	set_message("USER DELETED");
	redirect("../../../public/admin/index.php?users");
}else{
	redirect("../../../public/admin/index.php?users");
}


?>