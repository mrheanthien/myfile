<div class="wrapper"><!-- .wrapper -->
    	<div class="footer">
       		<div class="section">
				<div class="container">
					<div class="footer-content">
						<div class="footer-alignleft">
							<p>អំពី​យើង</p>
							<ul>
								<li><a href="#">
									យើងខ្ញុំជាអ្នកបង្ហាញលោកអ្នកឲ្យស្គាល់​ពីតំបន់ទេសចរណ៍នៅក្នុងប្រទេសកម្ពុជាហើយ
									ជាក្រុមនិសិត្សបង្កើតគេហទំពរ័និង​បង្កើតប្រពន្ធ័គ្រប់គ្រងផ្សេងៗសម្រាប់​ដាក់ឲ្យប្រើប្រាស់ក្នុងក្រុមហ៊ុនផ្សេងៗ។
								</a></li>
							</ul>
						</div>
						<div class="footer-aligncenter">
							<p>ទំព័ររបស់យើង</p>
							<ul>
								<li><a href="sea.php">- តំបន់សមុទ្រ</a></li>
								<li><a href="waterfall.php">- តំបន់ទឹកធ្លាក់</a></li>
								<li><a href="forest.php">- តំបន់ព្រៃភ្នំ</a></li>
								<li><a href="temple.php">- តំបន់ប្រាសាទបុរាណ</a></li>
								<li><a href="new-area.php">- តំបន់ទើបបង្កើតថ្មី</a></li>
								<li><a href="famous.php">- តំបន់ល្បីៗប្រចាំឆ្នាំ</a></li>
							</ul>
						</div>
						<div class="footer-alignright">
							<p>ទំនាក់ទំនង</p>
							<ul>
								<li><a href="#">- លេខទូរស័ព្ទ : ០៨៧​៤៤៧​៤៣៨</a></li>
								<li><a href="#">- អីុម៉ែល :thienhean@gmail.com</a></li>
								<li><a href="#">- គេហទំព័រ : http://phumme.com</a></li>
							</ul>
						</div>
					</div>
				</div>
       		</div><!-- .section -->
        </div> <!-- .footer -->
        <div class="footer-bottom">
        	<div class="container">
        	 	<div class="footer-alignleft">
        	 		<p style="padding: 18px 0;"><a href="#">Develope By Mr.Hean Thien and all copy Right © 2017</a></p>
        	 	</div>
        	 	<div class="footer-alignright">
        	 		<p align="right">
        	 			<a href="https://www.youtube.com/channel/UCsAnWxSRYateyEUVxEEWT3g/videos?view_as=subscriber" target="_blank"><img src="images/youtube.png" /></a>
						<a href="https://www.facebook.com/phumme168/" target="_blank"><img src="images/facebook.png" /></a>
       	 			</p>
        	 	</div>
        	</div>
		</div>           
    </div> <!-- .wrapper -->       
</body>
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/slick/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			// Remove class in body from prevent animation effect
			$("body").removeAttr("class");
			
			// main-slide
			$('.main-slide').slick({
				infinite: true, 
				lazyLoad: 'ondemand',
				accessibility : true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 3500,
				pauseOnHover:true
			});
			
			// main-slide
			$('.products-slide').slick({
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 4,
				arrows: true,
				dots: false,
				autoplay: false,
				autoplaySpeed: 3500,
				pauseOnHover:true
			});
			
		});
	</script>
</html>