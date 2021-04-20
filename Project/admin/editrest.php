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
  $id=$_POST['id'];

 
  $q="UPDATE restaurants SET

    name='".$name."',
    des='".$des."',
    phone='".$phone."',
    img_menu='".$img_menu."',
    address='".$address."',
    res_type='".$res_type."',
    active=".$active."
    
		 WHERE id=".$id;
	
    
    
  $reuslt=$db->query($q) or die($db->error);
  if($reuslt){
    echo "تم تعديل المطعم";
  }

  

}else{
    $id=(isset($_GET['id']))?(int)$_GET['id']:0;	
	$q="SELECT * FROM restaurants WHERE id=".$id;
	$reuslt=$db->query($q) or die($db->error);
	if($reuslt->num_rows==1){
		while($row=$reuslt->fetch_object()){

   

  ?>
<form action="" method="post">
<table id="addarticle" width="600px">
<tr>
<td id="addarticle">
    <input type="hidden" name="id" value="<?php echo $row->id;?>">
		</td>
    </tr>
<tr>
		<td id="addarticle">
 الاسم :
		</td>

    <td id="addarticle">
 <input type="text" name="name" value="<?php echo $row->name;?> ">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 الوصف:
		</td>

    <td id="addarticle">
 <input type="text" name="des" value="<?php echo $row->des;?> ">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 رقم الهاتف :
		</td>

    <td id="addarticle">
 <input type="text" name="phone" value="<?php echo $row->phone;?> ">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 صورة المنيو :
		</td>

    <td id="addarticle">
 <input type="text" name="img_menu" value="<?php echo $row->img_menu;?> ">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 العنوان :
		</td>
   

    <td id="addarticle">
 <input type="text" name="address" value="<?php echo $row->address;?> ">
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
  echo " not here ";

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
    <input type="radio" name="active"  <?php if($row->active =='1') echo "checked=\"checked\"";?> value="1">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
لا: 
<input type="radio" name="active" <?php if($row->active =='0') echo "checked=\"checked\"";?> value="0">
</td>
	</tr>

  <rt>
  <td id="addarticle">
    
   
       </td>
  <td id="addarticle">

 <input type="submit" name="submit" value="اضف التعديل">

		</td>
	</tr>

  </table>
</form>
<?php
}
}else{
	echo "غير موجود ";
}
?>
<?php
}
?>


<? include_once("includes/footer.php");?>
