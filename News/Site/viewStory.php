<?php
require_once 'classes/Connection.php';
require_once 'classes/Story.php';
require_once 'classes/Util.php';

try {
    $story = Story::find($_GET['id']);
    if ($story === false) {
        throw new Exception("Story not found");
    } else {
        $storyType = Util::selectByID('storytypeid', $story->storyTypeID);
        $writter = Util::selectByID('writterid', $story->writterID);
        $area = Util::selectByID('areawrittenid', $story->areaWritten);
    }
} catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}

    $leftTrendingStories = Story::selectAll(2,6);
    $trendingStories = Story::selectAll(2,8);
    $rightTrendingStories = Story::selectAll(2,12);

    $leftRecentStories = Story::selectAll(2);
    $recentStories = Story::selectAll(2,2);
    $rightRecentStories = Story::selectAll(2,4);

?>

<style>
    label {
        font-weight: bold;
        display: block;
    }

</style>

<!DOCTYPE html>
<html lang="en">

<body>

    <head>
        |
        <meta charset="utf-8">
        <title>Database Article</title>
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
        <link href="https://fonts.googleapis.com/css?family=Courgette|Merriweather:300i,400,700,900|Montserrat:300i,400,600,700,900" rel="stylesheet">
    </head>

    <div class="fullblack">
        <div class="container">

            <div class="twelve">
                <a href="index.php"><h1 class="color">The New Yorker</h1></a>
                
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
        <div class="twelve">
            <div class="twelve alpha omega">
                <h2 class="storyBigHeadline">
                    <?= $story->mainHeadline ?>
                </h2>
            </div>

            <!--        //////////////////Row 2///////////////////-->

            <div class="twelve alpha omega">
                <h4 class="storySubHeading">
                    <?= $story->keyInfo ?>
                </h4>
            </div>
        </div>

        <!--        //////////////////Row 3///////////////////-->

        <div class="six">
            <div class="six alpha omega">
                <p class="date">
                    Written in:
                    <?= $area["name"] ?> on
                    <?= $story->dateWritten ?> at
                    <?= $story->timeWritten ?>
                </p>
            </div>

            <!--        //////////////////Row 4///////////////////-->

            <div class="six alpha omega">
                <p class="date">
                    Topic:
                    <?= $storyType["name"] ?>
                </p>
            </div>

            <div class="six alpha omega bottomLine pull">
                <p class="authorInfo marginBottom">Written by <a href="<?= $writterID[" link"] ?>" target="_blank">
                        <?= $writter["firstName"] ?>
                        <?= $writter["lastName"] ?></a></p>
            </div>
        </div>

        <!--        //////////////////Row 5///////////////////-->

        <div class="twelve">
            <?= $story->story ?>
        </div>
    </div>

    <div class="fullgray">
        <div class="container">
            <div class="twelve">
                <div class="five alpha color ">
                    <h3>Author Information</h3>
                    <h4 class="subHeading">Name:
                        <?= $writter["firstName"] ?>
                        <?= $writter["lastName"] ?>
                    </h4>
                    <h4 class="subHeading">Author Location:
                        <?= $area["name"] ?>
                    </h4>
                    <h4 class="subHeading">Link: <a href="<?= $writterID["link"] ?>" target="_blank">Irish Independent</a></h4>
                    <p class="colorBottomLine"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="twelve">
            <div class="five alpha">
                <h3>Trending Stories</h3>
            </div>
        </div>

        <div class="twelve">
            <div class="four marginBottom alpha">
                <div class="four alpha omega">
                    <?php foreach ($leftTrendingStories as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->backupHeadline; ?></a></h3>

                    <p class="bottomLine"></p>

                    <?php } ?>
                </div>
            </div>

            <div class="four marginBottom">
                <div class="four alpha omega">
                    <?php foreach ($trendingStories as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->backupHeadline; ?></a></h3>

                    <p class="bottomLine"></p>

                    <?php } ?>
                </div>
            </div>

            <div class="four marginBottom omega">
                <div class="four alpha omega">
                    <?php foreach ($rightTrendingStories as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                    <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                            <?= $story->backupHeadline; ?></a></h3>

                    <p class="bottomLine"></p>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="fullgray">
        <div class="container">
            <div class="twelve">
                <div class="five color alpha">
                    <h3>Most Recent</h3>
                </div>
            </div>

            <div class="twelve">
                <div class="four marginBottom alpha">
                    <div class="four color alpha omega">
                        <?php foreach ($leftRecentStories as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                        <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                                <?= $story->backupHeadline; ?></a></h3>

                        <p class="colorBottomLine"></p>

                        <?php } ?>
                    </div>
                </div>

                <div class="four marginBottom">
                    <div class="four color alpha omega">
                        <?php foreach ($recentStories as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                        <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                                <?= $story->backupHeadline; ?></a></h3>

                        <p class="colorBottomLine"></p>

                        <?php } ?>
                    </div>
                </div>

                <div class="four marginBottom omega">
                    <div class="four color alpha omega">
                        <?php foreach ($rightRecentStories as $story) {
                  $storyTypeID = Util::selectByID('storyTypeID', $story->storyTypeID);
                  $writterID = Util::selectByID('writterid', $story->writterID);
                  $areaWritten = Util::selectByID('areawrittenid', $story->areaWritten); ?>

                        <h3><a href="viewStory.php?id=<?= $story->id; ?>">
                                <?= $story->backupHeadline; ?></a></h3>

                        <p class="colorBottomLine"></p>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
