<?php
require_once (__DIR__."/../includes/common.inc.php");
$logged_in = Common::is_logged_in(false);
?>
<!-- Bootstrap 4 CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- Include jQuery 3.5.1-->
<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <ul class="navbar-nav mr-auto">
        <?php if($logged_in):?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo Common::url_for("home");?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo Common::url_for("game");?>">Game</a>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Common::url_for("create_questionnaire");?>">Create Custom Survey</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo Common::url_for("surveys");?>">Surveys</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo Common::url_for("TakenSurveys");?>">Surveys you've Taken</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo Common::url_for("search");?>">Search through surveys</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo Common::url_for("ComboWDelete");?>">Edit and refine your surveys</a>
            </li>
        <?php endif; ?>
        <?php if(!$logged_in):?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo Common::url_for("login");?>">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo Common::url_for("register");?>">Register</a>
            </li>
        <?php else:?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo Common::url_for("logout");?>">Logout</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<div id="messages">
    <?php $flash_messages = Common::getFlashMessages();?>
    <?php if(isset($flash_messages) && count($flash_messages) > 0):?>
        <?php foreach($flash_messages as $msg):?>
            <div class="alert alert-<?php echo Common::get($msg, "type");?>"><?php
                echo Common::get($msg, "message");
                //We have the opening and closing tags right after/before the div tags to remove any whitespace characters
                ?></div>
        <?php endforeach;?>
    <?php endif;?>
</div>