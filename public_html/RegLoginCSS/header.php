<head>
    <title>
        IT 202 Simple survey
    </title>
    <link rel="stylesheet" style="text/css" href="style.css">
</head>
<style>
    li {
        float: left;
    }

    a {
        display: block;
        padding: 8px;
        background-color: none;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
</style>
<?php
    require("config.php");
    session_start();
?>
<nav>
    <p>
        Welcome to my Simple Survey
    </p>
    <ul>
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="login.php">login</a>
        </li>
        <li>
            <a href="register.php">register</a>
        </li>
        <li>
            <a href="logout.php">logout</a>
        </li>
    </ul>
</nav>