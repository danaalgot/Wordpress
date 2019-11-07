     <?php  get_header(); ?>
    <main>
       <h2>Index Template File</h2>

       <?php 
            $home = array( 'menu' => 'Menu One'); //This is how you pick what menu you want to show
            wp_nav_menu( $home );
         ?>

    </main>
    <?php  get_footer(); ?>
