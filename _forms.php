<!DOCTYPE html><html lang="en-gb">
<?php
	$page_title = "Form Example";
	$page_desc = "A simple example form using fieldset";
	
	@include('_includes/header-include.html');
?>
	<p>The <code>fieldset</code> element enables you to group related fields within a form, and each one should contain a corresponding <code>legend</code>. The <code>label</code> element ensures field descriptions are associated with their corresponding form widgets.</p>

	<fieldset>
		<legend>Legend</legend>
		<p><small class="caption">Required fields are marked <abbr title="Required">*</abbr></small></p>
		<?php include('_patterns/form-input.text.html'); ?>
		<?php include('_patterns/form-input.password.html'); ?>
		<?php include('_patterns/form-input.email.html'); ?>
		<?php include('_patterns/form-input.url.html'); ?>
		<?php include('_patterns/form-select.html'); ?>
		<?php include('_patterns/form-options.checkboxes.html'); ?>
		<?php include('_patterns/form-options.radios.html'); ?>
		<?php include('_patterns/form-textarea.html'); ?>
		<?php include('_patterns/form-input.checkbox.html'); ?>
		<?php include('_patterns/form-buttongroup.html'); ?>
	</fieldset>

<?php @include('_includes/footer-include.html'); ?>
