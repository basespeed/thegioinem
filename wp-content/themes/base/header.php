<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header class="header">
        <div class="top">
            <div class="container">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>

                <div class="mini_cart">
                    <div class="insider">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/telephone1.png" alt="tel">
                        </div>

                        <div class="info">
                            <h3>Điện thoại đặt hàng</h3>
                            <p>0902 383 325 - 0909 448 325</p>
                            <div class="cart">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart.png" alt="icon cart">
                                Giỏ hàng (<span>0</span>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo_main">
            <div class="container">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                </div>
                <h3>hệ thống phân phối nệm drap hàng đầu việt nam</h3>
            </div>
        </div>

        <div class="main_menu">
            <div class="container">
                <div class="menu">
                    <h3  style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/form-title-bg.png') no-repeat;"><i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm</h3>
                    <div class="menu_nav">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            ) );
                        ?>
                    </div>
                </div>
                <div class="right_menu">
                    <div class="tk_thuong_hieu">
                        <div class="toggle_tk">
                            <h3>Tìm theo thương hiệu</h3>
                            <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/down.png" alt="icon"></div>
                        </div>
                    </div>

                    <div class="flex-grow"></div>

                    <div class="tk_he_thong">
                        <div class="toggle_tk">
                            <h3>Hệ thống thế giới nệm</h3>
                            <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/down.png" alt="icon"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<div id="content" class="site-content">




<?php
//the_custom_logo();
/**/
?>