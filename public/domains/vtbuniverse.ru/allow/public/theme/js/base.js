$(function() {
	
	$(".block.position-hero .block.position-main .inner").prepend('<div id="s3ds">ВТБ вселенная</div>')
	
	var o = $("#s3ds");
	
	$(".block.position-hero").on("mousemove", function (t) {
		var e = -($(window).innerWidth() / 2 - t.pageX) / 30,
			n = ($(window).innerHeight() / 2 - t.pageY) / 10;
		o.attr("style", "transform: rotateY(" + e + "deg) rotateX(" + n + "deg);-webkit-transform: rotateY(" + e + "deg) rotateX(" + n + "deg);-moz-transform: rotateY(" + e + "deg) rotateX(" + n + "deg)")
	})
	
	$('#hamburger-show').on('click', function() {
		$('body').css({'overflow': 'hidden'});
		$('.page').addClass('blurred');
		$('.block.position-slide_menu').fadeIn(300);
	});
	
	$('#hamburger-close').on('click', function() {
		$('.block.position-slide_menu').fadeOut(300, function() {
			$('.page').removeClass('blurred');
			$('body').css({'overflow': 'auto'});
		});
		
	});
	
	var ctx = document.getElementById("myChart").getContext('2d');
	var ctx2 = document.getElementById("myChart2").getContext('2d');
	
	var blockFinmodel = $('.block.position-finmodel');
	
	
	var gradient1 = ctx.createRadialGradient(157, 157, 100, 157, 157, 157);
	gradient1.addColorStop(0, '#bb1c88');   
	gradient1.addColorStop(0.7, '#bb1c88'); 
	gradient1.addColorStop(0.7, '#812a7c');
	gradient1.addColorStop(1, '#812a7c'); 
	
	var gradient2 = ctx.createRadialGradient(157, 157, 100, 157, 157, 157);
	gradient2.addColorStop(0, '#f6b26e');   
	gradient2.addColorStop(0.7, '#f6b26e'); 
	gradient2.addColorStop(0.7, '#c69c6d');
	gradient2.addColorStop(1, '#c69c6d'); 
	
	var gradient3 = ctx.createRadialGradient(157, 157, 100, 157, 157, 157);
	gradient3.addColorStop(0, '#d749c7');   
	gradient3.addColorStop(0.7, '#d749c7'); 
	gradient3.addColorStop(0.7, '#b450a0');
	gradient3.addColorStop(1, '#b450a0'); 
	
	var gradient4 = ctx.createRadialGradient(157, 157, 100, 157, 157, 157);
	gradient4.addColorStop(0, '#02f7f9');   
	gradient4.addColorStop(0.7, '#02f7f9'); 
	gradient4.addColorStop(0.7, '#18a6bd');
	gradient4.addColorStop(1, '#18a6bd'); 

	var checker = false;
	var checker1 = false;
	var checker2 = false;
	
	$(window).on('scroll resize', function() {
		var blockFinmodelTop = blockFinmodel.offset().top;
		
		if (blockFinmodelTop - $('html').scrollTop() <= 200) {
        	if (checker1 == false) {
                $('.block.position-finmodel .block.position-mans .type-html .wrap .fim_man.man-left').animate({left: '55px',top: '105px'}, {duration: 1000,specialEasing: {rigth: 'swing',top: 'swing'}});
                $('.block.position-finmodel .block.position-mans .type-html .wrap .fim_man.man-right').animate({right: '130px'}, {duration: 1000,specialEasing: {rigth: 'swing',top: 'swing'}});
                $('.block.position-finmodel .block.position-mans .type-html .wrap .txt-card:last-child, .block.position-finmodel .block.position-mans .type-html .wrap .txt-card:nth-last-child(3)').animate({opacity: '0'}, {duration: 1000,specialEasing: {rigth: 'swing',top: 'swing'}});
				checker1 = true
        	}

        } else {
        	if(checker1 == true) {
        		$('.block.position-finmodel .block.position-mans .type-html .wrap .fim_man.man-left').animate({left: '-100px',top: '95px'}, {duration: 1000,specialEasing: {rigth: 'swing',top: 'swing'}});
                $('.block.position-finmodel .block.position-mans .type-html .wrap .fim_man.man-right').animate({right: '-100px', top: '-30px'}, {duration: 1000,specialEasing: {rigth: 'swing',top: 'swing'}}, function() {
					console.log('adwda');
				});
				$('.block.position-finmodel .block.position-mans .type-html .wrap .txt-card:last-child, .block.position-finmodel .block.position-mans .type-html .wrap .txt-card:nth-last-child(3)').animate({opacity: '1'}, 'slow');				
				checker1 = false
        	}
        }
		

		
		if (blockFinmodelTop - $('html').scrollTop() <= 0) {
            if (checker2 == false) {
                $('.block.position-finmodel .block.position-mans .type-html .wrap .fim_man.man-left').animate({left: '335px', top: '55px'}, {duration: 1000, specialEasing: { rigth: 'swing', top: 'swing'}});
                $('.block.position-finmodel .block.position-mans .type-html .wrap .fim_man.man-right').animate({right: '425px', top: '55px'}, {duration: 1000,specialEasing: {rigth: 'swing',top: 'swing'}});
                $('.block.position-finmodel .block.position-mans .type-html .wrap .txt-card:nth-last-child(2)').animate({opacity: '0'}, 'slow', function() {
                    $('.block.position-finmodel .block.position-mans .type-html .wrap .fim_man').addClass('final');
                    $('.block.position-finmodel .block.position-mans .type-html .magic').animate({opacity: 1}, 'slow');
                });
                checker2 = true
            }
        } else {
        	if (checker2 == true) {
        		$('.block.position-finmodel .block.position-mans .type-html .wrap .fim_man.man-left').animate({left: '55px',top: '105px'}, {duration: 1000,specialEasing: {rigth: 'swing',top: 'swing'}});
            	$('.block.position-finmodel .block.position-mans .type-html .wrap .fim_man.man-right').animate({right: '130px',top: '-30px'}, {duration: 1000,specialEasing: {rigth: 'swing',top: 'swing'}});
				$('.block.position-finmodel .block.position-mans .type-html .magic').animate({opacity: 0}, 'slow', function() {
                    $('.block.position-finmodel .block.position-mans .type-html .wrap .fim_man').removeClass('final');
					$('.block.position-finmodel .block.position-mans .type-html .wrap .txt-card:nth-last-child(2)').animate({opacity: '1'}, 'slow');
                });            	
				checker2 = false;
        	} 
        }
        
		
		
		
		
		
		
		
		if(checker == false) {
		if (blockFinmodelTop - $('html').scrollTop() <= -300) {
			
			checker = true;
			
			$('.block.position-finmodel .block.position-animations .type-source .module-body .chart-text').animate({
				opacity: 1
			}, 'slow');
			
			
			var myChart = new Chart(ctx, {
				type: 'doughnut',
	
				data: {
					//labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
					datasets: [{
						label: '# of Votes',
						data: [15, 60, 20, 5],
						backgroundColor: [
							gradient1,
							gradient2,
							gradient3,
							gradient4
						],
						hoverBackgroundColor: [
							gradient1,
							gradient2,
							gradient3,
							gradient4
						],
						borderWidth: 0


					}]
				},
				options: {
					rotation: 3.75,
					cutoutPercentage: 40,
					scales: {

					},
					legend: {
						display: false
					},
					tooltips: {
						enabled: false
					}
				}

			});

				var myChart2 = new Chart(ctx2, {
					type: 'doughnut',

					data: {
						//labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
						datasets: [{
							label: '# of Votes',
							data: [60, 40],
							backgroundColor: [       
								gradient2,       
								gradient4
							],
							hoverBackgroundColor: [
								gradient2,
								gradient4
							],
							borderWidth: 0


						}]
					},
					options: {
						rotation: -Math.PI / 2,
						cutoutPercentage: 40,
						scales: {

						},
						legend: {
							display: false
						},
						tooltips: {
							enabled: false
						}
					}

				});
			
		} 
	
	}	
});
	$(".block.position-razm").prepend('<div id="s3ds">Маркетинг будущего</div>')	
	//calendar
    
    $('.field_data_in input.form-control').click(function() {
        event.cancelBubble=true;
        this.select();
        lcs(this);
    });
    $('.field_data_in input.form-control').focus(function() {
        this.select();
        lcs(this);
    });
    $('.field_data_out input.form-control').click(function() {
        event.cancelBubble=true;
        this.select();
        lcs(this);
    });
    $('.field_data_out input.form-control').focus(function() {
        this.select();
        lcs(this);
    });
	
	
	
	

	
	
});
