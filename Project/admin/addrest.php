<?php
include_once("includes/header.php");
include_once("includes/functions.php");

if(isset($_POST['submit'])){

  $name =clean_text($_POST['name']);
  $des =$_POST['des'];
  $phone =$_POST['phone'];
  $img_menu =$_POST['img_menu'];
  $address = $_POST['address'];
  $res_type =$_POST['res_type'];
  $active = $_POST['active'];
  
  $q="INSERT INTO restaurants
   (name,des,phone,img_menu,address,res_type,active)
    VALUES ('".$name."','".$des."','".$phone."','".$img_menu."','".$address."','".$res_type."',".$active.") ";
  $reuslt=$db->query($q) or die($db->error);
  if($reuslt){
    echo "تم اضافة المطعم";
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
 <input type="text" name="name">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 الوصف:
		</td>

    <td id="addarticle">
 <input type="text" name="des">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 رقم الهاتف :
		</td>

    <td id="addarticle">
 <input type="text" name="phone">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 صورة المنيو :
		</td>

    <td id="addarticle">
 <input type="text" name="img_menu">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 العنوان :
		</td>

    <td id="addarticle">
 <input type="text" name="address">
		</td>
	</tr>
  </br>
  <tr> 
		<td id="addarticle">
 نوع المطعم :
		</td>

    <td id="addarticle">

            
 <select name="res_type">
<?php
$q="select  res_type,id from restaurants where active=1 ";
$reuslt=$db->query($q) or die($db->error);
if($reuslt){
  while($row=$reuslt->fetch_object()){
?>
<option value="<?php echo $row->id ;?>"><?php echo $row->res_type ;?></option>
<?php
  } 
}else {
  echo "this psge is not here";

  }

?>
 </select>
		</td>
	</tr>
  </br>
  
  
  <tr> 
		<td id="addarticle">
 مفعلة :
		</td>

    <td id="addarticle">
    نعم :
 <input type="radio" name="active" value="1">
 &nbsp; &nbsp; &nbsp;
 لا :
 <input type="radio" name="active" value="0">
		</td>
	</tr>
  <rt>
  <td id="addarticle">
    
   
       </td>
  <td id="addarticle">
    
 <input type="submit" name="submit" value="اضف قائمة">

		</td>
	</tr>

  </table>
</form>
<?php
}
?>


<? include_once("includes/footer.php");?>