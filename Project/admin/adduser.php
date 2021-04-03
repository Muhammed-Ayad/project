<?php
include_once("includes/header.php");
include_once("includes/functions.php");



if(isset($_POST['submit'])&& !empty($_POST['username'])&&($_POST['password'])){

  $name =clean_text($_POST['username']);
  $password =clean_text($_POST['password']);
  $password2 =clean_text($_POST['password2']);
  if($password!=$password2){  
    echo "كلمة المرور غير صحيحة";
}else{
  
  $q="INSERT INTO admin (username,password) VALUES ('".$name."','".$password."') ";
  $reuslt=$db->query($q) or die($db->error);
  if($reuslt){
    echo "تم اضافة مستخدم";
  } 
}
}else{

   
  ?>
<form action="" method="post">
<table id="addarticle" width="600px">

<tr>
		<td id="addarticle">
 الاسم :
		</td>

    <td id="addarticle">
 <input type="text" name="username">
		</td>
	</tr>
  </br>
  <tr> 
		<td id="addarticle">
 كلمة المرور :
		</td>

    <td id="addarticle">
 <input type="text" name="password">
		</td>
	</tr>
  </br>
  <tr> 
		<td id="addarticle">
تكرار كلمة المرور: 		</td>

    <td id="addarticle">
 <input type="text" name="password2">
		</td>
	</tr>
  </br>

  <tr>
  <td>
    
		</td>
	</tr>

  <tr>
  <td>
    
 <input type="submit" name="submit" value="اضف مستخدم">

		</td>
	</tr>

  </table>
</form>
<?php
}
?>


<? include_once("includes/footer.php");?>