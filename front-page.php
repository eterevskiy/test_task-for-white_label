<?php

/*
Template Name: home
*/

get_header(); ?>
<main class="main">

    <section class="hero">
        
            <div class="hero__inner">
                <div class="hero__text">
                    <h1 class="hero__text-title"><span><?php echo get_field('title_Hero')['bolt']?></span> <?php echo get_field('title_Hero')['light']?></h1>
                    <p class="hero__text-subtitle"><?php echo get_field('subtitle_Hero')?></p>
                </div>
                <div class="hero__slider">
                    <?php

				// проверяем есть ли в повторителе данные
				if (have_rows('slider')) :

					// перебираем данные
					while (have_rows('slider')) : the_row();?>

                    <div class="hero__item">
                        <div class="hero__item-box">
                            <img class="hero__item-img" src="<?php the_sub_field('slide');?>" alt="">
                        </div>
                    </div>


                    <?php endwhile;

					else : 
					
				endif; ?>
                </div>
            </div>
        
    </section>
    <section class="why_tahiti">
        <div class="container">
            <div class="why_tahiti__inner">
                <h2 class="why_tahiti__title"><span><?php echo get_field('title_Advantages')['bolt']?></span> <?php echo get_field('title_Advantages')['light']?></h2>
                <div class="why_tahiti__content">

                    <?php

                        // проверяем есть ли в повторителе данные
                        if (have_rows('advantages')) :

                            // перебираем данные
                            while (have_rows('advantages')) : the_row();?>

                    <div class="why_tahiti__item">
                        <div class="why_tahiti__item-box">
                            <img class="why_tahiti__item-img" src="<?php the_sub_field('image');?>" alt="">
                            <p class="why_tahiti__item-text"><?php the_sub_field('description');?></p>
                            <button class="why_tahiti__item-btn">Learn more</button>
                        </div>
                    </div>
                    <?php endwhile;

                            else : 
                            
                        endif; ?>

                </div>
            </div>
        </div>
    </section>
    <section class="discover">
        <div class="container">
            <div class="discover__inner">
                <h2 class="discover__title"><span><?php echo get_field('title_discover')['bolt']?></span> <?php echo get_field('title_discover')['light']?></h2>
                <div class="discover__content">
                    <?php
                    global $post;

                    $myposts = get_posts([ 
                        'numberposts' => 4,
                        'post_type'    => 'islands'
                    ]);
                   
                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                            ?>
                            <div class="discover__item">
                                <?php the_post_thumbnail(
                                    array(285,170),
                                    array(
                                        'class'=>'discover__item-img',
                                        'data-fancybox'=>'gallery'
                                        ));?>
                                <div class="discover__item-text">
                                    <h4 class="discover__item-title"><?php the_title()?></h4>
                                    <div class="discover__item-subtitle">
                                    <?php the_content();?>
                        </div>
                                </div>
                                <a href="<?php the_permalink()?>" class="discover__button">
                                    <p class="discover__button-text"><?php the_field('before_price')?><span> <?php the_field('price')?></span></p>
                                    <div class="discover__button-img">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="20" viewBox="0 0 20 20">
                                            <g>
                                                <g>
                                                    <path fill="#fff"
                                                        d="M1 9h15.559L9.278 1.719A1.02 1.02 0 0 1 10.719.278l8.954 8.954.049.046a1.02 1.02 0 0 1 0 1.441l-8.971 8.971A1.019 1.019 0 1 1 9.31 18.25l7.249-7.25H1a1 1 0 1 1 0-2z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                    <?php 
                        }
                    } else {
                        // Постов не найдено
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>