<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sefty Doc</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Average&family=Fjalla+One&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="master.css" />
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo@2x.png" alt="logo" />
        </div>

        <nav style="text-transform: capitalize;">
            <ul>
                <!-- <li ><a class="active" href="index.html">Home</a></li>
                <li>
                    <a href="Gallery.html">Art Gallery</a>
                </li>
                <li><a href="resume.html">Resume</a></li> -->
                <?php
                    include "nav.php";
                    navRender($navarr, $cur_page);
                ?>
            </ul>
        </nav>
    </header>