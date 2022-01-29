<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>ARMY BATTLE</title>
  </head>
  <body>
    <a href="analysis.php" class="switch">ANALYSIS PAGE</a>
    <h1>This is a battle between <span style="color:#ff4d4d">Red</span> and <span style="color:#0099ff">Blue</span> Army!</h1>
    <form method="GET" action="index.php">
      Number of soldiers in Red Army: <br>
      <input type="number" name="army1" required/><br>
      Number of soldiers in Blue Army: <br>
      <input type="number" name="army2" required/><br><br>
  		<input type="submit" name="submit" value="START" /><br>

      <?php
        if(isset($_GET['submit'])) {
          $army1 = $_GET['army1'];
          $army2 = $_GET['army2'];
          if($army1 <= 0 || $army2 <= 0) {
            echo "<br/>I've never heard of an army with zero or less soldiers!";
            return;
          }
          $catastrophe = rand(1,8);

          $classes = array("army1", "army2", "battle");
    	    foreach ($classes as $i => $class) {
    		    include "class/" . $classes[$i] . ".php";
    	    }

          $battle = new battle;
          $army1 = new army1($_GET['army1']);
          $army1->armyAttributes($battle->setAttributes());

          echo "<br>Red Army has <b>" . $_GET['army1'] . "</b> soldiers.";

          $army2 = new army2($_GET['army2']);
          $army2->armyAttributes($battle->setAttributes());
          echo "<br>Blue Army has <b>" . $_GET['army2'] . "</b> soldiers.<br/><br/>";

          while (($army1->numSoldiers > 0) && ($army2->numSoldiers > 0)) {
            if($catastrophe == 5) {
              echo "<p class='earthquake'>Oh no, there was an earthquake!<br/>Everybody died!</p>";
              break;
            }
            $randAttack = rand(1,2);
            if($randAttack == 1) {
              $attacker = $army1;
              $defender = $army2;
            } else {
              $attacker = $army2;
              $defender = $army1;
            }
          	$damage = $attacker->attack($battle->random());
          	$defender->takeDamage($damage);

          	if ($defender->health <= 0) {
          		$defender->numSoldiers = $defender->numSoldiers - 1;
              $defender->health = 100;
          	}

            if($army1->numSoldiers <= 0) {
              echo "<br/><br/><p class='winner'><span style='color:#0099ff'>BLUE</span> ARMY WON!</p>";
              break;
            }

            if($army2->numSoldiers <= 0) {
              echo "<br/><br/><p class='winner'><span style='color:#ff4d4d'>RED</span> ARMY WON!</p>";
              break;
            }
          }
        }
      ?>
	  </form>
  </body>
</html>
