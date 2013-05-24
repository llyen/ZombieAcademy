<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <?php
            $cs = Yii::app()->getClientScript();
            $cs->registerCssFile(Yii::app()->request->baseUrl.'/css/main.css');
        ?>
</head>

<body>

<div class="container-fluid wrapper" id="page">

        <?php
		$this->widget('bootstrap.widgets.TbNavbar', array(
		'brand'=>CHtml::encode(Yii::app()->name),
		'brandUrl'=>Yii::app()->baseUrl,
		'collapse'=>true, // requires bootstrap-responsive.css
		'htmlOptions'=>array('class'=>'navbar-wrapper'),
		'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'type'=>'pills',
			'items'=>array(
				array('label'=>'UŻYTKOWNICY', 'url'=>'#', 'items'=>
				      array(
					array('label'=>'ROLE', 'url'=>'#'),
					array('label'=>'AKCJE', 'url'=>'#'),
					array('label'=>'ZARZĄDZANIE', 'url'=>'#'),
					array('label'=>'STATYSTYKI', 'url'=>'#'),
				      ),
				),
				array('label'=>'WYZWANIA', 'url'=>'#', 'items'=>
				      array(
					array('label'=>'UTWÓRZ NOWE', 'url'=>'#'),
					array('label'=>'TRWAJĄCE', 'url'=>'#'),
					array('label'=>'ZAKOŃCZONE','url'=>'#'),
				      ),
				),
				array('label'=>'KATEGORIA3', 'url'=>'#', 'items'=>
				      array(
					array('label'=>'OPCJA 1', 'url'=>'#'),
					array('label'=>'OPCJA 2', 'url'=>'#'),
				      ),
				),
				array('label'=>'KATEGORIA4', 'url'=>'#', 'items'=>
				      array(
					array('label'=>'OPCJA 1', 'url'=>'#'),
					array('label'=>'OPCJA 2', 'url'=>'#'),
				      ),
				),
				array('label'=>'RANKING', 'url'=>'#'),
				array('label'=>'KOMUNIKACJA', 'url'=>'#'),
				array('label'=>'ZALOGUJ', 'url'=>array('/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'WYLOGUJ', 'url'=>array('/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
		),
		)));
        ?>
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<?php echo $content; ?>
	
</div><!-- page -->
<div id="footer"></div>
</body>
</html>