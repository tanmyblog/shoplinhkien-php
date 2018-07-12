<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h1>Đăng ký thông tin</h1>
				<p>để nhận khuyến mãi hót nhất từ shop</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Liên hệ</h3>
					<p>Shop Linh Kiện chuyên cung cấp các sản phẩm hàng nhập khẩu giá rẻ</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Gò Vấp <span>Tp.HCM</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:vohoangnguyen07@gmail.com">vohoangnguyen07@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+841628868174</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Shoplinhkien.com</h3>
					<ul class="info"> 
						<li><a href="thongtin.php">Thông tin</a></li>
						<li><a href="lienhe.php">Liên hệ</a></li>
						<li><a href="lienhe.php">Câu hỏi</a></li>
						<li><a href="product.php">Sản phẩm giảm giá</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Danh mục</h3>
					<ul class="info"> 
						<li><a href="product.php">CPU</a></li>
						<li><a href="product.php">RAM</a></li>
						<li><a href="product.php">VGA</a></li>
						<li><a href="product.php">PSU</a></li>
						<li><a href="product.php">SSD</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Dịch vụ bảo hành</h3>
					<ul class="info"> 
						<li><a href="index.php">Quy định bảo hành</a></li>
						<li><a href="thongtin.php">Chính sách cửa hàng</a></li>
						<li><a href="lienhe.php">Thắc mắc, khiếu nại sản phẩm</a></li>
					</ul>
					<h4>Theo dõi</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="facebook.com" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="google.com" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2018 Shop Linh Kiện. Được thiết kế bởi <a href="https://www.facebook.com/khang.vohoang.31">Nguyên Võ</a></p>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	<!-- cart-js -->
	<script src="js/shopping-cart.js"></script>
	
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->   
</body>
</html>