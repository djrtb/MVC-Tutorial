<!doctype html>
<html>
<head>
    <title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/foundation/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
    <script src="<?php echo URL; ?>public/foundation/js/vendor/what-input.min.js"></script>
    <script src="<?php echo URL; ?>public/foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <?php 
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
    ?>
</head>
<body>

<?php Session::init(); ?>
    
<div id="header">

    <?php if (Session::get('loggedIn') == false):?>
        <a class="button" href="<?php echo URL; ?>index">Index</a>
        <a class="button" href="<?php echo URL; ?>help">Help</a>
    <?php endif; ?>    
    <?php if (Session::get('loggedIn') == true):?>
        <a class="button" href="<?php echo URL; ?>dashboard">Dashboard</a>
        <a class="button" href="<?php echo URL; ?>note">Notes</a>
        
        <?php if (Session::get('role') == 'owner'):?>
        <a class="button" href="<?php echo URL; ?>user">Users</a>
        <?php endif; ?>
        
        <a class="button" href="<?php echo URL; ?>dashboard/logout">Logout</a>    
    <?php else: ?>
        <a class="button" href="<?php echo URL; ?>login">Login</a>
    <?php endif; ?>
</div>
    
<div id="content">
    
    