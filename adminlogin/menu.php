<?php

include("../connect.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning Website</title>

    <link rel="stylesheet" href="stylee.css">
</head>

<body>
    <section class="navbar">
        <div class="container">
            <div class="flex">
                <div class="logo">
                <a href="#" title="Logo">
                    <h1>BRAINBOOTER</h1>
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="dashboard.php">dashboard</a>
                    </li>
                    <li>
                        <a href="course.php">course</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>product.php">admin</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>product.php">user</a>
                    </li>
                </ul>
                
            </div>
           

            </div>
            <div class="clearfix"></div>
        </div>
    </section>