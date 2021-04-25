<?php get_header(); ?>
<div class="container">
    <div class="row">
        <!-- post -->
        <div class="col-8">
            <?php     
                global $wpdb;           
                if(have_posts()):
                while ((have_posts())):the_post()
            ?>
                        
            <div <?php post_class();?> id="<?php the_ID()?>">
                <!-- posts -->
                    <table class="table">
                        <thead>
                          <tr>
                              <th scope="row"><h2>                                      
                                      <a style="text-decoration: none" href="<?php the_permalink(); ?>"><?php the_title()?>
                                </a></h2>
                                </th> 
                                <th>
                                <?php                                                       
                                    $result = $wpdb->get_results( "SELECT * FROM wp_posts WHERE ID = ".get_the_ID() );  
                                    foreach ($result as $post){
                                        echo $post->email_author;
                                    }
                                 ?>
                                 </th>
                          </tr>
                         
                        </thead>                      
                        <tbody>
                          <tr>
                              <td>Content : <?php the_content()?>
                              </td>
                              
                          </tr>            
                        </tbody>
                  </table>
            </div>
             
            <?php
                    endwhile;                 
                endif;
             ?>
        </div>
        <!-- sidebar -->
        <div class="col-4">                  
            <div >
                <!-- posts -->
                <?php  if(have_posts()):?>
                    <table class="table">
                        <thead>
                          <tr>
                              <th scope="row"><h2>                                      
                                      Posts</h2></th> 
                          </tr>
                         
                        </thead>                      
                        <tbody>
                            <?php                         
                                while ((have_posts())):the_post()
                            ?>
                                      <tr>
                                          <td><a style="text-decoration: none" href="<?php the_permalink() ?>?id=<?php the_ID()?>"><?php the_title()?>
                                          </td>
                                      </tr>  
                                       <?php
                                endwhile;                 
                            endif;
                         ?>
                        </tbody>
                  </table>
            </div>
                       
        </div>
    </div>
</div>
<?php get_footer(); ?>