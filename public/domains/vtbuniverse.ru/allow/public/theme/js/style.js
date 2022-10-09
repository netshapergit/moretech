$( document ).ready(function() {
	console.log("s");
	
 
      if (window.location.pathname != '/') {
          
          $('.block.position-home_header').hide()
          
      } 
 
  
   $('.thumbnail.boxed-content').wrap("<a href=$('this .col-sm-12:nth-child(2) h3 a').href></a>");
});



$(document).ready(function(e){

	var windowHeight = window.innerHeight;

	$('#navigation-menu').css('height', windowHeight + 'px');
	$('#navigation-hover').css('height', windowHeight + 'px');
	$('#navigation-hover').hide();

	$(document).on('click', '#showMenu', function(){
		$('#navigation-hover').show();

		$('#navigation-menu').css('left', '0');

		$('#showMenu, #hideMenu').css('left', '0px');
		$('#showMenu, #hideMenu').html(' <img class="inner-width"  src="/site/theme/images/qqw.png">');
		$('#showMenu').attr('id', 'hideMenu');
		 
	});

	$(document).on('click', '#hideMenu', function(){
		$('#navigation-hover').hide();

		$('#navigation-menu').css('left', '-700px');

		$('#showMenu, #hideMenu').css('left', '0');
		$('#showMenu, #hideMenu').html('<img class="inner-width"  src="/site/theme/images/group.png">');
		$('#hideMenu').attr('id', 'showMenu');
	});

	$(document).on('click', '#navigation-hover', function(){
		$('#navigation-hover').hide();

		$('#navigation-menu').css('left', '-700px');

		$('#showMenu, #hideMenu').css('left', '0');
		$('#showMenu, #hideMenu').html('<img class="inner-width"  src="/site/theme/images/group.png">');
		$('#hideMenu').attr('id', 'showMenu');
	});
 
});