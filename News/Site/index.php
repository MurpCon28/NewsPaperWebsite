<?php
require_once 'classes/Connection.php';
require_once 'classes/Story.php';
require_once 'classes/Util.php';

try {
    $topStory = Story::selectAll(1,19);
    $smallTopStories = Story::selectAll(2, 20);
    $otherTopStories = Story::selectAll(2);
    $meduimTopStory = Story::selectAll(1, 3);
    
    $leftTrendingStories = Story::selectAll(3);
    $trendingStories = Story::selectAll(3,9);
    $rightTrendingStories = Story::selectAll(3,5);
    
    $topSportsStory = Story::selectByCategory("Sports", 1);
    $sportsStory = Story::selectByCategory("Sports", 1, 1);
    $leftSportsStory = Story::selectByCategory("Sports", 1, 2);
    $middleSportsStory = Story::selectByCategory("Sports", 1, 3);
    $rightSportsStory = Story::selectByCategory("Sports", 1, 4);
    
    $topBusinessStory = Story::selectByCategory("Business",1);
    $businessStory = Story::selectByCategory("Business",2, 1);
    $leftBusinessStory = Story::selectByCategory("Business", 1, 3);
    $middleBusinessStory = Story::selectByCategory("Business", 1, 4);
    
    $topPoliticStory = Story::selectByCategory("Politics",1);
    $politicStory = Story::selectByCategory("Politics",2, 1);
    $leftPoliticStory = Story::selectByCategory("Politics", 1, 3);
    $middlePoliticStory = Story::selectByCategory("Politics", 1, 4);
    
    $leftIrishStory = Story::selectByCategory("Irish News",2);
    $irishStory = Story::selectByCategory("Irish News",2, 2);
    $rightIrishStory = Story::selectByCategory("Irish News",2, 4);
 
    $entertainmentStory = Story::selectByCategory("Entertainment",3);
    
    $styleStory = Story::selectByCategory("Style",3);
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>

<!DOCTYPE htnl>
<html>

<head>
    <meta charset="utf-8">
    <title>Database Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Merriweather:300i,400,700,900|Montserrat:300i,400,600,700,900" rel="stylesheet">
</head>

<body>

    <div class="fullblack">
        <div class="container">

            <div class="twelve">
                <a href="index.php">
                    <h1 class="color">The New Yorker</h1>
                </a>
                <div class="two alpha">
                    <a href="form.php">
                        <h3 class="subHeading">Author Login</h3>
                    </a>
                </div>
                
                <div class="two alpha">
                    <a href="index.php">
                        <h3 class="subHeading">Home</h3>
                    </a>
                </div>
            </div>

            <div class="clear"></div>

        </div>
    </div>
    <!--        //////////////////Row 1///////////////////-->

    <div class="container">
        <div class="twelve marginbottom">

            <h3 class="recent">Breaking News</h3>

            <div class="three alpha">
                <div class="three alpha omega">


                    <?php foreach ($otherTopStories as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->mainHeadline; ?></a></h3>
                    <p class="myarticle">
                        <?= $story->summaryStory; ?>
                    </p>
                    <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>
                    <p class="bottomLine"></p>

                    <?php } ?>


                </div>
            </div>

            <div class="six">

                <div class="six alpha omega">

                    <?php foreach ($topStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h2 class="bigHeadline"><a href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->mainHeadline; ?></a></h2>
                    <h4 class="subHeading">
                        <?= $story->keyInfo; ?>
                    </h4>
                    <p class="myarticle">
                        <?= $story->summaryStory; ?>
                    </p>
                    <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>
                    <p class="bottomLine"></p>
                    <?php } ?>

                </div>


                <div class="six alpha omega">

                    <?php foreach ($meduimTopStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->mainHeadline; ?></a></h3>

                    <p class="myarticle">
                        <?= $story->summaryStory; ?>
                    </p>

                    <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                    <p class="bottomLine"></p>

                    <?php } ?>

                </div>
            </div>

            <div class="three omega">
                <div class="three alpha omega">

                    <?php foreach ($smallTopStories as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->mainHeadline; ?></a></h3>
                    <p class="myarticle">
                        <?= $story->summaryStory; ?>
                    </p>
                    <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>
                    <p class="bottomLine"></p>
                    <?php } ?>

                </div>

            </div>
        </div>

        <div class="clear"></div>
        <!--        //////////////////Row 2///////////////////-->

    </div>

    <div class="fullgray">
        <div class="container">
            <div class="twelve color">
                <div class="twelve ">
                    <div class="five alpha">
                        <h3 class="recent">Trending Topics</h3>
                    </div>
                </div>
                <div class="four alpha">
                    <div class="four alpah omega">

                        <?php foreach ($leftTrendingStories as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                        <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                                <?= $story->backupHeadline; ?></a></h3>

                        <h4 class="subHeading">
                            <?= $story->summaryStory; ?>
                        </h4>

                        <p class="authorInfo">by
                            <?= $writterID["firstName"] ?>
                            <?= $writterID["lastName"] ?>
                        </p>

                        <p class="colorBottomLine"></p>

                        <?php } ?>

                    </div>

                </div>

                <div class="four">
                    <div class="four alpah omega">

                        <?php foreach ($trendingStories as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                        <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                                <?= $story->backupHeadline; ?></a></h3>

                        <h4 class="subHeading">
                            <?= $story->summaryStory; ?>
                        </h4>
                        
                        <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                        <p class="colorBottomLine"></p>

                        <?php } ?>

                    </div>
                </div>

                <div class="four omega">
                    <div class="four alpah omega">
                        <?php foreach ($rightTrendingStories as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                        <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                                <?= $story->backupHeadline; ?></a></h3>

                        <h4 class="subHeading">
                            <?= $story->summaryStory; ?>
                        </h4>
                        
                        <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                        <p class="colorBottomLine"></p>

                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="clear"></div>
            <!--        //////////////////Row 3///////////////////-->
        </div>
    </div>

    <div class="container">

        <div class="twelve">
            <div class="five alpha">
                <h3 class="recent">Sports</h3>
            </div>
        </div>

        <div class="twelve marginbottom">
            <div class="eight bottomLine alpha">

                <?php foreach ($topSportsStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                        <?= $story->mainHeadline; ?></a></h3>
                <p class="subHeading">
                    <?= $story->keyInfo; ?>
                </p>

                <p class="myarticle">
                    <?= $story->summaryStory; ?>
                </p>

                <p class="authorInfo">by
                    <?= $writterID["firstName"] ?>
                    <?= $writterID["lastName"] ?>
                </p>

                <?php } ?>
            </div>

            <div class="four bottomLine omega">

                <?php foreach ($sportsStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                        <?= $story->mainHeadline; ?></a></h3>
                <p class="subHeading">
                    <?= $story->summaryStory; ?>
                </p>
                
                <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                <?php } ?>
            </div>

            <div class="clear">
            </div>

            <div class="four bottomLine alpha">
                <?php foreach ($leftSportsStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                        <?= $story->mainHeadline; ?></a></h3>
                <p class="subHeading">
                    <?= $story->summaryStory; ?>
                </p>
                
                <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                <?php } ?>
            </div>

            <div class="four bottomLine">
                <?php foreach ($middleSportsStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                        <?= $story->mainHeadline; ?></a></h3>
                <p class="subHeading">
                    <?= $story->summaryStory; ?>
                </p>
                
                <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                <?php } ?>
            </div>

            <div class="four bottomLine omega">
                <?php foreach ($rightSportsStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                        <?= $story->mainHeadline; ?></a></h3>
                <p class="subHeading">
                    <?= $story->summaryStory; ?>
                </p>

                <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>
                
                <?php } ?>
            </div>
        </div>

        <div class="clear">
        </div>
        <!--        /////////Row 4/////////////////-->
    </div>

    <div class="fullgray">
        <div class="container color">

            <div class="twelve">
                <div class="five alpha">
                    <h3 class="recent">Politics</h3>
                </div>
            </div>

            <div class="twelve marginbottom">
                <div class="eight alpha">
                    <div class="eight bottomLine alpha colorBottomLine">

                        <?php foreach ($topPoliticStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                        <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                                <?= $story->mainHeadline; ?></a></h3>
                        <p class="subHeading">
                            <?= $story->keyInfo; ?>
                        </p>

                        <p class="myarticle color">
                            <?= $story->summaryStory; ?>
                        </p>

                        <p class="authorInfo">by
                            <?= $writterID["firstName"] ?>
                            <?= $writterID["lastName"] ?>
                        </p>

                        <?php } ?>
                    </div>

                    <div class="four colorBottomLine alpha">

                        <?php foreach ($leftPoliticStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                        <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                                <?= $story->mainHeadline; ?></a></h3>
                        <p class="subHeading">
                            <?= $story->summaryStory; ?>
                        </p>
                        
                        <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>
                        <?php } ?>
                    </div>

                    <div class="four omega colorBottomLine">

                        <?php foreach ($middlePoliticStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                        <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                                <?= $story->mainHeadline; ?></a></h3>
                        <p class="subHeading">
                            <?= $story->summaryStory; ?>
                        </p>
                        
                        <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>
                        <?php } ?>
                    </div>



                </div>

                <div class="four omega">
                    <div class="four alpha omega">

                        <?php foreach ($politicStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                        <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                                <?= $story->mainHeadline; ?></a></h3>
                        <p class="subHeading">
                            <?= $story->summaryStory; ?>
                        </p>
                        
                        <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                        <p class="colorBottomLine"></p>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="clear">
    </div>
    <!--        /////////Row 9/////////////////-->

    <div class="container">
        <div class="twelve">
            <div class="five alpha">
                <h3 class="recent">Business</h3>
            </div>
        </div>

        <div class="twelve marginbottom">
            <div class="eight alpha">
                <div class="eight bottomLine alpha">

                    <?php foreach ($topBusinessStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->mainHeadline; ?></a></h3>
                    <p class="subHeading">
                        <?= $story->keyInfo; ?>
                    </p>

                    <p class="myarticle">
                        <?= $story->summaryStory; ?>
                    </p>

                    <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                    <?php } ?>
                </div>

                <div class="four bottomLine alpha">

                    <?php foreach ($leftBusinessStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->mainHeadline; ?></a></h3>
                    <p class="subHeading">
                        <?= $story->summaryStory; ?>
                    </p>
                    
                    <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>
                    <?php } ?>
                </div>

                <div class="four omega bottomLine">

                    <?php foreach ($middleBusinessStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->mainHeadline; ?></a></h3>
                    <p class="subHeading">
                        <?= $story->summaryStory; ?>
                    </p>
                    
                    <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>
                    <?php } ?>
                </div>



            </div>

            <div class="four omega">
                <div class="four alpha omega">

                    <?php foreach ($businessStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->mainHeadline; ?></a></h3>
                    <p class="subHeading">
                        <?= $story->summaryStory; ?>
                    </p>
                    
                    <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                    <p class="bottomLine"></p>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>

    <div class="clear">
    </div>
    <!--        /////////Row 10/////////////////-->

    <div class="fullgray">
        <div class="container color">

            <div class="twelve">
                <div class="five alpha">
                    <h3 class="recent">Irish News</h3>
                </div>
            </div>

            <div class="twelve marginbottom">
                <div class="four alpha">

                    <?php foreach ($leftIrishStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->mainHeadline; ?></a></h3>
                    <p class="subHeading color">
                        <?= $story->summaryStory; ?>
                    </p>
                    
                    <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                    <p class="colorBottomLine"></p>
                    <?php } ?>
                </div>

                <div class="four">

                    <?php foreach ($irishStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->mainHeadline; ?></a></h3>
                    <p class="subHeading color">
                        <?= $story->summaryStory; ?>
                    </p>
                    
                    <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                    <p class="colorBottomLine"></p>
                    <?php } ?>
                </div>

                <div class="four omega">

                    <?php foreach ($rightIrishStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->mainHeadline; ?></a></h3>
                    <p class="subHeading color">
                        <?= $story->summaryStory; ?>
                    </p>
                    
                    <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                    <p class="colorBottomLine"></p>
                    <?php } ?>
                </div>

                <div class="clear">
                </div>
            </div>
        </div>
    </div>

    <div class="clear">
    </div>
    <!--        /////////Row 11/////////////////-->

    <div class="container">
        <div class="twelve">
            <div class="six alpha">
                <h3 class="recent">Entertainment</h3>
            </div>

            <div class="six omega">
                <h3 class="recent">Style</h3>
            </div>
        </div>

        <div class="twelve marginbottom">
            <div class="six alpha">

                <?php foreach ($entertainmentStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                        <?= $story->mainHeadline; ?></a></h3>
                
                <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                <p class="bottomLine"></p>
                <?php } ?>
            </div>

            <div class="six omega">

                <?php foreach ($styleStory as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                <h3><a class="link" href="viewStory.php?id=<?= $story->id; ?>">
                        <?= $story->mainHeadline; ?></a></h3>
                
                <p class="authorInfo">by
                        <?= $writterID["firstName"] ?>
                        <?= $writterID["lastName"] ?>
                    </p>

                <p class="bottomLine"></p>
                <?php } ?>
            </div>

            <div class="clear">
            </div>
        </div>

    </div>

    <div class="clear">
    </div>
    <!--        /////////Row 12/////////////////-->

</body>

</html>
