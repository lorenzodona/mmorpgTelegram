<?php
	//PUNTA DI SELCE
	class Item36 extends Item{
		private $itemId = 36;

		public function __construct(&$OBJ){
			parent::__construct($OBJ, $this->itemId);
		}
	}