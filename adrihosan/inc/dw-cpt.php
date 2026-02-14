<?php

function dw_field_cpt_display($field, $field_value = null, $label = false, $table = false, $add = false) {
	if (!isset($field['label'])) $field['label'] = '';
	if (!isset($field['description'])) $field['description'] = '';
	if ($table) {
		echo '<tr class="form-field">';
		echo '<th scope="row" valign="top">';
	}
	if (isset($field['class'])) $class=$field['class'];
	else $class='';
	echo '<div class="'.$field['name'].'-container" style="margin-bottom:12px;">';
	if ($field['type'] == 'table') echo '</table>';
	if ($add) echo '<div class="form-field">';
	if ($label&&$field['type']!='label') echo '<label for="'.$field['name'].'-id" class="cf-label2">'.$field['label'].'</label>';
	if ($table) echo '</th>';
	if ($table) echo '<td>';
	if (array_key_exists('placeholder',$field)) $placeholder=$field['placeholder'];
	else $placeholder='';
	switch ($field['type']) {
		case 'tab':
			if ($first_tab) echo '<ul class="tabs">';
			else {
				if (!$first) echo '</table>';
				echo '</div></li>';
			}
			echo '<li class="tab">';
			if ($first_tab) $selected='checked="checked"';
			else $selected='';
			echo '<input type="radio" name="tabs" '.$selected.' id="tab-'.$field['name'].'">';
			echo '<label for="tab-'.$field['name'].'">'.$field['label'].'</label>';
			echo '<div id="tab-content-'.$field['name'].'" class="content">';
			$first_tab=false;
			$first=true;
		break;
		case 'table':
			echo '<table class="dw-cpt-form form-table"';
			if (isset($field['style'])) echo ' style="'.$field['style'].'"';
			echo '>';
			echo '<tr>';
			foreach ($field['items'] as $item) {
				echo '<th>'.$item['title'].'</th>';
			}
			echo '</tr>';
			foreach ($field['items'][0]['values'] as $key=>$value) {
				echo '<tr>';
				foreach ($field['items'] as $item) {
					if ($item['type'] == 'label') {
						echo '<td>'.$item['values'][$key].'</td>';
					} else {
						echo '<td>';
						$field_value = isset($item['values'][$key]) ? $item['values'][$key] : '';
						$item['name'] .= '['.$key.']';
						dw_field_cpt_display($item, $field_value);
						echo '</td>';
					}
				}
				echo '</tr>';
			}
			echo '</table><table>';
		break;
		case 'label':
			$text = isset($field_value) && $field_value ? $field_value : $field['label'];
			echo '<div class="cf-label1">'. $text .'</div>';
		break;
		case 'image';case 'icon';case 'pdf'; case 'video':
			echo '<div>';
			echo '<div style="display: flex;">';
			echo '<input type="text" name="'.$field['name'].'"';
			echo ' id="'.$field['name'].'_id" class="meta-image width-100 '.$class.'"';
			if (isset($placeholder)) echo ' placeholder="'.$placeholder.'"';
			echo ' value="'.$field_value.'">';
			echo '<input type="button" class="button image-upload '.$field['name'].'" value="'.__('Seleccionar','dw').'">'; 
			echo '<input type="button" class="button image-reset '.$field['name'].'" value="'.__('Borrar','dw').'">';
			echo '</div>';
			if ($field['type']!='pdf') {
				echo '<div class="image-preview '.$field['name'].' '.$field['type'].'">';
				if (isset($field_value)) {echo '<img src="'.$field_value.'">';}
				else {echo '<img src="">';}
				echo '</div>';
			}
			echo '</div>';
			$seltext=__('Seleccionar imagen','dw');
			$select=__('Seleccionar','dw');
			?>
			<script>
				jQuery(document).ready(function($) {
					var imageSelClass='.image-upload.<?php echo $field['name']; ?>';
					$(imageSelClass).on('click',function(e) {
						e.preventDefault();
						element=$(this);
						var meta_image_frame;
						var meta_image_preview=element.parent().parent().children(".image-preview");
						var meta_image=element.parent().children('.meta-image');
						if (meta_image_frame) {
							meta_image_frame.open();
							return;
						}
						meta_image_frame=wp.media.frames.meta_image_frame=wp.media({
							title: '<?php echo $seltext; ?>',
							button: {
								text: '<?php echo $select; ?>',
							},
						});
						meta_image_frame.on('select',function() {
							var media_attachment=meta_image_frame
								.state()
								.get('selection')
								.first()
								.toJSON();
							meta_image.attr('value',media_attachment.url);
							meta_image_preview.children('img').attr('src',media_attachment.url);
						});
						meta_image_frame.open();
					});
					var imageResClass='.image-reset.<?php echo $field['name']; ?>';
					$(imageResClass).on('click',function(e) {
						e.preventDefault();
						element=$(this);
						var meta_image=element.parent().children('.meta-image');
						var meta_image_preview=element.parent().parent().children('.image-preview');
						meta_image.attr('value','');
						meta_image_preview.children('img').removeAttr('src');
					});
				});
			</script>
			<?php
		break;
		case 'textarea':
			echo '<textarea name="'.$field['name'].'"';
			if (!empty($field['rows'])) {
				echo ' rows="' . $field['rows'] . '"';
			}
			echo ' id="'.$field["name"].'-id" class="width-100"';
			if (isset($placeholder)) echo ' placeholder="'.$placeholder.'"';
			echo '>'.$field_value.'</textarea>';
		break;
		case 'checkbox':
			echo '<input type="'.$field['type'].'" name="'.$field['name'].'"';
			echo ' id="'.$field["name"].'-id" class="width-100"';
			if (isset($placeholder)) echo ' placeholder="'.$placeholder.'"';
			if (!empty($field_value)) echo ' checked';
			echo '>';
		break;
		case 'select';case 'multi_select':
			if ($field['options']) {
				$opt=$field['options'];
				reset($opt);
				$sel=key($opt);
				$sel0=$sel;
			}
			if (isset($field_value)) $sel=$field_value;
			if (! is_array($sel)) $sel = array($field_value);
			$multi = $array = '';
			if ($field['type']=='multi_select') {
				$multi=' multiple size="8"';
				$array='[]';
			}
			echo '<select name="'.$field['name'].$array.'" id="'.$field['name'].'-id" class="width-100"'.$multi.'>';
			foreach ($opt as $key=>$op) {
				echo '<option value="'.$key.'"';
				if (in_array($key,$sel)) echo ' selected';
				echo '>'.$op.'</option>';
			}
			echo '</select>';
			if (!isset($field['reset']) || $field['reset'] == true) {
				if (!empty($sel0) && $sel0 != 0) $sel0 = '';
				echo '<input type="button" class="button reset-'.$field['name'].'" value="'.__('Borrar','dw').'">';
				?>
				<script>
					jQuery(document).ready(function($) {
						$('.reset-<?php echo $field['name']; ?>').on('click',function(e) {
							e.preventDefault();
							$('#<?php echo $field['name']; ?>-id option').each(function() {
								$(this).removeAttr('selected');
							});
							$('#<?php echo $field['name']; ?>-id option[value="<?php echo $sel0; ?>"]').attr('selected',true);
						});
					});
				</script>
				<?php
			}
		break;
		case 'multi_checkboxes':
			$opt=$field['options'];
			if (isset($field_value)) $sel=$field_value;
			else $sel = [];
			if (! is_array($sel)) $sel = array($sel);
			$array='[]';
			echo '<div class="multi_checkboxes">';
			foreach ($opt as $key=>$op) {
				echo '<input name="'.$field['name'].$array.'" id="'.$field['name'].'-id-'.$key.'" class="width-100" type="checkbox" value="' . $key . '"';
				if (in_array($key,$sel)) echo ' checked';
				echo '>';
				echo '<label for="'.$field['name'].'-id-'.$key.'">' . $op . '</label>';
			}
			echo '</div>';
			if (!isset($field['reset']) || $field['reset'] == true) {
				echo '<input type="button" class="button reset-'.$field['name'].'" value="'.__('Borrar','dw').'">';
				?>
				<script>
					jQuery(document).ready(function($) {
						$('.reset-<?php echo $field['name']; ?>').on('click',function(e) {
							e.preventDefault();
							$('[name="<?php echo $field['name'].$array;?>"]').each(function() {
								$(this).removeAttr('checked');
							});
						});
					});
				</script>
				<?php
			}
			break;
		case 'multi_checkboxes_text':
			$opt=$field['options'];
			if (is_array($field_value)) {
				$field_val = isset($field_value['val']) ? $field_value['val'] : [];
				$field_text = isset($field_value['text']) ? $field_value['text'] : [];
			} else {
				$field_val = [];
				$field_text = [];
			}
			$array='[]';
			echo '<div class="multi_checkboxes">';
			$i = 0;
			foreach ($opt as $key=>$op) {
				echo '<div>';
				echo '<input name="'.$field['name'].$array.'" id="'.$field['name'].'-id-'.$key.'" class="width-100" type="checkbox" value="' . $key . '"';
				if (in_array($key,$field_val)) echo ' checked';
				echo '>';
				echo '<label for="'.$field['name'].'-id-'.$key.'">' . $op . '</label>';
				if (isset($field['text'])) {
					echo '<label>' . $field['text']['label'] .'<input name="' . $field['text']['name'].$array . '" type="' . $field['text']['type'] . '" value="' . $field_text[$i] . '">';
				}
				echo '</div>';
				$i++;
			}
			echo '</div>';
			if (!isset($field['reset']) || $field['reset'] == true) {
				echo '<input type="button" class="button reset-'.$field['name'].'" value="'.__('Borrar','dw').'">';
				?>
				<script>
					jQuery(document).ready(function($) {
						$('.reset-<?php echo $field['name']; ?>').on('click',function(e) {
							e.preventDefault();
							$('[name="<?php echo $field['name'].$array;?>"]').each(function() {
								$(this).removeAttr('checked');
							});
						});
					});
				</script>
				<?php
			}
			break;
		case 'editor':
			$content=$field_value;
			$editor_id='dw-editor-'.$field['name'];
			$rows = isset($field['rows']) ? $field['rows'] : 10;
			$settings=array(
				'textarea_name'=>$field['name'],
				'textarea_rows'=> $rows,
				'editor_height' => $rows * 25,
			);
			wp_editor($content,$editor_id,$settings);
		break;
		case 'color':
			echo '<div>';
			echo '<div style="display: flex;">';
			echo '<input type="text" name="'.$field['name'].'"';
			echo ' id="'.$field['name'].'-id" class="meta-color width-100"';
			if (isset($field_value)) echo ' value="'.$field_value.'"';
			echo '>';
			echo '<input type="button" class="button reset-'.$field['name'].'" value="'.__('Borrar','dw').'">';
			echo '</div>';
			echo '<div class="color-preview '.$field['name'].' '.$field['type'].'"';
			if (isset($field_value)) echo ' style="background-color:'.$field_value.';width:40px;height:40px;border-radius:50%;border:1px solid black;"';
			echo '>';
			echo '</div>';
			?>
			<script>
				jQuery(document).ready(function($) {
					$('.reset-<?php echo $field['name']; ?>').on('click',function(e) {
						e.preventDefault();
						$('#<?php echo $field['name']; ?>-id').val('');
					});
					$('#<?php echo $field['name']; ?>-id').change(function() {
						$('.color-preview.<?php echo $field['name']; ?>').css('background-color',$(this).val());
					});
				});
			</script>
			<?php
			echo '</div>';
		break;
		case 'video-frame':
			echo '<div>';
			echo '<div style="display: flex;">';
			echo '<textarea name="'.$field['name'].'"';
			echo ' id="'.$field["name"].'-id" class="width-100"';
			if (isset($placeholder)) echo ' placeholder="'.$placeholder.'"';
			echo '>'.$field_value.'</textarea>';
			echo '<input type="button" class="button reset-'.$field['name'].'" value="'.__('Borrar','dw').'">';
			echo '</div>';
			echo '<div class="iframe-preview '.$field['name'].' '.$field['type'].'">';
			echo $field_value;
			echo '</div>';
			?>
			<script>
				jQuery('.reset-<?php echo $field['name']; ?>').on('click',function(e) {
					e.preventDefault();
					jQuery('#<?php echo $field['name']; ?>-id').val('');
				});
			</script>
			<?php
			echo '</div>';
		break;
		case 'date':
			echo '<input type="date" name="'.$field['name'].'" style="width: 150px;" value="'.$field_value.'">';
		break;
		case 'combine':
			$field['type'] = 'text';
			echo '<div class="wrapper" style="display:inline-flex;">';
			echo '<input type="'.$field['type'].'" name="'.$field['name'].'"';
			echo ' id="'.$field["name"].'-id" class="width-100 '.$class.'"';
			if (isset($placeholder)) echo ' placeholder="'.$placeholder.'"';
			if (isset($field_value)) echo ' value="'.$field_value.'"';
			echo '>';
			if (isset($field['symbol'])) echo '<span>'.$field['symbol'].'</span>';
			if (isset($field['added'])) {
				foreach ($field['added'] as $field_add) {
					$field_value = isset($field_add['value']) ? $field_add['value'] : '';
					echo '<span class="added-label" style="white-space:nowrap;padding: 4px 7px;">' . $field_add['label'] . '</span>';
					echo '<input type="'.$field_add['type'].'" name="'.$field_add['name'].'"';
					$field_add['class'] = isset($field_class['class']) ? $field_class['class'] : '';
					echo ' id="'.$field_add['name'].'-id" class="width-100 '.$field_add['class'].'"';
					if ($field_add['type']=='number') {
						if (isset($field_add['min'])) echo ' min="'.$field_add['min'].'"';
						if (isset($field_add['max'])) echo ' max="'.$field_add['max'].'"';
						if (isset($field_add['step'])) echo ' step="'.$field_add['step'].'"';
					}
					if (isset($field_add['placeholder'])) echo ' placeholder="'.$field_add['placeholder'].'"';
					if (isset($field_value)) echo ' value="'.$field_value.'"';
					echo '>';
				}
			}
			echo '</div>';
		break;
		case 'image-id':case 'pdf-id':
			echo '<div>';
			if ($field['type'] == 'pdf-id') {
				$url = wp_get_attachment_url($field_value);
				echo '<div class="url">' . $url . '</div>';
			} else {
				echo '<div class="image-preview '.$field['name'].' '.$field['type'].'">';
				if (isset($field_value) && $field_value) {
					$image = wp_get_attachment_image($field_value);
					if ($image) {
						echo $image;
					} else {
						echo '<img src="">';
					}
				} else {
					echo '<img src="">';
				}
				echo '</div>';
			}
			echo '<div style="display: flex;">';
			echo '<input type="hidden" name="'.$field['name'].'"';
			echo ' id="'.$field['name'].'_id" class="meta-image-id width-100 '.$class.'"';
			echo ' value="'.$field_value.'">';
			echo '<input type="button" class="button image-upload-id '.$field['name'].'" value="'.__('Select','doo').'">'; 
			echo '<input type="button" class="button doo-image-reset-id '.$field['name'].'" value="'.__('Remove','doo').'">';
			echo '</div>';
			echo '</div>';
			?>
			<script>
				jQuery(document).ready(function($) {
					var imageSelClassId='.image-upload-id.<?php echo $field['name']; ?>';
					$(imageSelClassId).on('click',function(e) {
						e.stopPropagation();
						element=$(this);
						var meta_image_preview=element.parent().parent().children('.image-preview');
						var meta_image=element.parent().children('.meta-image-id');
						var meta_url = element.parent().parent().children('.url');
						meta_image_frame=wp.media.frames.meta_image_frame=wp.media({
							title: 'Seleccionar imagen',
							button: {
								text: 'Seleccionar',
							},
							multiple: false
						});
						meta_image_frame.on('select',function(e) {
							var media_attachment=meta_image_frame
							.state()
							.get('selection')
							.first()
							.toJSON();
							meta_image.attr('value',media_attachment.id);
							meta_image_preview.children('img').attr('src',media_attachment.url);
							meta_url.html(media_attachment.url);
							meta_image_frame = false;
						});
						meta_image_frame.on('open',function() {
							var selection =  meta_image_frame.state().get('selection');
							var ids = meta_image.val().split(',');
							ids.forEach(function(id) {
								var attachment = wp.media.attachment(id);
								attachment.fetch();
								selection.add( attachment ? [ attachment ] : [] );
							});
						});
						meta_image_frame.close();
						meta_image_frame.open();
					});

					var imageResClassId='.doo-image-reset-id.<?php echo $field['name']; ?>';
					$(imageResClassId).on('click',function(e) {
						e.preventDefault();
						element=$(this);
						var meta_image=element.parent().children('.meta-image-id');
						var meta_image_preview=element.parent().parent().children('.image-preview');
						meta_image.attr('value','');
						meta_image_preview.children('img').removeAttr('src');
						var meta_url = element.parent().parent().children('.url');
						meta_url.html('');
					});
				});
			</script>
			<?php
		break;
		default:
			echo '<input type="'.$field['type'].'" name="'.$field['name'].'"';
			echo ' id="'.$field["name"].'-id" class="width-100 '.$class.'"';
			if ($field['type']=='number') {
				if (isset($field['min'])) echo ' min="'.$field['min'].'"';
				if (isset($field['max'])) echo ' max="'.$field['max'].'"';
				if (isset($field['step'])) echo ' step="'.$field['step'].'"';
			}
			if (isset($placeholder)) echo ' placeholder="'.$placeholder.'"';
			if (isset($field_value)) echo ' value="'.$field_value.'"';
			echo '>';
			if (isset($field['symbol'])) echo '<span>'.$field['symbol'].'</span>';
		break;
	}
	if (array_key_exists('description',$field)) echo '<p class="description">'.$field['description'].'</p>';
	if ($add) echo '</div>';
	if (isset($field['autosave']) && $field['autosave'] == true) {
		$gift_image = get_theme_file_uri( '/img/loader.svg' );
		$field_name = $field['name'];
		if ($field['type'] == 'multi_select') $field_name .= '[]';
		?> 
		<script>
			jQuery(document).ready(function($) {
				$('[name="<?php echo $field['name']; ?>"]').change(function() {
					$.blockUI({
						message: '<img src="<?php echo $gift_image; ?>">',
						css: {
							backgroundColor: '#ffffff',
							border: 'none',
						}
					});
					$btn = $('input[type="submit"].button-primary');
					if (!$btn) {
						$btn = $('input[type="submit"]');
					}
					$btn.click();
					setTimeout($.unblockUI,2000);
				});
			});
		</script>
		<?php
	}
	if (isset($field['autosave_post']) && $field['autosave_post'] == true) {
		$gift_image = get_theme_file_uri( '/img/loader.svg' );
		$field_name = $field['name'];
		if ($field['type'] == 'multi_select') $field_name .= '[]';
		?>
		<script>
			jQuery(document).ready(function($) {
				$('[name="<?php echo $field_name; ?>"]').change(function() {
					$.blockUI({
						message: '<img src="<?php echo $gift_image; ?>">',
						css: {
							backgroundColor: "#ffffff",
							border: "none",
							padding: "40px 0",
						}
					});
					var btn_publish=$('button.editor-post-publish-button');
					var btn_draft=$('button.editor-post-save-draft');
					if (btn_publish.length) {
						btn_publish.click();
					} else {
						if (btn_draft.length) {
							btn_draft.click();
						}
					}
					setTimeout(document.location.reload(true),3800);
					setTimeout($.unblockUI,4000);
				});
			});
		</script>
		<?php
	}
	if (isset($field['script'])) {
		echo '<script>'.$field['script'].'</script>';
	}
	echo '</div>';
	if ($table) {
		echo '</td>';
		echo '</th>';
	}
}
