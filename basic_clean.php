<?php

/*
 * Plugin Name: basic_clean
 * Plugin URI: https://xayrin.com/wp-plugins
 * Description: make it better
 * Author: Scott A. Dixon
 * Author URI: https://xayrin.com
 * Version: 1.2.1
*/

defined('ABSPATH') or die('⎺\_(ツ)_/⎺');

// defines

define('_PLUGIN_BASIC_CLEAN', 'basic_clean');

define('_URL_BASIC_CLEAN', plugin_dir_url(__FILE__));
define('_PATH_BASIC_CLEAN', plugin_dir_path(__FILE__));

//   ▄████████   ▄██████▄   ███▄▄▄▄▄       ▄████████  
//  ███    ███  ███    ███  ███▀▀▀▀██▄    ███    ███  
//  ███    █▀   ███    ███  ███    ███    ███    █▀   
//  ███         ███    ███  ███    ███   ▄███▄▄▄      
//  ███         ███    ███  ███    ███  ▀▀███▀▀▀      
//  ███    █▄   ███    ███  ███    ███    ███         
//  ███    ███  ███    ███  ███    ███    ███         
//  ████████▀    ▀██████▀    ▀█    █▀     ███

// random text words

define('_WORDS_BASIC_CLEAN', 'lorem ipsum dolor sit amet fermentum vel viverra taciti quisque nostra eleifend interdum nulla aliquet aenean primis potenti luctus integer hendrerit varius blandit fringilla tortor tincidunt vivamus ad imperdiet mattis sagittis commodo natoque odio neque quam malesuada dictumst a arcu vehicula est rutrum massa lectus tellus pharetra hymenaeos cras suscipit elementum metus pretium non in nunc porttitor semper nam vestibulum aptent nisi augue tempor eget risus netus lacus vitae tempus faucibus eu nisl proin urna eros nibh ridiculus astra placerat sociosqu justo cum ornare sapien sollicitudin vulputate consequat molestie etiam egestas magna parturient facilisi lobortis habitant porta inceptos fames bibendum quis habitasse libero scelerisque convallis ante euismod mus elit litora dignissim nascetur facilisis dictum gravida rhoncus pulvinar dis id curabitur condimentum duis dapibus ac penatibus fusce cubilia volutpat pede ullamcorper ultricies ultrices dui aliquam purus curae maecenas velit montes torquent et hac congue leo ligula nec per class phasellus felis donec conubia iaculis sociis adipiscing senectus posuere mollis
');

// basic_clean args

define('_ARGS_BASIC_CLEAN', [
	'bc_ignore' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_position' => [
		'type' => 'string',
		'default' => 'yes'
	],

	'bc_gid' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_indent' => [
		'type' => 'string',
		'default' => '5'
	],

	'bc_logo' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_feeds' => [
		'type' => 'string',
		'default' => 'default'
	],
	'bc_login' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_path' => [
		'type' => 'string',
		'default' => 'admin'
	],
	'bc_options' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_nocat' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_columns' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_mimes' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_views' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_shortcodes' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_cache' => [
		'type' => 'string',
		'default' => '86400'
	],
	'bc_sitemap' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_ogmeta' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_latest_images' => [
		'type' => 'string',
		'default' => 'no'
	],

	'bc_cleaning' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_htaccess' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_global' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_classic' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_blocks' => [
		'type' => 'string',
		'default' => 'yes'
	],

	'bc_form_json' => [
		'type' => 'string',
		'default' => json_encode([[
			'name' => [
				'label' => 'Name',
				'type' => 'text'
			],
			'email' => [
				'label' => 'Email',
				'type' => 'email'
			],
			'message' => [
				'label' => 'Message',
				'type' => 'textarea'
			]
		]])
	],
	'bc_form_success' => [
		'type' => 'string',
		'default' => 'Thanks for the message. We will respond as soon as possible.'
	],
	'bc_form_email' => [
		'type' => 'string',
		'default' => get_option('admin_email')
	],
	'bc_form_active' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_random_text' => [
		'type' => 'string',
		'default' => _WORDS_BASIC_CLEAN
	]
]);

// basic_clean admin 

define('_ADMIN_BASIC_CLEAN', [
	'options' => [
		'label' => 'Options',
		'columns' => 4,
		'fields' => [
			'bc_ignore' => [
				'label' => 'IP Addresses to Ignore for Page View Count',
				'type' => 'text'
			],
			'bc_position' => [
				'label' => 'Show in Admin Menu',
				'type' => 'check'
			]
		]
	],
	'extras' => [
		'label' => 'Extras',
		'columns' => 4,
		'fields' => [
			'bc_gid' => [
				'label' => 'Google Analytics ID',
				'type' => 'input'
			],
			'bc_indent' => [
				'label' => 'Tab Indents',
				'type' => 'input'
			],
			'bc_random_text' => [
				'label' => 'Text Generator Source',
				'type' => 'text'
			]
		]
	],
	'general' => [
		'label' => 'General',
		'columns' => 4,
		'fields' => [
			'bc_logo' => [
				'label' => 'WP Login Logo',
				'type' => 'file'
			],
			'bc_feeds' => [
				'label' => 'WP Feeds',
				'type' => 'select',
				'values' => [
					'disable' => 'Disabled',
					'default' => 'Default',
					'custom' => 'Custom'
				]
			],
			'bc_login' => [
				'label' => 'Change Login URL',
				'type' => 'check'
			],
			'bc_path' => [
				'label' => 'Login URL',
				'type' => 'input'
			],
			'bc_options' => [
				'label' => 'Set WP Options',
				'type' => 'check'
			],
			'bc_nocat' => [
				'label' => 'No Category Base',
				'type' => 'check'
			],
			'bc_columns' => [
				'label' => 'Page/Post CSS Field',
				'type' => 'check'
			],
			'bc_mimes' => [
				'label' => 'Allow SVG/ICO Uploads',
				'type' => 'check'
			],
			'bc_views' => [
				'label' => 'Show Page/Post Views',
				'type' => 'check'
			],
			'bc_shortcodes' => [
				'label' => 'Shortcodes Active',
				'type' => 'check'
			],
			'bc_cache' => [
				'label' => 'Cache-Control (seconds)',
				'type' => 'input'
			],
			'bc_sitemap' => [
				'label' => 'XML Sitemap Active',
				'type' => 'check'
			],
			'bc_ogmeta' => [
				'label' => 'OpenGraph Meta Tags',
				'type' => 'check'
			],
			'bc_latest_images' => [
				'label' => 'Show Images in Latest Posts',
				'type' => 'check'
			]
		]
	],
	'cleanup' => [
		'label' => 'Cleanup',
		'columns' => 4,
		'fields' => [
			'bc_cleaning' => [
				'label' => 'WP Cleanup Active',
				'type' => 'check'
			],
			'bc_htaccess' => [
				'label' => 'Short Upload URLs',
				'type' => 'check'
			],
			'bc_global' => [
				'label' => 'Remove Global Styles',
				'type' => 'check'
			],
			'bc_classic' => [
				'label' => 'Remove Classic Styles',
				'type' => 'check'
			],
			'bc_blocks' => [
				'label' => 'Remove Block Styles',
				'type' => 'check'
			]
		]
	],
	'forms' => [
		'label' => 'Forms',
		'columns' => 4,
		'fields' => [
			'bc_form_json' => [
				'label' => 'Forms Config',
				'type' => 'code'
			],
			'bc_form_success' => [
				'label' => 'Forms Thanks Message',
				'type' => 'text'
			],
			'bc_form_email' => [
				'label' => 'Forms Email',
				'type' => 'input'
			],
			'bc_form_active' => [
				'label' => 'Forms Active',
				'type' => 'check'
			]
		]
	]
]);

