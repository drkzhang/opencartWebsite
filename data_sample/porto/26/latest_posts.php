<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["blog_latest_module"] = array (
  1 => 
  array (
    'heading_title' => 
    array (
      $language_id => 'From the blog',
      1 => 'From the blog',
    ),
    'layout_id' => '1',
    'position' => 'column_right',
    'template' => 'index12_new.tpl',
    'status' => '1',
    'thumb_width' => '270',
    'thumb_height' => '160',
    'articles_limit' => '1',
    'sort_order' => '3',
  ),
); 

$this->model_setting_setting->editSetting( "blog_latest", $output );	

?>