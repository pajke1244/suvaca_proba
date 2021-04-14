<?php 
require_once("../../config.php");
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query=query("DELETE FROM categories where cat_id=" . escape_string($id) . " ");
	confirm($query);
	set_message("Category DELETED");
	redirect("../../../public/admin/index.php?categories");
}else{
	redirect("../../../public/admin/index.php?categories");
}


?>