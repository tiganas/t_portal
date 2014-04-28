<?php if(!isset($i)) $i = 0; ?>
<div id="title_block">
    <h2 <?php if(strlen($Envelope->filmprogram->film[$i]->titel) > 15) echo "style='font-size:40px;'"; // && strlen($Envelope->filmprogram->film->titel) < 23?>>
        <?php echo $Envelope->filmprogram->film[$i]->titel?>
    </h2>
</div>