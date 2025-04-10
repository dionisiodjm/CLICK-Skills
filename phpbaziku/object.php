<?php 
	class Busa {
		public $naran;
		public $kor;
		public $rasa;

		public function __construct($naran, $kor, $rasa){
			$this->naran = $naran;
			$this->kor = $kor;
			$this->rasa = $rasa;
		}
		public function message(){
			return "Ha'u nia Busa maka :". $this->naran. ", Nia Kores :".$this->kor. ", Nia Rasa :".$this->rasa."!";
		}
	}
	$HauniaBusa = new Busa("Kinko", "Mean", "Pitbull");
	echo $HauniaBusa ->message();
	echo "<br>";
	$busa = new Busa("Boxing", "Mutin", "PitCute");
	echo $busa ->message();
 ?>