<?php
    $header = get_field('header');
?>

<h1><?php echo $header['title'];?></h1>

<p><?php echo $header['tagline'];?></p>

<img src="<?php echo $header['header_image'];?>" alt="">
