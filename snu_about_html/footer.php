</body>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/menu.js"></script>

<script>
    $(document).ready(function(){
       $("#block1").click(function(){
          $(this).addClass('active');
          $("#details1").toggle(); 
       });
    });
</script>
</html>