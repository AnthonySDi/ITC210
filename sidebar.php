<!-- ++++++++ Begin Sidebar ++++++++ -->
           
            <h2> 
                <?PHP 
                    if(is_page()) {
                        echo get_the_title($post->post_parent); 
                    } else {
                    echo 'Blog';
                    }
                ?>
            </h2>

            <ul>
                <?php 
                    if(is_page()){
                        if($post->post_parent) {
                        // if the page has parent, list the siblings.
                            wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''),)); 
                        } else {
                            wp_list_pages(array('child_of' => $post->ID,'title_li' => __(''),));
                        }
                    }else {
                        wp_list_categories(array('title' =>'',));
                        //because it makes sense to add categories to the blog side 
                        //NOTE: You could call different sidebar... Think about. 
                    }
                ?>
            </ul>
            <?php if(get_post_meta($post->ID, 'quote', true)) :  ?>
            <blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote>
            <?php endif ?>


        


            


<!-- ++++++++ End Sidebar ++++++++ -->