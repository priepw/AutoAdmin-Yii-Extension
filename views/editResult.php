<?
Yii::app()->clientScript
	->registerCssFile(AutoAdmin::$assetPath.'/css/edit-result.css');

$this->breadcrumbs = array(
	$this->pageTitle,
);
?>

<div class="narrow-content">

	<h1><?=$this->pageTitle?></h1>

	<p class="msg"><?=$msg?></p>
</div>
<script language="JavaScript">window.setTimeout(function() {document.location.href = "<?=$redirectURL?>"}, <?=(empty($errorOccured) ? 1000 : 10000)?>);</script>

<? $this->renderPartial($viewsPath.'footer', array('isGuest'=>$isGuest, 'userName'=>$userName, 'userLevel'=>$userLevel));?>