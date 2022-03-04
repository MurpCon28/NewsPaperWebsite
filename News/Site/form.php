<?php
require_once 'classes/Connection.php';
require_once 'classes/Story.php';
require_once 'classes/Util.php';

try {
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Submit Article</title>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Merriweather:300i,400,700,900|Montserrat:300i,400,600,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">

        <div class="fullblack">
            <div class="container">

                <div class="twelve">
                    <a href="index.php">
                        <h1 class="color">The New Yorker</h1>
                    </a>
                    
                    <div class="two alpha">
                        <a href="index.php">
                            <h3 class="subHeading">Home</h3>
                        </a>
                    </div>
                </div>

                <div class="clear"></div>

            </div>
        </div>

        <div class="container">

            <div class="twelve">
                <h2><span class="underline">Submit Article</span> <span><i class="fas fa-newspaper myicon"></i> </span></h2>
            </div>
        </div>

        <div class="fullgray">
            <div class="container">
                <div class="three marginBottom">
                    <p class="storySubHeading color colorUnderline">Author Information</p>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="six">
                <h3>Author</h3>
                <input type="text" name="firstname" id="firstname" placeholder="First Name">
                <h5 class="error" id="firstnameError"></h5>
            </div>

            <div class="six">
                <h3><br></h3>
                <input type="text" name="lastname" id="lastname" placeholder="Surname">
                <h5 class="error" id="lastnameError"></h5>
            </div>

            <div class="six">
                <h3>Link</h3>
                <input type="url" name="link" id="link" placeholder="example: https://www.independent.ie/">
                <h5 class="error" id="linkError"></h5>
            </div>

            <div class="six">
                <h3>Location</h3>
                <input type="text" name="location" id="location" placeholder="example: Dublin">
                <h5 class="error" id="locationError"></h5>
            </div>
        </div>

        <div class="fullgray">
            <div class="container">
                <div class="three marginBottom">
                    <p class="storySubHeading color colorUnderline">Story Information</p>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="six">
                <h3>Date and Time</h3>
                <input type="datetime-local" name="date" id="date" placeholder="example: 02-05-19">
                <h5 class="error" id="dateError"></h5>
            </div>

            <div class="six">
                <h3>Story Type</h3>
                <select name="story" id="story">
                    <option></option>
                    <option value="sport">Sport</option>
                    <option value="politics">Politics</option>
                    <option value="entertainment">Entertainment</option>
                    <option value="weather">Business</option>
                    <option value="environmental">Irish News</option>
                    <option value="breaking">Style</option>
                </select>
                <h5 class="error" id="storyTypeError"></h5>
            </div>

            <div class="twelve">
                <h3>Headline</h3>
                <input type="text" name="headline" id="headline">
                <h5 class="error" id="headlineError"></h5>
            </div>

            <div class="twelve">
                <h3>Sub Heading</h3>
                <input type="text" name="subHeading" id="subHeading">
                <h5 class="error" id="subHeadingError"></h5>
            </div>

            <div class="twelve">
                <h3>Story</h3>
                <textarea class="textbox" name="article" id="article"></textarea>
                <h5 class="error" id="articleError"></h5>
            </div>


            <div class="six mtop">
                <input type="submit" id="submit" value="Submit">
                <input type="reset" id="reset" value="Reset">
            </div>

            <!--closing form-->

        </div>
        <!--closing div-->
    </form>

</body>

<script src="js/javascript.js"></script>

</html>
