<?php  
	$songQuery = mysqli_query($con, "SELECT id FROM songs ORDER BY RAND() LIMIT 10 ");

	$resultArray = array();
	 while ($row = mysqli_fetch_array($songQuery)) {
		array_push($resultArray, $row['id']);
	}

	$jsonArray = json_encode($resultArray);
?>

<script >

	$(document).ready(function() {
		curentPlayList = <?php echo $jsonArray; ?>;
		audioElement = new Audio();
		setTrack(curentPlayList[0], curentPlayList, false);
	});

	function setTrack(trackId, newPlayList, play) {

		$.post("includes/handlers/ajax/getSongJson.php", { songId: trackId }, function(data){

			var track = JSON.parse(data);
			$(".trackName span").text(track.title);


			$.post("includes/handlers/ajax/getArtistsJson.php", { artistId: track.artist }, function(data){

				var artist = JSON.parse(data);

				$(".artistName span").text(artist.name);

			});

			$.post("includes/handlers/ajax/getAlbumsJson.php", { albumId: track.album }, function(data){

				var album = JSON.parse(data);

				$(".albumLink img").attr("src", album.artworkPath);

			});


			audioElement.setTrack(track);
			playSong();
		});

		if (play == true) {

			audioElement.play();
		}

	}

	function playSong() {

		if (audioElement.audio.currentTime == 0) {

			$.post("")

		}

		$(".contolButton.play").hide();
		$(".contolButton.pause").show();
		audioElement.play("includes/handlers/ajax/uppdatePlays.php", { songId: audioElement.currentlyPlaying.id });
	}

	function pauseSong() {
		$(".contolButton.play").show();
		$(".contolButton.pause").hide();
		audioElement.pause();
	} 

</script>


<div id="nowPlayingBarContainer">

	<div id="nowPlayingBar">
		<div id="nowPlayingLeft">
			<div class="content">
				<span class="albumLink">
					<img src="" class="albumArtwork">
				</span>

				<div class="trackInfo">
					<span class="trackName">
						<span></span>
					</span>

					<span class="artistName">
						<span> </span>
					</span>
				</div>

			</div>
	</div>

	<div id="nowPlayingCenter">
		<div class="content playerControls">
			<div class="button">
				<button class="contolButton shuffle" title="Shuffle">
					<img src="assets/images/icons/shuffle.png" alt="Shuffle">
				</button>

				<button class="contolButton previous" title="Previous">
					<img src="assets/images/icons/previous.png" alt="Previous">
				</button>


				<button class="contolButton play" title="Play" onclick="playSong()">
					<img src="assets/images/icons/play.png" alt="Play">
				</button>

				<button class="contolButton pause" title="Pause" style="display: none;" onclick="pauseSong()">
					<img src="assets/images/icons/pause.png" alt="Pause">
				</button>


				<button class="contolButton next" title="Next">
					<img src="assets/images/icons/next.png" alt="Next">
				</button>

				<button class="contolButton repeat" title="Repeat">
					<img src="assets/images/icons/repeat.png" alt="Repeat">
				</button>
			</div>

			<div class="playbackBar">
				<span class="progrresTime current">0.00</span>

				<div class="progrresBar">
					<div class="progrresBarBg">
						<div class="progrres"></div>
					</div>
				</div>

				<span class="progrresTime remainig">0.00</span>
			</div>
		</div>
	</div>

	<div id="nowPlayingRight">
		<div class="volumeBar">
			<button class="contolButton volume" title="Volume button">
				<img src="assets/images/icons/volume.png" alt="Volume">
			</button>

			<div class="progrresBar">
				<div class="progrresBarBg">
					<div class="progrres"></div>
				</div>
			</div>


		</div>
	</div>
	
</div>


</div>