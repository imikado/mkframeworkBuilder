<style>
.success{
	color:darkgreen;
}
</style>
<?php
$bAllowOpenUrl=ini_get('allow_url_fopen');
if(!$bAllowOpenUrl):?>
<p class="error"><?php echo tr('paramAllowFopenUrlDisabled')?></p>
<p class="error"><?php echo tr('paramAllowFopenUrlDisabledDetail')?></p>

<?php endif;?>
<?php $sSelected=null;?>
<ul class="projets">
	<?php foreach($this->tLink as $sLabel => $sAction):?>
	<li <?php if($sAction==_root::getParam('action')): $sSelected=tr($sLabel); ?>class="selectionne"<?php endif;?>><a href="<?php echo _root::getLink('builder::marketBuilder',array('action'=>$sAction))?>"><?php echo tr($sLabel)?></a></li>
	<?php endforeach;?>
</ul>

<?php if($sSelected):?>
<h1><?php echo $sSelected;?></h1>
<?php endif;?>