<?php
class aControl{
	function loggedIn() {
		if(isset($_SESSION['id']))return true;
		else return false;
	}
	function accessResource($resource_user_id) {
		if($_SESSION['id']==$resource_user_id)return true;
		else return false;
	}
}
?>
