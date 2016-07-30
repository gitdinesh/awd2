<?php	$var = $this->catagories; ?>


<div class="box categories">
	<h2>Categories <span></span></h2>
	<div class="box-content">
		<ul>
			<?php


		foreach ($var as $key => $value) {
?>

<li class=""><a href="#"> <?php echo $value['city']; ?></a></li>

<?php
								 }

				?>


		</ul>
	</div>
</div>
