<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php site_url(); ?>/template/style.css" type="text/css">

</head>
<body>
<div class="wrap">

    <header>
        <h1><?php site_name(); ?></h1>
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>

    <article>
        <h2><?php page_title(); ?></h2>
        <?php page_content(); ?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br /><?php site_version(); ?></small>
    </footer>

</div>
</body>
</html>