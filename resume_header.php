<!DOCTYPE html>
<html lang="en" dir="ltr" style="background-color: white;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Truong Minh Nam Phu's resume</title>
    <link rel="stylesheet" href="resume_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=PT+Sans+Narrow&display=swap" rel="stylesheet">
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

    