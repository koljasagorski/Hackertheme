<?php
/*
Template Name: allposts

This page template displays all the post titles on your site as an unordered list of links.

To use this template, you will need to create a page and select the template "allposts"
	from the Page Attributes for that page. It will display the title you give it plus
	any text that you you enter for that page, then the list will be displayed.  Enter
	no text if you just want the list. The order is descending cronological. Sticky posts
	will be displayed at the top.
*/
get_header(); ?>
		<div id="content">
			<?php
			if (have_posts()) :
			while (have_posts()) :
			the_post();
			?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><b><?php the_title(); ?></b></a></h2>
				<div class="entry">
					<?php the_content('Read more...'); ?>	
				</div>
			</div>
			<?php
			endwhile;
			endif;
			wp_reset_query();
			?>
			<ul>
			<?php
			query_posts('posts_per_page=-1'); // query to show all posts independant from what is in the center;
			if (have_posts()) :
			while (have_posts()) :
			the_post(); ?>
			<li>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</li>
			<?php
			endwhile;
			endif;
			wp_reset_query();
			?>
			</ul>
			<?php edit_post_link('Edit', '<p class="editlink">', '</p>'); ?>
		</div> <!-- end content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>