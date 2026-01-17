<?php
/**
 * Testimonial Pattern
 *
 * @package temple-seva-portal
 */

return array(
	'title'       => __( 'Devotee Testimonial', 'temple-seva-portal' ),
	'description' => __( 'Feature a devotee testimonial with impact', 'temple-seva-portal' ),
	'categories'  => array( 'temple-seva-portal' ),
	'keywords'    => array( 'testimonial', 'quote', 'devotee' ),
	'blockTypes'  => array( 'core/group' ),
	'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}}},"className":"testimonial-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonial-section" style="padding-top:4rem;padding-bottom:4rem;padding-left:2rem;padding-right:2rem">
	<!-- wp:group {"style":{"spacing":{"padding":"4rem"},"color":{"background":"#1a1a1a"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-background" style="background-color:#1a1a1a;padding:4rem">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"3rem","fontWeight":"900"},"color":{"text":"#ea580c"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
		<p class="has-text-align-center has-text-color" style="color:#ea580c;font-size:3rem;font-weight:900;margin-bottom:2rem">"</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","fontStyle":"italic","lineHeight":"1.8"},"color":{"text":"#ffffff"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
		<p class="has-text-align-center has-text-color" style="color:#ffffff;font-size:1.25rem;font-style:italic;line-height:1.8;margin-bottom:2rem">I moved to Bengaluru years ago, but with this platform, I can still offer Seva in my village temple in Karnataka. When I receive prasadam at home, it feels like I never left.</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","fontWeight":"700","textTransform":"uppercase"},"color":{"text":"#ffffff"},"spacing":{"margin":{"bottom":"0.5rem"}}}} -->
		<p class="has-text-align-center has-text-color" style="color:#ffffff;font-size:1rem;font-weight:700;text-transform:uppercase;margin-bottom:0.5rem">A DEVOTEE\'S EXPERIENCE</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#ea580c"}}} -->
		<p class="has-text-align-center has-text-color" style="color:#ea580c;font-size:0.875rem">Supporting Marikamba Temple</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
