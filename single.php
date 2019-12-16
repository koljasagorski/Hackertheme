<?php get_header(); ?>
		<div id="content">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><b><?php the_title(); ?></b></a></h2>
				<div class="entry">
					<?php the_content('Read more...'); ?>
					<p class="time">Posted: <?php the_time('Y-m-d g:i:s A'); ?> <?php edit_post_link('Edit', '<span class="editlink">', '</span>'); ?></p>
				</div>
			</div>
			<?php endwhile; ?>
			<?php else : ?>
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php endif; ?>
		</div> <!-- end content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
