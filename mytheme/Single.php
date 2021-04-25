<?php 
    $id=0;
    $id = $_GET['id'];
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <!-- post -->
        <div class="col-8">
            <?php
                if(have_posts()):
                    while ((have_posts())):the_post()
                   
            ?>
                        
            <div <?php post_class()?> id="<?php the_ID()?>">
                <!-- posts -->
                    <table class="table">
                        <thead>
                          <tr>
                              <th scope="row"><h2>                                      
                                     <?php the_title()?>
                                 </h2></th>
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
            <section id="sidebar">
               <?php dynamic_sidebar('main-sidebar');?>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>