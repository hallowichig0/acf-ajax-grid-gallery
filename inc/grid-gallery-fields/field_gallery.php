<?php

#Grid Gallery
acf_add_local_field_group(array(
    'key' => 'optionAAGGallery_grid_key',
    'title' => 'Grid Gallery',
    'fields' => array (),
    'position' => 'acf_after_title',
    'menu_order' => 1,
    'location' => array (
        array (
            array (
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'aagg-settings',
            ),
        ),
    ),
));

        #Grid Gallery Row
        acf_add_local_field(array(
            'key' => 'optionAAGGallery_main_flexible_field_key',
            'label' => '',
            'instructions' => 'shortcode: [acf_ajax_grid_gallery id="1"]',
            'name' => 'optionAAGGallery_main_flexible_field1',
            'type' => 'flexible_content',
            'button_label' => 'Add Grid Gallery',
            'parent' => 'optionAAGGallery_grid_key',
            'layouts' => array(
                array(
                    'key'           => 'optionAAGGallery_main_flexible_layout1_key',
                    'name'          => 'optionAAGGallery_main_flexible_layout1',
                    'label'         => 'Grid Gallery',
                    'display'       => 'block',
                    'min' => '',
                    'max' => '',
                    ),
            )
        ));

                //Tab1 Gallery
                acf_add_local_field(array(
                    'key'           => 'optionAAGGallery_grid_tab1_key',
                    'label'         => 'Gallery',
                    'name'          => 'optionAAGGallery_grid_tab1',
                    'type'          => 'tab',
                    'parent'        => 'optionAAGGallery_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAAGGallery_main_flexible_layout1_key', // layout key
                ));

                #Grid Gallery Image Row Fields
                acf_add_local_field(array(
                    'key' => 'optionAAGGallery_grid_flexible_field_key',
                    'label' => '',
                    'name' => 'optionAAGGallery_grid_flexible_field1',
                    'type' => 'flexible_content',
                    'button_label' => 'Add Image',
                    'parent' => 'optionAAGGallery_main_flexible_field_key', //flexible field key
                    'parent_layout'=> 'optionAAGGallery_main_flexible_layout1_key', // layout key

                    'layouts' => array(
                        array(
                            'key'           => 'optionAAGGallery_grid_flexible_layout1_key',
                            'name'          => 'optionAAGGallery_grid_flexible_layout1',
                            'label'         => 'Image',
                            'display'       => 'block',
                            'min' => '',
                            'max' => '',
                            ),
                    )
                ));
                            //Image
                            acf_add_local_field(array(
                                'key'          => 'optionGallery_grid_layout1_subfield1_key',
                                'label'        => 'Image',
                                'name'         => 'optionGallery_grid_layout1_subfield1',
                                'type'         => 'image',
                                'parent'       => 'optionAAGGallery_grid_flexible_field_key', //flexible field key
                                'parent_layout'=> 'optionAAGGallery_grid_flexible_layout1_key', // layout key
                            ));

                //Tab2 Setting
                acf_add_local_field(array(
                    'key'          => 'optionAAGGallery_grid_tab2_key',
                    'label'        => 'Setting',
                    'name'         => 'optionAAGGallery_grid_tab2',
                    'type'         => 'tab',
                    'parent'       => 'optionAAGGallery_main_flexible_field_key', //flexible field key
                    'parent_layout' => 'optionAAGGallery_main_flexible_layout1_key',
                ));

                // Add Class
                acf_add_local_field(array(
                    'key'          => 'optionAAGGallery_grid_subfield5_tab2_key',
                    'label'        => 'Additional Class',
                    'instructions' => 'Add class in the grid-gallery-row',
                    'name'         => 'optionAAGGallery_grid_subfield5_tab2',
                    'type'         => 'text',
                    'parent'       => 'optionAAGGallery_main_flexible_field_key', //flexible field key
                    'parent_layout'=> 'optionAAGGallery_main_flexible_layout1_key', // layout key
                ));