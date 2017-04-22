
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php include 'sections/template/head.php'; ?>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-88643750-1', 'auto');
          ga('send', 'pageview');
        
        </script>
    </head>
    
    <body data-smooth-scroll="true">
        <div class="animsition-overlay" data-animsition-overlay="true">
            <?php include 'sections/template/header.php'; ?>
            <div id="fullpage" class="wrapper">
                <?php include 'sections/hero.php'; ?>
                <?php include 'sections/story.php'; ?>
                <?php include 'sections/venue.php'; ?>
                <?php include 'sections/logistics.php'; ?>
                <?php include 'sections/timeline.php'; ?>
                <?php include 'sections/rsvp.php'; ?>
                <?php include 'sections/registry.php';  ?>
            </div>
        </div>
        <? /*include 'sections/template/nav_menu.php'; */ ?>
        <?php include 'sections/template/deferred.php'; ?>
    </body>

</html>
