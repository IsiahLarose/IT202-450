<?php
include_once(__DIR__."/partials/header.partial.php");
if(Common::is_logged_in()){
    //this will auto redirect if user isn't logged in
}
?>
<div>
    <p style="color:green;font-size:46px;">
        Welcome, <?php echo Common::get_username();?> :)
    </p>
</div>