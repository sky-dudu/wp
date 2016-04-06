<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<div>
<li>
	<? 
	if (have_posts()) {
		while (have_posts()) {
			the_post()
			echo "the_title";
		}
		endwhile;
	}
	?>
</div>	
</body>
</html>