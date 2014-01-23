<!DOCTYPE html><html lang="en-gb">

<?php
	$page_title = "File Structure";
	$page_desc = "What goes where within our CSS file tree";
	
	@include('_includes/header-include.html');
?>
	<style type="text/css">
		.subdir{
			margin-left: 1em;
			padding-left: .5em;
			border-left: 1px solid lightgray;
		}
		.folder:after{
			content:"(folder)";
			font-size: 75%;
			opacity:.5;

		}
		.file:after{
			content:"(file)";
			font-size: 75%;
			opacity:.5;
		}
	</style>

		<h2 class="file"> Core.scss </h2>
		<p>Should only have @includes for other .scss files.</p>
		<p>Only include global framework, typography, and module files here. Other files should go in page-specific partials instead.</p>
		<p>Modules should be @included in alphabetical order, other items should not be reordered to ensure framework functions correctly.</p>
		
		<h2 class="folder"> assets </h2>
		<p>Fonts and images for various modules and other reskin elements</p>
		<div class="subdir">
			<h3 class="folder"> fonts </h3>
			<p> Fonts for firefly-based CSS.</p>
			<p> Fonts specifically for individual modules should go into subfolders with the same name as their associated modules</p>
			<h3 class="folder"> icons </h3>
			<p> Icons for use with firefly-based CSS.</p>
			<p> Icons specifically for individual modules should go into subfolders with the same name as their associated modules</p>
		</div>
		
		<h2 class="folder">framework</h2>
		<div class="subdir">
			<h3 class="file"> _forms.scss </h3>
				<p>Basic styling for standard form elements.</p>
			<h3 class="file"> _framework.scss </h3>
				<p>Basic styling for standard elements such as body, images, etc.</p>
			<h3 class="file"> _grid.scss </h3>
				<p>Definition of the grid system, including elements like columns, rows, and containers</p>
			<h3 class="file"> _helpers.scss </h3>
				<p>Styles that may be added to other core styles to modify them. Includes things like alignment, floats, show/hide, and standard drop-shadow.</p>
			<h3 class="file"> _states.scss </h3>
				<p>Styles for dynamic states that should override base styles conditionally. Should be prefixed with "is-" consistently. For example, ".is-disabled" lowers opacity and disallows click-events.</p>
				<p>These styles should <em>only</em> be added conditionally by scripts or other frontend code, never used to set a static style.</p>
			<h3 class="file"> _tables.scss </h3>
				<p>Basic styling for tables, including row/column headers, basic table appearance, etc.</p>
			<h3 class="file"> _type.scss </h3>
				<p>Core typography, including custom definitions for b, em, etc. tags, headings, lists, and similar typography-based elements.</p>
		</div>

		<h2 class="folder">layout</h2>
		<div class="subdir">
			<h3 class="file">_masterpage.scss </h3>
			<p>Basic structure for the outside-wrapper of the VAN, including header, footer, branding area, and outer nav.
			<h3 class="file">_van-inner.scss
			<p>Basic structure for the inner portion of the VAN content area, including header buttons and header styling for the content area.</p>
		</div>

		<h2 class="folder">modules</h2>
		<p>Individual modules for specific features, intended for @include usage in other files (core, sections, etc.).</p>

		<h2 class="folder">sections</h2>
		<p>Page-specific collections of modules, to be linked in their respective pages. Should be used for modules that are not part of core.</p>
		<p>Ideally all sections should be nothing but a collection of @includes for modules, so that the relevant code can be easily removed here if it is ever added to core or needs to be modified.</p>

		<h2 class="folder">utilities</h2>
		<div class="subdir">
			<h3 class="file"> _functions.scss </h3>
			<p>Definitions of all functions to be used across the site's scss. If you want to add a function, do it here rather than in your module or other file.
			<h3 class="file"> _mixins.scss </h3>
			<p>Definitions of all mixins to be used across the site's scss. If you want to add a mixin, do it here rather than in your module or other file.
			<h3 class="file"> _theme-variables.scss </h3>
			<p> Theme-specific variables. This is likely soon to be scrapped for a more robust and rebuilt theme setup.
			<h3 class="file"> _variables.scss </h3>
			<p>Definitions of all variables to be used across the site's scss. If you want to add a variable, do it here rather than in your module or other file.
		</div>





<?php @include('_includes/footer-include.html'); ?>