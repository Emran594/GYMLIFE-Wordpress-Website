<?php if ( true == get_theme_mod( 'why_switcher', true ) ) : ?>
<section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span><?php echo esc_html( get_theme_mod('choise_subtitle') );?></span>
                        <h2><?php echo esc_html( get_theme_mod('choise_title') );?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    $our_speciality = get_theme_mod( 'speciality');
                    foreach($our_speciality as $speciality):
                ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="<?php echo $speciality['item_icon']?>"></span>
                        <h4><?php echo $speciality['item_title']?></h4>
                        <p><?php echo $speciality['item_content']?></p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php endif; ?>