<?php 
define('GYMLIFE_CUSTOMIZER_CONFIG_ID','gymlife_customizer_settings');
define('GYMLIFE_CUSTOMIZER_PANEL_ID','gymlife_customizer_panel');

if(class_exists('Kirki')){
    Kirki::add_config( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );
    Kirki::add_panel( 'GYMLIFE_CUSTOMIZER_PANEL_ID', array(
        'priority'    => 10,
        'title'       => esc_html__( 'gymlife Section Panel', 'gymlife' ),
        'description' => esc_html__( 'This Panel About gymlife Section', 'gymlife' ),
    ) );
    Kirki::add_section( 'gymlife_seciton_hero', array(
        'title'          => esc_html__( 'Homepage Slider', 'gymlife' ),
        'description'    => esc_html__( 'This is homepage slider ', 'gymlife' ),
        'panel'          => 'GYMLIFE_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-templates/frontpage.php' );
        }
    ) );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'banner_settings',
        'label'       => esc_html__( 'Is Active Banner Section', 'gymlife' ),
        'section'     => 'gymlife_seciton_hero',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'gymlife' ),
            'off' => esc_html__( 'Deactive', 'gymlife' ),
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'repeater',
        'label'       => esc_html__( 'Slider Data', 'gymlife' ),
        'section'     => 'gymlife_seciton_hero',
        'priority'    => 10,
        'row_label' => [
            'type'  => 'text',
            'value' => esc_html__( 'Add Slider Data', 'gymlife' ),
        ],
        'button_label' => esc_html__("Add new slider Item", 'gymlife' ),
        'settings'     => 'slider',
        'default'      => [
            [
                'slider_title' => esc_html__( 'Be strong Training Hard', 'gymlife' ),
                'slider_subtitle' => esc_html__( 'SHAPE YOUR BODY', 'gymlife' ),
                'link_text' => esc_html__( 'GET INFO', 'gymlife' ),
                'link_url'  => 'https://kirki.org/',
                'slider_img' => esc_url('#', 'gymlife'),
            ],
            [
                'slider_title' => esc_html__( 'ULTIMATE BODY TRAINER', 'gymlife' ),
                'slider_subtitle' => esc_html__( 'MAKE YOUR BODY STRONG', 'gymlife' ),
                'link_text' => esc_html__( 'view more', 'gymlife' ),
                'link_url'  => 'https://kirki.org/',
                'slider_img' => esc_url('#', 'gymlife'),
            ],
        ],
        'fields' => [
            'slider_title' => [
                'type'        => 'text',
                'label'       => esc_html__( 'Slider Title', 'gymlife' ),
                'description' => esc_html__( 'This will be the label for your link', 'gymlife' ),
                'default'     => '',
            ],
            'slider_subtitle'  => [
                'type'        => 'text',
                'label'       => esc_html__( 'Slider Subtitle', 'gymlife' ),
                'description' => esc_html__( 'This will be the link URL', 'gymlife' ),
                'default'     => '',
            ],
            'link_text'  => [
                'type'        => 'text',
                'label'       => esc_html__( 'Button text', 'gymlife' ),
                'description' => esc_html__( 'This will be the link URL', 'gymlife' ),
                'default'     => '',
            ],
            'link_url'  => [
                'type'        => 'text',
                'label'       => esc_html__( 'Button Link', 'gymlife' ),
                'description' => esc_html__( 'This will be the link URL', 'gymlife' ),
                'default'     => '',
            ],
            'slider_img' => array(
                'type'        => 'image',
                'label'       => esc_attr__( 'Slider image', 'gymlife' ),
                'description' => esc_attr__( 'Upload Featured Boxes image', 'gymlife' ),
                'default'     => '',
            ),
        ],
        'active_callback' => [
            [
                'setting' => 'banner_settings',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_section( 'gymlife_seciton_choseus', array(
        'title'          => esc_html__( 'Why Choose Us', 'gymlife' ),
        'description'    => esc_html__( 'Resaon Behind Choose Us', 'gymlife' ),
        'panel'          => 'GYMLIFE_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-templates/frontpage.php' );
        }
    ) );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'why_switcher',
        'label'       => esc_html__( 'Is Active Why Choose Us', 'gymlife' ),
        'section'     => 'gymlife_seciton_choseus',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'gymlife' ),
            'off' => esc_html__( 'Deactive', 'gymlife' ),
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'choise_subtitle',
        'label'    => esc_html__( 'Section Subtitle', 'gymlife' ),
        'section'  => 'gymlife_seciton_choseus',
        'default'  => esc_html__( 'WHY CHOSE US', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'why_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'choise_title',
        'label'    => esc_html__( 'Section Title', 'gymlife' ),
        'section'  => 'gymlife_seciton_choseus',
        'default'  => esc_html__( 'PUSH YOUR LIMITS FORWARD', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'why_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'repeater',
        'label'       => esc_html__( 'Our Speciality', 'gymlife' ),
        'section'     => 'gymlife_seciton_choseus',
        'priority'    => 10,
        'row_label' => [
            'type'  => 'text',
            'value' => esc_html__( 'Add Our Speciality', 'gymlife' ),
        ],
        'button_label' => esc_html__("Add new", 'gymlife' ),
        'settings'     => 'speciality',
        'default'      => [
            [
                'item_icon' => esc_html__( 'flaticon-034-stationary-bike', 'gymlife' ),
                'item_title' => esc_html__( 'Modern equipment', 'gymlife' ),
                'item_content' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                dolore facilisis.', 'gymlife' )
            ],
            [
                'item_icon' => esc_html__( 'flaticon-033-juice', 'gymlife' ),
                'item_title' => esc_html__( 'Healthy nutrition plan', 'gymlife' ),
                'item_content' => esc_html__( 'Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                facilisis', 'gymlife' )
            ],
            [
                'item_icon' => esc_html__( 'flaticon-002-dumbell', 'gymlife' ),
                'item_title' => esc_html__( 'Proffesponal training plan', 'gymlife' ),
                'item_content' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                dolore facilisis.', 'gymlife' )
            ],
            [
                'item_icon' => esc_html__( 'flaticon-014-heart-beat', 'gymlife' ),
                'item_title' => esc_html__( 'Unique to your needs', 'gymlife' ),
                'item_content' => esc_html__( 'Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                facilisis', 'gymlife' )
            ],
        ],
        'fields' => [
            'item_icon' => [
                'type'        => 'text',
                'label'       => esc_html__( 'Item Icon', 'gymlife' ),
                'description' => esc_html__( 'This will be the label for your link', 'gymlife' ),
                'default'     => '',
            ],
            'item_title'  => [
                'type'        => 'text',
                'label'       => esc_html__( 'Item Title', 'gymlife' ),
                'description' => esc_html__( 'This will be the link URL', 'gymlife' ),
                'default'     => '',
            ],
            'item_content'  => [
                'type'        => 'text',
                'label'       => esc_html__( 'Item Content', 'gymlife' ),
                'description' => esc_html__( 'This will be the link URL', 'gymlife' ),
                'default'     => '',
            ]
        ],
        'active_callback' => [
            [
                'setting' => 'why_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );

    Kirki::add_section( 'gymlife_seciton_banner', array(
        'title'          => esc_html__( 'Banner Section', 'gymlife' ),
        'description'    => esc_html__( 'This Section Will show as a Homepage Banner', 'gymlife' ),
        'panel'          => 'GYMLIFE_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-templates/frontpage.php' );
        }
    ) );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'banner_switcher',
        'label'       => esc_html__( 'Is Active Banner', 'gymlife' ),
        'section'     => 'gymlife_seciton_banner',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'gymlife' ),
            'off' => esc_html__( 'Deactive', 'gymlife' ),
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'banner_title',
        'label'    => esc_html__( 'Banner Title', 'gymlife' ),
        'section'  => 'gymlife_seciton_banner',
        'default'  => esc_html__( 'REGISTRATION NOW TO GET MORE DEALS', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'banner_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'banner_subtitle',
        'label'    => esc_html__( 'Banner Sub Title', 'gymlife' ),
        'section'  => 'gymlife_seciton_banner',
        'default'  => esc_html__( 'WHERE HEALTH, BEAUTY AND FITNESS MEET', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'banner_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'banner_btn_link',
        'label'    => esc_html__( 'Banner Button Url', 'gymlife' ),
        'section'  => 'gymlife_seciton_banner',
        'default'  => esc_html__( '#', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'banner_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'banner_btn_label',
        'label'    => esc_html__( 'Banner Button Label', 'gymlife' ),
        'section'  => 'gymlife_seciton_banner',
        'default'  => esc_html__( 'Appointment', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'banner_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'image',
        'settings'    => 'banner_img',
        'label'       => esc_html__( 'Banner Image', 'gymlife' ),
        'description' => esc_html__( 'Description Here.', 'gymlife' ),
        'section'     => 'gymlife_seciton_banner',
        'default'     => '',
        'active_callback' => [
            [
                'setting' => 'banner_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    
    //-----Gallery Section-------//

    Kirki::add_section( 'gymlife_seciton_gallery', array(
        'title'          => esc_html__( 'Gymlife Gallery', 'gymlife' ),
        'description'    => esc_html__( 'All Of Gymlife section Gallery', 'gymlife' ),
        'panel'          => 'GYMLIFE_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-templates/frontpage.php' );
        }
    ) );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'gallery_switcher',
        'label'       => esc_html__( 'Is Active Gallery', 'gymlife' ),
        'section'     => 'gymlife_seciton_gallery',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'gymlife' ),
            'off' => esc_html__( 'Deactive', 'gymlife' ),
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'image',
        'settings'    => 'gallery_img_big_1',
        'label'       => esc_html__( 'Big Image 1', 'gymlife' ),
        'description' => esc_html__( 'Here will Display Big Image 1', 'gymlife' ),
        'section'     => 'gymlife_seciton_gallery',
        'default'     => '',
        'active_callback' => [
            [
                'setting' => 'gallery_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'image',
        'settings'    => 'gallery_img_big_2',
        'label'       => esc_html__( 'Big Image 2', 'gymlife' ),
        'description' => esc_html__( 'Here will Display Big Image 2', 'gymlife' ),
        'section'     => 'gymlife_seciton_gallery',
        'default'     => '',
        'active_callback' => [
            [
                'setting' => 'gallery_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'repeater',
        'label'       => esc_html__( 'Gallery Images', 'gymlife' ),
        'section'     => 'gymlife_seciton_gallery',
        'priority'    => 10,
        'button_label' => esc_html__("Add new", 'gymlife' ),
        'settings'     => 'gallery',
        'default'      => [
            [
                'gallery_img' => esc_url( '#', 'gymlife'),
            ],
            [
                'gallery_img' => esc_url( '#', 'gymlife'),
            ],
            [
                'gallery_img' => esc_url( '#', 'gymlife'),
            ],
            [
                'gallery_img' => esc_url( '#', 'gymlife'),
            ]
        ],
        'fields' => [
            'gallery_img' => array(
                'type'        => 'image',
                'label'       => esc_attr__( 'Gallery Image', 'gymlife' ),
                'description' => esc_attr__( 'Upload Gallery Image', 'gymlife' ),
                'default'     => '',
            ),
        ],
        'active_callback' => [
            [
                'setting' => 'gallery_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_section( 'gymlife_team_heading', array(
        'title'          => esc_html__( 'Gymlife team Heading', 'gymlife' ),
        'description'    => esc_html__( 'This will show on gymlife team headng', 'gymlife' ),
        'panel'          => 'GYMLIFE_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-templates/frontpage.php' );
        }
    ) );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'team_heading',
        'label'    => esc_html__( 'Gymlife Team Heading', 'gymlife' ),
        'section'  => 'gymlife_team_heading',
        'default'  => esc_html__( 'Train With Experts', 'gymlife' ),
        'priority' => 10
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'team_subheading',
        'label'    => esc_html__( 'Gymlife Team Sub Heading', 'gymlife' ),
        'section'  => 'gymlife_team_heading',
        'default'  => esc_html__( 'Train With Experts', 'gymlife' ),
        'priority' => 10
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'team_btn_lebel',
        'label'    => esc_html__( 'Gymlife Team Button Lebel', 'gymlife' ),
        'section'  => 'gymlife_team_heading',
        'default'  => esc_html__( 'Appointment', 'gymlife' ),
        'priority' => 10
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'team_btn_url',
        'label'    => esc_html__( 'Gymlife Team Button Link', 'gymlife' ),
        'section'  => 'gymlife_team_heading',
        'default'  => esc_url( '#', 'gymlife' ),
        'priority' => 10
    ] );

    //----Get In Touch Section---//
    Kirki::add_section( 'gymlife_seciton_getintouch', array(
        'title'          => esc_html__( 'Gymlife Get In Touch', 'gymlife' ),
        'description'    => esc_html__( 'All Of Gymlife section Get In Touch', 'gymlife' ),
        'panel'          => 'GYMLIFE_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-templates/frontpage.php' );
        }
    ) );
    
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'getintouch',
        'label'       => esc_html__( 'Is Active Get In Touch', 'gymlife' ),
        'section'     => 'gymlife_seciton_getintouch',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'gymlife' ),
            'off' => esc_html__( 'Deactive', 'gymlife' ),
        ]
    ] );

    
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'repeater',
        'label'       => esc_html__( 'Get It Touch Info', 'gymlife' ),
        'section'     => 'gymlife_seciton_getintouch',
        'priority'    => 10,
        'button_label' => esc_html__("Add new", 'gymlife' ),
        'settings'     => 'getintouch_repeater',
        'default'      => [
            [
                'touch_icon' => esc_html__( 'fa-map-marker', 'gymlife'),
                'touch_content' => esc_html__( '333 Middle Winchendon Rd, Rindge,<br/> NH 03461', 'gymlife'),
            ],
            [
                'touch_icon' => esc_html__( 'fa-mobile', 'gymlife'),
                'touch_content' => esc_html__( '125-711-811', 'gymlife'),
            ],
            [
                'touch_icon' => esc_html__( 'fa-envelope', 'gymlife'),
                'touch_content' => esc_html__( 'Support.gymcenter@gmail.com', 'gymlife'),
            ]
        ],
        'fields' => [
            'touch_icon' => [
                'type'        => 'text',
                'label'       => esc_html__( 'Get Touch Icon', 'gymlife' ),
                'description' => esc_html__( 'This Will Show Icon', 'gymlife' ),
                'default'     => '',
            ],
            'touch_content' => [
                'type'        => 'text',
                'label'       => esc_html__( 'Get Touch Content', 'gymlife' ),
                'description' => esc_html__( 'This Will Show Content', 'gymlife' ),
                'default'     => '',
            ]
        ],
        'active_callback' => [
            [
                'setting' => 'getintouch',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );


    //-----About Page Start------//


    Kirki::add_section( 'gymlife_about_statics', array(
        'title'          => esc_html__( 'About Page Statistics', 'gymlife' ),
        'description'    => esc_html__( 'Gym Life About Statistics', 'gymlife' ),
        'panel'          => 'GYMLIFE_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-templates/about.php' );
        }
    ) );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'about_switcher',
        'label'       => esc_html__( 'Is Active Gallery', 'gymlife' ),
        'section'     => 'gymlife_about_statics',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'gymlife' ),
            'off' => esc_html__( 'Deactive', 'gymlife' ),
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'about_title',
        'label'    => esc_html__( 'About Page Title', 'gymlife' ),
        'section'  => 'gymlife_about_statics',
        'default'  => esc_html__( 'WHAT WE HAVE DONE', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'about_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'about_subtitle',
        'label'    => esc_html__( 'About Page Sub Title', 'gymlife' ),
        'section'  => 'gymlife_about_statics',
        'default'  => esc_html__( 'ABOUT US', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'about_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'textarea',
        'settings' => 'about_content',
        'label'    => esc_html__( 'About Page Sub Title', 'gymlife' ),
        'section'  => 'gymlife_about_statics',
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. aliquip ex ea commodo consequat sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'about_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'video_link',
        'label'    => esc_html__( 'Video Link', 'gymlife' ),
        'section'  => 'gymlife_about_statics',
        'default'  => esc_html__( '#', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'about_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'image',
        'settings'    => 'video_thumbnail',
        'label'       => esc_html__( 'Video Thumbnail', 'gymlife' ),
        'description' => esc_html__( 'Description Here.', 'gymlife' ),
        'section'     => 'gymlife_about_statics',
        'default'     => '',
        'active_callback' => [
            [
                'setting' => 'about_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'repeater',
        'label'       => esc_html__( 'Gymlife About Statistics', 'gymlife' ),
        'section'     => 'gymlife_about_statics',
        'priority'    => 10,
        'button_label' => esc_html__("Add new", 'gymlife' ),
        'settings'     => 'about_statistics',
        'default'      => [
            [
                'title' => esc_html__( 'Body Building', 'gymlife'),
                'data' => esc_html__( 95, 'gymlife'),
            ],
            [
                'title' => esc_html__( 'Training', 'gymlife'),
                'data' => esc_html__( 78, 'gymlife'),
            ],
            [
                'title' => esc_html__( 'Fitness', 'gymlife'),
                'data' => esc_html__( 87, 'gymlife'),
            ]
        ],
        'fields' => [
            'title' => [
                'type'        => 'text',
                'label'       => esc_html__( 'Get Touch Icon', 'gymlife' ),
                'description' => esc_html__( 'This Will Show Icon', 'gymlife' ),
                'default'     => '',
            ],
            'data' => [
                'type'        => 'number',
                'label'       => esc_html__( 'This Is Data Percentage', 'gymlife' ),
                'default'     => '',
                'choices'     => [
                    'min'  => 70,
                    'max'  => 100,
                    'step' => 1,
                ]
            ]
        ],
        'active_callback' => [
            [
                'setting' => 'about_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );


    //------Testimonial-------//
    Kirki::add_section( 'gymlife_testimonial', array(
        'title'          => esc_html__( 'Tesimonial Section', 'gymlife' ),
        'description'    => esc_html__( 'Gym Life About Testimonial Section', 'gymlife' ),
        'panel'          => 'GYMLIFE_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-templates/about.php' );
        }
    ) );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'testimonial_switcher',
        'label'       => esc_html__( 'Is Active Gallery', 'gymlife' ),
        'section'     => 'gymlife_testimonial',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'gymlife' ),
            'off' => esc_html__( 'Deactive', 'gymlife' ),
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'testimonial_section_title',
        'label'    => esc_html__( 'Testimonial Title', 'gymlife' ),
        'section'  => 'gymlife_testimonial',
        'default'  => esc_html__( 'Whats Our Client say', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'testimonial_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'testimonial_section_subtitle',
        'label'    => esc_html__( 'Testimonial Title', 'gymlife' ),
        'section'  => 'gymlife_testimonial',
        'default'  => esc_html__( 'Whats Our Client say', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'testimonial_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'testimonial_section_subtitle',
        'label'    => esc_html__( 'Testimonial Section Subtitle', 'gymlife' ),
        'section'  => 'gymlife_testimonial',
        'default'  => esc_html__( 'Testimonial', 'gymlife' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'testimonial_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'repeater',
        'label'       => esc_html__( 'Slider Data', 'gymlife' ),
        'section'     => 'gymlife_testimonial',
        'priority'    => 10,
        'row_label' => [
            'type'  => 'text',
            'value' => esc_html__( 'Add Testimonial Data', 'gymlife' ),
        ],
        'button_label' => esc_html__("Add new Testimonial Item", 'gymlife' ),
        'settings'     => 'testimonial',
        'default'      => [
            [
                'name' => esc_html__( 'Md Emran Sikder', 'gymlife' ),
                'content' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laborum exercitationem, minus laudantium ipsam perferendis?', 'gymlife' ),
                'testimonial_img' => esc_url('#', 'gymlife'),
            ],
            [
                'name' => esc_html__( 'MRS Vina', 'gymlife' ),
                'content' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laborum exercitationem, minus laudantium ipsam perferendis?', 'gymlife' ),
                'testimonial_img' => esc_url('#', 'gymlife'),
            ],
            [
                'name' => esc_html__( 'Sagor Khan', 'gymlife' ),
                'content' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laborum exercitationem, minus laudantium ipsam perferendis?', 'gymlife' ),
                'testimonial_img' => esc_url('#', 'gymlife'),
            ],
        ],
        'fields' => [
            'name' => [
                'type'        => 'text',
                'label'       => esc_html__( 'Testimonial Name', 'gymlife' ),
                'description' => esc_html__( 'This will show testimonial name', 'gymlife' ),
                'default'     => '',
            ],
            'content'  => [
                'type'        => 'textarea',
                'label'       => esc_html__( 'Testimonial Content', 'gymlife' ),
                'description' => esc_html__( 'This will be the link URL', 'gymlife' ),
                'default'     => '',
            ],
            'testimonial_img' => array(
                'type'        => 'image',
                'label'       => esc_attr__( 'Testimonial image', 'gymlife' ),
                'description' => esc_attr__( 'Upload Featured Boxes image', 'gymlife' ),
                'default'     => '',
            ),
        ],
        'active_callback' => [
            [
                'setting' => 'testimonial_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );

    Kirki::add_section( 'gymlife_timetable', array(
        'title'          => esc_html__( 'Tesimonial Section', 'gymlife' ),
        'description'    => esc_html__( 'Gym Life About Testimonial Section', 'gymlife' ),
        'panel'          => 'GYMLIFE_CUSTOMIZER_PANEL_ID',
        'priority'       => 90
    ) );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'timetable_switcher',
        'label'       => esc_html__( 'Is Have Time Chart', 'gymlife' ),
        'section'     => 'gymlife_timetable',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'gymlife' ),
            'off' => esc_html__( 'Deactive', 'gymlife' ),
        ]
    ] );
    Kirki::add_field( 'GYMLIFE_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'repeater',
        'label'       => esc_html__( 'Time Table', 'gymlife' ),
        'section'     => 'gymlife_timetable',
        'priority'    => 10,
        'row_label' => [
            'type'  => 'text',
            'value' => esc_html__( 'Add Time List', 'gymlife' ),
        ],
        'button_label' => esc_html__("Add Time", 'gymlife' ),
        'settings'     => 'timedata',
        'default'      => [
            [
                'class_title' => esc_html__( 'Weight Loss', 'gymlife' ),
                'trainer' => esc_html__( 'Emran Sikder', 'gymlife' )
            ],
            [
                'class_title' => esc_html__( 'Weight Loss', 'gymlife' ),
                'trainer' => esc_html__( 'Emran Sikder', 'gymlife' )
            ],
            [
                'name' => esc_html__( 'Sagor Khan', 'gymlife' ),
                'content' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laborum exercitationem, minus laudantium ipsam perferendis?', 'gymlife' ),
                'testimonial_img' => esc_url('#', 'gymlife'),
            ],
        ],
        'fields' => [
            'name' => [
                'type'        => 'text',
                'label'       => esc_html__( 'Testimonial Name', 'gymlife' ),
                'description' => esc_html__( 'This will show testimonial name', 'gymlife' ),
                'default'     => '',
            ],
            'content'  => [
                'type'        => 'textarea',
                'label'       => esc_html__( 'Testimonial Content', 'gymlife' ),
                'description' => esc_html__( 'This will be the link URL', 'gymlife' ),
                'default'     => '',
            ],
            'testimonial_img' => array(
                'type'        => 'image',
                'label'       => esc_attr__( 'Testimonial image', 'gymlife' ),
                'description' => esc_attr__( 'Upload Featured Boxes image', 'gymlife' ),
                'default'     => '',
            ),
        ],
        'active_callback' => [
            [
                'setting' => 'testimonial_switcher',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
} 




