<article class="post">

	<!-- Plugins Page Begin -->
	<?php Theme::plugins('pageBegin') ?>

	<!-- Post's header -->
	<header>
		<div class="title">
			<h8><href="<?php echo $Page->permalink() ?>"><?php echo $Page->title() ?></h8>
			<p><?php echo $Page->description() ?></p>
		</div>
	</header>

	<!-- Cover Image -->
	<?php
		if($Page->coverImage()) {
			echo '<href="'.$Page->permalink().'" class=""><img src="'.$Page->coverImage().'" alt="Cover Image">';
		}
	?>

	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $Page->content() ?>

	<!-- Plugins Page End -->
	<?php Theme::plugins('pageEnd') ?>

</article>