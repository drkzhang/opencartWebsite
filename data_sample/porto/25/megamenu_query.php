<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["megamenu_module"] = array (
  0 => 
  array (
    'module_id' => 0,
    'layout_id' => '99999',
    'position' => 'menu',
    'status' => '1',
    'display_on_mobile' => '1',
    'sort_order' => 0,
    'orientation' => '0',
    'search_bar' => 0,
    'navigation_text' => 
    array (
      1 => '',
    ),
    'home_text' => 
    array (
      1 => '',
    ),
    'full_width' => '1',
    'home_item' => 'disabled',
    'animation' => 'shift-up',
    'animation_time' => 200,
    'status_cache' => 0,
    'cache_time' => 1,
  ),
);
 
$this->model_setting_setting->editSetting( "megamenu", $output );

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu`
");

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu_modules`
");

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu_links`
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`module_id` int(11) NOT NULL DEFAULT '0',
		`parent_id` int(11) NOT NULL,
		`rang` int(11) NOT NULL,
		`icon` varchar(255) NOT NULL DEFAULT '',
		`name` text,
		`link` text,
		`description` text,
		`label` text,
		`label_text_color` text,
		`label_background_color` text,
		`custom_class` text,
		`new_window` int(11) NOT NULL DEFAULT '0',
		`status` int(11) NOT NULL DEFAULT '0',
		`display_on_mobile` int(11) NOT NULL DEFAULT '0',
		`position` int(11) NOT NULL DEFAULT '0',
		`submenu_width` text,
		`submenu_type` int(11) NOT NULL DEFAULT '0',
		`submenu_background` text,
		`submenu_background_position` text,
		`submenu_background_repeat` text,
		`content_width` int(11) NOT NULL DEFAULT '12',
		`content_type` int(11) NOT NULL DEFAULT '0',
		`content` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu_modules` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`name` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu_links` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`name` text,
		`name_for_autocomplete` text,
		`url` text,
		`label` text,
		`label_text` text,
		`label_background` text,
		`image` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
	INSERT INTO `".DB_PREFIX."mega_menu_links` (`id`, `name`, `name_for_autocomplete`, `url`, `label`, `label_text`, `label_background`, `image`) VALUES
	(1, 'a:2:{i:" . $language_id . ";s:14:\"Home variation\";i:1;s:14:\"Home variation\";}', 'Home variation', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(2, 'a:1:{i:1;s:14:\"Home Version 1\";}', 'Home Version 1', 'http://obest.org/opencart/porto/1', 'a:1:{i:1;s:0:\"\";}', '', '', ''),
	(3, 'a:2:{i:" . $language_id . ";s:14:\"Home Version 2\";i:1;s:14:\"Home Version 2\";}', 'Home Version 2', 'http://obest.org/opencart/porto/2', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(4, 'a:2:{i:" . $language_id . ";s:14:\"Home Version 3\";i:1;s:14:\"Home Version 3\";}', 'Home Version 3', 'http://obest.org/opencart/porto/3', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(5, 'a:2:{i:" . $language_id . ";s:14:\"Home Version 4\";i:1;s:14:\"Home Version 4\";}', 'Home Version 4', 'http://obest.org/opencart/porto/4', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(6, 'a:2:{i:" . $language_id . ";s:14:\"Home Version 5\";i:1;s:14:\"Home Version 5\";}', 'Home Version 5', 'http://obest.org/opencart/porto/5', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(7, 'a:1:{i:1;s:14:\"Home Version 6\";}', 'Home Version 6', 'http://obest.org/opencart/porto/6', 'a:1:{i:1;s:0:\"\";}', '', '', ''),
	(8, 'a:2:{i:" . $language_id . ";s:14:\"Home Version 7\";i:1;s:14:\"Home Version 7\";}', 'Home Version 7', 'http://obest.org/opencart/porto/7', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(9, 'a:2:{i:" . $language_id . ";s:14:\"Home Version 8\";i:1;s:14:\"Home Version 8\";}', 'Home Version 8', 'http://obest.org/opencart/porto/8', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(10, 'a:2:{i:" . $language_id . ";s:14:\"Home Version 9\";i:1;s:14:\"Home Version 9\";}', 'Home Version 9', 'http://obest.org/opencart/porto/9', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(11, 'a:2:{i:" . $language_id . ";s:15:\"Home Version 10\";i:1;s:15:\"Home Version 10\";}', 'Home Version 10', 'http://obest.org/opencart/porto/10', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(12, 'a:2:{i:" . $language_id . ";s:15:\"Home Version 11\";i:1;s:15:\"Home Version 11\";}', 'Home Version 11', 'http://obest.org/opencart/porto/11', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(13, 'a:2:{i:" . $language_id . ";s:15:\"Home Version 12\";i:1;s:15:\"Home Version 12\";}', 'Home Version 12', 'http://obest.org/opencart/porto/12', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(14, 'a:2:{i:" . $language_id . ";s:15:\"Home Version 13\";i:1;s:15:\"Home Version 13\";}', 'Home Version 13', 'http://obest.org/opencart/porto/13', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(15, 'a:2:{i:" . $language_id . ";s:15:\"Home Version 14\";i:1;s:15:\"Home Version 14\";}', 'Home Version 14', 'http://obest.org/opencart/porto/14', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(16, 'a:2:{i:" . $language_id . ";s:15:\"Home Version 15\";i:1;s:15:\"Home Version 15\";}', 'Home Version 15', 'http://obest.org/opencart/porto/15', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(17, 'a:2:{i:" . $language_id . ";s:15:\"Home Version 16\";i:1;s:15:\"Home Version 16\";}', 'Home Version 16', 'http://obest.org/opencart/porto/16', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(18, 'a:2:{i:" . $language_id . ";s:15:\"Home Version 17\";i:1;s:15:\"Home Version 17\";}', 'Home Version 17', 'http://obest.org/opencart/porto/17', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(19, 'a:2:{i:" . $language_id . ";s:8:\"Desktops\";i:1;s:8:\"Desktops\";}', 'Desktops', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:3:\"NEW\";}', '#fff', '#0cc485', ''),
	(20, 'a:2:{i:" . $language_id . ";s:9:\"Smart tvs\";i:1;s:9:\"Smart tvs\";}', 'Smart tvs', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', 'catalog/porto/smart_tv.png'),
	(21, 'a:2:{i:" . $language_id . ";s:7:\"Cameras\";i:1;s:7:\"Cameras\";}', 'Cameras', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', 'catalog/porto/camera.png'),
	(22, 'a:2:{i:" . $language_id . ";s:5:\"Games\";i:1;s:5:\"Games\";}', 'Games', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', 'catalog/porto/game.png'),
	(23, 'a:2:{i:" . $language_id . ";s:15:\"Home Version 18\";i:1;s:15:\"Home Version 18\";}', 'Home Version 18', 'http://obest.org/opencart/porto/18', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(24, 'a:2:{i:" . $language_id . ";s:15:\"Home Version 19\";i:1;s:15:\"Home Version 19\";}', 'Home Version 19', 'http://obest.org/opencart/porto/19', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(25, 'a:2:{i:" . $language_id . ";s:15:\"Home Version 20\";i:1;s:15:\"Home Version 20\";}', 'Home Version 20', 'http://obest.org/opencart/porto/20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(26, 'a:2:{i:" . $language_id . ";s:13:\"Watch Fashion\";i:1;s:13:\"Watch Fashion\";}', 'Watch Fashion', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(27, 'a:2:{i:" . $language_id . ";s:9:\"Jewellery\";i:1;s:9:\"Jewellery\";}', 'Jewellery', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(28, 'a:2:{i:" . $language_id . ";s:17:\"Home Variations 1\";i:1;s:17:\"Home Variations 1\";}', 'Home Variations 1', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(29, 'a:2:{i:" . $language_id . ";s:17:\"Home Variations 2\";i:1;s:17:\"Home Variations 2\";}', 'Home Variations 2', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(30, 'a:2:{i:" . $language_id . ";s:16:\"Shop Variatons 1\";i:1;s:16:\"Shop Variatons 1\";}', 'Shop Variatons 1', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(31, 'a:2:{i:" . $language_id . ";s:16:\"Shop Variatons 2\";i:1;s:16:\"Shop Variatons 2\";}', 'Shop Variatons 2', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(32, 'a:2:{i:" . $language_id . ";s:16:\"Fullwidth Banner\";i:1;s:16:\"Fullwidth Banner\";}', 'Fullwidth Banner', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(33, 'a:2:{i:" . $language_id . ";s:18:\"Boxed Image Banner\";i:1;s:18:\"Boxed Image Banner\";}', 'Boxed Image Banner', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(34, 'a:2:{i:" . $language_id . ";s:12:\"Left Sidebar\";i:1;s:12:\"Left Sidebar\";}', 'Left Sidebar', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(35, 'a:2:{i:" . $language_id . ";s:13:\"Right Sidebar\";i:1;s:13:\"Right Sidebar\";}', 'Right Sidebar', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(36, 'a:2:{i:" . $language_id . ";s:18:\"2 Columns Products\";i:1;s:18:\"2 Columns Products\";}', '2 Columns Products', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(37, 'a:2:{i:" . $language_id . ";s:18:\"3 Columns Products\";i:1;s:18:\"3 Columns Products\";}', '3 Columns Products', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(38, 'a:2:{i:" . $language_id . ";s:18:\"4 Columns Products\";i:1;s:18:\"4 Columns Products\";}', '4 Columns Products', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(39, 'a:2:{i:" . $language_id . ";s:18:\"5 Columns Products\";i:1;s:18:\"5 Columns Products\";}', '5 Columns Products', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(40, 'a:2:{i:" . $language_id . ";s:18:\"6 Columns Products\";i:1;s:18:\"6 Columns Products\";}', '6 Columns Products', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(41, 'a:2:{i:" . $language_id . ";s:25:\"Product Page with Sidebar\";i:1;s:25:\"Product Page with Sidebar\";}', 'Product Page with Sidebar', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(42, 'a:2:{i:" . $language_id . ";s:28:\"Product Page without Sidebar\";i:1;s:28:\"Product Page without Sidebar\";}', 'Product Page without Sidebar', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(43, 'a:2:{i:" . $language_id . ";s:28:\"Product Page with Inner Zoom\";i:1;s:28:\"Product Page with Inner Zoom\";}', 'Product Page with Inner Zoom', 'http://obest.org/opencart/porto/1/index.php?route=product/product&amp;product_id=30', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(44, 'a:2:{i:" . $language_id . ";s:28:\"Product Page with Outer Zoom\";i:1;s:28:\"Product Page with Outer Zoom\";}', 'Product Page with Outer Zoom', 'http://obest.org/opencart/porto/2/index.php?route=product/product&amp;product_id=30', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(45, 'a:2:{i:" . $language_id . ";s:34:\"Product Page with Vertical Gallery\";i:1;s:34:\"Product Page with Vertical Gallery\";}', 'Product Page with Vertical Gallery', 'http://obest.org/opencart/porto/6/index.php?route=product/product&amp;product_id=30', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(46, 'a:2:{i:" . $language_id . ";s:9:\"Headers 1\";i:1;s:9:\"Headers 1\";}', 'Headers 1', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(47, 'a:2:{i:" . $language_id . ";s:13:\"Header Type 1\";i:1;s:13:\"Header Type 1\";}', 'Header Type 1', 'http://obest.org/opencart/porto/1', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(48, 'a:2:{i:" . $language_id . ";s:13:\"Header Type 2\";i:1;s:13:\"Header Type 2\";}', 'Header Type 2', 'http://obest.org/opencart/porto/2', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(49, 'a:2:{i:" . $language_id . ";s:13:\"Header Type 3\";i:1;s:13:\"Header Type 3\";}', 'Header Type 3', 'http://obest.org/opencart/porto/3', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(50, 'a:2:{i:" . $language_id . ";s:13:\"Header Type 4\";i:1;s:13:\"Header Type 4\";}', 'Header Type 4', 'http://obest.org/opencart/porto/4', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(51, 'a:2:{i:" . $language_id . ";s:13:\"Header Type 5\";i:1;s:13:\"Header Type 5\";}', 'Header Type 5', 'http://obest.org/opencart/porto/5', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(52, 'a:2:{i:" . $language_id . ";s:13:\"Header Type 6\";i:1;s:13:\"Header Type 6\";}', 'Header Type 6', 'http://obest.org/opencart/porto/6', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(53, 'a:2:{i:" . $language_id . ";s:13:\"Header Type 7\";i:1;s:13:\"Header Type 7\";}', 'Header Type 7', 'http://obest.org/opencart/porto/7', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(54, 'a:2:{i:" . $language_id . ";s:13:\"Header Type 8\";i:1;s:13:\"Header Type 8\";}', 'Header Type 8', 'http://obest.org/opencart/porto/8', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(55, 'a:2:{i:" . $language_id . ";s:13:\"Header Type 9\";i:1;s:13:\"Header Type 9\";}', 'Header Type 9', 'http://obest.org/opencart/porto/9', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(56, 'a:2:{i:" . $language_id . ";s:14:\"Header Type 10\";i:1;s:14:\"Header Type 10\";}', 'Header Type 10', 'http://obest.org/opencart/porto/10', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(57, 'a:2:{i:" . $language_id . ";s:14:\"Header Type 11\";i:1;s:14:\"Header Type 11\";}', 'Header Type 11', 'http://obest.org/opencart/porto/11', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(58, 'a:2:{i:" . $language_id . ";s:14:\"Header Type 12\";i:1;s:14:\"Header Type 12\";}', 'Header Type 12', 'http://obest.org/opencart/porto/12', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(59, 'a:2:{i:" . $language_id . ";s:14:\"Header Type 13\";i:1;s:14:\"Header Type 13\";}', 'Header Type 13', 'http://obest.org/opencart/porto/13', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(60, 'a:2:{i:" . $language_id . ";s:14:\"Header Type 14\";i:1;s:14:\"Header Type 14\";}', 'Header Type 14', 'http://obest.org/opencart/porto/14', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(61, 'a:2:{i:" . $language_id . ";s:14:\"Header Type 15\";i:1;s:14:\"Header Type 15\";}', 'Header Type 15', 'http://obest.org/opencart/porto/15', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(62, 'a:2:{i:" . $language_id . ";s:14:\"Header Type 16\";i:1;s:14:\"Header Type 16\";}', 'Header Type 16', 'http://obest.org/opencart/porto/16', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(63, 'a:2:{i:" . $language_id . ";s:14:\"Header Type 17\";i:1;s:14:\"Header Type 17\";}', 'Header Type 17', 'http://obest.org/opencart/porto/17', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(64, 'a:2:{i:" . $language_id . ";s:14:\"Header Type 18\";i:1;s:14:\"Header Type 18\";}', 'Header Type 18', 'http://obest.org/opencart/porto/18', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(65, 'a:2:{i:" . $language_id . ";s:14:\"Header Type 19\";i:1;s:14:\"Header Type 19\";}', 'Header Type 19', 'http://obest.org/opencart/porto/19', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(66, 'a:2:{i:" . $language_id . ";s:14:\"Header Type 20\";i:1;s:14:\"Header Type 20\";}', 'Header Type 20', 'http://obest.org/opencart/porto/20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(67, 'a:2:{i:" . $language_id . ";s:9:\"Headers 2\";i:1;s:9:\"Headers 2\";}', 'Headers 2', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(68, 'a:2:{i:" . $language_id . ";s:28:\"Product Page with Moved Tabs\";i:1;s:28:\"Product Page with Moved Tabs\";}', 'Product Page with Moved Tabs', 'http://obest.org/opencart/porto/13/index.php?route=product/product&amp;product_id=30', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(69, 'a:2:{i:" . $language_id . ";s:29:\"Product Page with Sticky Tabs\";i:1;s:29:\"Product Page with Sticky Tabs\";}', 'Product Page with Sticky Tabs', 'http://obest.org/opencart/porto/12/index.php?route=product/product&amp;product_id=30', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(70, 'a:2:{i:" . $language_id . ";s:27:\"Product Page with Accordion\";i:1;s:27:\"Product Page with Accordion\";}', 'Product Page with Accordion', 'http://obest.org/opencart/porto/11/index.php?route=product/product&amp;product_id=30', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(71, 'a:2:{i:" . $language_id . ";s:34:\"Product Page with Addtocart Sticky\";i:1;s:34:\"Product Page with Addtocart Sticky\";}', 'Product Page with Addtocart Sticky', 'http://obest.org/opencart/porto/8/index.php?route=product/product&amp;product_id=30', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(72, 'a:2:{i:" . $language_id . ";s:31:\"Product Page with Vertical Tabs\";i:1;s:31:\"Product Page with Vertical Tabs\";}', 'Product Page with Vertical Tabs', 'http://obest.org/opencart/porto/6/index.php?route=product/product&amp;product_id=30', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(73, 'a:2:{i:" . $language_id . ";s:9:\"TV, Audio\";i:1;s:9:\"TV, Audio\";}', 'TV, Audio', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(74, 'a:2:{i:" . $language_id . ";s:23:\"Computers &amp; Tablets\";i:1;s:23:\"Computers &amp; Tablets\";}', 'Computers &amp; Tablets', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(75, 'a:2:{i:" . $language_id . ";s:22:\"Home Office Equipments\";i:1;s:22:\"Home Office Equipments\";}', 'Home Office Equipments', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(76, 'a:2:{i:" . $language_id . ";s:14:\"GPS Navigation\";i:1;s:14:\"GPS Navigation\";}', 'GPS Navigation', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(77, 'a:2:{i:" . $language_id . ";s:26:\"Car Audio, Video &amp; GPS\";i:1;s:26:\"Car Audio, Video &amp; GPS\";}', 'Car Audio, Video &amp; GPS', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(78, 'a:2:{i:" . $language_id . ";s:25:\"Radios &amp; Clock Radios\";i:1;s:25:\"Radios &amp; Clock Radios\";}', 'Radios &amp; Clock Radios', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(79, 'a:2:{i:" . $language_id . ";s:29:\"Cell Phones &amp; Accessories\";i:1;s:29:\"Cell Phones &amp; Accessories\";}', 'Cell Phones &amp; Accessories', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(80, 'a:2:{i:" . $language_id . ";s:19:\"Cameras &amp; Photo\";i:1;s:19:\"Cameras &amp; Photo\";}', 'Cameras &amp; Photo', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(81, 'a:2:{i:" . $language_id . ";s:17:\"Photo Accessories\";i:1;s:17:\"Photo Accessories\";}', 'Photo Accessories', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(82, 'a:2:{i:" . $language_id . ";s:9:\"IP Phones\";i:1;s:9:\"IP Phones\";}', 'IP Phones', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(83, 'a:2:{i:" . $language_id . ";s:21:\"Samsung Galaxy Phones\";i:1;s:21:\"Samsung Galaxy Phones\";}', 'Samsung Galaxy Phones', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(84, 'a:2:{i:" . $language_id . ";s:26:\"iPad &amp; Android Tablets\";i:1;s:26:\"iPad &amp; Android Tablets\";}', 'iPad &amp; Android Tablets', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(85, 'a:2:{i:" . $language_id . ";s:14:\"e-Book Readers\";i:1;s:14:\"e-Book Readers\";}', 'e-Book Readers', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(86, 'a:2:{i:" . $language_id . ";s:27:\"Video Games &amp; Consolers\";i:1;s:27:\"Video Games &amp; Consolers\";}', 'Video Games &amp; Consolers', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(87, 'a:2:{i:" . $language_id . ";s:23:\"Printers &amp; Scanners\";i:1;s:23:\"Printers &amp; Scanners\";}', 'Printers &amp; Scanners', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(88, 'a:2:{i:" . $language_id . ";s:22:\"Digital Picture Frames\";i:1;s:22:\"Digital Picture Frames\";}', 'Digital Picture Frames', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(89, 'a:2:{i:" . $language_id . ";s:16:\"3D Fashion Games\";i:1;s:16:\"3D Fashion Games\";}', '3D Fashion Games', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(90, 'a:2:{i:" . $language_id . ";s:26:\"Game Machine &amp; Devices\";i:1;s:26:\"Game Machine &amp; Devices\";}', 'Game Machine &amp; Devices', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(91, 'a:2:{i:" . $language_id . ";s:5:\"Women\";i:1;s:5:\"Women\";}', 'Women', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(92, 'a:2:{i:" . $language_id . ";s:18:\"Tops &amp; Blouses\";i:1;s:18:\"Tops &amp; Blouses\";}', 'Tops &amp; Blouses', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(93, 'a:2:{i:" . $language_id . ";s:11:\"Accessories\";i:1;s:11:\"Accessories\";}', 'Accessories', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(94, 'a:2:{i:" . $language_id . ";s:20:\"Dresses &amp; Skirts\";i:1;s:20:\"Dresses &amp; Skirts\";}', 'Dresses &amp; Skirts', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(95, 'a:2:{i:" . $language_id . ";s:17:\"Shoes &amp; Boots\";i:1;s:17:\"Shoes &amp; Boots\";}', 'Shoes &amp; Boots', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(96, 'a:2:{i:" . $language_id . ";s:8:\"Sweaters\";i:1;s:8:\"Sweaters\";}', 'Sweaters', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(97, 'a:2:{i:" . $language_id . ";s:19:\"Heels &amp; Sandals\";i:1;s:19:\"Heels &amp; Sandals\";}', 'Heels &amp; Sandals', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(98, 'a:2:{i:" . $language_id . ";s:18:\"Jeans &amp; Shorts\";i:1;s:18:\"Jeans &amp; Shorts\";}', 'Jeans &amp; Shorts', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(99, 'a:2:{i:" . $language_id . ";s:3:\"Men\";i:1;s:3:\"Men\";}', 'Men', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(100, 'a:2:{i:" . $language_id . ";s:23:\"Tees, Knits &amp; Polos\";i:1;s:23:\"Tees, Knits &amp; Polos\";}', 'Tees, Knits &amp; Polos', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(101, 'a:2:{i:" . $language_id . ";s:17:\"Pants &amp; Denim\";i:1;s:17:\"Pants &amp; Denim\";}', 'Pants &amp; Denim', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(102, 'a:2:{i:" . $language_id . ";s:12:\"Kids Fashion\";i:1;s:12:\"Kids Fashion\";}', 'Kids Fashion', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(103, 'a:2:{i:" . $language_id . ";s:12:\"Casual Shoes\";i:1;s:12:\"Casual Shoes\";}', 'Casual Shoes', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(104, 'a:2:{i:" . $language_id . ";s:19:\"Spring &amp; Autumn\";i:1;s:19:\"Spring &amp; Autumn\";}', 'Spring &amp; Autumn', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(105, 'a:2:{i:" . $language_id . ";s:15:\"Winter Sneakers\";i:1;s:15:\"Winter Sneakers\";}', 'Winter Sneakers', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(106, 'a:2:{i:" . $language_id . ";s:15:\"Cars and trucks\";i:1;s:15:\"Cars and trucks\";}', 'Cars and trucks', 'index.php?route=product/category&amp;path=38', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(107, 'a:2:{i:" . $language_id . ";s:29:\"Motorcycles &amp; powersports\";i:1;s:29:\"Motorcycles &amp; powersports\";}', 'Motorcycles &amp; powersports', 'index.php?route=product/category&amp;path=38', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(108, 'a:2:{i:" . $language_id . ";s:23:\"Parts &amp; accessories\";i:1;s:23:\"Parts &amp; accessories\";}', 'Parts &amp; accessories', 'index.php?route=product/category&amp;path=38', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(109, 'a:2:{i:" . $language_id . ";s:25:\"Auto tools &amp; supplies\";i:1;s:25:\"Auto tools &amp; supplies\";}', 'Auto tools &amp; supplies', 'index.php?route=product/category&amp;path=38', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(110, 'a:2:{i:" . $language_id . ";s:17:\"Motorcycles parts\";i:1;s:17:\"Motorcycles parts\";}', 'Motorcycles parts', 'index.php?route=product/category&amp;path=38', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(111, 'a:2:{i:" . $language_id . ";s:9:\"Atv parts\";i:1;s:9:\"Atv parts\";}', 'Atv parts', 'index.php?route=product/category&amp;path=38', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(112, 'a:2:{i:" . $language_id . ";s:16:\"Snowmobile parts\";i:1;s:16:\"Snowmobile parts\";}', 'Snowmobile parts', 'index.php?route=product/category&amp;path=38', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(113, 'a:2:{i:" . $language_id . ";s:19:\"Personal watercraft\";i:1;s:19:\"Personal watercraft\";}', 'Personal watercraft', 'index.php?route=product/category&amp;path=38', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(114, 'a:2:{i:" . $language_id . ";s:20:\"Other vehichle parts\";i:1;s:20:\"Other vehichle parts\";}', 'Other vehichle parts', 'index.php?route=product/category&amp;path=38', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(115, 'a:2:{i:" . $language_id . ";s:5:\"Woman\";i:1;s:5:\"Woman\";}', 'Woman', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', ''),
	(116, 'a:2:{i:" . $language_id . ";s:18:\"Tops &amp; Blouses\";i:1;s:18:\"Tops &amp; Blouses\";}', 'Tops &amp; Blouses', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '')
");

$query = $this->db->query("
     INSERT INTO `".DB_PREFIX."mega_menu` (`id`, `module_id`, `parent_id`, `rang`, `icon`, `name`, `link`, `description`, `label`, `label_text_color`, `label_background_color`, `custom_class`, `new_window`, `status`, `display_on_mobile`, `position`, `submenu_width`, `submenu_type`, `submenu_background`, `submenu_background_position`, `submenu_background_repeat`, `content_width`, `content_type`, `content`) VALUES
     (107, 0, 0, 0, '', 'a:2:{i:" . $language_id . ";s:4:\"Home\";i:1;s:4:\"Home\";}', '', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', 'home', 0, 0, 0, 0, '684px', 0, 'catalog/porto/megamenubg.png', 'bottom right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (108, 0, 0, 1, '', 'a:2:{i:" . $language_id . ";s:7:\"Fashion\";i:1;s:7:\"Fashion\";}', 'index.php?route=product/category&amp;path=25', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', 'linkstoppadding', 0, 0, 0, 0, '100%', 0, '', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (110, 0, 0, 4, '', 'a:2:{i:" . $language_id . ";s:11:\"Electronics\";i:1;s:11:\"Electronics\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (111, 0, 0, 5, '', 'a:2:{i:" . $language_id . ";s:8:\"Features\";i:1;s:8:\"Features\";}', '#', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '220px', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (114, 0, 0, 7, '', 'a:2:{i:" . $language_id . ";s:15:\"Buy this theme!\";i:1;s:15:\"Buy this theme!\";}', '', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:3:\"HOT\";i:1;s:3:\"HOT\";}', '#fff', '#eb2771', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (116, 0, 111, 6, '', 'a:2:{i:" . $language_id . ";s:5:\"Links\";i:1;s:5:\"Links\";}', '', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:6:{i:0;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:17:\"Home Variations 1\";s:2:\"id\";i:28;s:8:\"children\";a:10:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Home Version 1\";s:2:\"id\";i:2;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Home Version 2\";s:2:\"id\";i:3;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Home Version 3\";s:2:\"id\";i:4;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Home Version 4\";s:2:\"id\";i:5;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Home Version 5\";s:2:\"id\";i:6;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Home Version 6\";s:2:\"id\";i:7;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Home Version 7\";s:2:\"id\";i:8;}i:7;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Home Version 8\";s:2:\"id\";i:9;}i:8;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Home Version 9\";s:2:\"id\";i:10;}i:9;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Home Version 10\";s:2:\"id\";i:11;}}}i:1;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:17:\"Home Variations 2\";s:2:\"id\";i:29;s:8:\"children\";a:10:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Home Version 11\";s:2:\"id\";i:12;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Home Version 12\";s:2:\"id\";i:13;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Home Version 13\";s:2:\"id\";i:14;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Home Version 14\";s:2:\"id\";i:15;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Home Version 15\";s:2:\"id\";i:16;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Home Version 16\";s:2:\"id\";i:17;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Home Version 17\";s:2:\"id\";i:18;}i:7;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Home Version 18\";s:2:\"id\";i:23;}i:8;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Home Version 19\";s:2:\"id\";i:24;}i:9;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Home Version 20\";s:2:\"id\";i:25;}}}i:2;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:16:\"Shop Variatons 1\";s:2:\"id\";i:30;s:8:\"children\";a:9:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:16:\"Fullwidth Banner\";s:2:\"id\";i:32;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:18:\"Boxed Image Banner\";s:2:\"id\";i:33;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Left Sidebar\";s:2:\"id\";i:34;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Right Sidebar\";s:2:\"id\";i:35;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:18:\"2 Columns Products\";s:2:\"id\";i:36;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:18:\"3 Columns Products\";s:2:\"id\";i:37;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:18:\"4 Columns Products\";s:2:\"id\";i:38;}i:7;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:18:\"5 Columns Products\";s:2:\"id\";i:39;}i:8;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:18:\"6 Columns Products\";s:2:\"id\";i:40;}}}i:3;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:16:\"Shop Variatons 2\";s:2:\"id\";i:31;s:8:\"children\";a:10:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:25:\"Product Page with Sidebar\";s:2:\"id\";i:41;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:28:\"Product Page without Sidebar\";s:2:\"id\";i:42;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:28:\"Product Page with Inner Zoom\";s:2:\"id\";i:43;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:28:\"Product Page with Outer Zoom\";s:2:\"id\";i:44;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:34:\"Product Page with Vertical Gallery\";s:2:\"id\";i:45;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:24:\"Product Autoupdate Price\";s:2:\"id\";i:71;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Product Buttons\";s:2:\"id\";i:72;}i:7;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Product Blocks\";s:2:\"id\";i:70;}i:8;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:17:\"Product Questions\";s:2:\"id\";i:69;}i:9;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Product Tabs\";s:2:\"id\";i:68;}}}i:4;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:9:\"Headers 1\";s:2:\"id\";i:46;s:8:\"children\";a:10:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Header Type 1\";s:2:\"id\";i:47;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Header Type 2\";s:2:\"id\";i:48;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Header Type 3\";s:2:\"id\";i:49;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Header Type 4\";s:2:\"id\";i:50;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Header Type 5\";s:2:\"id\";i:51;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Header Type 6\";s:2:\"id\";i:52;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Header Type 7\";s:2:\"id\";i:53;}i:7;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Header Type 8\";s:2:\"id\";i:54;}i:8;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Header Type 9\";s:2:\"id\";i:55;}i:9;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Header Type 10\";s:2:\"id\";i:56;}}}i:5;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:9:\"Headers 2\";s:2:\"id\";i:67;s:8:\"children\";a:10:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Header Type 11\";s:2:\"id\";i:57;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Header Type 12\";s:2:\"id\";i:58;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Header Type 13\";s:2:\"id\";i:59;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Header Type 14\";s:2:\"id\";i:60;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Header Type 15\";s:2:\"id\";i:61;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Header Type 16\";s:2:\"id\";i:62;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Header Type 17\";s:2:\"id\";i:63;}i:7;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Header Type 18\";s:2:\"id\";i:64;}i:8;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Header Type 19\";s:2:\"id\";i:65;}i:9;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Header Type 20\";s:2:\"id\";i:66;}}}}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (149, 0, 108, 3, '', 'a:2:{i:" . $language_id . ";s:6:\"Banner\";i:1;s:6:\"Banner\";}', '', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:188:\"&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/porto/index7-new/menu-banner5.jpg&quot; alt=&quot;&quot; style=&quot;display: block;float: left;margin:-10px&quot;&gt;&lt;/a&gt;\";i:1;s:189:\"&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/porto/index7-new/menu-banner5.jpg&quot; alt=&quot;&quot; style=&quot;display: block;float: right;margin:-10px&quot;&gt;&lt;/a&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (136, 0, 108, 2, '', 'a:2:{i:" . $language_id . ";s:5:\"Links\";i:1;s:5:\"Links\";}', '', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 8, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:4:{i:0;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Woman\";s:2:\"id\";i:115;s:8:\"children\";a:4:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Tops & Blouses\";s:2:\"id\";i:92;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:11:\"Accessories\";s:2:\"id\";i:93;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:16:\"Dresses & Skirts\";s:2:\"id\";i:94;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Shoes & Boots\";s:2:\"id\";i:95;}}}i:1;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:9:\"Jewellery\";s:2:\"id\";i:27;s:8:\"children\";a:3:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"Sweaters\";s:2:\"id\";i:96;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Heels & Sandals\";s:2:\"id\";i:97;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Jeans & Shorts\";s:2:\"id\";i:98;}}}i:2;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:3:\"Men\";s:2:\"id\";i:99;s:8:\"children\";a:4:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:11:\"Accessories\";s:2:\"id\";i:93;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Watch Fashion\";s:2:\"id\";i:26;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:19:\"Tees, Knits & Polos\";s:2:\"id\";i:100;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Pants & Denim\";s:2:\"id\";i:101;}}}i:3;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Kids Fashion\";s:2:\"id\";i:102;s:8:\"children\";a:3:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Casual Shoes\";s:2:\"id\";i:103;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Spring & Autumn\";s:2:\"id\";i:104;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Winter Sneakers\";s:2:\"id\";i:105;}}}}s:7:\"columns\";s:1:\"4\";s:7:\"submenu\";s:1:\"2\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}')
");

?>