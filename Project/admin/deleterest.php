<?php
include_once("includes/header.php");
?>

<?php

//لو في بيانات في جيت 
$id=(isset($_GET['id']))?(int)$_GET['id']:0;
if($id==0){
 	echo "error";
}else{
	
	$q="SELECT id FROM restaurants WHERE id=".$id;
	$reuslt=$db->query($q) or die($db->error);
	if($reuslt->num_rows ==1){
	$q="DELETE FROM restaurants WHERE id=".$id;
	$reuslt=$db->query($q) or die($db->error);
	if($reuslt){
		echo "<br />";
		echo "تم حذف المطعم";
		echo "<br />";
		
	}else{
	echo "لم يتم الحذف";
}

	}else{
		echo " غير موجودة";
	}
}

?>




<?php include_once("includes/footer.php");?>