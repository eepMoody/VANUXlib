<!DOCTYPE html><html lang="en-gb">

<?php
	$page_title = "Basic Form Elements";
	$page_desc = "Common elements for forms";
	
	@include('_includes/header-include.html');

	$files = array();
	
	$patterns_dir = "_form-elements";
	$handle = opendir($patterns_dir);
	while (false !== ($file = readdir($handle))):
		if(stristr($file,'.html')):
			$files[] = $file;
		endif;
	endwhile;
	sort($files);
	foreach ($files as $file):
		echo '<section class="pattern">';
		echo '<h2 style="color:gray;">'.ucwords(str_replace(['-','.'],[' ',' - '], str_replace('.html', '', $file))).'</h2>';
		include($patterns_dir.'/'.$file);
		echo '<details class="primer">';
		echo '<summary title="Show markup and usage">&#8226;&#8226;&#8226;</summary>';
		echo '<section>';
		echo '<textarea rows="10" cols="30" class="input code">'.htmlspecialchars(file_get_contents($patterns_dir.'/'.$file)).'</textarea>';
		echo '<p class="caption"><strong>Usage:</strong> '.htmlspecialchars(@file_get_contents($patterns_dir.'/'.str_replace('.html','.txt',$file))).'</p>';
		echo '</section>';
		echo '</details><!--/.primer-->';
		echo '</section><!--/.pattern-->';
	endforeach;
	@include("_includes/footer-include.html");
?>

