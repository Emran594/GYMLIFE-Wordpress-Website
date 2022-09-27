<section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    $gymlife_class = new WP_Query(
                        array(
                            "post_type" => "class",
                            'posts_per_page' => 5
                        )
                    )
                ?>
                <?php while($gymlife_class->have_posts(  ) ):
                    $gymlife_class->the_post(  )
                ?>
                <?php if(0 == $gymlife_class->current_post):?>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <?php the_post_thumbnail( );?>
                        </div>
                        <?php 
                         foreach((get_the_category()) as $category) {
                            $category->name.'';
                          } ?>
                        <div class="ci-text">
                            <span><?php echo $category->name ?></span>
                            <h5><?php the_title( );?></h5>
                            <a href="<?php the_permalink( );?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php if(1 == $gymlife_class->current_post):?>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <?php the_post_thumbnail( );?>
                        </div>
                        <?php 
                         foreach((get_the_category()) as $category) {
                            $category->name.'';
                          } ?>
                        <div class="ci-text">
                            <span><?php echo $category->name ?></span>
                            <h5><?php the_title( );?></h5>
                            <a href="<?php the_permalink( );?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php if(2 == $gymlife_class->current_post):?>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <?php the_post_thumbnail( );?>
                        </div>
                        <?php 
                         foreach((get_the_category()) as $category) {
                            $category->name.'';
                          } ?>
                        <div class="ci-text">
                            <span><?php echo $category->name ?></span>
                            <h5><?php the_title( );?></h5>
                            <a href="<?php the_permalink( );?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php if(3 == $gymlife_class->current_post):?>
                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <?php the_post_thumbnail( );?>
                        </div>
                        <?php 
                         foreach((get_the_category()) as $category) {
                            $category->name.'';
                          } ?>
                        <div class="ci-text">
                            <span><?php echo $category->name ?></span>
                            <h5><?php the_title( );?></h5>
                            <a href="<?php the_permalink( );?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php if(4 == $gymlife_class->current_post):?>
                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <?php the_post_thumbnail( );?>
                        </div>
                        <?php 
                         foreach((get_the_category()) as $category) {
                            $category->name.'';
                          } ?>
                        <div class="ci-text">
                            <span><?php echo $category->name ?></span>
                            <h5><?php the_title( );?></h5>
                            <a href="<?php the_permalink( );?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php endwhile;?>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->