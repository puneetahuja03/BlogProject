 <?php include("includes/header.php");

	if(isset($_GET['category'])){
		$category = mysqli_real_escape_string($db , $_GET['category']);
		$query = "SELECT * FROM posts WHERE category='$category'";
	}else{
	$query = "SELECT * FROM posts";
	}
	$posts = $db->query($query);
?>

		<div class="blog-header">
			<h1 class="blog-title">Let's exchange knowledge</h1>
			<p class="lead blog-description">You can share your view or opinions on different posts.</p>
		</div>
		
          <?php
			if($posts->num_rows > 0) {
				while($row = $posts->fetch_assoc()) {
		  ?>

          <div class="blog-post">
            <h2 class="blog-post-title"><a href="single.php?post=<?php echo $row['id'] ?>"><?php echo $row['Title']; ?></a></h2>
            <p class="blog-post-meta"><?php echo $row['date']; ?> by <a href="#"><?php echo $row['author']; ?></a></p>

            <?php $body = $row['body'];
				echo substr($body, 0, 200);
			?>
			<br/>
			<br/>
			<a href="<?php echo $row['id'] ?>" class="btn btn-primary">Read more</a>
		  </div><!-- /.blog-post -->
			<?php } } ?>
		</div><!-- /.blog-main -->
<?php include("includes/sidebar.php");?>
<?php include("includes/footer.php");?>
        

     