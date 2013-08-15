galleryDef = [	// Slideshow Images
		{image : 'img/gallery/fashion/fashion10.jpg', title : '<h1 class="leftcover">INSP<span>IRATE</span></h1><br><p>COMBINA TEXTURAS, ENCAJES, RAYAS, LENTEJUELAS,</p><br><p>Y ENCONTRA TU PROPIO LOOK.</p>', thumb : 'img/gallery/fashion/thmb/fashion10.jpg', url : ''},	
		{image : 'img/gallery/fashion/fashion11.jpg', title : '', thumb : 'img/gallery/fashion/thmb/fashion11.jpg', url : ''},
		{image : 'img/gallery/fashion/fashion12.jpg', title : '', thumb : 'img/gallery/fashion/thmb/fashion12.jpg', url : ''},
		{image : 'img/gallery/fashion/fashion13.jpg', title : '', thumb : 'img/gallery/fashion/thmb/fashion13.jpg', url : ''},	
		{image : 'img/gallery/fashion/fashion14.jpg', title : '', thumb : 'img/gallery/fashion/thmb/fashion14.jpg', url : ''},	
		{image : 'img/gallery/fashion/fashion15.jpg', title : '', thumb : 'img/gallery/fashion/thmb/fashion15.jpg', url : ''},	
		{image : 'img/gallery/fashion/fashion16.jpg', title : '', thumb : 'img/gallery/fashion/thmb/fashion16.jpg', url : ''},	
		{image : 'img/gallery/fashion/fashion17.jpg', title : '', thumb : 'img/gallery/fashion/thmb/fashion17.jpg', url : ''},	
		{image : 'img/gallery/fashion/fashion18.jpg', title : '', thumb : 'img/gallery/fashion/thmb/fashion18.jpg', url : ''},	
		];

jQuery(function($){
			
	$.supersized({
    	// Functionality
		slideshow               :   1,			// Slideshow on/off
		autoplay				:	1,			// Slideshow starts playing automatically
		start_slide             :   1,			// Start slide (0 is random)
		stop_loop				:	0,			// Stops slideshow on last slide
		random					: 	0,			// Randomize slide order (Ignores start slide)
		slide_interval          :   8000,		// Length between transitions
		transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed		:	1000,		// Speed of transition
		new_window				:	1,			// Image links open in new window/tab
		pause_hover             :   0,			// Pause slideshow on hover
		keyboard_nav            :   1,			// Keyboard navigation on/off
		performance				:	2,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed //  (Only works for Firefox/IE, not Webkit)
		image_protect			:	1,			// Disables image dragging and right click with Javascript
												   
		// Size & Position
		fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
		fit_landscape			:   0,			// Landscape images will not exceed browser width
		fit_portrait         	:   1,			// Portrait images will not exceed browser height  			   
		min_width		        :   100,			// Min width allowed (in pixels)
		min_height		        :   100,			// Min height allowed (in pixels)
		horizontal_center       :   0,			// Horizontally center background
		vertical_center         :   0,			// Vertically center background
		
												   
		// Components							
		slide_links				:	1,			// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		thumb_links				:	1,			// Individual thumb links for each slide
		thumbnail_navigation    :   0,			// Thumbnail navigation
		slides 					:  	galleryDef
		
	});
});

$(window).load(function(){
	//$('#thumb-list').find('img').greyScale({fadeTime: 300, reverse: false});
	$('#slidecaption').stop().animate({'right' : '80px'}, 800, 'easeOutBack');
});