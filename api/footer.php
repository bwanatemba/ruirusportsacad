<!DOCTYPE html>
<html lang="en">
<body>


<section id="footer">
 <div class="container">
  <div class="row">
   <div class="footer_1 clearfix">
    <div class="col-sm-4">
	 <div class="footer_1_i clearfix">
	  <h4 class="col bold mgt">About Ruiru Sports Academy</h4>
	  <p>Our mission is to provide comprehensive football training for kids aged 5 to 17 years.</p>
	  <p>Our program is designed to foster a love for the game while promoting discipline, teamwork, and personal growth.</p>
	  <h5 class="col"><i class="fa fa-phone"></i>	Call Us 0714 990364</h5>
	 </div>
	</div>
	
	<div class="col-sm-4">
	 <div class="footer_1_i1 clearfix">
	  <h4 class="col bold mgt">Links</h4>
      <h5><a href="about.php"><i class="fa fa-chevron-right"></i> About Us</a></h5>
	  <h5><a href="rsa_juniors.php"><i class="fa fa-chevron-right"></i> Junior Team</a></h5>
	  <h5><a href="rsa_seniors.php"><i class="fa fa-chevron-right"></i> RSA Senior</a></h5>
	  <h5><a href="inua_talanta.php"><i class="fa fa-chevron-right"></i> Inua Talanta</a></h5>
	  <h5><a href="learn.ruirusportsacademy.co.ke"><i class="fa fa-chevron-right"></i> RSA Learn</a></h5>
	 </div>
	</div>
	
	<div class="col-sm-4">
	 <div class="footer_1_i2 clearfix">
	  <h4 class="col bold mgt">Follow Us</h4>
	  <p>Get the latest news and information to keep upto date with us</p>
      <ul class="social-network social-circle">
                        <li><a href="https://www.facebook.com/ruirusportsacad/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/ruirusports" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://instagram.com" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://linkedin.com" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
       </ul>
	 </div>
	</div>
   </div>
   <div class="footer_2 text-center clearfix">
    <div class="col-sm-12">
	  <p class="mgt col"> &copy; <?php echo date("Y"); ?> Ruiru Sports Academy. All Rights Reserved | by <a class="col_1" href="https://digitaliquidscloud.tech">Digitaliquids Cloud Technologies</a></p>
	</div>
   </div>
  </div>
 </div>
</section>

<script>
	$(document).on('click', '.panel-heading span.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '.panel div.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).ready(function () {
    $('.panel-heading span.clickable').click();
    $('.panel div.clickable').click();
});

	</script>

<script>
	  $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
	</script>
</body>
 
</html>