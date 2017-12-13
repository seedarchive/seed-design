<?php /* Template Name: workshops-template */ ?>
<?php define( 'WP_USE_THEMES', false ); ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SEED Workshops</title>
</head>
    
<div id="outer">
   <div id="container">
       

<!-- hack: inline the header here, to eliminate the search tags -->
<div id="headercontainer">
    <div class="header-image home"></div>
        
    <a href="<?php bloginfo( 'wpurl' ); ?>">
        <img class="seed-logo"
             src="<?php echo get_stylesheet_directory_uri(); ?>/images/seed-logo2.png" 
             alt="link to home page">
    </a>
    

</div>

<?php wp_head(); ?> 


        
        <div id="sharecontainer">
            <div class="sharebox" style="margin-bottom: -0.5px">
                <a href="http://www.facebook.com/sharer.php?u=<?php bloginfo( 'wpurl' ); ?>">
                  <img class="medialogo centerlogo"
                       src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-logo-2x.png" 
                       alt="share this site on facebook"></a>
            </div>
            <div class="sharebox" style="margin-bottom: -0.5px">
                <a href="http://twitter.com/share?text=A%20resource%20center%20focused%20on%20solutions%20for%20the%20environment,%20economy,%20and%20democracy&url=<?php bloginfo( 'wpurl' ); ?>">
                  <img class="medialogo centerlogo"
                       src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-logo-2x.png"
                       alt="share this site on twitter"></a>
            </div>
            <div id="sharetext">
                <h2 class="vertical"><span class="economy-text">SHARE</span></h2>
            </div>
        </div>

       
       <div id="main-textcontainer">
            <div id="titlecontainer">
                <h1>SEED WORKSHOPS</h1>
                <div class="title-underline blue"></div>
            </div>
            

<div id="workshopcontainer">


<br/><br/>

<p>
</div>

<div id="workshopcontainer">

<p>One of our core activities is organizing a series of in-person workshops
and other meetings of participants.  Below are links to the web pages for
the first two of these:</p>


<ul>

<li><a href="troyes-2017-workshop/">SEED Workshop at the 8th International
  Conference on Communities &amp; Technologies</a> (workshop held
  June 2017)</li>

<li><a href="https://ischool.uni-siegen.de/sozioinformatik/solutions-for-environment-economics-and-democracy-seed/">SEED
Workshop at the University of Siegen, Germany</a>
 (workshop held October 2017)</li>

</ul>


</div>


        <div class="rule black-rule"></div>
        </div>

       <?php get_footer(); ?>
    </div> 
</div>


</html>