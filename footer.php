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
      $(".search-area").slideDown("slow");

    });
    $('.search-area').click(function (e) {
      e.stopPropagation();
    });

  });
</script>


<script src="js/custom.js"></script>

</html>


