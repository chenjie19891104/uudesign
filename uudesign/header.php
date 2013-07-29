<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <title><?php bloginfo('name'); ?></title>

</head>
<body>
<div id="wrap">
    <div id="header">
         <div id = "logo">
             <a href="<?php echo get_option('home');?>/"><?php bloginfo('name'); ?></a>
         </div>
        <ul>
            <?php wp_list_pages('title_li=&depth=1&sortcolumn=menu_order');?>
        </ul>
    </div>