<?php include 'header.php';?>


  <!-- Banner Start -->
  <div class="banner animatedParent">
    <div class="banner-wrapper"><img src="images/department-banner.jpg" alt=""></div>  
     <div class="top-fix-color-bg animated bounceInLeft slower">&nbsp;</div>
  </div>
  <!-- Banner End -->

<!-- right side gray bg --->
     <div class="department work-with-gray-bg animatedParent">

            <div class="faculty-right-gray-bg animated bounceInRight slower">
                 &nbsp;
            </div>
            <div class="faculty-left-gray-bg">&nbsp;</div>
        </div>
<!-- right side gray bg end --->
  <!-- Content Start -->
  <div class="container offset-top">
     
    <div class="breadcrumb col-md-offset-3">About / <span>The Department</span></div>

    <!-- Left Panel Start -->
    <div class="col-sm-3">
      <div class="left-menu-wrapper">
          <?php include 'include/about-side-menu.php';?>
        </div>
    </div>
    <!-- Left Panel End -->

    <!-- Middle Panel Start -->
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-8 middle-content">
          <div class="animatedParent">
            <h1 class="animated fadeIn slower">The Department</h1>
          </div>
          <div class="animatedParent">
            <div class="animated fadeIn slower">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Nulla eu mattis nulla</a>. Morbi vulputate lorem vitae condimentum pharetra. Vestibulum arcu arcu, sagittis ullamcorper imperdiet et, tempor vitae quam.Sed quis fringilla sapien, ut vehicula elit. In nec justo arcu. ut vehicula elit. In nec justo arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu mattis nulla. Morbi vulputate lorem vitae condimentum pharetra. Vestibulum arcu arcu, sagittis ullamcorper imperdiet et, tempor vitae quam.Sed quis fringilla sapien, ut vehicula elit. In nec justo arcu. ut vehicula elit. In nec justo arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu mattis nulla. Morbi vulputate lorem vitae condimentum pharetra. Vestibulum arcu arcu, sagittis ullam class="animated fadeIn slower"corper imperdiet et, tempor vitae quam.Sed quis fringilla sapien, ut vehicula elit. In nec justo arcu. ut vehicula elit. In nec justo arcu.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu mattis nulla. Morbi vulputate lorem vitae condimentum pharetra. Vestibulum arcu arcu, sagittis ullamcorper imperdiet et, tempor vitae quam.Sed quis fringilla sapien, ut vehicula elit. In nec justo arcu. ut vehicula elit. In nec justo arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu mattis nulla. Morbi vulputate lorem vitae condimentum pharetra. Vestibulum arcu arcu, sagittis ullamcorper imperdiet et, tempor vitae quam.Sed quis fringilla sapien, ut vehicula elit. In nec justo arcu. ut vehicula elit. In nec justo arcu.</p>
            </div>
          </div>


        </div>
        <!-- Middle Panel End -->

        <!-- Right Panel Start -->
        <div class="col-sm-4 right-panel department-right-section">
          <div class="animatedParent">
            <div class="animated bounceInUp slower">
              <img src="images/right-img.jpg" alt=" ">
           
          <h4>Dr. Jaydeep Chaterjee<br/>
        <span>Head of the Department</span></h4>
          <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu mattis nulla. Morbi vulputate lorem vitae condimentum pharetra. Vestibulum arcu arcu, sagittis ullamcorper imperdiet et, tempor vitae quam.Sed quis fringilla sapien, ut vehicula elit. In nec justo arcu. ut vehicula elit. In nec justo arcu.</p>
                 </div>
          </div>
            
        <!-- Right Panel End -->
      </div>

      <div class="row">
        <div class="col-sm-8">
          <div class="animatedParent">
            <div class="animated fadeIn slower">
              <h3>Accreditition</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu mattis nulla. Morbi vulputate lorem vitae condimentum pharetra. Vestibulum arcu arcu, sagittis ullamcorper imperdiet et, tempor vitae quam.Sed quis fringilla sapien, ut vehicula elit. In nec justo arcu. ut vehicula elit. In nec justo arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu mattis nulla. Morbi vulputate lorem vitae condimentum pharetra. Vestibulum arcu arcu, sagittis ullamcorper imperdiet et, tempor vitae quam.Sed quis fringilla sapien, ut vehicula elit. In nec justo arcu. ut vehicula elit. In nec justo arcu.</p>
            </div>
          </div>

        </div>
        <div class="col-sm-4 right-panel department-right-section">
          <div class="animatedParent">
            <div class="animated bounceInRight slower">
              <img src="images/iao-logo.jpg" alt=" ">
              <img src="images/bac-logo.jpg" alt=" ">
            </div>
          </div>
            
        </div>
      </div>
    </div>
    <!-- Content End -->
  </div>


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
  square2.style.bottom = scrollPercent*window.innerWidth*0.2 + 'px';
  
});

    
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
   
    if (scroll >= 500) {
        
        $(".top-fix-color-bg-wrapper").addClass("hide");
    } else {
        $(".top-fix-color-bg-wrapper").removeClass("hide");
    }
    
});
</script> 
<script src="js/custom.js"></script>

</html>


