<?php
/**
 * Template desenvolvido por Adriano Pires e Marilia Brittes e Aurélio Grott
 * 
 */

defined('_JEXEC') or die;

// Pegar os parametros do template
$params = JFactory::getApplication()->getTemplate(true)->params;

// Pegar o parametro logo que eh a url de onde se encontra a imagem logo pro site
if ($this->params->get('logo'))
{
	$logo = '<img src="'. JURI::root() . $this->params->get('logo') .'" id="logo" alt="Através do Samba" />';
	//apenas simplifica a insercao da imagem do logo
}
else
{
	$logo = '';//caso o user nao tenha escolhido nenhum logo, a imagem nao sera colocada
}

//pegar o parametro 
if ($this->params->get('background-image'))
{
	$backgroundimage = JURI::root() . $this->params->get('background-image');
	//apenas simplifica a insercao da imagem do logo
}
else
{
	$backgroundimage = '';//caso o user nao tenha escolhido nenhum logo, a imagem nao sera colocada
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" /> 
	<script src="<?php echo "templates/".$this->template."/script/jquery.js" ?>"></script>
	
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 7]> <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
	<!--[if IE 7]>    <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
	<!--[if IE 8]>    <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
	<link href="<?php echo "templates/".$this->template."/css/estilo_geral.css" ?>" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Adiciona lateral esquerda -->
<?php if($this->countModules('mainLeft')) : ?>
	<div class="main_left borda">
		<jdoc:include type="modules" name="mainLeft" style="xhtml"/>
		<div class="clearer"></div>
		<!-- Adiciona header da esquerda -->
		<?php if($this->countModules('leftHeader')) : ?>
			<div class="left_header borda">
				<jdoc:include type="modules" name="leftHeader" style="xhtml"/>
		<?php endif; ?>
			</div>
			<div class="clearer"></div>
		<!-- Adiciona menu na esquerda -->
		<?php if($this->countModules('menu')) : ?>
			<div class="modmenu borda">
				<jdoc:include type="modules" name="menu" style="xhtml" />
		<?php endif; ?>
			</div>
		<div class="clearer"></div>
<?php endif; ?>
	</div>
<?php if ($this->countModules('corpo')) : ?>
	<div class="modcorpo borda">
		<jdoc:include type="modules" name="corpo" style="xhtml" />
<?php endif; ?>
	</div>	
<div class="clearer"></div>		

<!-- FOOTER -->

<footer class="footer_main borda">
	<?php if ($this->countModules('footer')) : ?>
		<div class="footer borda">
			<jdoc:include type="modules" name="footer" style="xhtml" />
	<?php endif; ?>
		</div>	
	<div class="clearer"></div>
</footer>
<!-- END FOOTER -->
</body>
</html>