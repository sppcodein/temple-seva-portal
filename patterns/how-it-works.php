<?php
/**
 * How It Works Pattern
 *
 * @package temple-seva-portal
 */

return array(
	'title'       => __( 'How It Works', 'temple-seva-portal' ),
	'description' => __( 'Four-step process showing how temple seva works', 'temple-seva-portal' ),
	'categories'  => array( 'temple-seva-portal' ),
	'keywords'    => array( 'process', 'steps', 'workflow' ),
	'blockTypes'  => array( 'core/group' ),
	'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}}},"className":"how-it-works","layout":{"type":"constrained"}} -->
<div class="wp-block-group how-it-works" style="padding-top:4rem;padding-bottom:4rem;padding-left:2rem;padding-right:2rem">
	<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"900"}},"fontFamily":"serif"} -->
	<h2 class="wp-block-heading has-text-align-center has-serif-font-family" style="font-size:2.5rem;font-weight:900">HOW IT WORKS</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|neutral-gray"},"spacing":{"margin":{"bottom":"3rem"}}}} -->
	<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--neutral-gray);margin-bottom:3rem">Your spiritual bridge to divine blessings</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns {"style":{"spacing":{"gap":"2rem"}}} -->
	<div class="wp-block-columns">
		<!-- Step 1 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":"2rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding:2rem">
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"3rem","fontWeight":"900"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h3 class="wp-block-heading has-text-align-center has-text-color" style="color:var(--wp--preset--color--primary);font-size:3rem;font-weight:900;margin-bottom:1rem">1</h3>
				<!-- /wp:heading -->
				<!-- wp:heading {"level":4,"textAlign":"center","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h4 class="wp-block-heading has-text-align-center" style="font-size:1.25rem;font-weight:700;margin-bottom:1rem">Select Temple</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|neutral-gray"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--neutral-gray)">Search by state, district, or hometown</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		
		<!-- Step 2 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":"2rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding:2rem">
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"3rem","fontWeight":"900"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h3 class="wp-block-heading has-text-align-center has-text-color" style="color:var(--wp--preset--color--primary);font-size:3rem;font-weight:900;margin-bottom:1rem">2</h3>
				<!-- /wp:heading -->
				<!-- wp:heading {"level":4,"textAlign":"center","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h4 class="wp-block-heading has-text-align-center" style="font-size:1.25rem;font-weight:700;margin-bottom:1rem">Choose Seva</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|neutral-gray"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--neutral-gray)">Select authentic rituals and services</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		
		<!-- Step 3 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":"2rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding:2rem">
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"3rem","fontWeight":"900"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h3 class="wp-block-heading has-text-align-center has-text-color" style="color:var(--wp--preset--color--primary);font-size:3rem;font-weight:900;margin-bottom:1rem">3</h3>
				<!-- /wp:heading -->
				<!-- wp:heading {"level":4,"textAlign":"center","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h4 class="wp-block-heading has-text-align-center" style="font-size:1.25rem;font-weight:700;margin-bottom:1rem">Ritual Performed</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|neutral-gray"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--neutral-gray)">Priests conduct seva in your name</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		
		<!-- Step 4 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":"2rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding:2rem">
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"3rem","fontWeight":"900"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h3 class="wp-block-heading has-text-align-center has-text-color" style="color:var(--wp--preset--color--primary);font-size:3rem;font-weight:900;margin-bottom:1rem">4</h3>
				<!-- /wp:heading -->
				<!-- wp:heading {"level":4,"textAlign":"center","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h4 class="wp-block-heading has-text-align-center" style="font-size:1.25rem;font-weight:700;margin-bottom:1rem">Receive Prasad</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|neutral-gray"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--neutral-gray)">Delivered directly to your doorstep</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
