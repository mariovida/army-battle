<?php
  class battle {
    public function random() {
      return rand(1, 10);
    }

    public function setAttributes() {
  		$health = 100;
  		$damage = 100;
  		$blank = NULL;
  		$attributes = array($blank, $health, $damage);
  		return $attributes;
  	}
  }
?>
