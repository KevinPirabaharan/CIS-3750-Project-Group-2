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
                if ($i == 3){
                    echo '<button type="button" data-toggle="popover" title="Popover title" data-content="Slideshow scheduled for 5-6pm"><i class="material-icons">grade</i></button>';
                }
                echo '<a href="../create/index.php?login=1&day=nov'.$i.'">'.$i.'</a>';
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

<style>
    
.toolbar{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 24px;
}
.calendar{}

.calendar__week,
.calendar__header {
  display: grid;
  grid-template-columns: repeat(7, 1fr);  
}
.calendar__week {
  grid-auto-rows: 100px;
  text-align: right;
}

.calendar__header {
  grid-auto-rows: 50px;
  align-items: center;
  text-align: center;
}

.calendar__day {
  padding: 16px;
}
    
.calendar__day a {
    border-radius: 10.5em;
    border: 2px solid #f2f2f2;
    background: transparent;
    padding: 5px 10px;
    width: 20px;
    height: 20px;
    -webkit-transition-duration: 0.4s;
    color: black;
    text-decoration: none;
    transition-duration: 0.4s;
}
    
.calendar__day a:hover {
    background: #41A7C7;
}


:root {
  --red: #ED5454;
}

sidebar {
  background-color: white;
  box-shadow: 5px 0px 20px rgba(0, 0, 0, 0.2);
}

.avatar__name {
  font-size: 0.8rem;
}

.menu__item {
  text-transform: uppercase;
  font-size: 0.7rem;
  font-weight: 500;
  padding: 16px 16px 16px 14px;
  border-left: 4px solid transparent;
  color: inherit;
  text-decoration: none;
  transition: color ease 0.3s;
}

.menu__item--active .menu__icon {
  color: var(--red);
}
.menu__item--active .menu__text {
  color: black;
}

.menu__item:hover {
  color: black;
}


.menu__icon {
  font-size: 1.3rem;
}

@media screen and (min-width: 850px) {
  .menu__icon {
    font-size: 0.9rem;
    padding-right: 16px;
  }
  .menu__item--active {
    border-left: 4px solid var(--red);
    box-shadow: inset 10px 0px 17px -13px var(--red);
  }
}

.copyright {
  font-size: 0.7rem;
  font-weight: 400;
}

.calendar {
  background-color: white;
  border: 1px solid #828282;
}

.calendar__header > div {
  text-transform: uppercase;
  font-size: 0.8em;
  font-weight: bold;
}

.calendar__day {
  border-right: 1px solid #828282;
  border-top: 1px solid #828282;
}

.calendar__day:last-child {
  border-right: 0;
}

.toggle{
  display: grid;
  grid-template-columns: 1fr 1fr;

  text-align: center;
  font-size: 0.9em;
}
.toggle__option{
  padding: 16px;
  border: 1px solid #828282;
  border-radius: 8px;
  text-transform: capitalize;
  cursor: pointer;
}
.toggle__option:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.toggle__option:last-child {
    border-left: 0;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.toggle__option--selected{
  border-color: white;
  background-color: white;
  color: var(--red);
  font-weight: 500;
  box-shadow: 1px 2px 30px -5px var(--red);
}
.arrow {
    border:0;
    border-radius:0px;
    line-height:1.5px;       
}

</style>
