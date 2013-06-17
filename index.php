<?php get_header(); ?>

	<main id="content">
		<?php if( have_posts() ): ?>
			<?php while( have_posts() ): the_post(); ?>
		<article id="post-<?php the_ID(); ?>" class="post">
			<h2 class="entry-title"> 
				<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
			</h2>
			<div class="postmeta"> 
				<span class="author"> Posted by: <?php the_author(); ?> </span>
				<span class="date"> <?php the_date(); ?> </span>
				<span class="num-comments"> <?php comments_number(); ?> </span>
				<span class="categories"> <?php the_category(); ?> 
				</span>
				<span class="tags"><?php the_tags(); ?></span> 
			</div><!-- end postmeta -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile; ?>	
	<?php else: ?>
		<h2>No Posts to Show</h2>
		<p>Sorry, I can't find the post you're looking for. 
			Try the search bar!</p>
	<?php endif; ?>

	</main><!-- end #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>