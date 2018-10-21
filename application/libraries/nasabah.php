<?php
	/**
	 * 
	 */
	class Nasabah
	{		
		public function hitung_peminjaman($penghasilan)
		{
			$nilai_pinjaman = $penghasilan * 10;
			$margin = $nilai_pinjaman * 5 / 100;
			$pinjaman_total = $nilai_pinjaman + $margin;			
			return $pinjaman_total;
		}

		public function bagi_hasil($setoran,$penarikan,$saldo)
		{
			# code...
		}
	}
?>