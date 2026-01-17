<?php
/**
 * Block patterns
 *
 * @package temple-seva-portal
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Registers block patterns and block pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */
function templ_seva_portal_register_block_patterns() {

    /**
     * Register temple seva portal block pattern category.
     */
    register_block_pattern_category(
        'temple-seva-portal',
        array( 'label' => esc_html__( 'Temple Seva Portal', 'temple-seva-portal' ) )
    );

    // Register Featured Sevas Pattern
    register_block_pattern(
        'temple-seva-portal/featured-sevas',
        array(
            'title'       => esc_html__( 'Featured Temple Sevas', 'temple-seva-portal' ),
            'description' => esc_html__( 'Display featured temple services in a card grid', 'temple-seva-portal' ),
            'categories'  => array( 'temple-seva-portal' ),
            'keywords'    => array( 'temple', 'seva', 'ritual', 'featured' ),
            'content'     => '<!-- wp:group {"className":"featured-sevas","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group featured-sevas" style="padding-top:4rem;padding-bottom:4rem;padding-left:2rem;padding-right:2rem">
    <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"900"}}} -->
    <h2 class="wp-block-heading" style="font-size:2.5rem;font-weight:900">Featured Rituals</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"spacing":{"margin":{"bottom":"3rem"}}}} -->
    <p class="has-text-color" style="color:#6b7280;margin-bottom:3rem">Ancient traditions brought to your modern home</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:columns {"style":{"spacing":{"gap":"2rem"}}} -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"2rem"}},"className":"seva-card"} -->
            <div class="wp-block-group seva-card has-background" style="border-radius:2rem;background-color:#ffffff;padding:2rem;border:1px solid #e5e7eb;box-shadow:0 1px 3px 0 rgba(0,0,0,0.1)">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}}} -->
                <h3 class="wp-block-heading" style="font-size:1.25rem;font-weight:700">Mahanyasa Rudrabhishekam</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"spacing":{"margin":{"bottom":"1rem"}},"typography":{"fontSize":"0.875rem"}}} -->
                <p class="has-text-color" style="color:#6b7280;margin-bottom:1rem;font-size:0.875rem">Kashi Vishwanath Temple, Varanasi</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
                <p style="margin-bottom:1.5rem;color:#111827">Sacred Shiva ritual performed by dedicated hereditary priests in your honor.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"900"},"color":{"text":"#ea580c"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
                <h4 class="wp-block-heading has-text-color" style="color:#ea580c;font-size:1.5rem;font-weight:900;margin-bottom:1.5rem">₹2,100</h4>
                <!-- /wp:heading -->
                
                <!-- wp:button {"backgroundColor":"primary","textColor":"contrast"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:1rem;background-color:#111827;color:#ffffff">Book Now</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"2rem"}},"className":"seva-card"} -->
            <div class="wp-block-group seva-card has-background" style="border-radius:2rem;background-color:#ffffff;padding:2rem;border:1px solid #e5e7eb;box-shadow:0 1px 3px 0 rgba(0,0,0,0.1)">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}}} -->
                <h3 class="wp-block-heading" style="font-size:1.25rem;font-weight:700">Satyanarayan Pooja</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"spacing":{"margin":{"bottom":"1rem"}},"typography":{"fontSize":"0.875rem"}}} -->
                <p class="has-text-color" style="color:#6b7280;margin-bottom:1rem;font-size:0.875rem">Kollur Mookambika Temple, Karnataka</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
                <p style="margin-bottom:1.5rem;color:#111827">Fulfillment ritual that brings prosperity and wellbeing to your household.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"900"},"color":{"text":"#ea580c"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
                <h4 class="wp-block-heading has-text-color" style="color:#ea580c;font-size:1.5rem;font-weight:900;margin-bottom:1.5rem">₹1,500</h4>
                <!-- /wp:heading -->
                
                <!-- wp:button {"backgroundColor":"primary","textColor":"contrast"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:1rem;background-color:#111827;color:#ffffff">Book Now</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"2rem"}},"className":"seva-card"} -->
            <div class="wp-block-group seva-card has-background" style="border-radius:2rem;background-color:#ffffff;padding:2rem;border:1px solid #e5e7eb;box-shadow:0 1px 3px 0 rgba(0,0,0,0.1)">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}}} -->
                <h3 class="wp-block-heading" style="font-size:1.25rem;font-weight:700">Annadana Seva</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"spacing":{"margin":{"bottom":"1rem"}},"typography":{"fontSize":"0.875rem"}}} -->
                <p class="has-text-color" style="color:#6b7280;margin-bottom:1rem;font-size:0.875rem">Sri Mariamman Temple, Tamil Nadu</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
                <p style="margin-bottom:1.5rem;color:#111827">Offering food and blessings to devotees in need, supporting temple community welfare.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"900"},"color":{"text":"#ea580c"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
                <h4 class="wp-block-heading has-text-color" style="color:#ea580c;font-size:1.5rem;font-weight:900;margin-bottom:1.5rem">₹501</h4>
                <!-- /wp:heading -->
                
                <!-- wp:button {"backgroundColor":"primary","textColor":"contrast"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:1rem;background-color:#111827;color:#ffffff">Book Now</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->',
        )
    );

    // Register How It Works Pattern
    register_block_pattern(
        'temple-seva-portal/how-it-works',
        array(
            'title'       => esc_html__( 'How It Works', 'temple-seva-portal' ),
            'description' => esc_html__( 'Four-step process showing how temple seva works', 'temple-seva-portal' ),
            'categories'  => array( 'temple-seva-portal' ),
            'keywords'    => array( 'process', 'steps', 'temple', 'workflow' ),
            'content'     => '<!-- wp:group {"className":"how-it-works","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"2rem","right":"2rem"}},"color":{"background":"#ffffff"},"border":{"radius":"3rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group how-it-works has-background" style="background-color:#ffffff;border-radius:3rem;border:1px solid #e5e7eb;padding:3rem 2rem;box-shadow:0 1px 3px 0 rgba(0,0,0,0.1)">
    <!-- wp:heading {"level":2,"align":"center","style":{"typography":{"fontSize":"1.875rem","fontWeight":"900","textTransform":"uppercase"}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="font-size:1.875rem;font-weight:900;text-transform:uppercase;text-align:center">How It Works</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6b7280"},"typography":{"fontSize":"1rem"}}} -->
    <p class="has-text-align-center has-text-color" style="color:#6b7280;text-align:center;font-size:1rem">Your spiritual bridge to divine blessings</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:columns {"style":{"spacing":{"gap":"3rem"}}} -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"4rem","fontWeight":"900"},"color":{"text":"#ea580c"}},"align":"center"} -->
            <h3 class="wp-block-heading has-text-align-center has-text-color" style="color:#ea580c;font-size:4rem;font-weight:900;text-align:center;margin:0">1</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"align":"center"} -->
            <h4 class="wp-block-heading has-text-align-center" style="font-size:1.25rem;font-weight:700;text-align:center">Select Temple</h4>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6b7280"}}} -->
            <p class="has-text-align-center has-text-color" style="color:#6b7280;text-align:center">Search by state, district, or hometown to find your family temple.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"4rem","fontWeight":"900"},"color":{"text":"#ea580c"}},"align":"center"} -->
            <h3 class="wp-block-heading has-text-align-center has-text-color" style="color:#ea580c;font-size:4rem;font-weight:900;text-align:center;margin:0">2</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"align":"center"} -->
            <h4 class="wp-block-heading has-text-align-center" style="font-size:1.25rem;font-weight:700;text-align:center">Choose Seva</h4>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6b7280"}}} -->
            <p class="has-text-align-center has-text-color" style="color:#6b7280;text-align:center">Select from Pooja, Annadana, Abhishekam, or other sacred rituals.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"4rem","fontWeight":"900"},"color":{"text":"#ea580c"}},"align":"center"} -->
            <h3 class="wp-block-heading has-text-align-center has-text-color" style="color:#ea580c;font-size:4rem;font-weight:900;text-align:center;margin:0">3</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"align":"center"} -->
            <h4 class="wp-block-heading has-text-align-center" style="font-size:1.25rem;font-weight:700;text-align:center">Ritual Performed</h4>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6b7280"}}} -->
            <p class="has-text-align-center has-text-color" style="color:#6b7280;text-align:center">Priests conduct your Seva following ancient Vedic traditions.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"4rem","fontWeight":"900"},"color":{"text":"#ea580c"}},"align":"center"} -->
            <h3 class="wp-block-heading has-text-align-center has-text-color" style="color:#ea580c;font-size:4rem;font-weight:900;text-align:center;margin:0">4</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"align":"center"} -->
            <h4 class="wp-block-heading has-text-align-center" style="font-size:1.25rem;font-weight:700;text-align:center">Receive Prasad</h4>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6b7280"}}} -->
            <p class="has-text-align-center has-text-color" style="color:#6b7280;text-align:center">Blessed prasad delivered directly to your doorstep.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->',
        )
    );

    // Register Testimonial Pattern
    register_block_pattern(
        'temple-seva-portal/testimonial',
        array(
            'title'       => esc_html__( 'Devotee Testimonial', 'temple-seva-portal' ),
            'description' => esc_html__( 'Feature a devotee testimonial with impact', 'temple-seva-portal' ),
            'categories'  => array( 'temple-seva-portal' ),
            'keywords'    => array( 'testimonial', 'quote', 'devotee', 'feedback' ),
            'content'     => '<!-- wp:group {"className":"testimonial-section","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"2rem","right":"2rem"}},"color":{"background":"#111827"},"border":{"radius":"3rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonial-section has-background" style="background-color:#111827;border-radius:3rem;padding:3rem 2rem;text-align:center">
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2rem","fontStyle":"italic","lineHeight":"1.8"},"color":{"text":"#faf9f8"}}} -->
    <p class="has-text-align-center has-text-color" style="color:#faf9f8;font-size:2rem;font-style:italic;line-height:1.8;font-family:Georgia,serif">
        "I moved to Bengaluru years ago, but with this platform, I can still offer Seva in my village temple in Karnataka. When I receive prasadam at home, it feels like I never left."
    </p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"level":4,"align":"center","style":{"typography":{"fontSize":"1rem","fontWeight":"900","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"#ffffff"}}} -->
    <h4 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff;font-size:1rem;font-weight:900;text-transform:uppercase;letter-spacing:0.05em;text-align:center">A Devotee\'s Experience</h4>
    <!-- /wp:heading -->
</div>
<!-- /wp:group -->',
        )
    );

    // Register Impact Stats Pattern
    register_block_pattern(
        'temple-seva-portal/impact-stats',
        array(
            'title'       => esc_html__( 'Impact Stats', 'temple-seva-portal' ),
            'description' => esc_html__( 'Display impact statistics in a grid layout', 'temple-seva-portal' ),
            'categories'  => array( 'temple-seva-portal' ),
            'keywords'    => array( 'stats', 'impact', 'numbers', 'metrics' ),
            'content'     => '<!-- wp:columns {"style":{"spacing":{"gap":"1.5rem"}}} -->
<div class="wp-block-columns">
    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:2rem;border:1px solid #e5e7eb;padding:2rem;box-shadow:0 1px 3px 0 rgba(0,0,0,0.1);text-align:center">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.875rem","fontWeight":"900"},"color":{"text":"#111827"}}} -->
            <h3 class="wp-block-heading has-text-color" style="color:#111827;font-size:1.875rem;font-weight:900;margin:0;margin-bottom:0.5rem">1,240+</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"900","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"#9ca3af"}}} -->
            <p class="has-text-color" style="color:#9ca3af;font-size:0.625rem;font-weight:900;text-transform:uppercase;letter-spacing:0.05em;margin:0">Temples Supported</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:2rem;border:1px solid #e5e7eb;padding:2rem;box-shadow:0 1px 3px 0 rgba(0,0,0,0.1);text-align:center">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.875rem","fontWeight":"900"},"color":{"text":"#111827"}}} -->
            <h3 class="wp-block-heading has-text-color" style="color:#111827;font-size:1.875rem;font-weight:900;margin:0;margin-bottom:0.5rem">3,800+</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"900","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"#9ca3af"}}} -->
            <p class="has-text-color" style="color:#9ca3af;font-size:0.625rem;font-weight:900;text-transform:uppercase;letter-spacing:0.05em;margin:0">Families Sustained</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:2rem;border:1px solid #e5e7eb;padding:2rem;box-shadow:0 1px 3px 0 rgba(0,0,0,0.1);text-align:center">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.875rem","fontWeight":"900"},"color":{"text":"#111827"}}} -->
            <h3 class="wp-block-heading has-text-color" style="color:#111827;font-size:1.875rem;font-weight:900;margin:0;margin-bottom:0.5rem">45k+</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"900","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"#9ca3af"}}} -->
            <p class="has-text-color" style="color:#9ca3af;font-size:0.625rem;font-weight:900;text-transform:uppercase;letter-spacing:0.05em;margin:0">Rituals Performed</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":"2rem"},"color":{"background":"#ffffff"},"border":{"radius":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:2rem;border:1px solid #e5e7eb;padding:2rem;box-shadow:0 1px 3px 0 rgba(0,0,0,0.1);text-align:center">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.875rem","fontWeight":"900"},"color":{"text":"#111827"}}} -->
            <h3 class="wp-block-heading has-text-color" style="color:#111827;font-size:1.875rem;font-weight:900;margin:0;margin-bottom:0.5rem">85</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"900","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"#9ca3af"}}} -->
            <p class="has-text-color" style="color:#9ca3af;font-size:0.625rem;font-weight:900;text-transform:uppercase;letter-spacing:0.05em;margin:0">Rural Districts</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->',
        )
    );

}
add_action( 'init', 'templ_seva_portal_register_block_patterns', 9 );
