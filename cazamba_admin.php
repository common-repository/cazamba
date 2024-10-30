<?php
if ($_POST['cazamba_hidden'] == 'Y') {
    //Form data sent
    $token = trim($_POST['cazamba_token']);
    update_option('cazamba_token', $token);
    ?>
		<div class="updated"><p><strong><?php _e('Configurações Salvas!');?></strong></p></div>
		<?php
} else {
    //Normal page display
    $token = get_option('cazamba_token');
}

?>

<div class="wrap">
<?php echo "<h2>" . __('Cazamba Config') . "</h2>"; ?>

<form name="cazamba_form" method="post" action="<?php echo str_replace('%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="cazamba_hidden" value="Y">
	<?php echo "<h4>" . __('Cazamba - Configuração') . "</h4>"; ?>
	<p><?php _e("Publisher Token: ");?><input type="text" name="cazamba_token" value="<?php echo $token; ?>" size="20"></p>


	<p class="submit">
	<input type="submit" name="Submit" value="<?php _e('Atualizar token!')?>" />
	</p>
</form>
</div>
