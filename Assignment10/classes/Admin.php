<?php
require_once 'classes/PdoMethods.php';

class Admin extends PdoMethods {
	
public function login($post){
   
	$pdo = new PdoMethods();
	$sql = "SELECT email, password FROM admins WHERE email = :email";
	$bindings = array(
		array(':email', $post['email'], 'str')
	);

	$records = $pdo->selectBinded($sql, $bindings);

	/** IF THERE WAS AN RETURN ERROR STRING */
	if($records == 'error'){
		return "There was an error logging it";
	}
	
	/** */
	else{
		if(count($records) != 0){
			/** IF THE PASSWORD IS NOT VERIFIED USING PASSWORD_VERIFY THEN RETURN FAILED, OTHERWISE RETURN SUCCESS, IF NO RECORDS ARE FOUND RETURN NO RECORDS FOUND. */
			if(password_verify($post['password'], $records[0]['password'])){
				session_start();
				$_SESSION['access'] = "accessGranted";
				return "success";
			}
			else {
				return "There was a problem logging in with those credentials";
			}
		}
		else {
			return "There was a problem logging in with those credentials";
		}
	}
}

}