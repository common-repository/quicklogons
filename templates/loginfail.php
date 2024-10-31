<?php get_header(); ?>
<div id="main" class="wrapper">
	<div id="primary" class="site-content">
		<div id="content" role="main">
            <article id="ql-error-page" class="ql-error-page page type-page status-publish hentry">
		        <header class="entry-header">
					<h1 class="entry-title"><?php _e("Login Error");?></h1>
		        </header>
		        <div class="entry-content">
                    <p>
                        <?php echo htmlspecialchars($response->error);?>
                    </p>
                    <p>
                        <a href="<?php echo wp_login_url( $response->returnurl );?>"><?php _e("Try login again");?></a>&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url();?>"><?php _e("Back home");?></a>
                    </p>
				</div><!-- .entry-content -->
	        </article><!-- #post -->
		</div><!-- #content -->
	</div><!-- #primary -->
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
