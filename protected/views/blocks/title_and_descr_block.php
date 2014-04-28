<?php if(!isset($i)) $i = 0; ?>
<div id="title_block">
    <h2 <?php if(strlen($Envelope->filmprogram->film[$i]->titel) > 15 && strlen($Envelope->filmprogram->film[$i]->titel) < 23) echo "style='font-size:40px;'";?>>
        <?php echo $Envelope->filmprogram->film[$i]->titel?>
    </h2>
</div>
<div class="description_block">
    <div id="sidebar" class="list-group">
        <p><strong style="color:#fff;"><?php echo $Envelope->filmprogram->film[$i]->titel?>: </strong><?php echo $Envelope->filmprogram->film[$i]->omtale?></p>
    </div>
</div>