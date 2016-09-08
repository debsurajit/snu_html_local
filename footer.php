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
    

if ($(window).width() >= 1200) {     
    var left_menu_wrapper_width = '260px'; 
}
else if ($(window).width() >= 992) {
    var left_menu_wrapper_width = '215px';
}
else if ($(window).width() >= 992) {
    var left_menu_wrapper_width = '160px';
}

$(function() {
	// Set this variable with the height of your sidebar + header
	var offsetPixels = $( ".offset-top" ).offset().top - 240;

	$(window).scroll(function() {
		if ($(window).scrollTop() > offsetPixels) {
			$( ".left-menu-wrapper" ).css({
				"position": "fixed",
				"top": "240px",
                "width": left_menu_wrapper_width,
			},"slow");
		} else {
			$( ".left-menu-wrapper" ).css({
				"position": "static"
			});
		}
	});
});    


</script>
<!-- fixed side menu js end  --->


<!-- top slide menu below  --->
<script>
    $(document).ready(function(){
        $(".offset-top").click(function(){
            $(".top-slide-menu").slideUp();
        });
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
<script>
var container = document.getElementById('body');
var windowHeight = window.innerHeight;
var windowWidth = window.innerWidth;
var scrollArea = 950 - windowHeight;
var square1 = document.getElementsByClassName('top-fix-color-bg')[0];
var square2 = document.getElementsByClassName('work-with-gray-bg')[0];

  

// update position of square 1 and square 2 when scroll event fires.
window.addEventListener('scroll', function() {
  var scrollTop = window.pageYOffset || window.scrollTop;
  var scrollPercent = scrollTop/scrollArea || 0;
  
  square1.style.top = scrollPercent*window.innerWidth*0.5 + 'px';
  square2.style.bottom = scrollPercent*window.innerWidth*0.5 + 'px';
  
});

    
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    
    if (scroll >= 500) {
        
        $(".top-fix-color-bg-wrapper").addClass("hide");
    } else {
        $(".top-fix-color-bg-wrapper").removeClass("hide");
    }
    
    if (scroll >= 40) {
       $(".top_menu").slideUp(); 
        $(".search ul li:first-child").addClass("infoshow");
       
    } else {
        $(".top_menu").slideDown(); 
          $(".search ul li:first-child").removeClass("infoshow");
    }
    
});


</script> 

<script>
    $(document).ready(function(){
     $(".infoshow").click(function(){
            alert('ss');
            $(".top-menu").slideDown();
        });
    });
</script>
<script src="js/custom.js"></script>

</html>


