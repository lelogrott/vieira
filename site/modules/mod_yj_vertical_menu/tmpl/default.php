<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on YJSimpleGrid Framework          ||
|| # Copyright (C) 2010  Youjoomla.com. All Rights Reserved.            ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of Youjoomla.com                      ||
|| # for more information visit http://www.youjoomla.com/license.html   ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses                                         ||
|| # websites - http://www.youjoomla.com | http://www.yjsimplegrid.com  ||
|| #################################################################### ||
\*======================================================================*/
// No direct access.
defined('_JEXEC') or die;
?>
<ul id="yj-vertical-menu<?php echo $module->id;?>" class="yj-vertical-menu flyout<?php echo $flyoutPosition?> <?php echo $class_sfx;?>">
<?php
$last_key = end(array_keys($list));
foreach ($list as $i => &$item) :
       $ais_active		 = '';
	   $lifirst		     = '';
	   $lilast			 = '';
	   $liafirst	     = '';
	   $lialast			 = '';
	   $firstli			 = false;
	   $lastli			 = false;
	   $activea			 = false;
	   
	   if($i == 0){
		  $lifirst		 = 'lifirst';
		  $liafirst		 = 'afirst';
		  $firstli		 = true;
		}
	  
	  if ($i == $last_key) {
		   $lilast		 = 'lilast';
		   $lialast		 = 'alast';
		   $lastli		 = true;
	  }
	  
	  
	$class = '';
	if ($item->id == $active_id) {
		$class .= ' current-side ';
		$ais_active =' isactivea';
		$activea	= true;
	}

	if (in_array($item->id, $path)) {
		$class .= ' active ';
		$ais_active =' isactivea';
	}
	elseif ($item->type == 'alias') {
		$aliasToId = $item->params->get('aliasoptions');
		if (count($path) > 0 && $aliasToId == $path[count($path)-1]) {
			$class .= ' active ';
		}
		elseif (in_array($aliasToId, $path)) {
			$class .= ' active alias-parent-active ';
		}
	}

	if ($item->deeper) {
		$class .= 'parent ';
	}

	if (!empty($class)) {
		$class = ' class="'.$lifirst.$lilast.$class .'"';
	}
	if (empty($class) && ($firstli || $lastli)) {
		$class = ' class="'.$lifirst.$lilast.'"';
	}
	echo '<li id="item-'.$item->id.'"'.$class.'>';

		// Render the menu item.
		switch ($item->type) :
			case 'separator':
			case 'url':
			case 'component':
				require ('default_'.$item->type.'.php');
				break;
	
			default:
				require ('default_url.php');
				break;
		endswitch;

	// The next item is deeper.
	if ($item->deeper) {
		echo '<ul>';
	}
	// The next item is shallower.
	else if ($item->shallower) {
		echo '</li>';
		echo str_repeat('</ul></li>', $item->level_diff);
	}
	// The next item is on the same level.
	else {
		echo '</li>';
	}
endforeach;
?></ul>