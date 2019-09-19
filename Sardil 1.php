<?php

	class Mahasiswa{

			public $nim, $nama, $prodi, $asalSma;
			public function __construct($nim = "NIM", $nama = "NAMA", $prodi = "PRODI", $asalSma = "Asal SMA"){
				$this->nim = $nim;
				$this->nama = $nama;
				$this->prodi = $prodi;
				$this->asalSma = $asalSma;
			}
			public function getinfoMahasiswa(){

				$mhs = "NAMA : {$this->nama}, NIM : {$this->nim}, PRODI : {$this->prodi}, Asal SMA : {$this->asalSma}";

				return $mhs;
			}
	}

	Class MahasiswaStrataSatu extends Mahasiswa {

		public function getInfoMahasiswa(){
			$mhs = "Mahasiswa S1 : ".parent::getInfoMahasiswa();
			return $mhs;
		}
	}
	class MahasiswaStrataDua extends Mahasiswa{

		public $asalS1;
		public function __construct($nim, $nama, $prodi, $asalSma, $asalS1){
			parent::__construct($nim, $nama, $prodi, $asalSma);
			$this->asalS1 = $asalS1;
		}
		public function getInfoMahasiswa(){

			$mhs = "Mahasiswa S2 : ".parent::getInfoMahasiswa()." Asal S1 : {$this->asalS1}";
			return $mhs;
		}
	}	

	$mahasiswa1 = new MahasiswaStrataSatu("F1G118017", "Sardil", "Ilmu Komputer", "SMKN 1 Maruge");
	$mahasiswa2 = new MahasiswaStratadua("F1G118061", "Ali Alfadit", "Manajemen Komputer", "SMA 2 Raha", "Universitas Halu Oleo");

	echo $mahasiswa1->getInfoMahasiswa();
	echo "<br>";
	echo $mahasiswa2->getInfoMahasiswa();

?>