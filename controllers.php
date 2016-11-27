<?php



function getRecordsByField($entity, $field, $value){
	global $dbc;
	$query = "SELECT * FROM $entity WHERE $field='$value'ORDER BY id ASC";
	
	$results = mysqli_query($dbc, $query);
	if($results){
		return $results;
	}
}
function getAllStuff(){
	global $dbc;
	$query= "SELECT * from stuff";
	$results = mysqli_query($dbc, $query);
	return $results; 




}


function addStuff($room, $owner, $finder, $status, $description){
global $dbc;


$query = "INSERT INTO stuff(create_date, room,status, description, owner, finder) VALUES (NOW(), '$room',  '$status', '$description', '$owner', '$finder')";
$results = mysqli_query($dbc, $query);
if(!$results){

echo 'Error adding item!';
}


}



function deleteStuff($id){
	global $dbc;
	$query = "DELETE FROM stuff where id = $id";
	$results = mysqli_query($dbc, $query);
	if(!$results){
		echo "Erorr deleting item";
	}
}

function validateName($name){
    global $dbc;
    if(empty($name)){
        return -1;
    }
    $query = 'SELECT id, name FROM users WHERE name =$name';
    $results = mysqli_query($dbc, $query);
    
    if(mysqli_num_rows ($results) ==0){
        return -1;
    }
    $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
    $uid = $row['id'];
    return intval($uid);
}



function updateStuffStatus($id, $status){
	global $dbc;

	$query = "UPDATE stuff SET status = '$status', update_date = NOW() where id = $id";

	$results = mysqli_query($dbc, $query);
	


}


function load($page = "admin_login.php"){
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	$url = rtrim($url, '/\\');
	$url .= '/' . $page;
	header("Location: $url");
	exit();
}


function authenticate($email = '', $pass = ''){
	global $dbc;

	$errors = array();
	if(empty($email)){

		$errors[] = "Please enter your email address!";
	}
	else{

		$trimmed_email = mysqli_real_escape_string($dbc, trim($email));
	}

	if(empty($pass)){

		$errors[] = "Please enter your password!";
	}
	else{
		$trimmed_pass = mysqli_real_escape_string($dbc, trim($pass));
	}


if(empty($errors)){
	$query = "SELECT user_id, first_name, last_name FROM users where email = '$trimmed_email' AND  pass= SHA('$trimmed_pass')";
	$result = mysqli_query($dbc, $query);

	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		return array(true, $row);
	}
	else{
		$errors[] = "Email address and password not found";
	}


}
else{
}

return array(false, $errors);

}

?>