</div>

<div class="right">

<h2> مطاعم بحرية </h2>
<ul>

<?php
 
 $q="select * from restaurants where res_type='seafood' and active=1 ";  
		$reuslt=$db->query($q) or die($db->error);
		
		while($row=$reuslt->fetch_object()){

			
			echo "<li><a href='index.php ?p={$row->id}' class='selected' title='{$row->des}'> {$row->name} </a>
			</li>";
	}


	?>




</ul>
<h2> وجبات سريعة </h2>
<ul>

<?php
 
 $q="select * from restaurants where res_type='fastfoods' and active=1 ";  
		$reuslt=$db->query($q) or die($db->error);
		
		while($row=$reuslt->fetch_object()){

			
			echo "<li><a href='index.php ?p={$row->id}' class='selected' title='{$row->des}'> {$row->name} </a>
			</li>";
	}


	?>



</ul>


</div>

<div style="clear: both;"> </div>

</div>
<div id="bottom"> </div>
<div id="footer">
Developed by <a href="http://www.ahmeddahab.com/">Ahmed Abu_eldahab</a></div>

</div>
</body>
</html>