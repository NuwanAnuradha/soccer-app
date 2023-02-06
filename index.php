<?php  include_once('header.php'); ?>
<?php  include_once('functions.php'); ?>

<?php $responseArray = convertIntoArray();  ?>

<div class="container-lg" class="main"> 

	<div class="row mt-6">

		//check weather data key is exist or not
			<?php if(array_key_exists ('data', $responseArray)){?>
		<?php foreach ($responseArray ['data'] as $object) { ?>

		<div class="col-lg-3 col-md-12 col-sm-12 text-center mb-3">
			<div class="card single-card">
				<img src="" class="single-card-img">
				<div class="card-body"></div>
				<div class="card-title" style="font-weight: bold;">Title</div>
				<div class="card-text single-card-text">

					<img src="<?php echo $object ['teams'] ['home'] ['img'] ?>" style="width: 50px;"/>
					<?php echo $object ['teams'] ['home'] ['name'] ?>
					<?php echo $object ['scores'] ['home_score'] ?>

					-

					<?php echo $object ['scores'] ['away_score'] ?>
					<?php echo $object ['teams'] ['away'] ['name']?>
					<img src="<?php echo $object ['teams'] ['away'] ['img'] ?>" style="width: 50px;"/>

				</div>
			</div>
		</div>
		
	</div>

	<?php } ?>
	<?php  } else{ ?>
		<h3>There are no Matches today !</h3>
		<form class="text-center" method="GET" action="yesterday.php" >
			<input class="btn btn-primary my-2" type="submit" value="Yesterday">
		</form>

		<form class="text-center" method="GET" action="tomorrow.php" >
			<input class="btn btn-primary my-2" type="submit" value="tomorrow">
		</form>

	<?php  } ?>

</div>


<?php  include_once('footer.php');  ?>