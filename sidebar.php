<aside id="sidebar"> 
<section id="categories" class="widget">
	<h3 class="widget-title"> Categories </h3>
	<ul>
		<?php 
		//show the 10 most commonly used categories
		wp_list_categories( array(
			'number' => 10,
			'orderby' => 'count',
			'order' => 'DESC',
			'show_count' => 1,
			'title_li' => ''
		) ); ?>               
	</ul>
</section>
<section id="archives" class="widget">
	<h3 class="widget-title"> Archives </h3>
	<ul>
		<?php 
		//display archives by year
		wp_get_archives( array(
			'type' => 'yearly',
			'show_post_count' => 1,
		) ); ?>
	</ul>
</section>
<section id="tags" class="widget">
	<h3 class="widget-title"> Tags </h3>
	<?php wp_tag_cloud(); ?>
</section>
<section id="meta" class="widget">
	<h3 class="widget-title"> Meta </h3>
	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
	</ul>
</section>
</aside><!-- end #sidebar -->