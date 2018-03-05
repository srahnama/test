<?php
/**
 * Template functions used for the site header.
 *
 * @package shop-isle
 */

if ( ! function_exists( 'shop_isle_primary_navigation' ) ) {
    /**
     * Display Primary Navigation
     * @since  1.0.0
     * @return void
     */
    function shop_isle_primary_navigation() {

        ?>
        <!-- Navigation start -->
        <nav class="navbar navbar-custom navbar-transparent " role="navigation">
            <nav style="min-height:auto; background:white;" class="  navbar navbar-takel">
                <div class="">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                        <?php
                        wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right' ) );

                        if ( !is_user_logged_in() ) {
                            echo '<a class="btn btn-primary" href="' .get_permalink(wc_get_page_id('myaccount')). '"> عضویت </a>';
                            echo '<a class="btn btn-success" href="' .get_permalink(wc_get_page_id('myaccount')). '"> ورود</a>';
                        }


                        ?>



                    </div><!--/.nav-collapse -->




                </div><!--/.container-fluid -->
            </nav>

            <div class="container">
                <div class="header-container">

                    <!--						search section -->
                    <?php if( class_exists( 'WooCommerce' ) ): ?>
                        <div class="navbar-cart">
                            <div class="">

                                <form role="search" method="get" class="form-inline"" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
                                <a class="btn btn-success " href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart','shop-isle' ); ?>" >
                                    <?php if( function_exists( 'WC' ) ): ?>
                                        <span style="font-family: yekan, 'Glyphicons Halflings'"  class="left glyphicon glyphicon-shopping-cart">سبدخرید</span>
                                        <span><?php echo esc_html( trim( WC()->cart->get_cart_contents_count() ) ); ?></span>
                                    <?php endif; ?>
                                </a>
                                <input style="    min-width: 300px;" class="form-control"	 type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'shop-isle' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'shop-isle' ); ?>" />
                                <input class="btn btn-primary" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'shop-isle' ); ?>" />
                                <input type="hidden" name="post_type" value="product" />
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!--				end of search section-->
                    <div class="navbar-header ">
                        <div class="shop_isle_header_title">
                            <div class="shop-isle-header-title-inner">

                                <?php
                                /* LOGO**/
                                $shop_isle_logo = get_theme_mod( 'shop_isle_logo' );
                                echo '<div class="shop_isle_header_title"><div class="shop-isle-header-title-inner">';
                                if ( ! empty( $shop_isle_logo ) ) :
                                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="logo-image"><img src="' . esc_url( $shop_isle_logo ) . '"></a>';
                                    if ( is_customize_preview() ) :
                                        echo '<h1 class="site-title shop_isle_hidden_if_not_customizer""><a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></h1>';
                                        echo '<h2 class="site-description shop_isle_hidden_if_not_customizer"><a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . get_bloginfo( 'description' ) . '</a></h2>';
                                    endif;
                                else :
                                    if ( is_customize_preview() ) :
                                        echo '
                                        <a href="' . esc_url( home_url( '/' ) ) . '" class="logo-image shop_isle_hidden_if_not_customizer">
                                                                                                                                          <img src="">
                                                                                                                                                     </a>
                                        ';
                                    endif;
                                    echo '<h1 class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></h1>';
                                    echo '<h2 class="site-description"><a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . get_bloginfo( 'description' ) . '</a></h2>';
                                endif;
                                echo '</div></div>';
                                ?>



                            </div><!-- .shop-isle-header-title-inner -->

                        </div><!-- .shop_isle_header_title -->


                    </div>





                </div>
            </div>
            <nav style="min-height:auto;" class="  navbar navbar-takel">
                <div class="">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div id="navbar1" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                        <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right') ); ?>


                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>

        </nav>

        <!-- Navigation end -->
        <?php
    }
}