<?php include("includes/header.php");
if(isset($_GET['post'])){
		$id = mysqli_real_escape_string($db , $_GET['post']);
		$query = "SELECT * FROM posts WHERE id='$id'";
	}
	$posts = $db->query($query);
?>

		<br>
          <?php
			if($posts->num_rows > 0) {
				while($row = $posts->fetch_assoc()) {
		  ?>

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['Title']; ?></h2>
            <p class="blog-post-meta"><?php echo $row['date']; ?> by <a href="#"><?php echo $row['author']; ?></a></p>

            <?php echo $row['body'];
			?>
			<br/>
			<br/>
		  </div><!-- /.blog-post -->
			<?php } } ?>
		  
		  <blockquote>2 Comments</blockquote>
		  <div class="comment-area">
			<form>
				<div class="form-group">
					<label for="exampleInputEmail11">Name</label>
					<input type="text" name="name" class="form-control" id="exampleInputEmail11" placeholder="Name" />
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Website</label>
					<input type="text" name="website" class="form-control" id="exampleInputEmail1" placeholder="Website(Optional)" />
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Comment</label>
					<textarea cols="60" rows="10" name="comment" class="form-control"></textarea>
				</div>
				<button type="submit" name="post_comment" class="btn btn-primary">Post Comments</button>
			</form>

			<hr>
			
			<div class="comment">
				<div class="comment-head">
				<img width="40" height="40" src="images/harsh.jpg" />
				<a href="#">Harsh Patel</a>
			</div>
			This blog is amazing.
		  </div>
		  
		  <div class="comment">
				<div class="comment-head">
				<img width="40" height="40" src="images/no-img.png" />
				<a href="#">Puneet Ahuja</a> <button class="btn btn-info btn-xs">Admin</button>
			</div>
			Thanks Harsh. Glad you liked it.
		  </div>
		  </div><!-- /.blog-main -->

<?php include("includes/footer.php");?>
