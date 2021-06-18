<?php

// =============================================================================
// TEMPLATE NAME: Landing page
// -----------------------------------------------------------------------------
// =============================================================================

get_header(); ?>
<div class="x-main full">
	<?php get_template_part( 'partials/banner', 'landing' ) ?>
	
	<div class="content-wrapper">
		<div class="wrap">
			<article class="article">

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>

			<div class="sidebar">
				<?php the_post_thumbnail('full'); ?>
			</div>

			<img src="/wp-content/themes/saleminn/assets/images/landing-sidebar-bg.png" alt="It'll make you feel alive" class="landing-bg">

		</div><?php //.wrap ?>
	</div><?php //.content-wrapper ?>

	<footer class="landing-footer">
		<div class="wrap">
			<a href="https://secure.webrez.com/Bookings105/activity-edit.html?hotel_id=841&table=hotels&listing_id=841&mode=command&command=bookingrequestform_v2" target="_blank" class="button landing-footer_cta">Book your Show & Stay weekend now</a>
		</div>
	</footer>
</div><?php //.full ?>
<?php get_footer();
