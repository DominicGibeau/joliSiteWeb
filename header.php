<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Theme</title>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;400;600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?> /normalize.css" />
        <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?> /style.css" />
    </head>
    <body>

<div id="menu" class="global">

<input type="checkbox" name="" id="chk_burger">
<label id="burger" for="chk_burger"> 
    
<svg   width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>

</label> 

<header class="menu__header">

<?php wp_nav_menu(array("container" => "nav")); ?>
</header>

</div>

