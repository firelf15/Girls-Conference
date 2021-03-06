<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
<title>
<?php wp_title('|', true, 'right'); ?>
</title>
<!-- Share This scripts -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ddb9bb34-1b7b-4095-98b0-26966a7bab6b", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53068943-1', 'auto');
  ga('send', 'pageview');

</script>
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="big-wrapper">
<div class="header-cover section bg-dark-light no-padding">
  <div class="header section" style="background-image: url(<?php if (get_header_image() != '') : ?><?php header_image(); ?><?php else : ?><?php echo get_template_directory_uri() . '/images/header.jpg'; ?><?php endif; ?>);">
    <div class="header-inner section-inner">
      <?php if ( get_theme_mod( 'hemingway_logo' ) ) : ?>
      <div class='blog-logo'> <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'> <img src='<?php echo esc_url( get_theme_mod( 'hemingway_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'> </a> </div>
      <!-- /blog-logo -->
      
      <?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) : ?>
      <div class="blog-info">
        <h1 class="blog-title"> <a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a> </h1>
        <?php if ( get_bloginfo( 'description' ) ) { ?>
        <h3 class="blog-description"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></h3>
        <?php } ?>
      </div>
      <!-- /blog-info -->
      
      <?php endif; ?>
    </div>
    <!-- /header-inner --> 
    
  </div>
  <!-- /header --> 
  
</div>
<!-- /bg-dark -->

<div id="sticky-menu" class="navigation section no-padding bg-dark">
  <div class="navigation-inner section-inner"> 
    <!-- Monika is adding social media icons -->
    <div id="gc-social"><a href="https://www.facebook.com/GirlsConf" target="_blank"><img src="http://gcdev.myb4.org/wp-content/uploads/2014/07/icon-fb.png" width="32" height="32"></a><a href="http://instagram.com/GirlsConf" target="_blank"><img src="http://gcdev.myb4.org/wp-content/uploads/2014/07/icon-ig.png" width="32" height="32"></a><a href="https://twitter.com/GirlsConf2014" target="_blank"><img src="http://gcdev.myb4.org/wp-content/uploads/2014/07/icon-tw.png" width="32" height="32"></a></div>
    <!-- Stop adding social media icons -->
    <div class="toggle-container hidden">
      <div class="nav-toggle toggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="clear"></div>
      </div>
      <div class="search-toggle toggle">
        <div class="metal"></div>
        <div class="glass"></div>
        <div class="handle"></div>
      </div>
      <div class="clear"></div>
    </div>
    <!-- /toggle-container -->
    
    <div class="blog-search hidden">
      <?php get_search_form(); ?>
    </div>
    <ul class="blog-menu">
      <?php if ( has_nav_menu( 'primary' ) ) {
																			
							wp_nav_menu( array( 
							
								'container' => '', 
								'items_wrap' => '%3$s',
								'theme_location' => 'primary', 
								'walker' => new hemingway_nav_walker
															
							) ); } else {
						
							wp_list_pages( array(
							
								'container' => '',
								'title_li' => ''
							
							));
							
						} ?>
    </ul>
    <div class="clear"></div>
    <ul class="mobile-menu">
      <?php if ( has_nav_menu( 'primary' ) ) {
																			
							wp_nav_menu( array( 
							
								'container' => '', 
								'items_wrap' => '%3$s',
								'theme_location' => 'primary', 
								'walker' => new hemingway_nav_walker
															
							) ); } else {
						
							wp_list_pages( array(
							
								'container' => '',
								'title_li' => ''
							
							));
							
						} ?>
    </ul>
  </div>
  <!-- /navigation-inner --> 
  
</div>
<!-- /navigation -->