// basic_clean api routes

define('_APIPATH_BASIC_CLEAN',
	'settings'
);

define('_API_BASIC_CLEAN', [
	[
		'methods' => 'POST',
		'callback' => 'update_settings',
		'args' => _bcSettings::args(),
		'permission_callback' => 'permissions'
	],
	[
		'methods' => 'GET',
		'callback' => 'get_settings',
		'args' => [],
		'permission_callback' => 'permissions'
	]
]);

//     ▄████████     ▄███████▄   ▄█   
//    ███    ███    ███    ███  ███   
//    ███    ███    ███    ███  ███▌  
//    ███    ███    ███    ███  ███▌  
//  ▀███████████  ▀█████████▀   ███▌  
//    ███    ███    ███         ███   
//    ███    ███    ███         ███   
//    ███    █▀    ▄████▀       █▀ 

class _bcAPI {
	public function add_routes() {
		if (count(_API_BASIC_CLEAN)) {

			foreach(_API_BASIC_CLEAN as $route) {
				register_rest_route(_PLUGIN_BASIC_CLEAN . '-api/v1', '/' . _APIPATH_BASIC_CLEAN, [
					'methods' => $route['methods'],
					'callback' => [$this, $route['callback']],
					'args' => $route['args'],
					'permission_callback' => [$this, $route['permission_callback']]
				]);
			}
		}
	}

	public function permissions() {
		return current_user_can('manage_options');
	}

	public function update_settings(WP_REST_Request $request) {
		$settings = [];

		foreach (_bcSettings::args() as $key => $val) {
			$settings[$key] = $request->get_param($key);
		}
		_bcSettings::save_settings($settings);
		return rest_ensure_response(_bcSettings::get_settings());
	}

	public function get_settings(WP_REST_Request $request) {
		return rest_ensure_response(_bcSettings::get_settings());
	}
}

//     ▄████████     ▄████████      ███          ███       ▄█   ███▄▄▄▄▄       ▄██████▄      ▄████████  
//    ███    ███    ███    ███  ▀█████████▄  ▀█████████▄  ███   ███▀▀▀▀██▄    ███    ███    ███    ███  
//    ███    █▀     ███    █▀      ▀███▀▀██     ▀███▀▀██  ███▌  ███    ███    ███    █▀     ███    █▀   
//    ███          ▄███▄▄▄          ███   ▀      ███   ▀  ███▌  ███    ███   ▄███           ███         
//  ▀███████████  ▀▀███▀▀▀          ███          ███      ███▌  ███    ███  ▀▀███ ████▄   ▀███████████  
//           ███    ███    █▄       ███          ███      ███   ███    ███    ███    ███           ███  
//     ▄█    ███    ███    ███      ███          ███      ███   ███    ███    ███    ███     ▄█    ███  
//   ▄████████▀     ██████████     ▄████▀       ▄████▀    █▀     ▀█    █▀     ████████▀    ▄████████▀ 

class _bcSettings {
	protected static $option_key = _PLUGIN_BASIC_CLEAN . '-settings';

	public static function args() {
		$args = _ARGS_BASIC_CLEAN;

		foreach (_ARGS_BASIC_CLEAN as $key => $val) {
			$val['required'] = true;

			switch ($val['type']) {
				case 'integer': {
					$cb = 'absint';
					break;
				}
				default: {
					$cb = 'sanitize_text_field';
				}
				$val['sanitize_callback'] = $cb;
			}
		}
		return $args;
	}

	public static function get_settings() {
		$defaults = [];

		foreach (_ARGS_BASIC_CLEAN as $key => $val) {
			$defaults[$key] = $val['default'];
		}
		$saved = get_option(self::$option_key, []);

		if (!is_array($saved) || empty($saved)) {
			return $defaults;
		}
		return wp_parse_args($saved, $defaults);
	}

	public static function save_settings(array $settings) {
		$defaults = [];

		foreach (_ARGS_BASIC_CLEAN as $key => $val) {
			$defaults[$key] = $val['default'];
		}

		foreach ($settings as $i => $setting) {
			if (!array_key_exists($i, $defaults)) {
				unset($settings[$i]);
			}
		}
		update_option(self::$option_key, $settings);
	}
}

//    ▄▄▄▄███▄▄▄▄       ▄████████  ███▄▄▄▄▄    ███    █▄   
//  ▄██▀▀▀███▀▀▀██▄    ███    ███  ███▀▀▀▀██▄  ███    ███  
//  ███   ███   ███    ███    █▀   ███    ███  ███    ███  
//  ███   ███   ███   ▄███▄▄▄      ███    ███  ███    ███  
//  ███   ███   ███  ▀▀███▀▀▀      ███    ███  ███    ███  
//  ███   ███   ███    ███    █▄   ███    ███  ███    ███  
//  ███   ███   ███    ███    ███  ███    ███  ███    ███  
//   ▀█   ███   █▀     ██████████   ▀█    █▀   ████████▀ 

class _bcMenu {
	protected $slug = _PLUGIN_BASIC_CLEAN . '-menu';
	protected $assets_url;

	public function __construct($assets_url) {
		$this->assets_url = $assets_url;
		add_action('admin_menu', [$this, 'add_page']);
		add_action('admin_enqueue_scripts', [$this, 'register_assets']);
	}

