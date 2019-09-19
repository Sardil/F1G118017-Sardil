<?php

	class Elektronik{
		

			public $jdl, $pnrbt, $nmpnls, $hal;
			public function __construct($jdl = "Merek Hand Phone", $pnrbt = "Type Hand Phone", $nmpnls = "Ukuran Layar", $hal = "Tipe RAM"){
				$this->jdl = $jdl;
				$this->pnrbt = $pnrbt;
				$this->nmpnls = $nmpnls;
				$this->hal = $hal;
			
			}
			public function getinfoBook(){

				$bku = "<br>Merek Hand Phone : {$this->jdl}, <br>Type Hand Phone : {$this->pnrbt}, <br>Ukuran Layar : {$this->nmpnls}, <br>Tipe RAM : {$this->hal}";

				return $bku;		
			}
	}

	Class BukuSatu extends Elektronik {

		public function getinfoBook(){
			$bku = "Hand Phone A : ".parent::getinfoBook();
			return $bku;
		
		}
	}
	class BukuDua extends Elektronik{

		public $rwyt;
		public function __construct($jdl, $pnrbt, $nmpnls, $hal, $rwyt){
			parent::__construct($jdl, $pnrbt, $nmpnls,$hal, $rwyt);
			$this->rwyt = $rwyt;
		}
		public function getinfoBook(){

			$bku = "Hand Phone B : ".parent::getinfoBook()."<br>Harga : {$this->rwyt}";
			return $bku;
		}
	}	

	$bku1 = new BukuSatu("OPPO", "OPPO A3s", "5.7 inch", "2/16");
	$bku2 = new BukuDua("VIVO", "VIVO V15", "7.1 inch", "4/64", "Rp. 3.999.000");
	echo $bku1->getinfoBook();
	echo "<br>";
	echo "<br>";
	echo $bku2->getinfoBook();


?>