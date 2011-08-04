<?php get_header(); ?>
	<?php roots_content_before(); ?>
		<div id="content" class="<?php echo $roots_options['container_class']; ?>">	
		<?php if ( is_active_sidebar(1) ) : // "Sidebar First" must be the first widget area registered ?>
			<?php roots_sidebar_first_before(); ?>
				<aside id="sidebar-first" class="<?php echo $roots_options['sidebar_first_class']; ?>" role="complementary">
				<?php roots_sidebar_first_inside_before(); ?>
					<div class="container">
						<?php get_sidebar( 'first' ); ?>
					</div>
				<?php roots_sidebar_first_inside_after(); ?>
				</aside><!-- /#sidebar-first -->
			<?php roots_sidebar_first_after(); ?>
		<?php endif; ?>
		<?php roots_main_before(); ?>
			<div id="main" class="<?php echo $roots_options['main_class']; ?>" role="main">
				<div class="container">
					<h1><?php _e('Latest Posts', 'roots');?></h1>
					<?php get_template_part('loop', 'index'); ?>
				</div>
			</div><!-- /#main -->
		<?php roots_main_after(); ?>
		<?php roots_sidebar_before(); ?>
			<aside id="sidebar" class="<?php echo $roots_options['sidebar_class']; ?>" role="complementary">
			<?php roots_sidebar_inside_before(); ?>
				<div class="container">
					<?php get_sidebar(); ?>
				</div>
			<?php roots_sidebar_inside_after(); ?>
			</aside><!-- /#sidebar -->
		<?php roots_sidebar_after(); ?>
		</div><!-- /#content -->
	<?php roots_content_after(); ?>
<?php get_footer(); ?>