<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-not-found" class="hentry cf">

							<header class="article-header">

								<h1><?php _e( 'Epic 404 - Article Not Found', 'bonestheme' ); ?></h1>

							</header>

							<section class="entry-content">

								<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'bonestheme' ); ?></p>
								<a href="https://www.flickr.com/photos/st3f4n/3951143570/">
									<img src="https://farm3.staticflickr.com/2465/3951143570_20b4eccd3f.jpg" 
									width="500" height="333" 
									alt="Two small plastic toy Stormtroopers from Star Wars stare at a computer monitor. They are searching Google for 'The Droids we are looking for'.">
								</a>
							</section>

							<footer class="article-footer">

									<p><?php //_e( 'This is the 404.php template.', 'bonestheme' ); ?></p>

							</footer>

						</article>

					</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
