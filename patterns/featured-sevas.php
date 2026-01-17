<?php
/**
 * Featured Sevas Pattern
 *
 * @package temple-seva-portal
 */

return array(
	'title'       => __( 'Featured Temple Sevas', 'temple-seva-portal' ),
	'description' => __( 'Display featured temple services in a card grid', 'temple-seva-portal' ),
	'categories'  => array( 'temple-seva-portal' ),
	'keywords'    => array( 'temple', 'seva', 'ritual', 'featured' ),
	'blockTypes'  => array( 'core/group' ),
	'content'     => '<!-- wp:group {"className":"featured-sevas","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group featured-sevas" style="padding-top:4rem;padding-bottom:4rem;padding-left:2rem;padding-right:2rem">
	<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"900"}},"fontFamily":"serif"} -->
	<h2 class="wp-block-heading has-serif-font-family" style="font-size:2.5rem;font-weight:900">Featured Rituals</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|neutral-gray"},"spacing":{"margin":{"bottom":"3rem"}}}} -->
	<p class="has-text-color" style="color:var(--wp--preset--color--neutral-gray);margin-bottom:3rem">Ancient traditions brought to your modern home</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns {"style":{"spacing":{"gap":"2rem"}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"1.5rem"}},"className":"seva-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group seva-card has-background" style="border-radius:1.5rem;background-color:#ffffff;padding:2rem">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="font-size:1.25rem;font-weight:700">Mahanyasa Purvaka Rudrabhishekam</h3>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|neutral-gray"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--neutral-gray);margin-bottom:1rem">Varanasi, Uttar Pradesh</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
				<p style="margin-bottom:1.5rem">Sacred Shiva ritual performed by experienced hereditary priests.</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"800"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
				<h4 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--primary);font-size:1.5rem;font-weight:800;margin-bottom:1.5rem">₹2,100</h4>
				<!-- /wp:heading -->
				
				<!-- wp:button {"backgroundColor":"primary","textColor":"contrast","style":{"border":{"radius":"1rem"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:1rem">View Seva</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"1.5rem"}},"className":"seva-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group seva-card has-background" style="border-radius:1.5rem;background-color:#ffffff;padding:2rem">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="font-size:1.25rem;font-weight:700">Sahasra Deepalankarana Seva</h3>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|neutral-gray"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--neutral-gray);margin-bottom:1rem">Tirupati, Andhra Pradesh</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
				<p style="margin-bottom:1.5rem">Thousand lamp ritual offering prayers at the sacred temple.</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"800"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
				<h4 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--primary);font-size:1.5rem;font-weight:800;margin-bottom:1.5rem">₹1,500</h4>
				<!-- /wp:heading -->
				
				<!-- wp:button {"backgroundColor":"primary","textColor":"contrast","style":{"border":{"radius":"1rem"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:1rem">View Seva</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"1.5rem"}},"className":"seva-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group seva-card has-background" style="border-radius:1.5rem;background-color:#ffffff;padding:2rem">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="font-size:1.25rem;font-weight:700">Gram Devi Pooja</h3>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|neutral-gray"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--neutral-gray);margin-bottom:1rem">Sirsi, Rural Karnataka</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
				<p style="margin-bottom:1.5rem">Support 300-year-old village temple and community services.</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"800"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
				<h4 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--primary);font-size:1.5rem;font-weight:800;margin-bottom:1.5rem">₹501</h4>
				<!-- /wp:heading -->
				
				<!-- wp:button {"backgroundColor":"primary","textColor":"contrast","style":{"border":{"radius":"1rem"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:1rem">View Seva</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
