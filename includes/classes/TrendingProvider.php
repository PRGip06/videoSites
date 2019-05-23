<?php  

class TrendingProvider {


private $con, $userLoggedInObj;


	
	public function __construct($con, $userLoggedInObj) {
		
		$this->con = $con;
		
		$this->userLoggedInObj = $userLoggedInObj;
	}

	public function getVideos() {
		$videos = array();

		// Take the 15 most viewed videos from the past 7 days for trending
		$query = $this->con->prepare("SELECT * FROM videos WHERE uploadDate >= now() - INTERVAL 7 DAY ORDER BY views DESC LIMIT 15");

		$query->execute();

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$video = new Video($this->con, $row, $this->userLoggedInObj);
			array_push($videos, $video);
		}
		return $videos;
	}

}


?>