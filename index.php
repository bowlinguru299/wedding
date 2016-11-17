
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php include 'sections/template/head.php'; ?>
    </head>
    
    <body data-smooth-scroll="true">
        <div class="animsition-overlay" data-animsition-overlay="true">
            <?php include 'sections/template/header.php'; ?>
            <div id="fullpage" class="wrapper">
                <?php include 'sections/hero.php'; ?>
                <?php include 'sections/story.php'; ?>
                <?php include 'sections/venue.php'; ?>
            </div>
        </div>
        <? /*include 'sections/template/nav_menu.php'; */ ?>
        <?php include 'sections/template/deferred.php'; ?>
    </body>

</html>
