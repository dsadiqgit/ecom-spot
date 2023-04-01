<?php
    $hero_slider = get_field('hero_slider'); 
    $hero_slider_2 = get_field('hero_slider_2'); 
    $hero_slider_3 = get_field('hero_slider_3'); 


    // Hero Slider
    $hero_slider_image_1 = get_field("hero_slider_image_1");
    $hero_slider_title_1 = get_field("hero_slider_title_1");
    $hero_slider_button_text_1 = $hero_slider_1["hero_slider_button_text_1"];
    $hero_slider_button_link_1 =  $hero_slider_1["hero_slider_button_link_1"];


    $hero_slider_image_2 = get_field("hero_slider_image_2");
    $hero_slider_title_2 = get_field("hero_slider_title_2");
    $hero_slider_button_text_2 = $hero_slider_2["hero_slider_button_text_2"];
    $hero_slider_button_link_2 =  $hero_slider_2["hero_slider_button_link_2"];

    $hero_slider_image_3 = get_field("hero_slider_image_3");
    $hero_slider_title_3 = get_field("hero_slider_title_3");
    $hero_slider_button_text_3 = $hero_slider_3["hero_slider_button_text_3"];
    $hero_slider_button_link_3 =  $hero_slider_3["hero_slider_button_link_3"];
?>

<section id="hero-slider">
    <div class="slider homepage-hero-main-slider">
        <?php
            if(($hero_slider)){
        ?>
        <div class="home-hero-img" style="background-image: url('<?php echo esc_url( $hero_slider['hero_slider_image_1']['url'] ); ?>');">
            <div class="container">
                <h1 class="hero-title"><?php echo $hero_slider['hero_slider_title_1']; ?></h1>
                <div class="button-div">
                    <a class="button" href="<?php echo $hero_slider['hero_slider_button_link_1']; ?>"><?php echo $hero_slider['hero_slider_button_text_1'] ?></a> 
                </div>
            </div>
        </div>
        <?php
            }
            else{

            }
        ?> 
        <?php
            if(($hero_slider_2)){
        ?>
         <div class="home-hero-img" style="background-image: url('<?php echo esc_url( $hero_slider_2['hero_slider_image_2']['url'] ); ?>');">
            <div class="container">
                <h1 class="hero-title"><?php echo $hero_slider_2['hero_slider_title_2']; ?></h1>
                <div class="button-div">
                    <a class="button" href="<?php echo $hero_slider_2['hero_slider_button_link_2']; ?>"><?php echo $hero_slider_2['hero_slider_button_text_2'] ?></a> 
                </div>
            </div>
        </div>
        <?php
            }
            else{

            }
        ?> 
        <?php
            if(($hero_slider_image_3)){
        ?>
        <div class="home-hero-img" style="background-image: url('<?php echo esc_url( $hero_slider_3['hero_slider_image_3']['url'] ); ?>');">
            <div class="container">
                <h1 class="hero-title"><?php echo $hero_slider_3['hero_slider_title_3']; ?></h1>
                <div class="button-div">
                    <a class="button" href="<?php echo $hero_slider_3['hero_slider_button_link_3']; ?>"><?php echo $hero_slider_3['hero_slider_button_text_3'] ?></a> 
                </div>
            </div>
        </div>
        <?php
            }
            else{

            }
        ?> 
    </div>
</section>