# <img src="./assets/images/wordpress-water-mark.png" width="100" align="center"> WordPressCategory Templates

## Post Template

We have worked with mostly single based content till now. In order to completed this lesson you will have to build some content provided to you in the post content file.
Create

1. 3 html posts assign each to the category html
1. 3 css posts assign each to the category css
1. 3 javascript posts assign each to the category javascript


add_theme_support('post_thumbnails');

## Category Template

category-css.php would be more specific than just category.php
category.php

```php

if (have_posts()):
    while (have_posts()):
        the_post();
        echo "each item";
    endwhile;
endif;


the_post_thumbnail('  square-150' );

```

