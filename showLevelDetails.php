<div class="container">
<div class="row">
    <div class="col-xs-12 col-md-6">

        <?php
            require_once'includes/levels.php';
            echo "<h4>Level: " . $actualLevel . "</h4>";
            echo "<h5>Dit samlede antal XP Points: ".$xp."</h5>";
            echo $profile;
        ?>
    </div>


    <div class="progress progress-striped active" style="width: 40%">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $bar;?>">
            <span class="sr-only">60% Complete</span>
        </div>
    </div>

    <?php echo "<p>Antal % til næste lvl: <b>" . ( 100 - $bar ) . "</b> %</p>";?>
    <?php echo "<p>Næste level kræver: <b>" . $actualNextLevel . "</b> xp point</p>";?>

  </div>