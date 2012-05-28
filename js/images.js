	// BACKGROUND IMAGES===============================================================================
		jQuery(function($){
				$.supersized({
				
					//Functionality
					slideshow               :   1,		//Slideshow on/off
					autoplay				:	1,		//Slideshow starts playing automatically
					start_slide             :   1,		//Start slide (0 is random)
					random					: 	0,		//Randomize slide order (Ignores start slide)
					slide_interval          :   6000,	//Length between transitions
					transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	800,	//Speed of transition
					new_window				:	1,		//Image links open in new window/tab
					pause_hover             :   0,		//Pause slideshow on hover
					keyboard_nav            :   1,		//Keyboard navigation on/off
					performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,		//Disables image dragging and right click with Javascript
					image_path				:	'img/', //Default image path

					//Size & Position
					min_width		        :   0,		//Min width allowed (in pixels)
					min_height		        :   0,		//Min height allowed (in pixels)
					vertical_center         :   1,		//Vertically center background
					horizontal_center       :   1,		//Horizontally center background
					fit_portrait         	:   1,		//Portrait images will not exceed browser height
					fit_landscape			:   0,		//Landscape images will not exceed browser width
					
					//Components
					navigation              :   1,		//Slideshow controls on/off
					thumbnail_navigation    :   0,		//Thumbnail navigation
					slide_counter           :   1,		//Display slide numbers
					slide_captions          :   1,		//Slide caption (Pull from "title" in slides array)
					slides 					:  	[		//Slideshow Images
														{image : 'img/6.jpg', title : 'Follow Your Curiosity<span>I have no special talent. I am only passionately curious </span>'},  
														{image : 'img/2.jpg', title : 'Perseverance is Priceless<span>Its not that Im so smart; its just that I stay with problems longer</span>'},  
														{image : 'img/3.jpg', title : 'Focus on the Present<span>Any man who can drive safely while kissing a pretty girl is simply not giving the kiss the attention it deserves</span>'},  
														{image : 'img/4.jpg', title : 'The Imagination is Powerful<span>Imagination is everything. It is the preview of lifes coming attractions. Imagination is more important than knowledge</span>'},  
														{image : 'img/5.jpg', title : 'Make Mistakes<span>A person who never made a mistake never tried anything new</span>'},  
														{image : 'img/1.jpg', title : 'Live in the Moment<span>I never think of the future   it comes soon enough</span>'}, 
														{image : 'img/7.jpg', title : 'Create Value <span>Strive not to be a success, but rather to be of value</span>'},  
														{image : 'img/8.jpg', title : 'Dont be repetitive<span>Insanity: doing the same thing over and over again and expecting different results</span>'},  
														{image : 'img/9.jpg', title : 'Knowledge Comes From Experience<span>Information is not knowledge. The only source of knowledge is experience</span>'},  
														{image : 'img/10.jpg', title : 'Learn the Rules and Then Play Better<span>You have to learn the rules of the game. And then you have to play better than anyone else</span>'},  
														{image : 'img/11.jpg', title : 'About Design<span>Design is not just what it looks like and feels like. Design is how it works</span>'},  
														{image : 'img/12.jpg', title : 'A vision<span>I think we re having fun. I think our customers really like our products. And we re always trying to do better</span>'}
												]
												
				}); 
		    });
			