	public function add_page() {
		$entry = [
			'page_title' => _PLUGIN_BASIC_CLEAN,
			'menu_title' => _PLUGIN_BASIC_CLEAN,
			'capability' => 'manage_options',
			'menu_slug' => $this->slug,
			'callback' => [$this, 'render_admin'],
			'icon_url' => 'data:image/svg+xml;base64,' . base64_encode(
				'<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="500px" height="500px" viewbox="0 0 500 500"><path fill="#a7aaad" d="M250,9.8L42,129.9v240.2l208,120.1l208-120.1V129.9L250,9.8z M94,159.7c52-30,103.9-60.1,155.8-90.2 c51.9,30.2,104.1,60.2,156.1,90.2c-30.6,17.9-61.4,35.5-92.2,53c-21.3-12.4-42.7-24.4-63.9-36.7c-21.5,12-42.7,24.5-64.1,36.7 c0.2,24.9-0.6,49.8,0.4,74.6c21,11.4,41.3,24.1,62.1,36.1c2.2,0.9,4-1.5,6-2.3c29.6-17.2,59.4-34.2,89.1-51.3l1.8-2.4 c1.5,12.5,0.4,25.2,0.6,37.7c-20.9,12.1-41.9,24-62.7,36.2c-11.1,6-21.8,12.8-32.9,18.8l-1.9-0.4c-30.9-18.3-62.4-35.5-92.8-54.4 c-2.9,0.8-5.5,2.2-8,3.7c-17.6,10.6-35.6,20.6-53.1,31.3C93.7,280.2,94.1,220,94,159.7z M405.6,340.5 c-39.3,22.2-78,45.5-117.4,67.4c-0.1,0.8-0.4,2.5-0.5,3.3c-0.4-0.4-1.3-1.1-1.7-1.4c-12.2,6.6-24.1,13.8-36.1,20.8 c-37.9-21.8-75.7-43.8-113.4-65.8c10.8-5.9,21.4-12.3,32.2-18.2c27,15.8,54,31.5,81.1,46.9c39.5-22.9,78.9-45.8,118.5-68.6 c2.2-1.6,6.4-2.2,5.7-5.8c-0.1-30.4,0-60.7,0-91.1c10.8-5.9,21-12.8,32.2-17.9C405.5,253.5,406.6,297,405.6,340.5z"/><path fill="#a7aaad" d="M154.1,194.1c32.1-18.1,63.7-37,95.7-55.2c21.4,12.7,43.1,24.8,64.4,37.6c9.6-4.5,18.5-10.4,27.7-15.6l0.2-1.1 c-30.7-17.9-61.5-35.7-92.3-53.6c-40.1,23-80,46.5-120.2,69.6c-0.9,0.4-2.7,1.3-3.6,1.7c-0.6,30.2-0.1,60.4-0.3,90.6 c0.2,5.8-0.6,11.7,0.6,17.4c9-5.9,18.5-10.9,27.6-16.5C153.8,244.1,153.7,219.1,154.1,194.1z"/></svg>'),
			'position' => 30
		];

		if (_BC['bc_position'] == 'yes') {
			add_menu_page(
				$entry['page_title'],
				$entry['menu_title'],
				$entry['capability'],
				$entry['menu_slug'],
				$entry['callback'],
				$entry['icon_url'],
				$entry['position']				
			);
		}
		else {
			add_options_page(
				$entry['page_title'],
				$entry['menu_title'],
				$entry['capability'],
				$entry['menu_slug'],
				$entry['callback']
			);
		}
	}

	public function register_assets() {
		$boo = microtime(false);
		wp_register_script($this->slug, $this->assets_url . '/' . _PLUGIN_BASIC_CLEAN . '.js?' . $boo, ['jquery']);
		wp_register_style($this->slug, $this->assets_url . '/' . _PLUGIN_BASIC_CLEAN . '.css?' . $boo);
		wp_localize_script($this->slug, _PLUGIN_BASIC_CLEAN, [
			'strings' => [
				'saved' => 'Settings Saved',
				'error' => 'Error'
			],
			'api' => [
				'url' => esc_url_raw(rest_url(_PLUGIN_BASIC_CLEAN . '-api/v1/' . _APIPATH_BASIC_CLEAN)),
				'nonce' => wp_create_nonce('wp_rest')
			]
		]);
	}

	public function enqueue_assets() {
		if (!wp_script_is($this->slug, 'registered')) {
			$this->register_assets();
		}
		wp_enqueue_script($this->slug);
		wp_enqueue_style($this->slug);
	}

	public function render_admin() {
		wp_enqueue_media();
		$this->enqueue_assets();

		$name = _PLUGIN_BASIC_CLEAN;
		$form = _ADMIN_BASIC_CLEAN;

		// build form

		echo '<div id="' . $name . '-wrap" class="wrap">';
			echo '<h1>' . $name . '</h1>';
			echo '<p>Configure your ' . $name . ' settings...</p>';
			echo '<form id="' . $name . '-form" method="post">';
				echo '<nav id="' . $name . '-nav" class="nav-tab-wrapper">';

				foreach ($form as $tid => $tab) {
					echo '<a href="#' . $name . '-' . $tid . '" class="nav-tab">' . $tab['label'] . '</a>';
				}
				echo '</nav>';
				echo '<div class="tab-content">';

				foreach ($form as $tid => $tab) {
					echo '<div id="' . $name . '-' . $tid . '" class="' . $name . '-tab">';

					foreach ($tab['fields'] as $fid => $field) {
						echo '<div class="form-block col-' . $tab['columns'] . '">';
						
						switch ($field['type']) {
							case 'input': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								break;
							}
							case 'select': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<select id="' . $fid . '" name="' . $fid . '">';
									foreach ($field['values'] as $value => $label) {
										echo '<option value="' . $value . '">' . $label . '</option>';
									}
								echo '</select>';
								break;
							}
							case 'text': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<textarea id="' . $fid . '" class="tabs" name="' . $fid . '"></textarea>';
								break;
							}
							case 'file': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								echo '<input data-id="' . $fid . '" type="button" class="button-primary choose-file-button" value="...">';
								break;
							}
							case 'colour': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								echo '<input data-id="' . $fid . '" type="color" class="choose-colour-button" value="#000000">';
								break;
							}
							case 'code': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<textarea id="' . $fid . '" class="code" name="' . $fid . '"></textarea>';
								break;
							}
							case 'check': {
								echo '<em>' . $field['label'] . ':</em>';
								echo '<label class="switch">';
									echo '<input type="checkbox" id="' . $fid . '" name="' . $fid . '" value="yes">';
									echo '<span class="slider"></span>';
								echo '</label>';
								break;
							}
						}
						echo '</div>';
					}
					echo '</div>';
				}
				echo '</div>';
				echo '<div>';
					submit_button();
				echo '</div>';
				echo '<div id="' . $name . '-feedback"></div>';
			echo '</form>';
		echo '</div>';
	}
}

