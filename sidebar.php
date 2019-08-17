<div class="col-sm-3 col-sm-offset-1 blog-sidebar" style="margin-top:150px;">
		<div class="sidebar-module">
            <h4>Search Category of Post you want to read</h4>
			<hr>
			<form class="form-inline" method="get" action="results.php">
				<div class="form-group">
				<input type="text" name="search" class="form-control" id="exampleInputName2" placeholder="Search Category">
				
				<input type="submit" value="Search" />
				</div>
			</form>
			<?php
				if(isset($_GET['posts']))
				{
					$cat = $_GET['posts'];
					$query = mysql_query("SELECT * from project where posts='$cat'");
				}
				while($result = mysql_fetch_array(query))
				{
			?>
					<?php
						echo $result['Title'];
						echo $result['body'];
					?>
					<?php
				}
				?>
          </div>
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
			<hr>
            <p>My name is  <em>Puneet Ahuja.</em> I am a fresher who just completed the degree of B.Tech in Computer Engineering</p>
          </div>
		  <div class="sidebar-module">
            <h4>Subscribe</h4>
			<hr>
			<form method="post">
			<div class="form-group">
				<input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="Name">
				</div>
				
				<div class="form-group">
				<input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email">
				</div>
				<button type="submit" class="btn btn-primary">Subscribe</button>
			</form>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
			<hr>
            <ol class="list-unstyled">
              <li><a href="index.php">August 2019</a></li>
              <li><a href="#">February 2019</a></li>
              <li><a href="#">January 2019</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
			<hr>
            <ol class="list-unstyled">
              <li><a href="https://github.com/puneetahuja03">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="https://www.facebook.com/puneet.ahuja.583">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->