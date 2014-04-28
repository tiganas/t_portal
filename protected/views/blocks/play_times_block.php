<?php if(!isset($i)) $i = 0; ?>
<div id="play_times_block">
    <div class="panel-heading no-radius">
            <h3>Next time played</h3>
    </div>
    <div id="sidebar2" class="list-group">
        <?php
                    $n = 0;
                    foreach($Envelope->filmprogram->film[$i]->forestillinger->forestilling  as $dates)
                    {	
                            $today = '';
                            $day = substr($dates->tidspunkt,0,10);
                            $time = substr($dates->tidspunkt,-5,5);
                            if(date("Y-m-d") == $day){
                                echo '<a class="list-group-item times" data-parent="#sidebar"><i class="icon-group"></i><strong>Today '.$time.'</strong>  </a>';
                            }
                            else if(strtotime($day) - strtotime(date("Y-m-d")) == 86400){
                                echo '<a class="list-group-item times" data-parent="#sidebar"><i class="icon-group"></i><strong>Tomorrow '.$time.'</strong>  </a>';
                            }
                            else
                            {
                                echo '<a class="list-group-item times" data-parent="#sidebar"><i class="icon-group"></i>'.$day.' <strong> '.$time.'</strong> </a>';
                            }

                            $n++;
                            if($n == 4) break;
                            //var_dump($dates);
                    }


            ?>



    </div>
</div>