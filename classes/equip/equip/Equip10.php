<?php
	//ANELLO DI SAURON
	class Equip10 extends Equip{
		private $equipId = 10;

		public function __construct(&$ut, $id){
			parent::__construct($id);
			$this->utente = $ut;
		}
	}