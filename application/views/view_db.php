<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<div id="container">
	<h1 id="abc">Welcome to CodeIgniter! Get db</h1>

	<?php
	//	print_r($results);
		
		foreach($results as $row)
		{
			echo $row->id. " ";
			echo $row->name."<br>";
		}
		
	
	?>
</div>

</body>
</html>