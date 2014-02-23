function show_pod_fields($pod, $selected_fields = null, $name_prefix = "", $theme_name = ""){
	$pods = pods( $pod );
	$fields = $pods->fields(); 
	foreach($fields as $field) {
	?>				
		<label for="<?php echo  $name_prefix . $field['name']; ?>">
			<?php _e( $field['label'], $theme_name ); ?>
			<?php $label['options']['required'] == 1 ? _e( '(required)', $theme_name ) : ""; ?>
		</label>				
		<?php echo PodsForm::field( $name_prefix . $field['name'], null, $field['type'], null, $pod_name, null ); ?>
	<?php
	}
}
