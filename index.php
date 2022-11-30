<?php


class Sekil {

	public $genislik;
	public $uzunluk;
	public $hipotenus;


	public function __construct($genislik,$uzunluk=null,$hipotenus=null) {

		$this->genislik = $genislik;
		$this->uzunluk = $uzunluk;
		$this->hipotenus = $hipotenus;
	}
}

class Dikdortgen extends Sekil{

	public function cevre() {
		return 2 * ($this->genislik + $this->uzunluk);
	}

	public function alan () {
		return $this->genislik * $this->uzunluk;
	}
}

class Ucgen extends Sekil{

	public function cevre() {
		return $this->genislik + $this->uzunluk + $this->hipotenus;
	}

	public function alan() {
		$ucgenCevre = $this->cevre();
		return bcsqrt((($ucgenCevre / 2) * (($ucgenCevre / 2) - $this->genislik) * (($ucgenCevre / 2) - $this->uzunluk) * (($ucgenCevre / 2) - $this->hipotenus)), 2);
	}

}

class Kare extends Sekil{

	public function cevre() {
		return 4 * $this->genislik;
	}

	public function alan() {
		return pow($this->genislik, 2);
	}
}


$Dikdortgen = new Dikdortgen(5,12);
$Ucgen = new Ucgen(5,12,13);
$Kare = new Kare(5);

echo 'Dikdortgen Cevresi: '.$Dikdortgen->cevre().'<br>';
echo 'Dikdortgen Alani: '.$Dikdortgen->alan().'<br>';

echo 'Ucgen Cevresi: '.$Ucgen->cevre().'<br>';
echo 'Ucgen Alani: '.$Ucgen->alan().'<br>';

echo 'Kare Cevresi: '.$Kare->cevre().'<br>';
echo 'Kare Alani: '.$Kare->alan().'<br>';