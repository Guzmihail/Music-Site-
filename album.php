<?php include("includes/header.php");  

if(isset($_GET['id'])) {
	$albumId = $_GET['id'];
}
else {
	header("Location: index.php");
}

$album = new Album($con, $albumId);
$artist = $album->getArtist();
?>

<div class="entityInfo">
	
	<div class="leftSection">
		<img src="<?php echo $album->getArtworkPath(); ?>">
	</div>

	<div class="rightSection">
		<h2><?php echo $album->getTitle(); ?></h2>
		<p>By <?php echo $artist->getName(); ?></p>
		<p> <?php echo $album->getNumberOfSongs(); ?> songs</p>
	</div>

</div>

<div class="trackListContainer">
	<ul class="trackList">
		<?php
			$songIdArry = $album->getSongId(); 

			$i = 1;

			foreach ($songIdArry as $SongId) {
				
				$albumSong = new Song($con, $SongId);
				$albumArtist = $albumSong->getArtist();

				echo "<li class='tracklistRow'>
						<div class='trackCount'>
								<img class'play' src='assets/images/icons/play-white.png'>
							<span class='trackNumber'>$i</span>
						</div>

						<div class='trackInfo'>
							<span class='trackNumber'>" . $albumSong->getTitle() ."</span>
							<span class='artistName'>" . $albumArtist->getName() ."</span>
						</div>

						<div class='trackOption'>
							<img class'optionButton' src='assets/images/icons/more.png'>
						</div>

						<div class='trackDuration'>
							<span class='duration'>" . $albumSong->getDuration() ."</span>
						</div>

				</li>";

			$i = $i + 1;

			}
		?>
	</ul>
</div>

<?php include("includes/footer.php");  ?>