//   ▄█         ▄██████▄      ▄██████▄    ▄█   ███▄▄▄▄▄    
//  ███        ███    ███    ███    ███  ███   ███▀▀▀▀██▄  
//  ███        ███    ███    ███    █▀   ███▌  ███    ███  
//  ███        ███    ███   ▄███         ███▌  ███    ███  
//  ███        ███    ███  ▀▀███ ████▄   ███▌  ███    ███  
//  ███        ███    ███    ███    ███  ███   ███    ███  
//  ███▌    ▄  ███    ███    ███    ███  ███   ███    ███  
//  █████▄▄██   ▀██████▀     ████████▀   █▀     ▀█    █▀ 

class _bcLogin {
	private $wp_login_php;

	private function use_trailing_slashes() {
		return '/' === substr(get_option('permalink_structure'), -1, 1);
	}

	private function user_trailingslashit($string) {
		return $this->use_trailing_slashes() ? trailingslashit($string) : untrailingslashit($string);
	}

	private function wp_template_loader() {
		global $pagenow;

		$pagenow = 'index.php';

		if (!defined('WP_USE_THEMES')) {
			define('WP_USE_THEMES', true);
		}

		wp();

		if ($_SERVER['REQUEST_URI'] === $this->user_trailingslashit(str_repeat('-/', 10))) {
			$_SERVER['REQUEST_URI'] = $this->user_trailingslashit('/wp-login-php/');
		}

		require_once(ABSPATH . WPINC . '/template-loader.php');
		die();
	}

	private function new_login_slug() {
		return _BC['bc_path'];
	}

	public function new_login_url($scheme = null) {
		if (get_option('permalink_structure')) {
			return $this->user_trailingslashit(home_url('/', $scheme) . $this->new_login_slug());
		}
		else {
			return home_url('/', $scheme) . '?' . $this->new_login_slug();
		}
	}

	public function __construct() {
		add_action('plugins_loaded', [$this, 'plugins_loaded'], 1);
		add_action('wp_loaded', [$this, 'wp_loaded']);

		add_filter('site_url', [$this, 'site_url'], 10, 4);
		add_filter('network_site_url', [$this, 'network_site_url'], 10, 3);
		add_filter('wp_redirect', [$this, 'wp_redirect'], 10, 2);

		remove_action('template_redirect', 'wp_redirect_admin_locations', 1000);
	}

	public function plugins_loaded() {
		global $pagenow;

		$request = parse_url( $_SERVER['REQUEST_URI'] );

		if ((strpos($_SERVER['REQUEST_URI'], 'wp-login.php') !== false || untrailingslashit($request['path']) === site_url('wp-login', 'relative')) && !is_admin()) {
			$this->wp_login_php = true;
			$_SERVER['REQUEST_URI'] = $this->user_trailingslashit( '/' . str_repeat( '-/', 10 ) );
			$pagenow = 'index.php';
		}
		elseif (untrailingslashit($request['path']) === home_url($this->new_login_slug(), 'relative') || (!get_option('permalink_structure') && isset($_GET[$this->new_login_slug()]) && empty($_GET[$this->new_login_slug()]))) {
			$pagenow = 'wp-login.php';
		}
	}

	public function wp_loaded() {
		global $pagenow;

		if (is_admin() && !is_user_logged_in() && !defined('DOING_AJAX')) {
			wp_safe_redirect('/');
			die();
		}

		$request = parse_url($_SERVER['REQUEST_URI']);

		if ($pagenow === 'wp-login.php' && $request['path'] !== $this->user_trailingslashit($request['path']) && get_option('permalink_structure')) {
			
			wp_safe_redirect($this->user_trailingslashit($this->new_login_url()) . (!empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : ''));
			die();
		}
		elseif ($this->wp_login_php) {
			if (($referer = wp_get_referer()) && strpos($referer, 'wp-activate.php') !== false && ($referer = parse_url($referer)) && !empty($referer['query'])) {
				parse_str($referer['query'], $referer);

				if (!empty($referer['key']) && ($result = wpmu_activate_signup($referer['key'])) && is_wp_error($result) && ($result->get_error_code() === 'already_active' || $result->get_error_code() === 'blog_taken')) {

					wp_safe_redirect($this->new_login_url() . (!empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : ''));
					die();
				}
			}

			$this->wp_template_loader();
		}
		elseif ($pagenow === 'wp-login.php') {
			global $error, $interim_login, $action, $user_login;
			require_once(ABSPATH . 'wp-login.php');

			die();
		}
	}

	public function site_url($url, $path, $scheme, $blog_id) {
		return $this->filter_wp_login_php($url, $scheme);
	}

	public function network_site_url($url, $path, $scheme) {
		return $this->filter_wp_login_php($url, $scheme);
	}

	public function wp_redirect($location, $status) {
		return $this->filter_wp_login_php($location);
	}

	public function filter_wp_login_php($url, $scheme = null) {
		if (strpos($url, 'wp-login.php') !== false) {
			if (is_ssl()) {
				$scheme = 'https';
			}

			$args = explode('?', $url);

			if (isset($args[1])) {
				parse_str($args[1], $args);
				$url = add_query_arg($args, $this->new_login_url($scheme));
			}
			else {
				$url = $this->new_login_url($scheme);
			}
		}

		return $url;
	}
}

//   ▄████████   ▄██████▄   ████████▄      ▄████████  
//  ███    ███  ███    ███  ███   ▀███    ███    ███  
//  ███    █▀   ███    ███  ███    ███    ███    █▀   
//  ███         ███    ███  ███    ███   ▄███▄▄▄      
//  ███         ███    ███  ███    ███  ▀▀███▀▀▀      
//  ███    █▄   ███    ███  ███    ███    ███    █▄   
//  ███    ███  ███    ███  ███   ▄███    ███    ███  
//  ████████▀    ▀██████▀   ████████▀     ██████████

function bc_debug() {
	$debug = print_r(error_get_last(), true);
	echo '<p>php-error: ' . esc_attr($debug) . '</p>';
}

// pages/posts views count

