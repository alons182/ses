<?php
/*
  
 Template Name: Page Home
     
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 4es
 */

get_header(); ?>

	<div class="main__slider">
                <div class="cycle-slideshow" data-cycle-fx="fade"  data-cycle-timeout="6000"  data-cycle-slides=".main__slider__slide">
                
                    <div class="main__slider__slide" style="background-image: url(<?php echo get_template_directory_uri();  ?>/img/banner1.jpg);">
                        <div class="inner">
                            <div class="main__slider__slide__info main__slider__slide__info--left">
                                <!--<h1>Diseño</h1>
                                <h4 class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>-->
                            </div>
                            
                        </div>
                    </div>
                    <div class="main__slider__slide" style="background-image:url(<?php echo get_template_directory_uri();  ?>/img/banner2.jpg);">
                         <div class="inner ">
                             <div class="main__slider__slide__info  main__slider__slide__info--right">
                                 
                                <!-- <h1>Publicidad</h1>
                                    <h4 class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>-->
                             </div>
                        </div>

                    </div>

                </div>
            </div>
            
            <section class="main__featured inner">
                <article class="main__featured__item">
                    <a href="#" class="main__featured__item__link">
                        <figure class="main__featured__item__figure">
                            <div class="main__featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured1.jpg');"></div>
                            <figcaption class="main__featured__item__caption bg-naranja">
                                <h3 class="main__featured__item__title">Lorem upsum</h3>
                                <p class="main__featured__item__description">Lorem ipsum dolor sit amet, consectetur.</p>
                            </figcaption>   
                        </figure>
                    </a>
                    
                </article>
                <article class="main__featured__item">
                    <a href="#" class="main__featured__item__link">
                        <figure class="main__featured__item__figure">
                            <div class="main__featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured2.jpg');"></div>
                            <figcaption class="main__featured__item__caption bg-azul">
                                <h3 class="main__featured__item__title">Lorem upsum</h3>
                                <p class="main__featured__item__description">Lorem ipsum dolor sit amet, consectetur.</p>
                            </figcaption>   
                        </figure>
                    </a>
                    
                </article>
                <article class="main__featured__item">
                    <a href="#" class="main__featured__item__link">
                        <figure class="main__featured__item__figure">
                            <div class="main__featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured3.jpg');"></div>
                            <figcaption class="main__featured__item__caption bg-verde">
                                <h3 class="main__featured__item__title">Lorem upsum</h3>
                                <p class="main__featured__item__description">Lorem ipsum dolor sit amet, consectetur.</p>
                            </figcaption>   
                        </figure>
                    </a>
                    
                </article>
                <article class="main__featured__item">
                    <a href="#" class="main__featured__item__link">
                        <figure class="main__featured__item__figure">
                            <div class="main__featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured4.jpg');"></div>
                            <figcaption class="main__featured__item__caption bg-morado">
                                <h3 class="main__featured__item__title">Lorem upsum</h3>
                                <p class="main__featured__item__description">Lorem ipsum dolor sit amet, consectetur.</p>
                            </figcaption>   
                        </figure>
                    </a>
                    
                </article>
                
            </section>
            <section class="main__contact ">
                <div class="inner"> 
                    <h2 class="main__contact__title">¿ Lorem ipsum dolor sit amet, consectetur ?</h2>
                    <a class="main__contact__button btn btn-white" href="<?php echo esc_url( home_url( '/contactenos' ) ); ?>">Contáctenos</a>
                </div>
            </section>
            <section class="main__more ">
                <div class="main__more__bg" style="background-image:url('<?php echo get_template_directory_uri();  ?>/img/paralax-vita.jpg');"></div>
                <div class="inner"> 
                    <div class="main__more__info">
                        <h2 class="main__more__title">Lorem ipsum dolor sit amet</h2>
                    <a class="main__more__button btn btn-white" href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>">Conozca más</a>
                    </div>
                </div>
            </section>


<?php get_footer(); ?>
