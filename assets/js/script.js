var curentPlayList = [];
var audioElement;

function formatTime(seconds) {
	var time = Math.round(seconds);
	var minutes = Math.floor(time / 60); //Rounds down
	var seconds = time - (minutes * 60);

	var extraZero = (seconds < 10) ? "0" : "";

	return minutes + ":" + extraZero + seconds;
}

function updateTimeProgresBar(audio) {
	$(".progrresTime.current").text(formatTime(audio.currentTime));
	$("progrresTime.remainig").text(formatTime(audio.duration - audio.currentTime));

	var progrres = audio.currentTime / audio.duration * 100;
	$(".progrres").css("width", progrres + "%");
}


function Audio() {
	this.currentlyPlaying;
	this.audio = document.createElement('audio');
    /*'this'refers to the object that the event was called on*/
	this.audio.addEventListener("canplay", function() {
		var duration = formatTime(this.duration);
		$(".progrresTime.remainig").text(duration);
	});

	this.audio.addEventListener("timeupdet", function() {
		if (this.duration) {
			updateTimeProgresBar(this);
		}
	});

	this.setTrack = function(track) {
		this.currentlyPlaying = track;
		this.audio.src = track.path;
	}

	this.play = function() {
		this.audio.play();
	}

	this.pause = function() {
		this.audio.pause();
	}
} 