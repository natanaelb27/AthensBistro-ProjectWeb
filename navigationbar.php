<div class="main">
	<?php
	$directoryURI = $_SERVER['REQUEST_URI'];
	$path = parse_url($directoryURI, PHP_URL_PATH);
	$components = explode('/', $path);
	$cur = $components[2]; //untuk local
	//$cur = $components[1]; //untuk domain
	?>
	<ul>
      	<li class="<?php if ($cur=="index.php") {echo "active"; } else  {echo "noactive";}?>"><a href="index.php">Home</a></li>
	    <li class="<?php if ($cur=="menu.php" or $cur=="appetizer.php" or $cur=="maincourse.php" or $cur=="dessert.php" or $cur=="beverages.php") {echo "active"; } else  {echo "noactive";}?>"><a href="menu.php">Menu</a></li>
	    <li class="<?php if ($cur=="order.php") {echo "active"; } else  {echo "noactive";}?>"><a href="order.php">Order</a></li>
	    <li class="<?php if ($cur=="login.php" or $cur=="employeeonly.php" or $cur=="sales.php" or $cur=="maintenance.php") {echo "active"; } else  {echo "noactive";}?>"><a href="login.php">Employee Only</a></li>
	</ul>
</div>

