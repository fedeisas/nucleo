<!DOCTYPE html>

	<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
	<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?=$data['language']?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
	<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?=$data['language']?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
	<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?=$data['language']?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang="<?=$data['language']?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"> <!--<![endif]-->
	<head>

		<title><?php echo $template['title']; ?></title>
		<?php echo $template['partials']['meta']; ?>
		<?php echo $template['partials']['css']; ?>

	</head>

	<body class="<?=$this->router->class?> hide-extras">

		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

		<?php echo $template['partials']['header']; ?>

		<?php echo $template['body']; ?>

		<?php 
			if( isset($template['partials']['footer']) ) {
				echo $template['partials']['footer'];
			}
		?>

		<?php echo $template['partials']['js']; ?>

	</body>

</html>