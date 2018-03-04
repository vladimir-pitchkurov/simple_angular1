<?php

include 'model/db.php';
$mydb = new db();
/*$data = json_decode(file_get_contents("php://input"));

$name = $data->mName;
$age = $data->mAge;
$this->db->query("INSERT INTO test (name, age) VALUES (?,?)", $name, $age);*/
if(isset($_POST['email']) && $_POST['email'] != ''){

}

//var_dump($_POST);
//var_dump(json_decode(file_get_contents('php://input'),true));;
$myJson = json_decode(file_get_contents('php://input'),true);
if(isset($myJson)){

$this_comments = $mydb->query('SELECT  text_comment FROM comments WHERE post_id = ?', $myJson['getcomm'])->all();
  ?>

<?=json_encode(($this_comments), JSON_UNESCAPED_UNICODE/*|JSON_FORCE_OBJECT*/);?>


<?
}

if(isset($_POST['add_email'])){
    //var_dump($_POST['add_email']);
  ?><h1>
<?=$_POST['add_email'];?>
    </h1>
<?}?>