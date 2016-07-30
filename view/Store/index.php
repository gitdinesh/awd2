
	<!-- Header -->
	<div id="header">
		<h1 id="logo"><a href="#">shoparound</a></h1>

		<!-- Cart -->
		<div id="cart">
			<a href="#" class="cart-link">Your Shopping Cart</a>
			<div class="cl">&nbsp;</div>
			<span>Articles: <strong>4</strong></span>
			&nbsp;&nbsp;
			<span>Cost: <strong>$250.99</strong></span>
		</div>
		<!-- End Cart -->

		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a href="#" class="active">Home</a></li>
			    <li><a href="#">Support</a></li>
			    <li><a href="#">My Account</a></li>
			    <li><a href="#">The Store</a></li>
			    <li><a href="#">Contact</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->

	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>

		<!-- Content -->
		<div id="content">
            <pre>
			<?php  print_r($this->products); ?>

		</div>
		<!-- End Content -->

		<!-- Sidebar -->
		<div id="sidebar">

			<!-- Search -->
			<div class="box search">
				<h2>Search by <span></span></h2>
				<div class="box-content">
					<form action="" method="post">

						<label>Keyword</label>
						<input type="text" class="field" />

						<label>Category</label>
						<select class="field">
							<option value="">-- Select Category --</option>
						</select>

						<div class="inline-field">
							<label>Price</label>
							<select class="field small-field">
								<option value="">$10</option>
							</select>
							<label>to:</label>
							<select class="field small-field">
								<option value="">$50</option>
							</select>
						</div>

						<input type="submit" class="search-submit" value="Search" />

						<p>
							<a href="#" class="bul">Advanced search</a><br />
							<a href="#" class="bul">Contact Customer Support</a>
						</p>

					</form>
				</div>
			</div>
			<!-- End Search -->

			<!-- Categories -->
			


			<div class="box categories">
				<h2>Categories <span></span></h2>
				<div class="box-content">
					<ul>
						<?php foreach ($this->catagories as $key => $value) : ?>
							<?php if ($value['parent_id'] == ""): ?>
								<li class=""><a href="#"> <?php echo $value['title']; ?></a></li>
							<?php endif; ?>	
						<?php endforeach;?>


					</ul>
				</div>
			</div>
			<!-- End Categories -->

		</div>
		<!-- End Sidebar -->

		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->

	<!-- Side Full -->
	<div class="side-full">

		

	</div>
	<!-- End Side Full -->