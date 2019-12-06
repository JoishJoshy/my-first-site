<!DOCTYPE html>
<html>
<head>
<title>
<?php wp_title();?>
</title>
<?php wp_head();?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
<style>
</style>
</head>
<body style="background-color:;"class="bi">
<?php wp_nav_menu(array('container_class'=>'menubar'));?>
</div>