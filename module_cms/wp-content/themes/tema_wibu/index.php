<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body>
    <div>
        <?php wp_nav_menu(array(
            'theme_location' => 'header-menu'
        )) ?>
    </div>
    <?php if(have_posts()): while (have_posts()): the_post(); ?>
       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel eveniet vero aperiam modi veniam officiis consequuntur magnam. Recusandae cumque sit modi natus mollitia error fugiat, officiis, aspernatur accusantium ipsam unde.
    ?>
    <?php endwhile;endif; ?>
</body>
</html>