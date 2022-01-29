<?php
  class army2 {
		public $health;
		public $damage;
    public $numSlodiers;

    public function __construct($number) {
      $this->numSoldiers = $number;
    }

	  public function armyAttributes($attributes) {
      foreach ($attributes  as $i => $attribute) {
        if ($i = 1) {
          $this->health = $attributes[$i];
        }
        if ($i = 2) {
          $this->damage = $attributes[$i];
        }
      }
    }

    public function attack($random) {
      #uncomment next line for analysis.php to work properly
      #echo "<br>Blue soldier attacks Red soldier! ";
      $damageDealt =  round($this->damage / 10 * $random);
      #uncomment next line for analysis.php to work properly
      #echo "<br>Blue soldier damages Red soldier for " . $damageDealt;
      return $damageDealt;
    }

    public function takeDamage($damage) {
      $this->health -= $damage;
    }
  }
?>