function bc_get_views($id) {
	$count_key = 'post_views_count';
	$count = get_post_meta($id, $count_key, true);

	if ($count == '') {
		delete_post_meta($id, $count_key);
		add_post_meta($id, $count_key, '0');
		echo 'No';
	}
	echo $count . ' View' . (($count != 1) ? 's' : '');
}

function bc_set_views($id) {
	$ip = $_SERVER['REMOTE_ADDR'];
	$ips = explode("\n", str_replace(["\r\n","\n\r","\r"], "\n", _BC['bc_ignore']));

	if (!in_array($ip, $ips)) {
		$count_key = 'post_views_count';
		$count = get_post_meta($id, $count_key, true);

		if ($count == '') {
			$count = 0;
			delete_post_meta($id, $count_key);
			add_post_meta($id, $count_key, '0');
		}
		else {
			$count++;
			update_post_meta($id, $count_key, $count);
		}
	}
}

function bc_posts_column_views($defaults) {
	if (get_post_type(get_the_ID()) == 'post') {
		$defaults['post_views'] = 'Views';
	}
	return $defaults;
}

function bc_posts_custom_column_views($column_name, $id) {
	if (get_post_type(get_the_ID()) == 'post') {

		if ($column_name === 'post_views') {
			bc_get_views(get_the_ID());
		}
	}
}

function bc_pages_column_views($defaults) {
	$defaults['page_views'] = 'Views';
	return $defaults;
}

function bc_pages_custom_column_views($column_name, $id) {
	if ($column_name === 'page_views') {
		bc_get_views(get_the_ID());
	}
}

// google analytics code

function bc_google_code() {
?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo _BC['bc_gid']; ?>"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', '<?php echo _BC['bc_gid']; ?>');
	</script>
<?php
}

// wp options

function bc_set_wp_options() {
	update_option('permalink_structure', '/%postname%/');
	update_option('category_base', '');
	update_option('tag_base', '');
	update_option('uploads_use_yearmonth_folders', 0);
	update_option('ping_sites', '');
	update_option('use_smilies', 0);
	update_option('default_pingback_flag', 0);
	update_option('show_avatars', 0);
}

// no category base

function bc_no_category_base_refresh_rules() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}

function bc_no_category_base_permastruct() {
	global $wp_rewrite;
	$wp_rewrite->extra_permastructs['category']['struct'] = '%category%';
}

function bc_no_category_base_rewrite_rules($category_rewrite) {
	global $wp_rewrite;
	$category_rewrite = [];
	$categories = get_categories([
		'hide_empty' => false
	]);

	foreach ($categories as $category) {
		$category_nicename = $category->slug;

		if ($category->parent == $category->cat_ID) {
			$category->parent = 0;
		}
		elseif ($category->parent != 0) {
			$category_nicename = get_category_parents($category->parent, false, '/', true) . $category_nicename;
		}
		$category_rewrite["({$category_nicename})/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$"] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
		$category_rewrite["({$category_nicename})/{$wp_rewrite->pagination_base}/?([0-9]{1,})/?$"] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
		$category_rewrite["({$category_nicename})/?$"] = 'index.php?category_name=$matches[1]';
	}

	$old_category_base = get_option('category_base') ? get_option('category_base') : 'category';
	$old_category_base = trim($old_category_base, '/');
	$category_rewrite[$old_category_base . '/(.*)$'] = 'index.php?category_redirect=$matches[1]';
	return $category_rewrite;
}

function bc_no_category_base_query_vars($query_vars) {
	$query_vars[] = 'category_redirect';
	return $query_vars;
}

function bc_no_category_base_request($query_vars) {
	if (isset($query_vars['category_redirect'])) {
		$catlink = trailingslashit(get_option('home')) . user_trailingslashit($query_vars['category_redirect'], 'category');
		status_header(301);
		header('Location: ' . $catlink);
		exit();
	}
	return $query_vars;
}

// add mime types

function bc_add_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	$mimes['ico'] = 'image/vnd.microsoft.icon';
	return $mimes;
}

// handle content

function bc_handle_content($content) {
	if (is_single()) {
        $id = get_the_ID();
        bc_set_views($id);
    }
	return ($content == '') ? '' : str_repeat("\t", (int)_BC['bc_indent']) . str_replace(["\n", "\t"], '', preg_replace('/<!--(.*)-->/Uis', '', $content)) . "\n";
}

// remove crap

function bc_clean_category_list($list) {
	return str_replace('rel="category tag"', 'rel="tag"', $list);
}

function bc_remove_recent_comments_style() {
	global $wp_widget_factory;

	remove_action('wp_head', [
		$wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
		'recent_comments_style'
	]);
}

function bc_remove_classic_styles() {
	wp_dequeue_style('classic-theme-styles');
}

function bc_remove_block_styles() {
	wp_dequeue_style('wp-block-library');
}

function bc_remove_thumbnail_dimensions($html){
	$html = preg_replace('/(width|height)=\"\d*\"\s/', '', $html);
	return $html;
}

// add opengraph meta

function bc_og_meta() {
	$image = (has_post_thumbnail()) ? explode('/', wp_get_attachment_url(get_post_thumbnail_id(get_queried_object()->ID))) : [''];

	$tags = [
		'locale' => get_locale(),
		'title' => wp_title(':', FALSE, 'right') . get_option('blogname'),
		'url' => get_the_permalink(),
		'description' => get_the_excerpt(),
		'image' => get_site_url() . '/uploads/' . end($image),
		'type' => (is_single()) ? 'article' : 'website'
	];

	foreach ($tags as $p => $c) {
		echo "\t" . '<meta property="og:' . $p . '" content="' . $c . '">' . "\n";
	}
}

// clean nav items

function bc_nav_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, ['current-menu-item', 'nav-item']) : '';
}

// add admin scripts

function bc_add_scripts($hook) {
	$screen = get_current_screen();

	if ($screen == null) {
		return;
	}

	if ((_BC['bc_position'] == 'yes') && ($screen->base !== 'toplevel_page_' . _PLUGIN_BASIC_CLEAN . '-menu')) {
		return;
	}

	if ((_BC['bc_position'] !== 'yes') && ($screen->base !== 'settings_page_' . _PLUGIN_BASIC_CLEAN . '-menu')) {
		return;
	}

	wp_enqueue_code_editor(['type' => 'application/x-httpd-php']);
}

// post class metadata

function bc_add_post_metadata() {
	$screen = 'page';

	add_meta_box(
		'post_meta_box',
		'CSS Class',
		'bc_add_post_metadata_callback',
		$screen,
		'side',
		'default',
		null
	);
}

