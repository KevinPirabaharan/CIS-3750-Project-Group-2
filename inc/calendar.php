<link rel="stylesheet" href="../css/styles.css">  

<div class="toolbar">
        <button class="arrow"><i class="material-icons">navigate_before</i></button>
        <span style="line-height:10px;">&nbsp;&nbsp;&nbsp;November 2018&nbsp;&nbsp;&nbsp;</span>
        <button class="arrow"><i class="material-icons">navigate_next</i></button>
    </div>
    <div class="calendar">
      <div class="calendar__header">
        <div>mon</div>
        <div>tue</div>
        <div>wed</div>
        <div>thu</div>
        <div>fri</div>
        <div>sat</div>
        <div>sun</div>
      </div>
      <div class="calendar__week">
          <?PHP
            for ($i = 1; $i <= 7; $i++){
                echo '<div class="calendar__day day">';
                echo '<a href="../create/index.php?login=1&day=nov'.$i.'">'.$i.'</a><br><br>';
                if ($i == 3){
                    echo '<button type="button" class="star" data-toggle="popover" title="Job Opportunities" data-content="5-6pm, Foyer 2"><i class="material-icons">grade</i></button>';
                }
                echo '</div>';
                
            }
          ?>
      </div>
      <div class="calendar__week">
          <?PHP
            for ($i = 8; $i <= 14; $i++){
                echo '<div class="calendar__day day"><a href="../create/index.php?login=1&day=nov'.$i.'">'.$i.'</a></div>';
            }
          ?>
      </div>
      <div class="calendar__week">
          <?PHP
            for ($i = 15; $i <= 21; $i++){
                echo '<div class="calendar__day day"><a href="../create/index.php?login=1&day=nov'.$i.'">'.$i.'</a></div>';
            }
          ?>
      </div>
      <div class="calendar__week">
          <?PHP
            for ($i = 22; $i <= 28; $i++){
                echo '<div class="calendar__day day"><a href="../create/index.php?login=1&day=nov'.$i.'">'.$i.'</a></div>';
            }
          ?>
      </div>
      <div class="calendar__week">
          <?PHP
            for ($i = 29; $i <= 31; $i++){
                echo '<div class="calendar__day day"><a href="../create/index.php?login=1&day=nov'.$i.'">'.$i.'</a></div>';
            }
            for ($i = 1; $i <= 4; $i++){
                echo '<div class="calendar__day day"><a href="../create/index.php?login=1&day=dec'.$i.'">'.$i.'</a></div>';
            }
          ?>
      </div>
    </div>
