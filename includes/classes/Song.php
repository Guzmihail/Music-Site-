<?php  
	class Song {

		private $con;
		private $id;
		private $mysqliDate;
		private $title;
		private $artistId;
		private $albumId;
		private $genre;
		private $duration;
		private $path;



		public function __construct($con, $id) {
			$this->con = $con;
			$this->id = $id;

			$query = mysqli_query($this->con, "SELECT * FROM songs WHERE id='$this->id'");
			$this->mysqliDate = mysqli_fetch_array($query);
			$this->title = $this->mysqliDate ['title'];
			$this->artistId = $this->mysqliDate ['artist'];
			$this->albumId = $this->mysqliDate ['album'];
			$this->genre = $this->mysqliDate ['genre'];
			$this->duration = $this->mysqliDate ['duration'];
			$this->path = $this->mysqliDate ['path'];

		}

		public function getTitle() {
			return $this->title;
		}

		public function getArtist() {
			return new Artist($this->con, $this->artistId);
		}

		public function getAlbum() {
			return new Album($this->con, $this->albumId);
		}

		public function getPath() {
			return $this->path;
		}

		public function getDuration() {
			return $this->duration;
		}

		public function getMysqliDate() {
			return $this->mysqliDate;
		}

		public function getGenre() {
			return $this->genre;
		}


	}
?>