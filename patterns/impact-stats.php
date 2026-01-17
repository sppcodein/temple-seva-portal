<?php
/**
 * Impact Stats Pattern
 *
 * @package temple-seva-portal
 */

return array(
	'title'       => __( 'Impact Stats', 'temple-seva-portal' ),
	'description' => __( 'Display temple seva impact statistics', 'temple-seva-portal' ),
	'categories'  => array( 'temple-seva-portal' ),
	'keywords'    => array( 'stats', 'impact', 'numbers', 'achievements' ),
	'blockTypes'  => array( 'core/group' ),
	'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}}},"className":"impact-stats","layout":{"type":"constrained"}} -->
<div class="wp-block-group impact-stats" style="padding-top:4rem;padding-bottom:4rem;padding-left:2rem;padding-right:2rem">
	<!-- wp:columns {"style":{"spacing":{"gap":"2rem"}}} -->
	<div class="wp-block-columns">
		<!-- Stat 1 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"1rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background" style="background-color:#ffffff;padding:2rem;border-radius:1rem;text-align:center">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"900"},"color":{"text":"var:preset|color|primary"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--primary);font-size:2.5rem;font-weight:900">1,240+</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|neutral-gray"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--neutral-gray);font-size:0.875rem;text-transform:uppercase;font-weight:600">Temples Supported</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		
		<!-- Stat 2 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"1rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background" style="background-color:#ffffff;padding:2rem;border-radius:1rem;text-align:center">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"900"},"color":{"text":"#d946ef"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#d946ef;font-size:2.5rem;font-weight:900">3,800+</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|neutral-gray"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--neutral-gray);font-size:0.875rem;text-transform:uppercase;font-weight:600">Priest Families Sustained</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		
		<!-- Stat 3 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"1rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background" style="background-color:#ffffff;padding:2rem;border-radius:1rem;text-align:center">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"900"},"color":{"text":"#f59e0b"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#f59e0b;font-size:2.5rem;font-weight:900">45,000+</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|neutral-gray"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--neutral-gray);font-size:0.875rem;text-transform:uppercase;font-weight:600">Rituals Performed</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		
		<!-- Stat 4 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"1rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background" style="background-color:#ffffff;padding:2rem;border-radius:1rem;text-align:center">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"900"},"color":{"text":"#3b82f6"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#3b82f6;font-size:2.5rem;font-weight:900">85</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|neutral-gray"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--neutral-gray);font-size:0.875rem;text-transform:uppercase;font-weight:600">Rural Districts</p>
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
