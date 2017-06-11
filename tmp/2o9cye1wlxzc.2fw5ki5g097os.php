<!--
    /*
	*Author: Nate Hascup & Patrick Callahan
	*Greenriver IT 328
	*Badgery splash.html
    *Landing page for new users
    * --Hope to make it dynamic where it will show user stats if user is logged in on this page
	*/
-->

<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>

<img src="images/badge-wearing-badger.png" height=200px>


<h2>Welcome to Badgery!</h2>

<p>Welcom to Badgery, the badge achievment system for your life.
Whether you collect beer caps or watch birds, you can collect badges to chronicle your beer drinking, bird watching, or any other endeavors you can think up.
So sign up and see what categories we have, or build your own! (coming soon)</p>





<!----start-footer--->
		<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>