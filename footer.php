<footer>&nbsp;</footer>


</body>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
  $(document).ready(function () {
    $(document).click(function () {
      $(".search-area").slideUp("slow");

    });
    $(".search ul li:last-child a").click(function (e) {
      e.stopPropagation();
      $(".search-area").slideToggle("slow");

    });
    $('.search-area').click(function (e) {
      e.stopPropagation();
    });

  });
</script>

<!-- fixed side menu js below  --->
<script type="text/javascript">
    
if($(window).width() >= 768){
    
$(function() {
	// Set this variable with the height of your sidebar + header
	var offsetPixels = $( ".offset-top" ).offset().top - 240;

	$(window).scroll(function() {
		if ($(window).scrollTop() > offsetPixels) {
			$( ".left-menu-wrapper" ).css({
				"position": "fixed",
				"top": "240px",
                "width": "160px"
			},"slow");
		} else {
			$( ".left-menu-wrapper" ).css({
				"position": "static"
			});
		}
	});
});
    
}    
    
if($(window).width() >= 992){
    
$(function() {
	// Set this variable with the height of your sidebar + header
	var offsetPixels = $( ".offset-top" ).offset().top - 240;

	$(window).scroll(function() {
		if ($(window).scrollTop() > offsetPixels) {
			$( ".left-menu-wrapper" ).css({
				"position": "fixed",
				"top": "240px",
                "width": "215px"
			},"slow");
		} else {
			$( ".left-menu-wrapper" ).css({
				"position": "static"
			});
		}
	});
});
    
}
    
if($(window).width() >= 1200){
    
$(function() {
	// Set this variable with the height of your sidebar + header
	//var offsetPixels = 60; 
    
var offsetPixels = $( ".offset-top" ).offset().top - 240;

	$(window).scroll(function() {
		if ($(window).scrollTop() > offsetPixels) {
			$( ".left-menu-wrapper" ).css({
				"position": "fixed",
				"top": "240px",
                "width": "260px"
			},"slow");
		} else {
			$( ".left-menu-wrapper" ).css({
				"position": "static"
			});
		}
	});
});
    
}
</script>
<!-- fixed side menu js end  --->


<!-- top slide menu below  --->
<script>
    $(document).ready(function(){
        $(".top-slide").click(function(){
            $(".top-slide-menu").slideToggle();
           if ($(".top-slide-menu ul").hasClass('fadeOut')) {
               $(".top-slide-menu ul").removeClass('fadeOut')
           }
            
            if ($(".top-slide-menu ul").hasClass('fadeIn')) {
               $(".top-slide-menu ul").removeClass('fadeIn')
           }
        });
        $('*[id^="click-"]').on('click', function(){
           var row_no = $(this).attr('id').split('-')[1]; 
           $(".clickul-" + row_no).removeClass("fadeOut");
           $(".clickul-" + row_no).addClass("fadeIn");        
        });
        $('*[class^="backlink-"]').on('click',function(){
            var row_no2 = $(this).attr('class').split('-')[1];
            $(".clickul-" + row_no2).removeClass("fadeIn");
            $(".clickul-" + row_no2).addClass("fadeOut");
        });
             
        
    });
</script>
<!-- top slide menu end  --->
<!--<script>
    var lastScrollTop = 0;
$(window).scroll(function (event) {
    var st = $(this).scrollTop();
    if (st > lastScrollTop) {
        $('.top-fix-color-bg').animate({top: '+=10'}, 10);
    } else {
        $('.top-fix-color-bg').animate({top: '-=10'}, 10);
    }
    lastScrollTop = st;
});

</script> -->
<script src="js/custom.js"></script>

</html>


