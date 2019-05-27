
    <footer id="copyright">
        <div class="row">
          <div class="col-lg-12">
            <ul class="container nav nav-pills bottom">
                <li class="pull-left"><?php echo  '&copy; '. $sitename .' '. date("Y") .' Všetky Práva vyhradené! Kopírovanie webového obsahuje je trestné!' ;?></li>
                <p class="pull-right">Web pripravil s <i style="color:#ff4d4d" class="far fa-heart"></i>: <a style="color:#00ccff; text-decoration:none;" href="https://www.indexart.sk/user/profile/3-h1p3rx">Denis "H1p3rX" Mihál</a></p>
              <p>&nbsp;</p>
            </ul>
          </div>
        </div>
    </footer>

    <script src="<?php echo $linkwebu ;?>assets/js/jquery.js"></script>
    <script src="<?php echo $linkwebu ;?>assets/js/bootstrap.min.js"></script>
    <script>
      $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

      $(function() {
  //navbar affix
  $('#nav').affix({
    offset: {
      top: $('header').height()
    }
  });
});

      $('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})


      $( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').fadeIn(250);
        },
        function(){
            $(this).find('.caption').fadeOut(205);
        }
    ); 
});
    </script>
  </body>
</html>