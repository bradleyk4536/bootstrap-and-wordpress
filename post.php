<?php include("includes/header.php"); ?>
<div class="container">
<!--	MAIN CONTENT	-->
	<div class="row" id="primary">
		<div id="content" class="col-sm-8" role="main">
			<article class="post">
				<header>
					<h3>Blog Title Here</h3>
						<div class="post-details">
								<i class="fa fa-user"></i>Ken Bradley
								<i class="fa fa-clock-o"></i><time>August 7 2016</time>
								<i class="fa fa-folder"></i><a href="">Tutorials</a>, <a href="">Coding</a>
								<i class="fa fa-tags"></i><a href="">WordPress</a>, <a href="">Premium</a>, <a href="">another tag</a>, <a href="">Yadda</a>
								<div class="post-comments-badge">
									<a href=""><i class="fa fa-comments"></i>168</a>
								</div>
							</div>
				</header>
						<div class="post-image">
							<img src="assets/images/hero-bg.jpg" alt="Hero Image">
						</div>
						<div class="post-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi sed quia iusto rem officia molestias soluta! Accusamus reiciendis mollitia illo tenetur saepe voluptate corrupti facere cum. Aut cum, repellendus ab!</p>
							<h3>Subtitle</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil quaerat cumque animi, doloribus nemo omnis ipsa pariatur eaque quod, incidunt doloremque placeat ad cupiditate vitae rerum vero voluptates nam! Quisquam.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto accusamus, vero distinctio praesentium fuga neque, sint non, quae porro explicabo error labore exercitationem saepe, aliquid quam. Obcaecati nam, ab repellat.</p>
							<h4>Another Subtitle</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi sed quia iusto rem officia molestias soluta! Accusamus reiciendis mollitia illo tenetur saepe voluptate corrupti facere cum. Aut cum, repellendus ab!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi sed quia iusto rem officia molestias soluta! Accusamus reiciendis mollitia illo tenetur saepe voluptate corrupti facere cum. Aut cum, repellendus ab!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi sed quia iusto rem officia molestias soluta! Accusamus reiciendis mollitia illo tenetur saepe voluptate corrupti facere cum. Aut cum, repellendus ab!</p>
						</div>
			</article>
			<div id="comments">
				<div class="comments-wrap">
					<h3>4 comments</h3>
					<ol class="comments-list">
						<li class="comment">
							<h4>John Smith <small>&bull; August 12, 2014</small></h4>
							<div class="comment-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptas quia eveniet, voluptatum non quasi quam illo voluptates dolor numquam, libero ab consequuntur possimus sunt incidunt reiciendis vitae rerum temporibus!</p>
							</div>
							<ol class="children">
								<li class="comment">
									<h4>Cris Mccopper <small>&bull; August 12, 2014</small></h4>
									<div class="comment-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptas quia eveniet, voluptatum non quasi quam illo voluptates dolor numquam, libero ab consequuntur possimus sunt incidunt reiciendis vitae rerum temporibus!</p>
									</div>
							<ol class="children">
								<li class="comment">
									<h4>Jon Dee <small>&bull; August 12, 2014</small></h4>
									<div class="comment-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptas quia eveniet, voluptatum non quasi quam illo voluptates dolor numquam, libero ab consequuntur possimus sunt incidunt reiciendis vitae rerum temporibus!</p>
									</div>
								</li>
							</ol>
								</li>
							</ol>
						</li>
						<li class="comment">
							<h4>Jane Smith <small>&bull; August 12, 2014</small></h4>
							<div class="comment-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptas quia eveniet, voluptatum non quasi quam illo voluptates dolor numquam, libero ab consequuntur possimus sunt incidunt reiciendis vitae rerum temporibus!</p>
							</div>
						</li>
					</ol>
					<div class="leave-comment">
					<h3>Leave a comment</h3>
						<form action="">
							<p>Your email address will not be published. Required fields are marked. <span class="required">*</span></p>
							<p class="comment-form-author">
							<label for="author">Name *</label>
							<input type="text" id="author">
							</p>
							<p class="comment-form-email">
							<label for="email">Email *</label>
							<input type="email" id="email">
							</p>
							<p class="comment-form-url">
							<label for="url">Website</label>
							<input type="url" id="url">
							</p>
							<p class="comment-form-comment">
							<label for="comment">Comment *</label>
							<textarea name="" id="comment" cols="45" rows="8"></textarea>
							</p>
							<p class="form-submit">
							<input class="btn btn-success" type="submit" name="submit">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
<!--				SIDE BAR-->
					<aside class="col-sm-4">
						<div class="widget">
							<h4>Join our mailing list</h4>
							<p>Keep up to date with the latest news, and we'll <strong>seny you special as a thank you.</strong></p>
							<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Subscribe</button>
						</div>
						<div class="widget">
							<form action="" role="form" class="search-form">
								<label for="sidebar-search" class="sr-only">Search Blog</label>
								<input type="text" id="sidebar-search" placeholder="Search the blog">
							</form>
						</div>
						<div class="widget">
							<h4>About Bootstrap to WordPress</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid natus obcaecati omnis veritatis accusamus aspernatur, quam est ea quaerat autem inventore, fugit accusantium aliquam assumenda, enim sint adipisci ipsum esse.</p>
						</div>
						<div class="widget">
							<h4>Recent Post</h4>
							<ul>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
							</ul>
						</div>
						<div class="widget">
							<h4>Categories</h4>
							<ul>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
							</ul>
						</div>
					</aside>
	</div>
	<!--SIGNUP SECTION-->
		<section id="signup" data-type="background" data-speed="4">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<h2>Are you ready to take you coding skills to the <strong>next level</strong>?</h2>
						<p><a href="#" class="btn btn-lg btn-block btn-success">Sign me up</a></p>
					</div>
				</div>
			</div>
		</section>
</div>
<!--MODAL SECTION-->
<?php include("includes/footer.php"); ?>
