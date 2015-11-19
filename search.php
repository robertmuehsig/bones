<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf">
						<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> >

								<header class="entry-header article-header">

									<h2 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                  					<?php bones_byline(); ?>

								</header>

								<section class="entry-content cf">
								<?php
									if ( 'bones_posts_excerpt' == get_theme_mod( 'themeslug_post_content' ) ) :
										// check if the post has a Post Thumbnail assigned to it.
										if ( has_post_thumbnail() ) {
											the_post_thumbnail('bones-thumb-800');
										} 
										the_excerpt();
									else :
										the_content();
									endif;
								?>
								</section>

								<footer class="article-footer">
								</footer> <!-- end article footer -->

							</article>

						<?php endwhile; ?>

								<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
											<a href="https://www.flickr.com/photos/st3f4n/3951143570/">
												<img src="https://farm3.staticflickr.com/2465/3951143570_20b4eccd3f.jpg" 
												width="500" height="333" 
												alt="Two small plastic toy Stormtroopers from Star Wars stare at a computer monitor. They are searching Google for 'The Droids we are looking for'.">
											</a>
										</section>
										<footer class="article-footer">
												<p><?php //_e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

							<?php get_sidebar(); ?>

					</div>

			</div>

<?php get_footer(); ?>
