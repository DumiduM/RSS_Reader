<?php
include('core/news_reader.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header>
		<h1>RSS Reader</h1>
		<hr>
		<br>
	</header>

<div class="news">
	<?php

	foreach (fetch_news() as $article) {
		?>
		<h2><a href="<?php echo $article['link'] ?>"><?php echo $article['title']; ?></a></h2>
		<h5><?php echo $article['date']; ?></h5>
		<img src="<?php echo $article['image']['url']; ?>" alt=""/> 
		<style  scoped>
			img{
				height: 250px;
			}
			
		</style>
		<p>
			<?php echo $article['description']; ?>
		</p>
		<br>
		<hr>
		<br>
		<?php
	}
		
	?>

</div>
</body>
</html>