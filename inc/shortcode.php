<?php

if(class_exists('ACF')){
    function acf_ajax_grid_gallery_shortcode($atts){

        $args = shortcode_atts(array(
            'id' => '',
        ), $atts);

        $id = $args['id'];
        $count = 0;

        if(!empty($id)){
            // Check value exists.
            if( have_rows('optionAAGGallery_main_flexible_field1', 'option') ){
                // Loop through rows.
                while ( have_rows('optionAAGGallery_main_flexible_field1', 'option') ){
                    the_row();

                    $count++;

                    if( get_row_layout() == 'optionAAGGallery_main_flexible_layout1' ){
                        if($count == $id){

                            // Class
                            $grid_gallery_class = get_sub_field('optionAAGGallery_grid_subfield5_tab2', 'option');
                            ?>
                            <div data-index="aa-grid-gallery-count-<?php echo $count; ?>" class="aa-grid-gallery aa-grid-gallery-count-<?php echo $count; ?>">
                                <div class="row aa-grid-gallery-row<?php 
                                if(!empty($grid_gallery_class)){
                                    echo ' ' . $grid_gallery_class;
                                }
                                ?>">
                                <?php
                                if( have_rows('optionAAGGallery_grid_flexible_field1', 'option') ){
                                    while ( have_rows('optionAAGGallery_grid_flexible_field1', 'option') ){
                                        the_row();

                                        if( get_row_layout() == 'optionAAGGallery_grid_flexible_layout1' ){
                                            $grid_image = get_sub_field('optionGallery_grid_layout1_subfield1', 'option');
                                            ?>
                                            <div class="aa-grid-gallery-list px-1 my-1 col-12 col-sm-6 col-md-4">
                                                <img src="<?php echo $grid_image['url']; ?>" alt="<?php echo $grid_image['alt']; ?>" width="100%" height="100%"/>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                }
            }
        }
        
    }
    add_shortcode('acf_ajax_grid_gallery', 'acf_ajax_grid_gallery_shortcode');
}