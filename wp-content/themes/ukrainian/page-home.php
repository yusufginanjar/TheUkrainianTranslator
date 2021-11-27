<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package project
 */

$head_phone		= get_post_meta( 9, 'head_phone', true );
$jum_sub_title	= get_post_meta( 9, 'jum_sub_title', true );
$jum_des_1		= get_post_meta( 9, 'jum_des_1', true );
$jum_des_2		= get_post_meta( 9, 'jum_des_2', true );


// Section 1: Services
$section_1_title        = get_field('section_1_title');
$service_1_title        = get_field('service_title_1');
$service_1_description  = get_field('service_description_1');
$service_1_image        = get_field('service_image_1');
$service_2_title        = get_field('service_title_2');
$service_2_description  = get_field('service_description_2');
$service_2_image        = get_field('service_image_2');
$service_3_title        = get_field('service_title_3');
$service_3_description  = get_field('service_description_3');
$service_3_image        = get_field('service_image_3');


// Section 2: Working Area
$section_2_title        = get_field('section_2_title');
$working_1              = get_field('working_1');
$working_image_1        = get_field('working_image_1');
$working_detail_1       = get_field('working_detail_1');
$working_2              = get_field('working_2');
$working_image_2        = get_field('working_image_2');
$working_detail_2       = get_field('working_detail_2');
$working_3              = get_field('working_3');
$working_image_3        = get_field('working_image_3');
$working_detail_3       = get_field('working_detail_3');
$working_4              = get_field('working_4');
$working_image_4        = get_field('working_image_4');
$working_detail_4       = get_field('working_detail_4');
$working_5              = get_field('working_5');
$working_image_5        = get_field('working_image_5');
$working_detail_5       = get_field('working_detail_5');
$working_6              = get_field('working_6');
$working_image_6        = get_field('working_image_6');
$working_detail_6       = get_field('working_detail_6');
$working_7              = get_field('working_7');
$working_image_7        = get_field('working_image_7');
$working_detail_7       = get_field('working_detail_7');
$working_8              = get_field('working_8');
$working_image_8        = get_field('working_image_8');
$working_detail_8       = get_field('working_detail_8');


// recently completed project
$section_3_title      = get_field('section_3_title');
$last_project_1       = get_field('last_project_1');
$last_project_2       = get_field('last_project_2');
$last_project_3       = get_field('last_project_3');
$last_project_4       = get_field('last_project_4');
$last_project_5       = get_field('last_project_5');

