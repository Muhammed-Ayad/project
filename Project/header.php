 <?php session_start(); ?>
<?php
error_reporting(E_ALL);
include_once ("includes/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
<title>مطاعم المنصورة</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
</head>
<body>
<div id="wrap">
<div id="header">
<h1><a href="#">مطاعم المنصورة</a></h1>
<h2> شرقية -ايطالية -شاورما -بحرية -وجبات سريعة</h2>
<h3></h3>
</div>

<div id="top"> </div>
<div id="contentt">
<div id="headermenu"> 
<div class="headerm">
<ul>
<li><a href="index.php">الرئيسية</a></li> 
<li><a href="#">نبذه عنا</a></li> 
<li><a href="index.php">المطاعم</a></li>

</ul>
</div>
</div>

<div class="left">
<h2> مطاعم شرقية </h2>
<ul>

<?php
 
//  restaurants
 $q="select * from restaurants where res_type='oriental' and active=1 ";
 $reuslt=$db->query($q) or die($db->error);
 
 while($row=$reuslt->fetch_object()){

	 
 echo "<li><a href='index.php?p={$row->id}' class='selected' title='{$row->des}'> {$row->name} </a>
 </li>";
}

?>


</ul>

<h2> مطاعم شاورما</h2>
<ul>

<?php
 
 $q="select * from restaurants where res_type='shawerma' and active=1 ";       
 $reuslt=$db->query($q) or die($db->error);
 
 while($row=$reuslt->fetch_object()){

	 
	echo "<li><a href='index.php?p={$row->id}' class='selected' title='{$row->des}'> {$row->name} </a>
	</li>";
}


?>




</ul>

<h2>مطاعم ايطالية </h2>
<ul>

<?php
 
 $q="select * from restaurants where res_type='italian' and active=1 ";  

		$reuslt=$db->query($q) or die($db->error);
		
		while($row=$reuslt->fetch_object()){

			
			echo "<li><a href='index.php?p={$row->id}' class='selected' title='{$row->des}'> {$row->name} </a>
			</li>";
	}


	?>


</ul>

<br />
<?php
if (isset($_SESSION['log']))

{
echo "<h2>لوحة التحكم</h2>";
echo "مرحباً بك يا"."<br />";
echo $_SESSION['name'];
echo "<br />";
//echo "<a href="logout.php" > تسجيل الخروج </a>";
echo "<form method='POST' action='logout.php'>";
echo "<input type='submit' name='submit' value='تسجيل الخروج'>";
echo "</form>";

		}else{
?>

<div align="center" dir="rtl">

</div>

		<?php

		}
		?>
</div>

<div class="middle">
