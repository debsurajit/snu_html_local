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



<script src="js/custom.js"></script>

</html>