function bc_add_post_metadata_callback($post) {
	wp_nonce_field('css_class_save_data', 'css_class_nonce');
	$value = get_post_meta($post->ID, 'css_class', true);
	echo '<input class="components-text-control__input" style="margin-top:8px" type="text" name="css_class" value="' . esc_attr($value) . '" placeholder="Class...">';
}

function bc_save_post_metadata($id) {
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $id)) {
			return;
		}
	}
	else {
		if (!current_user_can('edit_post', $id)) {
			return;
		}
	}

	if (isset($_POST['post_type'])) {

		if (in_array($_POST['post_type'], ['page', 'post'])) {

			if (!isset($_POST['css_class_nonce'])) {
				return;
			}

			if (!wp_verify_nonce($_POST['css_class_nonce'], 'css_class_save_data')) {
				return;
			}
			$data = sanitize_text_field($_POST['css_class']);
			update_post_meta($id, 'css_class', $data);
		}
	}
}

// media downloads field

function bc_media_downloads($fields, $post) {
	$fields['file_downloads'] = [
		'label' => 'Downloads',
		'input' => 'text',
		'value' => get_post_meta($post->ID, 'file_downloads', true),
		'helps' => ''
	];
	return $fields;
}
 
function bc_media_downloads_save($post, $attachment) {
	if (isset($attachment['file_downloads'])) {
		update_post_meta($post->ID, 'file_downloads', $attachment['file_downloads']);
	}
	return $post;
}

// login screen logo

function bc_login_logo() {
	if (_BC['bc_logo'] != '') {
		echo '<style>h1 a { background-image:url(/uploads/' . _BC['bc_logo'] . ') !important; height: 100px !important; background-size: auto 100px !important; }</style>';
	}
}

// include file shortcode

function bc_inc_shortcode($atts = [], $content = null, $tag = '') {
	if ($content) {
		ob_start();
		get_template_part($content);
		return ob_get_clean();
	}
	else {
		return '';
	}
}

// video shortcode

