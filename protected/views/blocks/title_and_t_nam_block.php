<?php if(!isset($i)) $i = 0; ?>
<div id="title_block">
    <h2 <?php if(strlen($Envelope->filmprogram->film[$i]->titel) > 15) echo "style='font-size:40px;'"; // && strlen($Envelope->filmprogram->film->titel) < 23?>>
        <?php echo $Envelope->filmprogram->film[$i]->titel?>
    </h2>
</div>

<div class="teatre_name_block">
    <span id="teatre-name"<?php if(strlen(ActionsClass::UserInfo('teatre_name')) > 20) echo "style='font-size:20px;padding-top:20px;'";?>><?php echo ActionsClass::UserInfo('teatre_name');?></span>
</div>