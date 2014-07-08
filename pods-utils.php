<?php

function pods_utils_show_pod_fields($pod, $selected_fields = null, $pod_id = null, $name_prefix = "", $theme_name = ""){
	$pods = pods( $pod );
	$fields = $pods->fields(); 
	foreach($fields as $field) {
		if($selected_fields != null)
			if(!in_array($field['name'], $selected_fields))
				continue;
	?>				
		<label for="<?php echo  $name_prefix . $field['name']; ?>">
			<?php _e( $field['label'], $theme_name ); ?>
			<?php $field['options']['required'] == 1 ? _e( '(required)', $theme_name ) : ""; ?>
		</label>				
		<?php echo PodsForm::field( $name_prefix . $field['name'], null, $field['type'], $field, $pod, $pod_id ); ?>
	<?php
	}
}
							
?>