function bc_video_shortcode($atts = [], $content = null, $tag = '') {
	return '<div class="video"><iframe src="' . $content . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

// show child pages shortcode

function bc_children_shortcode($atts = [], $content = null, $tag = '') {
	ob_start();

	if (is_page()) {
		$current_page_id = get_the_ID();
		$child_pages = get_pages([ 
			'child_of' => $current_page_id,
			'sort_column' => 'menu_order',
			'sort_order' => 'ASC'
		]);

		if ($child_pages) {
			echo ($content) ? '<div class="' . $content . '">' : '<div class="row">';

			foreach ($child_pages as $child_page) {
				$page_id = $child_page->ID;
				$page_link = get_permalink($page_id);
				$page_title = $child_page->post_title;
				$page_content = $child_page->post_content;
				$page_css_class = get_post_meta($page_id, 'css_class', true);
				echo '<div class="' . $page_css_class . '">' . do_shortcode($page_content) . '</div>';
			}
			echo '</div>';
		}
	}
	return ob_get_clean();
}

// show page shortcode

function bc_page_shortcode($atts = [], $content = null, $tag = '') {
	$html = '';

	if ($content) {
		$page = get_page_by_path($content);

		if ($page) {
					$html .= '</article>';
				$html .= '</section>';
			$html .= '</div>';
			$html .= '<div id="' . $page->post_name . '-section">';
				$html .= '<div class="' . ((class_exists('BWP')) ? _BWP['container_class'] : 'container') . '">';
					$html .= '<div class="row">';
						$html .= '<div class="' . get_post_meta($page->ID, 'css_class', true) . '">' . $page->post_content . '</div>';
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
			$html .= '<div class="' . ((class_exists('BWP')) ? _BWP['container_class'] : 'container') . '">';
				$html .= '<section class="row">';
					$html .= '<article class="col-xs-12">';
		}
	}

	return $html;
}

// lorem ipsum shortcode

function bc_lorem_shortcode($atts = [], $content = null, $tag = '') {
	$count = $content;
	$words = explode(' ', _BC['bc_random_text']);
	$text = '';
	$first = 1;

	for ($p = 0; $p < $count; $p++) {
		$text .= '<p>';
		if ($p == 0) {
			for ($l = 0; $l < 5; $l++) {
				$text .= (($l == 0) ? ucwords($words[$l]) : $words[$l]) . ' ';
			}
		}
		for ($s = 0; $s < rand(5, 10); $s++) {
			for ($w = 0; $w < rand(10, 20); $w++) {
				$word = $words[rand(0, count($words) - 1)];
				$text .= (!$first && $w == 0) ? ucwords($word) : $word;
				$text .= (rand(0, 100) < 10) ? ', ' : ' ';
			}
			$text = rtrim($text, ', ') . '. ';
			$first = 0;
		}
		$text .= '</p>';
	}
	return $text;
}

// latest posts shortcode

function bc_latest_shortcode($atts = [], $content = null, $tag = '') {
	wp_reset_postdata();

	$count = $content;
	$none = true;
	$num = 0;
	$post_id = get_queried_object_id();
	$cat = get_category_by_slug('uncategorised');

	$query = new WP_Query([
		'posts_per_page' => $count,
		'category__not_in' => $cat->term_id
	]);
	$html = '<div id="latest-posts">';

	while ($query -> have_posts()) : $query -> the_post();
		if ((get_the_ID() != $post_id)) {
			$bg = '';

			if (has_post_thumbnail()) {
				$array = explode('/', wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnail')[0]);
				$bg = end($array);
			}

			if ($num <= $count) {
				$html .= '<div class="post-box my-3">';
					$html .= '<a class="post-link" href="' . get_permalink() . '" title="' . get_the_title() . '">';
						$html .= '<h4 class="post-title">' . get_the_title() . '</h4>';
						$html .= '<p class="post-date">' . get_the_time(get_option('date_format')) . ' - ' . get_the_time() . '</p>';

						if ($bg && _BC['bc_latest_images'] == 'yes') {
							$html .= '<div class="post-img" style="background-image:url(/uploads/' . $bg . ')"></div>';
						}

						$html .= '<p class="post-excerpt">' . get_the_excerpt() . '</p>';
					$html .= '</a>';
				$html .= '</div>';
				$none = false;
				$num++;
			}
		}
	endwhile;

	if ($none) {
		$html .= '<div>No Posts&hellip;</div>';
	}
	return $html . '</div>';
}

// contact form shortcode

function contact_shortcode($atts = [], $content = null, $tag = '') {
	if (_BC['bc_form_active'] == 'yes') {
		$html = '<form id="contact-form">';
		$id = ($content) ? $content : 0;
		$form = json_decode(_BC['bc_form_json'], true);
		foreach ($form[$id] as $field => $data) {
			$html .= '<div class="mb-3">';
				$html .= '<label for="' . $field . '" class="form-label">' . $data['label'] . '</label>';
				switch ($data['type']) {
					case 'textarea': {
						$html .= '<textarea id="' . $field . '" class="f form-control" name="' . $field . '" placeholder="' . $data['label'] . '"></textarea>';
						break;
					}
					case 'checkbox': {
						$html .= '<input id="' . $field . '" type="checkbox" class="form-check-input" name="' . $field . '">';
						break;
					}
					default: {
						$html .= '<input id="' . $field . '" type="' . $data['type'] . '" class="f form-control" name="' . $field . '" placeholder="' . $data['label'] . '">';
					}
				}
			$html .= '</div>';
		}
		$html .= '<div class="mb-3">';
			$html .= '<input type="hidden" name="action" value="contact_form_action">';
			$html .= '<input type="hidden" name="form_id" value="' . $id . '">';
			$html .= wp_nonce_field('contact_form_action', '_acf_nonce', true, false);
			$html .= '<input id="contact-button" type="button" value="Send">';
		$html .= '</div>';
		$html .= '</form>';
		$html .= '<div id="contact-msg"></div>';

		$url = admin_url('admin-ajax.php');

		$script = "<script>function boot(){
			$('article').on('click','#contact-button',function(){
				var f=$('#contact-form');
				var m=$('#contact-msg');
				m.text('...');
				var ne=$('.f').filter(function(){
					return this.value != '';
				});
				if(ne.length==0){
					m.text('Please complete all the fields.');
					return false;
				}else{
					$.ajax({
						type:'POST',
						url:'{$url}',
						data:f.serialize(),
						dataType:'json',
						success:function(res){
							if(res.status=='success'){
								f[0].reset();
							}
							m.text(res.errmessage);
						}
					});
				}
			});
		}</script>";

		return $html . $script;
	}
	else {
		return null;
	}
}

// contact form post handler

function contact_form_callback() {
	if (!wp_verify_nonce($_POST['_acf_nonce'], $_POST['action'])) {
		$error = 'verification error, try again.';
	}
	else {
		$id = $_POST['form_id'];
		$forms = json_decode(_BC['bc_form_json'], true);
		$message = 'IP address: ' . $_SERVER['REMOTE_ADDR'] . "\n\n";

		foreach ($forms[$id] as $field => $data) {
			$sane = '';

			switch ($field) {
				case 'email': {
					$sane = filter_var($_POST[$field], FILTER_SANITIZE_EMAIL);
					break;
				}
				case 'message': {
					$sane = stripslashes($_POST[$field]);
					break;
				}
				default: {
					$sane = filter_var($_POST[$field], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
				}
			}

			$message .= $field . ': ';
			if (strlen($sane) > 50) {
				$message .= "\n\n" . $sane . "\n\n";
			}
			else {
				$message .= $sane . "\n";
			}
		}

		$subject = 'A messsage from ' . get_option('blogname');
		$sendmsg = _BC['bc_form_success'];
		$to = _BC['bc_form_email'];

		$parsed = parse_url(site_url());

		$header = 'From: ' . get_option('blogname') . ' <no-reply@' . $parsed['host'] . '>' . "\n";
		$header .= 'Reply-To: ' . $email . "\n";

		if (wp_mail($to, $subject, $message, $header)) {
			$status = 'success';
			$error = $sendmsg;
		}
		else {
			$error = 'error(s)';
		}
	}

	$json = [
		'status' => $status,
		'errmessage' => $error
	];
	
	header('Content-Type: application/json');
	die(json_encode($json));
}

// htaccess stuff

function bc_output_htaccess($rules) {
	$plugin = _PLUGIN_BASIC_CLEAN;
	$new_rules = "\n# BEGIN {$plugin}\n<IfModule mod_rewrite.c>\nRewriteEngine On\nRewriteCond %{REQUEST_URI} ^/img [NC]\nRewriteRule /(.*) wp-content/plugins/{$plugin}/index.php?file=$1 [L]\nRewriteCond %{REQUEST_URI} ^/uploads [NC]\nRewriteRule /(.*) wp-content/plugins/{$plugin}/index.php?file=$1 [L]\n";

	if (_BC['bc_sitemap'] == 'yes') {
		$new_rules .= "RewriteRule ^sitemap\.xml$ /wp-content/plugins/{$plugin}/index.php?file=sitemap [L]\n";
	}

	return $new_rules . "</IfModule>\n# END {$plugin}\n\n" . $rules;
}

function bc_flush_htaccess() {
	flush_rewrite_rules();
}

// cache control stuff

function bc_set_cache_control() {
	header('Cache-Control: max-age=' . _BC['bc_cache']);
}

// custom feeds stuff

function disable_feed() {
	die('no feed available');
}

function custom_feed() {
	$posts = query_posts('showposts=' . 9999);
	header('Content-Type: ' . feed_content_type('rss-http') . '; charset=' . get_option('blog_charset'), true);
	echo '<?xml version="1.0" encoding="' . get_option('blog_charset') . '"?' . '>';
?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" xmlns:slash="http://purl.org/rss/1.0/modules/slash/" <?php do_action('rss2_ns'); ?>>
	<channel>
		<title><?php bloginfo_rss('name'); ?> - Feed</title>
		<atom:link href="<?php self_link(); ?>" rel="self" type="application/rss+xml" />
		<link><?php bloginfo_rss('url') ?></link>
		<description><?php bloginfo_rss('description') ?></description>
		<?php do_action('rss2_head'); ?>
<?php while(have_posts()) : the_post(); ?>
		<item>
			<title><?php the_title_rss(); ?></title>
			<link><?php the_permalink_rss(); ?></link>
			<pubDate><?php echo mysql2date('D, d M Y H:i:s +0000', get_post_time('Y-m-d H:i:s', true), false); ?></pubDate>
			<dc:creator><?php the_author(); ?></dc:creator>
			<guid isPermaLink="false"><?php the_guid(); ?></guid>
			<description><![CDATA[<?php the_excerpt_rss() ?>]]></description>
			<content:encoded><![CDATA[<?php the_content_feed() ?>]]></content:encoded>
			<?php rss_enclosure(); ?>
			<?php do_action('rss2_item'); ?>
		</item>
<?php endwhile; ?>
	</channel>
</rss>
<?php
}

//   ▄█   ███▄▄▄▄▄     ▄█       ███      
//  ███   ███▀▀▀▀██▄  ███   ▀█████████▄  
//  ███▌  ███    ███  ███▌     ▀███▀▀██  
//  ███▌  ███    ███  ███▌      ███   ▀  
//  ███▌  ███    ███  ███▌      ███      
//  ███   ███    ███  ███       ███      
//  ███   ███    ███  ███       ███      
//  █▀     ▀█    █▀   █▀       ▄████▀

define('_BC', _bcSettings::get_settings());

add_action('admin_enqueue_scripts', 'bc_add_scripts');

if (_BC['bc_cleaning'] == 'yes') {
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'rel_canonical');
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
	remove_action('wp_head', 'noindex', 1);
	remove_action('wp_head', 'rest_output_link_wp_head', 10);
	remove_action('wp_head', 'wp_resource_hints', 2);
	remove_action('wp_head', 'wp_oembed_add_host_js');
	remove_action('wp_head', 'wp_oembed_add_discovery_links');
	remove_action('wp_head', 'oa_social_login_add_javascripts');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('rest_api_init', 'wp_oembed_register_route');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('template_redirect', 'rest_output_link_header', 11, 0);
	add_filter('show_admin_bar', '__return_false');
	add_filter('wp_calculate_image_srcset', '__return_false');
	add_filter('widget_text', 'shortcode_unautop');
	add_filter('the_excerpt', 'shortcode_unautop');
	add_filter('post_thumbnail_html', 'bc_remove_thumbnail_dimensions', 10);
	add_filter('image_send_to_editor', 'bc_remove_thumbnail_dimensions', 10);
	add_filter('the_category', 'bc_clean_category_list');
	add_filter('the_content', 'bc_handle_content', 20);
	add_filter('nav_menu_css_class', 'bc_nav_attributes_filter', 100, 1);
	add_filter('nav_menu_item_id', 'bc_nav_attributes_filter', 100, 1);
	add_filter('page_css_class', 'bc_nav_attributes_filter', 100, 1);
	remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('wp_robots', 'wp_robots_max_image_preview_large');
	add_action('widgets_init', 'bc_remove_recent_comments_style');
}

if (_BC['bc_global'] == 'yes') {
	remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
	remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
}

if (_BC['bc_blocks'] == 'yes') {
	add_action('wp_enqueue_scripts', 'bc_remove_block_styles');
}

if (_BC['bc_classic'] == 'yes') {
	add_action('wp_enqueue_scripts', 'bc_remove_classic_styles');
}

if (_BC['bc_options'] == 'yes') {
	add_action('init', 'bc_set_wp_options');
}

if (_BC['bc_cache'] != false) {
	add_action('init', 'bc_set_cache_control');
}

if (_BC['bc_sitemap'] == 'yes') {
	add_filter('wp_sitemaps_enabled', '__return_false');
}

if (_BC['bc_ogmeta'] == 'yes') {
	add_filter('wp_head', 'bc_og_meta');
}

if (_BC['bc_nocat'] == 'yes') {
	add_action('init', 'bc_no_category_base_permastruct');
	add_action('created_category', 'bc_no_category_base_refresh_rules');
	add_action('delete_category', 'bc_no_category_base_refresh_rules');
	add_action('edited_category', 'bc_no_category_base_refresh_rules');
	add_filter('category_rewrite_rules', 'bc_no_category_base_rewrite_rules');
	add_filter('query_vars', 'bc_no_category_base_query_vars');
	add_filter('request', 'bc_no_category_base_request');
}

if (_BC['bc_columns'] == 'yes') {
	add_action('add_meta_boxes', 'bc_add_post_metadata');
	add_action('save_post', 'bc_save_post_metadata');
}

if (_BC['bc_logo'] != '') {
	add_action('login_head', 'bc_login_logo');
}

if ((_BC['bc_login'] != '') && (_BC['bc_path'] != '')) {
	new _bcLogin();
}

if (_BC['bc_gid'] != '') {
	add_action('wp_head', 'bc_google_code', 0);
}

if (_BC['bc_mimes'] == 'yes') {
	add_filter('upload_mimes', 'bc_add_mime_types');
}

if (_BC['bc_views'] == 'yes') {
	add_action('manage_posts_custom_column', 'bc_posts_custom_column_views', 5, 2);
	add_action('manage_pages_custom_column', 'bc_pages_custom_column_views', 5, 2);
	add_filter('manage_posts_columns', 'bc_posts_column_views');
	add_filter('manage_pages_columns', 'bc_pages_column_views');
	add_filter('attachment_fields_to_edit', 'bc_media_downloads', 10, 2);
	add_filter('attachment_fields_to_save', 'bc_media_downloads_save', 10, 2);
}

if (_BC['bc_htaccess'] == 'yes') {
	add_action('admin_init', 'bc_flush_htaccess');
	add_filter('mod_rewrite_rules', 'bc_output_htaccess');
}

if (_BC['bc_shortcodes'] == 'yes') {
	add_shortcode('inc', 'bc_inc_shortcode');
	add_shortcode('video', 'bc_video_shortcode');
	add_shortcode('children', 'bc_children_shortcode');
	add_shortcode('page', 'bc_page_shortcode');
	add_shortcode('lorem', 'bc_lorem_shortcode');
	add_shortcode('latest', 'bc_latest_shortcode');
}

if (_BC['bc_feeds'] != 'default') {
	$feed = _BC['bc_feeds'] . '_feed';
	add_action('do_feed', $feed, 1);
	add_action('do_feed_rdf', $feed, 1);
	add_action('do_feed_rss', $feed, 1);
	add_action('do_feed_rss2', $feed, 1);
	add_action('do_feed_atom', $feed, 1);
	add_action('do_feed_rss2_comments', $feed, 1);
	add_action('do_feed_atom_comments', $feed, 1);
}

if (_BC['bc_form_active'] == 'yes') {
	add_action('wp_ajax_contact_form_action', 'contact_form_callback');
	add_action('wp_ajax_nopriv_contact_form_action', 'contact_form_callback');
	add_shortcode('contact-form', 'contact_shortcode');
}

remove_action('shutdown', 'wp_ob_end_flush_all', 1);

// boot plugin

add_action('init', function() {
	if (is_admin()) {
		new _bcMenu(_URL_BASIC_CLEAN);
	}
});

add_action('rest_api_init', function() {
	_bcSettings::args();
	$api = new _bcAPI();
	$api->add_routes();
});

// eof