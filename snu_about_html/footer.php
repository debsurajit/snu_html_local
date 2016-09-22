</body>

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/menu.js"></script>
<script>
var jq132 = jQuery.noConflict();
</script>
<script src="js/jquery-1.7.min.js"></script>

<script src="js/jquery.featureCarousel.js"></script>

<script>
    $(document).ready(function(){
       $("#block1").click(function(){
          $(this).addClass('active');
          $("#details1").toggle(); 
       });
    });
</script>
 <script type="text/javascript">
      $(document).ready(function() {
        var carousel = $("#carousel").featureCarousel({
          // include options like this:
          // (use quotes only for string values, and no trailing comma after last option)
          // option: value,
          // option: value
        });

        $("#but_prev").click(function () {
          carousel.prev();
        });
        $("#but_pause").click(function () {
          carousel.pause();
        });
        $("#but_start").click(function () {
          carousel.start();
        });
        $("#but_next").click(function () {
          carousel.next();
        });
      });
    </script>
</html>