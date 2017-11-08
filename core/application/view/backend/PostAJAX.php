<?php
function GetNameSubCategoryByParent_id($id_parent){
	include_once "../../model/manager_user.php";
	$Obj=new Model_qlsv();
	$data=	$Obj->GetSubCategoryByParent_id($id_parent);
	return $data;

}

if(isset($_REQUEST["StringArray"])){
function dateNow(){
	$datetime = new DateTime();
	 
	return $datetime->format('Y-m-d H:i:s');
}

isset($_REQUEST["StringArray"])?$StringArray=$_REQUEST["StringArray"]:1;

$link=mysqli_connect('localhost','root','');
mysqli_select_db($link,'projectbig');
 $array=explode("*||*",$StringArray);
 
 $tilte=$array[0];
 $id_user=$array[1];
 $UserName=$array[2];
$var=stripslashes($array[3]);
 $var=htmlentities($var);
 $var=strip_tags($var);
 $Content=mysqli_real_escape_string($link,$var);
 var_dump($Content);
 $DateUp=dateNow();
 if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
$sql="INSERT INTO post ( UserName, Title,Content,view,DateUp,id) VALUES ('$UserName','$tilte','$Content',1,'$DateUp',$id_user)";
		
		
		mysqli_query($link,$sql);
		$id_post= mysqli_insert_id($link);
		$test=explode(',',$_REQUEST["StringCheck"]);
		$sql="";
		foreach ($test as $key => $category_id) {
		$sql="INSERT INTO relationship (id_post, category_id) VALUES ('$id_post','$category_id');";
		mysqli_query($link,$sql);
}

echo "SUCCES POST NOW YOU WAIT EDIT OF ADMIN CHECK POST YOU VIEW UP ";





}
if(isset($_REQUEST["StringIdCategory"])){
$StringIdCategory=$_REQUEST["StringIdCategory"];
$string="";
$array=explode("|",$StringIdCategory);
unset($array[count($array)-1]);


foreach ($array as $key => $value) {
	$data=GetNameSubCategoryByParent_id($value);
	
		foreach ($data as $key2 => $value2) {
			$dem++;
			$stringTest="<option id_category='".$value2["id_category"]."'>". $value2["name_category"]."</option>";

			echo $stringTest;
	

		

		}
		
	


	
}


	// GetNameSubCategoryByParent_id($);

}

?>