<?php get_header(); //require header.php ?>

	<main id="content">
		
		<?php 
		//make sure there are some posts to display
		if( have_posts() ):
			//loop through each post
			while( have_posts() ):
			the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="post">
			<h2 class="entry-title"> <a href="<?php the_permalink(); ?>"> 
				<?php the_title(); ?> </a></h2>
			<div class="postmeta"> 
				<span class="author"> Posted by: <?php the_author(); ?> </span>
				<span class="date"> <?php the_date(); ?> </span>
				<span class="num-comments"> <?php comments_number(); ?> </span>
				<span class="categories"> <?php the_category(); ?> </span>
				<span class="tags"><?php the_tags(); ?></span> 
			</div><!-- end postmeta -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>

		<?php endwhile; //have posts ?>

	<?php endif; //have posts ?>

	</main><!-- end #content -->

<?php get_sidebar(); //require sidebar.php ?>	

<?php get_footer(); //require footer.php ?>