get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">

		 <!----- Jumbotron ----->
		 <div class="jumbotron jumbotron-fluid" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/background.png'); background-repeat: no-repeat; background-size: 100%; background-position-x: 284px; background-position-y: -24px;">
        <div class="container">
            <div class="contact">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/phone.png" alt="Phone logo">
                <h6><?php echo $head_phone; ?></h6>
            </div>
            <div class="head row">
                <div class="headline col-lg-8">
                    <h2><?php echo $jum_sub_title; ?></h2>
                    <h1 class=""><?php bloginfo('description'); ?> </h1>
                    <p ><?php echo $jum_des_1; ?></p>
                    <div class="collapse-div">
                    <p class="collapse" id="collapse"><?php echo $jum_des_2; ?><button onclick="myFunction2()" class="btn btn-link less" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">&larr;</button></p>
                    <a onclick="myFunction1()" id="coll" class="btn btn-link more" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">Read more...</a>
                    </div>
                </div>
                <div class="laptop col-lg-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Laptop.png" alt="laptop">
                </div>
            </div>
            <div class="logo-hexagon">
                <div class="logo">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/The Ukrainian Translator.png" alt="The ukrainian translator logo">
                </div>
                <div class="hexagon">
                    <ul class="hexagon-all">
                       <li class="hexagon-list" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/hexagon1.png') no-repeat;background-size: cover;">
                            <div class="hexagon-text">
                                <h6>Fluency<br><small>100%</small></h6>
                            </div>
                       </li>
                       <li class="hexagon-list" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/hexagon1.png') no-repeat;background-size: cover;">
                            <div class="hexagon-text">
                                <h6>Clarity<br><small>100%</small></h6>
                            </div>
                       </li>
                       <li class="hexagon-list" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/hexagon1.png') no-repeat;background-size: cover;">
                            <div class="hexagon-text">
                                <h6>Accuracy<br><small>100%</small></h6>
                            </div>
                       </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!---x- Jumbotron -x--->

    <!----- Our Services ----->
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h1><?php echo $section_1_title; ?></h1>
            </div>
            <div class="row service-content">
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                          <div class="card-title">
                              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dictionary.png" alt="dictionary">
                              <h3><?php echo $service_1_title; ?></h3>
                            </div>
                          <p class="card-text"><?php echo $service_1_description; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/localisation.png" alt="localisation">
                                <h3><?php echo $service_2_title; ?></h3>
                            </div>
                            <p class="card-text"><?php echo $service_2_description; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/transcript.png" alt="transcript">
                                <h3><?php echo $service_3_title; ?></h3>
                            </div>
                            <p class="card-text"><?php echo $service_3_description; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---x- Our Services -x--->

    <!----- Working Area ----->
    <section class="working">
        <div class="container">
            <div class="section-title">
                <h1><?php echo $section_2_title; ?></h1>
            </div>
            <ul class="working-content row">
                <li class="col-4 col-lg-3">
                    <a class="btn">
                        <div class="card">
                            <div class="card-body">
                                <h3><?php echo $working_1; ?></h3>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Marketing.png" alt="Marketing">
                            </div>
                            <span>
                                <div class="card">
                                    <div class="card-body">
                                        <p><?php echo $working_1; ?>.</p>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="col-4 col-lg-3">
                    <a class="btn">
                        <div class="card">
                            <div class="card-body">
                                <h3><?php echo $working_2; ?></h3>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/software.png" alt="software">
                            </div>
                            <span>
                                <div class="card">
                                    <div class="card-body">
                                        <p><?php echo $working_detail_2; ?></p>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="col-4 col-lg-3">
                    <a class="btn">
                        <div class="card">
                            <div class="card-body">
                                <h3><?php echo $working_3; ?></h3>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/agriculture.png" alt="Agriculture">
                            </div>
                            <span>
                                <div class="card">
                                    <div class="card-body">
                                        <p><?php echo $working_detail_3; ?></p>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="col-4 col-lg-3">
                    <a class="btn">
                        <div class="card">
                            <div class="card-body">
                                <h3><?php echo $working_4; ?></h3>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/health.png" alt="Healthcare">
                            </div>
                            <span>
                                <div class="card">
                                    <div class="card-body">
                                        <p><?php echo $working_detail_4; ?></p>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="col-4 col-lg-3">
                    <a class="btn">
                        <div class="card">
                            <div class="card-body">
                                <h3><?php echo $working_5; ?></h3>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Travel.png" alt="Travel">
                            </div>
                            <span>
                                <div class="card">
                                    <div class="card-body">
                                        <p><?php echo $working_detail_5; ?></p>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="col-4 col-lg-3">
                    <a class="btn">
                        <div class="card">
                            <div class="card-body">
                                <h3><?php echo $working_6; ?></h3>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/business.png" alt="Business">
                            </div>
                            <span>
                                <div class="card">
                                    <div class="card-body">
                                        <p><?php echo $working_detail_6; ?></p>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="col-4 col-lg-3">
                    <a class="btn">
                        <div class="card">
                            <div class="card-body">
                                <h3><?php echo $working_7; ?></h3>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/legal.png" alt="Legal">
                            </div>
                            <span>
                                <div class="card">
                                    <div class="card-body">
                                        <p><?php echo $working_detail_7; ?></p>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="col-4 col-lg-3">
                    <a class="btn">
                        <div class="card">
                            <div class="card-body">
                                <h3><?php echo $working_8; ?></h3>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/film.png" alt="Film">
                            </div>
                            <span>
                                <div class="card">
                                    <div class="card-body">
                                        <p><?php echo $working_detail_8; ?></p>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </a>
                </li>
            </div>
        </div>
    </section>
    <!---x- Working Area -x--->

    <!----- Recent Project ----->
    <section class="projects">
        <div class="container">
            <div class="section-title">
                <h1><?php echo $section_3_title; ?></h1>
            </div>
            <div class="section-content">
                <ul>
                    <li><p><?php echo $last_project_1; ?></p></li>
                    <li><p><?php echo $last_project_2; ?></p></li>
                    <li><p><?php echo $last_project_3; ?></p></li>
                    <li><p><?php echo $last_project_4; ?></p></li>
                    <li><p><?php echo $last_project_5; ?></p></li>
                
                </ul>
            </div>
        </div>
    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
