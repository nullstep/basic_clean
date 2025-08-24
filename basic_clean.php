<?php

/*
 * Plugin Name: basic_clean
 * Plugin URI: https://nullstep.com/wp-plugins
 * Description: make it better
 * Author: nullstep
 * Author URI: https://nullstep.com
 * Version: 1.3.7
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

// default form json

define('_FORM_BASIC_CLEAN', '
	{"default":{"send_to":["' . get_option('admin_email') . '"],"success_msg":"Thanks","rows":[{"cols":[{"class":"col-md-6","fields":[{"label":"First Name","type":"input","required":"yes"},{"label":"Last Name","type":"input","required":"no"}]},{"class":"col-md-6","fields":[{"label":"Email","type":"input","required":"yes"},{"label":"Telephone","type":"input","required":"no"}]}]},{"cols":[{"class":"col-md-12","fields":[{"label":"Message","type":"textarea","required":"yes"}]}]}]}}
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
	'bc_mimes' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_unfiltered' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_cols' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_comments' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_debug' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_shortcode_lorem' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_shortcode_toc' => [
		'type' => 'string',
		'default' => 'no'
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
	'bc_cleaning' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_htaccess' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_fa' => [
		'type' => 'string',
		'default' => 'none'
	],
	'bc_fa_load' => [
		'type' => 'string',
		'default' => 'public'
	],
	'bc_fab' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_fal' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_far' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_fas' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_fat' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_fasl' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_fasr' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_fass' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_fad' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_cookies' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_global' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_classic' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_core_block' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_blocks' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_dashboard' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'bc_form_json' => [
		'type' => 'string',
		'default' => json_encode(
			json_decode(trim(_FORM_BASIC_CLEAN)),
			JSON_PRETTY_PRINT
		)
	],
	'bc_form_active' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_mail_log' => [
		'type' => 'string',
		'default' => 'no'
	],	
	'bc_random_text' => [
		'type' => 'string',
		'default' => _WORDS_BASIC_CLEAN
	]
]);

// basic_clean ajax

define('_AJAX_BASIC_CLEAN', [
	'optimise_tables',
	'clean_attachments',
	'clean_revisions',
	'clean_transients'
]);

// basic_clean admin 

define('_ADMIN_BASIC_CLEAN', [
	'options' => [
		'label' => 'Options',
		'columns' => 2,
		'fields' => [
			'bc_ignore' => [
				'label' => 'IP Addresses to Ignore for Page View Count',
				'type' => 'text'
			],
			'bc_random_text' => [
				'label' => 'Text Generator Source',
				'type' => 'text'
			],
			'bc_gid' => [
				'label' => 'Google Analytics ID',
				'type' => 'input'
			],
			'bc_indent' => [
				'label' => 'Tab Indents',
				'type' => 'input'
			],
			'bc_position' => [
				'label' => 'Show in Main Admin Menu',
				'type' => 'check'
			],
			'bc_cookies' => [
				'label' => 'Cookie Consent Active',
				'type' => 'check'
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
			'bc_mimes' => [
				'label' => 'Allow Additional Upload Types',
				'type' => 'check'
			],
			'bc_unfiltered' => [
				'label' => 'Allow Unfiltered Uploads',
				'type' => 'check'
			],
			'bc_cols' => [
				'label' => 'Show Extra Page/Post Columns',
				'type' => 'check'
			],
			'bc_comments' => [
				'label' => 'Allow Comments',
				'type' => 'check'
			],
			'bc_debug' => [
				'label' => 'Show Last PHP Error Notice',
				'type' => 'check'
			],
			'bc_shortcode_lorem' => [
				'label' => 'Lorem Shortcode Active',
				'type' => 'check'
			],
			'bc_shortcode_toc' => [
				'label' => 'TOC Shortcode Active',
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
			]
		]
	],
	'fonts' => [
		'label' => 'Fonts',
		'columns' => 4,
		'fields' => [
			'bc_fa' => [
				'label' => 'Font Awesome',
				'type' => 'select',
				'values' => [
					'none' => 'None',
					'free' => 'Free',
					'pro' => 'Pro'
				]
			],
			'bc_fa_load' => [
				'label' => 'Where',
				'type' => 'select',
				'values' => [
					'public' => 'Public',
					'admin' => 'Admin',
					'both' => 'Both'
				]
			],
			'bc_fab' => [
				'label' => 'Brands',
				'type' => 'check'
			],
			'bc_fal' => [
				'label' => 'Light',
				'type' => 'check'
			],
			'bc_far' => [
				'label' => 'Regular',
				'type' => 'check'
			],
			'bc_fas' => [
				'label' => 'Solid',
				'type' => 'check'
			],
			'bc_fat' => [
				'label' => 'Thin',
				'type' => 'check'
			],
			'bc_fasl' => [
				'label' => 'Sharp Light',
				'type' => 'check'
			],
			'bc_fasr' => [
				'label' => 'Sharp Regular',
				'type' => 'check'
			],
			'bc_fass' => [
				'label' => 'Sharp Solid',
				'type' => 'check'
			],
			'bc_fad' => [
				'label' => 'Duotone',
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
			'bc_core_block' => [
				'label' => 'Remove Core Block Supports Styles',
				'type' => 'check'
			],
			'bc_blocks' => [
				'label' => 'Remove Block Styles',
				'type' => 'check'
			],
			'bc_dashboard' => [
				'label' => 'Remove WP Dashboard Widgets',
				'type' => 'check'
			]
		]
	],
	'forms' => [
		'label' => 'Forms',
		'columns' => 1,
		'fields' => [
			'bc_form_json' => [
				'label' => 'Forms JSON Config',
				'type' => 'code'
			],
			'bc_form_active' => [
				'label' => 'Forms Active',
				'type' => 'check'
			],
			'bc_mail_log' => [
				'label' => 'Show Mail Errors',
				'type' => 'check'
			]
		]
	],
	'database' => [
		'label' => 'Database',
		'columns' => 4,
		'fields' => [
			'bc_optimise_tables' => [
				'label' => 'Optimise Tables',
				'type' => 'button',
				'action' => 'optimise_tables',
				'ajax' => true
			],
			'bc_clean_attachments' => [
				'label' => 'Clean Attachments',
				'type' => 'button',
				'action' => 'clean_attachments',
				'ajax' => true
			],
			'bc_clean_revisions' => [
				'label' => 'Clean Revisions',
				'type' => 'button',
				'action' => 'clean_revisions',
				'ajax' => true
			],
			'bc_clean_transients' => [
				'label' => 'Clean Transients',
				'type' => 'button',
				'action' => 'clean_transients',
				'ajax' => true
			],
		],
		'hide_save' => true
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
			if ($i == 'bc_form_json') {
				if ($setting == 'reset') {
					$settings['bc_form_json'] = json_encode(
						json_decode(trim(_FORM_BASIC_CLEAN)),
						JSON_PRETTY_PRINT
					);
				}
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
				'<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="500px" height="500px" viewbox="0 0 500 500"><path fill="#a7aaad" d="M250,9.8L42,129.9v240.2l208,120.1l208-120.1V129.9L250,9.8z M384.8,209.6H175v80.7h209.8v59.8H115.2v-14.6 v-45.3v-80.7v-45.3v-14.6h269.7V209.6z"/></svg>'),
			'position' => 3
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
		wp_enqueue_code_editor(['type' => 'application/x-httpd-php']);
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
					$save = (isset($tab['hide_save'])) ? 'yes' : 'no';
					echo '<a href="#' . $name . '-' . $tid . '" class="nav-tab" onclick="bc_tab(\'' . $save . '\')">' . $tab['label'] . '</a>';
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
							case 'button': {
								echo '<label for="' . $fid . '">';
									echo '&nbsp;';
								echo '</label>';
								if ($field['ajax']) {
									$nonce = wp_create_nonce($field['action']);
									$link = admin_url('admin-ajax.php?action=' . $field['action'] . '&nonce=' . $nonce);

									echo '<button class="button-primary" href="javascript(void);" id="btn-' . $field['action'] . '">' . $field['label'] . '</button>';
									echo '<div id="response-' . $field['action'] . '"><p></p></div>';
									echo '<script>';
										echo 'jQuery(function($){';
											echo '$("#btn-' . $field['action'] . '").on("click",function(e){';
												echo '$("#btn-' . $field['action'] . '").attr("disabled", true);';
												echo 'e.preventDefault();';
												echo '$.ajax({
													type: "post",
													dataType: "json",
													url: "' . admin_url('admin-ajax.php') . '",
													data: {
														action: "' . $field['action'] . '",
														nonce: "' . $nonce . '"
													},
													success: function(response) {
														$("#btn-' . $field['action'] . '").attr("disabled", false);
														if (response.status == "success") {
															$("#response-' . $field['action'] . ' p").text(response.message);
														}
														else {
															$("#response-' . $field['action'] . ' p").text("There was an error");
														}
													}
												})';
											echo '});';
										echo '});';
									echo '</script>';
								}
								else {
									echo '<button class="button-primary" href="javascript(void);" id="' . $field['action'] . '">' . $field['label'] . '</button>';
								}

								break;
							}
						}
						echo '</div>';
					}
					echo '</div>';
				}
				echo '</div>';
				echo '<div id="save-button">';
					submit_button();
				echo '</div>';
				echo '<div id="' . $name . '-feedback"></div>';
			echo '</form>';
			echo '<script>';
				echo 'function bc_tab(x){if(x=="yes"){jQuery("#save-button").hide();}else{jQuery("#save-button").show();}}';
			echo '</script>';
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

// duplicate page/post

function bc_duplicate_post_link($actions, $post) {
	$post_status = 'draft';

	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = isset($post) ? '<a href="admin.php?action=bc_duplicate_post_as_draft&amp;post=' . intval($post->ID) . '&amp;nonce=' . wp_create_nonce('bc-duplicate-page-' . intval($post->ID) ) . '" title="' . 'Duplicate this as ' . $post_status . '" rel="permalink">' . 'Duplicate This' . '</a>' : '';
	}

	return $actions;
}

function bc_duplicate_post_as_draft() {
	$nonce = sanitize_text_field($_REQUEST['nonce']);
	$post_id = (isset($_GET['post']) ? intval($_GET['post']) : intval($_POST['post']));
	$post = get_post($post_id);
	$current_user_id = get_current_user_id();

	if (wp_verify_nonce($nonce, 'b-duplicate-page-' . $post_id)) {
		if (current_user_can('manage_options') || current_user_can('edit_others_posts')) {
			bc_duplicate_edit_post($post_id);
		}
		else if (current_user_can('contributor') && $current_user_id == $post->post_author) {
			bc_duplicate_edit_post($post_id, 'pending');
		}
		else if (current_user_can('edit_posts') && $current_user_id == $post->post_author) {
			bc_duplicate_edit_post($post_id);
		}
		else {
			wp_die('Unauthorized Access.');
		}
	}
	else {
		wp_die('Security check issue, Please try again.');
	} 
}

function bc_duplicate_edit_post($post_id, $post_status_update = '') {
	global $wpdb;

	if ($post_status_update == '') {
		$post_status = 'draft';
	}
	else {
		$post_status =  $post_status_update;
	}

	$redirect_it = 'to_page';

	if (!(isset($_GET['post']) || isset($_POST['post']) || (isset($_REQUEST['action']) && 'bc_duplicate_post_as_draft' == sanitize_text_field($_REQUEST['action'])))) {
		wp_die('No post to duplicate has been supplied!');
	}

	$return_page = '';            
	$post = get_post($post_id);
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID; // or $post->post_author;

	if (isset($post) && $post != null) {
		$args = [
			'comment_status' => $post->comment_status,
			'ping_status' => $post->ping_status,
			'post_author' => $new_post_author,
			'post_content' => wp_slash($post->post_content),
			'post_excerpt' => $post->post_excerpt,
			'post_parent' => $post->post_parent,
			'post_password' => $post->post_password,
			'post_status' => $post_status,
			'post_title' => $post->post_title,
			'post_type' => $post->post_type,
			'to_ping' => $post->to_ping,
			'menu_order' => $post->menu_order
		];

		$new_post_id = wp_insert_post($args);

		if (is_wp_error($new_post_id)) {
			wp_die($new_post_id->get_error_message());
		}

		$taxonomies = array_map('sanitize_text_field', get_object_taxonomies($post->post_type));

		if (!empty($taxonomies) && is_array($taxonomies)) {
			foreach ($taxonomies as $taxonomy) {
				$post_terms = wp_get_object_terms($post_id, $taxonomy, ['fields' => 'slugs']);
				wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
			}
		}

		$post_meta_keys = get_post_custom_keys($post_id);

		if (!empty($post_meta_keys)) {
			foreach ($post_meta_keys as $meta_key) {
				$meta_values = get_post_custom_values($meta_key, $post_id);
				foreach ($meta_values as $meta_value) {
					$meta_value = maybe_unserialize($meta_value);
					update_post_meta($new_post_id, $meta_key, wp_slash($meta_value));
				}
			}
		}

		if ($post->post_type != 'post') {
			$return_page = '?post_type=' . $post->post_type;
		}

		if (!empty($redirect_it) && $redirect_it == 'to_list') {
			wp_redirect(esc_url_raw(admin_url('edit.php' . $return_page)));
		}
		elseif (!empty($redirect_it) && $redirect_it == 'to_page') {
			wp_redirect(esc_url_raw(admin_url('post.php?action=edit&post=' . $new_post_id))); 
		}
		else {
			wp_redirect(esc_url_raw(admin_url('edit.php' . $return_page)));
		}

		exit;
	} 
	else {
		wp_die('Error! Post creation failed, could not find original post: ' . $post_id);
	}
}

function bc_debug() {
	$debug = print_r(error_get_last(), true);
	echo '<pre>php-error: ' . esc_attr($debug) . '</pre>';
}

// pages/posts views count

function bc_get_views($id) {
	if (get_post($id)->post_parent > 0) { 
		echo 'N/A';
	}
	else {
		$count_key = 'post_views_count';
		$count = get_post_meta($id, $count_key, true);

		if ($count == '') {
			delete_post_meta($id, $count_key);
			add_post_meta($id, $count_key, '0');
			echo 'No';
		}
		echo $count . ' View' . (($count != 1) ? 's' : '');
	}
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

function bc_get_post_type() {
	global $post, $typenow, $current_screen;
	
	if ($post && $post->post_type) {
		return $post->post_type;
	}
	
	elseif ($typenow) {
		return $typenow;
	}
	
	elseif ($current_screen && $current_screen->post_type) {
		return $current_screen->post_type;
	}
	
	elseif (isset($_REQUEST['post_type'])) {
		return sanitize_key($_REQUEST['post_type']);
	}
	
	return null;
}

function bc_column_list($defaults) {
	if (in_array(bc_get_post_type(), ['post', 'page'])) {
		unset($defaults['date']);
		$defaults['post_views'] = 'Views';
		$defaults['url'] = 'URL';
		$defaults['date'] = 'Date';
	}
	return $defaults;
}

function bc_custom_column_list($column_name, $id) {
	if (in_array(get_post_type($id), ['post', 'page'])) {
		switch ($column_name) {
			case 'post_views': {
				bc_get_views($id);
				break;
			}
			case 'url': {
				$url = get_the_permalink($id);
				echo '<a href="' . $url . '" target="_blank">' . parse_url($url)['path'] . '</a>';
				break;
			}
		}
	}
}

function bc_view_count() {
	if (is_singular()) {
		bc_set_views(get_the_ID());
	}
}

// sorting views column

function bc_set_posts_sortable_columns($columns) {
	$columns['post_views'] = 'post_views';
	return $columns;
}

function bc_set_pages_sortable_columns($columns) {
	$columns['page_views'] = 'page_views';
	return $columns;
}

function bc_sort_custom_column_query($query) {
	$orderby = $query->get('orderby');
	if (in_array($orderby, ['post_views', 'page_views'])) {
		$meta_query = [
			'relation' => 'OR',
			[
				'key' => $orderby . '_count',
				'compare' => 'NOT EXISTS'
			],
			[
				'key' => $orderby . '_count'
			]
		];
		$query->set('meta_query', $meta_query);
		$query->set('orderby', 'meta_value');
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

// font awesome

function bc_font_awesome() {
	switch (_BC['bc_fa']) {
		case 'free': {
			if (_BC['bc_fab'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css">';
			}
			if (_BC['bc_far'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/regular.min.css">';
			}
			if (_BC['bc_fas'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css">';
			}
			break;
		}
		case 'pro': {
			if (_BC['bc_fab'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="/fonts/brands.min.css">' . "\n";
			}
			if (_BC['bc_fal'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="/fonts/light.min.css">' . "\n";
			}
			if (_BC['bc_far'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="/fonts/regular.min.css">' . "\n";
			}
			if (_BC['bc_fas'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="/fonts/solid.min.css">' . "\n";
			}
			if (_BC['bc_fat'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="/fonts/thin.min.css">' . "\n";
			}
			if (_BC['bc_fasl'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="/fonts/sharp-light.min.css">' . "\n";
			}
			if (_BC['bc_fasr'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="/fonts/sharp-regular.min.css">' . "\n";
			}
			if (_BC['bc_fass'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="/fonts/sharp-solid.min.css">' . "\n";
			}
			if (_BC['bc_fad'] == 'yes') {
				echo "\t" . '<link rel="stylesheet" href="/fonts/duotone.min.css">' . "\n";
			}
			break;
		}
	}
}

// consent cookie

function bc_cookie_scripts() {
	$consent = $_COOKIE['user_consent'] ?? 'no';

	if ($consent == 'yes') {
?>
	<script>console.log('loading non-essential scripts');</script>
<?php
	} 
}

function bc_cookie_consent() {
	if (!isset($_COOKIE['user_consent'])) {
?>
	<div id="cookie-box">
		<p>This site uses cookies. Here is our <a href="/privacy-policy">privacy/cookie policy</a>. This explains the difference between essential and non-essential cookies, and lists the non-essential ones and their uses. Would you like to allow non-essential cookies on this site? You can change your mind by clicking the cookie icon in the bottom right corner of the page any time.</p>
		<button onclick="bcc('yes')">Yes</button>
		<button onclick="bcc('no')">No</button>			
	</div>
	<script>
		function bcc(c) {
			document.cookie = 'user_consent=' + c + '; path=/; max-age=' + (31536000);
			location.reload();
		}
	</script>
<?php
	}
	else {
		if ($_COOKIE['user_consent'] == 'yes') {
?>
	<div id="cookie-icon">yes</div>
<?php
		}
		else {
?>
	<div id="cookie-icon">no</div>
<?php
		}
	}
}

// mail error log

function bc_mail_error($wp_error) {
	echo '<pre>';
		print_r($wp_error);
	echo '</pre>';
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

// wp dashboard

function bc_remove_dashboard_widgets() {
	global $wp_meta_boxes;
   
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_welcome']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
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
	$mimes['webp'] = 'image/webp';
	$mimes['ico'] = 'image/vnd.microsoft.icon';
	$mimes['eot'] = 'application/vnd.ms-fontobject';
	$mimes['otf'] = 'application/octet-stream';
	$mimes['ttf'] = 'application/x-font-ttf';
	$mimes['woff'] = 'application/x-font-woff';
	$mimes['woff2'] = 'application/font-woff2';

	return $mimes;
}

// unfiltered uploads

function bc_unfiltered_upload($caps) {
	if (!defined('ALLOW_UNFILTERED_UPLOADS')) {
		define('ALLOW_UNFILTERED_UPLOADS', true);
	}
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

function bc_remove_img_width_height($value, $image, $context, $attachment_id) {
	if ($context === 'the_content' || $context === 'the_excerpt' ||  $context === 'widget_text_content') {
		return false;
	}

	return $value;
}

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
	wp_dequeue_style('core-block-supports');
}

function bc_remove_thumbnail_dimensions($html){
	$html = preg_replace('/(width|height)=\"\d*\"\s/', '', $html);
	return $html;
}

// add opengraph meta

function bc_og_meta() {
	$id = get_queried_object_id();
	$image = (has_post_thumbnail($id)) ? explode('/', wp_get_attachment_url(get_post_thumbnail_id($id))) : [''];

	if (is_page() || is_singular('post')) {
		$description = get_the_excerpt();
	}
	else {
		$description = get_bloginfo('description');		
	}

	$tags = [
		'locale' => get_locale(),
		'title' => wp_title(':', false, 'right') . get_option('blogname'),
		'url' => get_the_permalink($id),
		'description' => $description,
		'type' => (is_single()) ? 'article' : 'website'
	];

	if (end($image)) {
		$tags['image'] = get_site_url() . '/uploads/' . end($image);
	}

	foreach ($tags as $p => $c) {
		echo "\t" . '<meta property="og:' . $p . '" content="' . $c . '">' . "\n";
	}
}

// clean nav items

function bc_nav_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, [
		'current-menu-item',
		'nav-item',
		'dropdown'
	]) : '';
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
		echo '<style>h1 a{background-image:url(/uploads/' . _BC['bc_logo'] . ') !important;height:100px !important;width:auto !important;background-size:auto 100px !important}</style>';
	}
}

// remove all commenting functions

function bc_remove_commenting() {
	global $pagenow;

	if ($pagenow === 'edit-comments.php') {
		wp_safe_redirect(site_url());
		exit;
	}

	foreach (get_post_types() as $post_type) {
		if (post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}

	add_filter('comments_open', '__return_false', 20, 2);
	add_filter('pings_open', '__return_false', 20, 2);
	add_filter('comments_array', '__return_empty_array', 10, 2);

	if (is_admin()) {
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
		remove_menu_page('edit-comments.php');
	}

	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}

// admin notice - php error

function bc_admin_notice_error() {
	$e = error_get_last();

	if ($e) {
		echo '<div class="notice notice-error is-dismissible">';
			echo '<pre>';
				print_r($e);
			echo '</pre>';
		echo '</div>';
		echo '<style>.php-error #adminmenuback,.php-error #adminmenuwrap{margin-top:0;}</style>';
	}
}

//     ▄████████     ▄█    █▄      ▄██████▄      ▄████████      ███      
//    ███    ███    ███    ███    ███    ███    ███    ███  ▀█████████▄  
//    ███    █▀     ███    ███    ███    ███    ███    ███     ▀███▀▀██  
//    ███          ▄███▄▄▄▄███▄▄  ███    ███   ▄███▄▄▄▄██▀      ███   ▀  
//  ▀███████████  ▀▀███▀▀▀▀███▀   ███    ███  ▀▀███▀▀▀▀▀        ███      
//           ███    ███    ███    ███    ███  ▀███████████      ███      
//     ▄█    ███    ███    ███    ███    ███    ███    ███      ███      
//   ▄████████▀     ███    █▀      ▀██████▀     ███    ███     ▄████▀

//   ▄████████   ▄██████▄   ████████▄      ▄████████     ▄████████  
//  ███    ███  ███    ███  ███   ▀███    ███    ███    ███    ███  
//  ███    █▀   ███    ███  ███    ███    ███    █▀     ███    █▀   
//  ███         ███    ███  ███    ███   ▄███▄▄▄        ███         
//  ███         ███    ███  ███    ███  ▀▀███▀▀▀      ▀███████████  
//  ███    █▄   ███    ███  ███    ███    ███    █▄            ███  
//  ███    ███  ███    ███  ███   ▄███    ███    ███     ▄█    ███  
//  ████████▀    ▀██████▀   ████████▀     ██████████   ▄████████▀

// lorem ipsum shortcode

function bc_lorem_shortcode($atts = [], $content = null, $tag = '') {
	$count = $content;
	$words = explode(' ', _BC['bc_random_text']);
	$text = '';
	$first = 1;

	for ($p = 0; $p < $count; $p++) {
		if ($p != 0) {
			$text .= '<p>';
		}
		if ($p == 0) {
			for ($l = 0; $l < 5; $l++) {
				$text .= (($l == 0) ? ucwords($words[$l]) : $words[$l]) . ' ';
			}
		}
		for ($s = 0; $s < rand(4, 8); $s++) {
			for ($w = 0; $w < rand(10, 20); $w++) {
				$word = $words[rand(0, count($words) - 1)];
				$text .= (!$first && $w == 0) ? ucwords($word) : $word;
				$text .= (rand(0, 100) < 10) ? ', ' : ' ';
			}
			$text = rtrim($text, ', ') . '. ';
			$first = 0;
		}
		if ($p < ($count - 1)) {
			$text .= '</p>';
		}
	}

	return $text;
}

// toc shortcode

function bc_toc_render($content, $post) {
	$html = '<div id="toc-' . $post->post_name . '" class="toc">';
		$html .= '<div class="toc-title"><p>Table of Contents</p></div>';

	$dom = new DOMDocument();
	libxml_use_internal_errors(true);
	if (!$dom->loadHTML('<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body id="BCTOC">' . $content . '</body></html>')) {
		return 'parse error';
	}
	libxml_clear_errors();

	$xpath = new DOMXPath($dom);

	$headings = $xpath->query('//h1|//h2|//h3|//h4|//h5|//h6');

	if (!empty($headings)) {
		foreach ($headings as $heading) {
			$id = sanitize_title($heading->textContent);
			$tag = $heading->tagName;
			$html .= '<' . $tag . ' class="toc-heading"><a href="#' . $id . '">' . $heading->textContent . '</a></' . $tag . '>';
			//$html .= '<p>' . $tag . '</p>';
		}
	}

	return $html . '</div>';
}

function bc_toc_shortcode($atts = [], $content = null, $tag = '') {
	global $bc_page_content, $post;

	return bc_toc_render($bc_page_content, $post);
}

function bc_fetch_page_content() {
	global $post, $bc_page_content;

	if (is_singular('page')) {
		$page = get_post($post->ID);

		$bc_page_content = apply_filters('the_content', $page->post_content);
	}
}

function bc_heading_ids($content) {
	$content = preg_replace_callback('/<h([1-6])(.*?)>(.*?)<\/h\1>/i', function ($matches) {
		$tag = strtolower($matches[1]);
		$attributes = $matches[2];
		$heading_text = strip_tags($matches[3]);
		$id = sanitize_title($heading_text);

		$original_class = '';
		if (preg_match('/class=[\'"]([^\'"]+)[\'"]/', $attributes, $class_matches)) {
			$original_class = $class_matches[1];
		}

		$original_id = null;
		if (preg_match('/id=[\'"]([^\'"]+)[\'"]/', $attributes, $id_matches)) {
			$original_id = $id_matches[1];
		}

		return '<h' . $tag . ' id="' . ($original_id ?? $id) . '"' . (($original_class == 'wp-block-heading') ? '' :  ' class="' . $original_class . '"') . '>' . $matches[3] . '</h' . $tag . '>';

	}, $content);

	return $content;
}

// form shortcode

function bc_form_shortcode($atts = [], $content = null, $tag = '') {
	$html = '';

	if (_BC['bc_form_active'] == 'yes') {
		$forms = json_decode(_BC['bc_form_json'], true);
		$index = ($content) ? $content : 0;
		$m = false;

		if (array_key_exists($index, $forms)) {
			$form = $forms[$index];

			$html .= '<div class="alert alert-success alert-dismissible fade text-center" role="alert" id="contact-msg"></div>';

			$html .= '<form id="' . $index . '-form">';

			$placeholders = $form['placeholders'] ?? false;

			foreach ($form['rows'] as $row) {
				$html .= '<div class="row">';

				foreach ($row['cols'] as $col) {
					$html .= '<div class="' . $col['class'] . '">';

					foreach ($col['fields'] as $field) {
						if ($field['type'] == 'title') {
							$html .= '<div class="mb-3">';
								$html .= '<div class="form-title-box">';
									$html .= '<p class="form-title-text">' . $field['label'] . '</p>';
								$html .= '</div>';
							$html .= '</div>';
						}
						else {
							$name = str_replace([' ', '?'], ['_', ''], strtolower($field['label']));
							$req = ($field['required'] == 'yes') ? ' required' : '';
							$label = $field['text'] ?? $field['label'];
							$placeholder = ($placeholders) ? $field['label'] : '';

							$html .= '<div class="mb-3">';
							$html .= '<label for="' . $name . '" class="form-label">' . $label . (($req) ? ' *' : '') . '</label>';

							switch ($field['type']) {
								case 'textarea': {
									$html .= '<textarea maxlength="2000" id="' . $name . '" class="form-control" name="' . $name . '" placeholder="' . $placeholder . '"' . $req . '></textarea>';
									break;
								}
								case 'checkbox': {
									$html .= '<br><input id="' . $name . '" type="checkbox" class="form-check-input" name="' . $name . '"' . $req . '>';
									break;
								}
								case 'select': {
									$html .= '<select id="' . $name . '" type="' . $field['type'] . '" class="form-control" name="' . $name . '"' . $req . '>';
										$html .= '<option value="">Please Select&hellip;</option>';
										if (isset($field['options'])) {
											foreach ($field['options'] as $value => $option) {
												$html .= '<option value="' . $value . '">' . $option . '</option>';
											}
										}
									$html .= '</select>';
									break;
								}
								default: {
									$html .= '<input id="' . $name . '" type="' . $field['type'] . '" class="form-control" name="' . $name . '" placeholder="' . $placeholder . '"' . $req . '>';
								}
							}

							if ($req) {
								$m = true;
							}
							$html .= '</div>';
						}
					}
					$html .= '</div>';
				}
				$html .= '</div>';
			}
			$html .= '<div class="mb-3">';
			$html .= '<input type="hidden" name="action" value="contact_form_action">';
			$html .= '<input type="hidden" name="form_id" value="' . $index . '">';
			$html .= wp_nonce_field('contact_form_action', '_bc_nonce', true, false);
			$html .= '<input class="btn btn-primary" id="contact-button" type="submit" value="Send">';
			$html .= '</div>';

			if ($m) {
				$html .= '<p class="req-field">* <i>indicates a required field</i></p>';
			}
			$html .= '</form>';

			$url = admin_url('admin-ajax.php');

			$html .= '<script>document.getElementById("' . $index . '-form").addEventListener("submit",function(event){
			event.preventDefault();if(this.checkValidity()){let m=$("#contact-msg");m.text("...");let f=$("#' . $index . '-form");$.ajax({type:"POST",url:"' . $url . '",data:f.serialize(),dataType:"json",success:function(res){if(res.status=="success"){f[0].reset();}m.text(res.message).addClass("show");}});}else{alert("form error");}});</script>';
		}
	}

	return $html;
}

// contact form post handler

function bc_contact_form_callback() {
	if (!wp_verify_nonce($_POST['_bc_nonce'], $_POST['action'])) {
		$error = 'verification error, try again.';
	}
	else {
		$index = $_POST['form_id'];
		$forms = json_decode(_BC['bc_form_json'], true);
		$message = 'IP address: ' . $_SERVER['REMOTE_ADDR'] . "\n\n";

		if (array_key_exists($index, $forms)) {
			$form = $forms[$index];
			foreach ($form['rows'] as $row) {
				foreach ($row['cols'] as $col) {
					foreach ($col['fields'] as $field) {

						if ($field['type'] != 'title') {
							$sane = '';
							$name = str_replace([' ', '?'], ['_', ''], strtolower($field['label']));

							switch ($field['type']) {
								case 'email': {
									$sane = filter_var($_POST[$name], FILTER_SANITIZE_EMAIL);
									break;
								}
								case 'message': {
									$sane = stripslashes($_POST[$name]);
									break;
								}
								default: {
									$sane = filter_var($_POST[$name], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
								}
							}

							if ($sane) {
								$message .= $field['label'] . ': ';
								if (strlen($sane) > 50) {
									$message .= "\n\n" . $sane . "\n\n";
								}
								else {
									$message .= $sane . "\n";
								}
							}
						}
					}
				}
			}
		}

		$subject = 'A messsage from ' . get_option('blogname');
		$sendmsg = $form['success_msg'];
		$to = $form['send_to'];

		$parsed = parse_url(site_url());

		$header = 'From: ' . get_option('blogname') . ' <no-reply@' . $parsed['host'] . '>' . "\n";
		$header .= 'Reply-To: ' . $email . "\n";

		if (wp_mail($to, $subject, $message, $header)) {
			$status = 'success';
			$message = $sendmsg;
		}
		else {
			$status = 'failed';
			$message = 'error(s)';
		}
	}

	$json = [
		'status' => $status,
		'message' => $message
	];
	
	header('Content-Type: application/json');
	die(json_encode($json));
}

// htaccess stuff

function bc_output_htaccess($rules) {
	$plugin = _PLUGIN_BASIC_CLEAN;
	$new_rules = "\n# BEGIN {$plugin}\n<IfModule mod_rewrite.c>\nRewriteEngine On\nRewriteCond %{REQUEST_URI} ^/img [NC]\nRewriteRule /(.*) wp-content/plugins/{$plugin}/index.php?file=$1 [L]\nRewriteCond %{REQUEST_URI} ^/uploads [NC]\nRewriteRule /(.*) wp-content/plugins/{$plugin}/index.php?file=$1 [L]\n";

	if (_BC['bc_fa'] != 'none') {
		$new_rules .= "RewriteCond %{REQUEST_URI} ^/fonts [NC]\nRewriteRule /(.*) wp-content/plugins/{$plugin}/fonts/$1 [L]\n";
	}

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

//     ▄████████       ▄█     ▄████████  ▀████    ▐████▀  
//    ███    ███      ███    ███    ███    ███▌   ████▀   
//    ███    ███      ███    ███    ███     ███  ▐███     
//    ███    ███      ███    ███    ███     ▀███▄███▀     
//  ▀███████████      ███  ▀███████████     ████▀██▄      
//    ███    ███      ███    ███    ███    ▐███  ▀███     
//    ███    ███  █▄ ▄███    ███    ███   ▄███     ███▄   
//    ███    █▀   ▀▀▀▀▀▀     ███    █▀   ████       ███▄

function bc_ajax() {
	global $wpdb;

	$action = $_POST['action'];
	$response = [
		'status' => 'error',
		'message' => ''
	];

	if (!wp_verify_nonce($_REQUEST['nonce'], $action)) {
		$response['message'] = 'nonce verification failed';
	}
	else {
		// nonce verified

		switch($action) {
			case 'optimise_tables': {
				$sql = "OPTIMIZE TABLE " . $wpdb->prefix . "posts, " . $wpdb->prefix . "postmeta, " . $wpdb->prefix . "options;";
				$results = $wpdb->query($sql);

				$response['status'] = 'success';
				$response['message'] = 'tables optimised';

				break;
			}
			case 'clean_attachments': {
				$sql = "DELETE FROM " . $wpdb->prefix . "posts WHERE post_type = 'attachment' AND post_parent = 0;";
				$results = $wpdb->query($sql);

				$response['status'] = 'success';
				$response['message'] = 'attachments cleaned: ' . $results;

				break;
			}
			case 'clean_revisions': {
				$sql = "DELETE FROM " . $wpdb->prefix . "posts WHERE post_type = 'revision';";
				$results = $wpdb->query($sql);

				$response['status'] = 'success';
				$response['message'] = 'revisions cleaned: ' . $results;

				break;
			}
			case 'clean_transients': {
				$sql = "DELETE FROM " . $wpdb->prefix . "options WHERE option_name LIKE '_transient_%';";
				$results = $wpdb->query($sql);

				$response['status'] = 'success';
				$response['message'] = 'transients cleaned: ' . $results;

				break;
			}
			default: {
				$response['message'] = 'unsupported request';
			}
		}
	}

	echo json_encode($response);
	wp_die();
}


//   ▄█   ███▄▄▄▄▄     ▄█       ███      
//  ███   ███▀▀▀▀██▄  ███   ▀█████████▄  
//  ███▌  ███    ███  ███▌     ▀███▀▀██  
//  ███▌  ███    ███  ███▌      ███   ▀  
//  ███▌  ███    ███  ███▌      ███      
//  ███   ███    ███  ███       ███      
//  ███   ███    ███  ███       ███      
//  █▀     ▀█    █▀   █▀       ▄████▀

// oh the humanity

global $bc_page_content;

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
	add_filter('post_row_actions', 'bc_duplicate_post_link', 10, 2);
	add_filter('page_row_actions', 'bc_duplicate_post_link', 10, 2);
	add_filter('wp_img_tag_add_width_and_height_attr', 'bc_remove_img_width_height', 10, 4);
	add_filter('wp_img_tag_add_auto_sizes', '__return_false');
	remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('wp_robots', 'wp_robots_max_image_preview_large');
	add_action('widgets_init', 'bc_remove_recent_comments_style');
	add_action('admin_action_bc_duplicate_post_as_draft', 'bc_duplicate_post_as_draft');
	add_filter('wp_speculation_rules_configuration', '__return_null');
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

if ((!is_admin()) && (_BC['bc_cache'] != false)) {
	add_action('send_headers', 'bc_set_cache_control');
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

if (_BC['bc_logo'] != '') {
	add_action('login_head', 'bc_login_logo');
}

if ((_BC['bc_login'] != '') && (_BC['bc_path'] != '')) {
	new _bcLogin();
}

if (_BC['bc_gid'] != '') {
	add_action('wp_head', 'bc_google_code', 0);
}

if (_BC['bc_fa'] != 'none') {
	add_action('wp_head', 'bc_font_awesome', 0);
}

if (_BC['bc_mimes'] == 'yes') {
	add_filter('upload_mimes', 'bc_add_mime_types');
}

if (_BC['bc_unfiltered'] == 'yes') {
	add_filter('init', 'bc_unfiltered_upload');
}

if (_BC['bc_core_block'] == 'yes') {
	add_action('wp_footer', function() {
		wp_dequeue_style('core-block-supports');
	});
}

if (_BC['bc_cols'] == 'yes') {
	add_action('wp', 'bc_view_count');

	if (is_admin()) {
		add_action('manage_posts_custom_column', 'bc_custom_column_list', 5, 2);
		add_action('manage_pages_custom_column', 'bc_custom_column_list', 5, 2);
		add_action('pre_get_posts', 'bc_sort_custom_column_query');
		add_filter('manage_posts_columns', 'bc_column_list');
		add_filter('manage_pages_columns', 'bc_column_list');
		add_filter('manage_edit-post_sortable_columns', 'bc_set_posts_sortable_columns');
		add_filter('manage_edit-page_sortable_columns', 'bc_set_pages_sortable_columns');
		add_filter('attachment_fields_to_edit', 'bc_media_downloads', 10, 2);
		add_filter('attachment_fields_to_save', 'bc_media_downloads_save', 10, 2);
	}
}

if (_BC['bc_comments'] == 'no') {
	add_action('admin_init', 'bc_remove_commenting');
}

if (_BC['bc_htaccess'] == 'yes') {
	add_action('admin_init', 'bc_flush_htaccess');
	add_filter('mod_rewrite_rules', 'bc_output_htaccess');
}

if (_BC['bc_shortcode_lorem'] == 'yes') {
	add_shortcode('lorem', 'bc_lorem_shortcode');
}

if (_BC['bc_shortcode_toc'] == 'yes') {
	add_action('wp', 'bc_fetch_page_content');
	add_filter('the_content', 'bc_heading_ids', 99);
	add_shortcode('toc', 'bc_toc_shortcode');
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
	add_action('wp_ajax_contact_form_action', 'bc_contact_form_callback');
	add_action('wp_ajax_nopriv_contact_form_action', 'bc_contact_form_callback');
	add_shortcode('form', 'bc_form_shortcode');
}

if (_BC['bc_mail_log'] == 'yes') {
	add_action('wp_mail_failed', 'bc_mail_error', 10, 1);
}

if (_BC['bc_dashboard'] == 'yes') {
	add_action('wp_dashboard_setup', 'bc_remove_dashboard_widgets');
}

if (_BC['bc_debug'] == 'yes') {
	add_action('admin_notices', 'bc_admin_notice_error');
}

if (_BC['bc_cookies'] == 'yes') {
	add_action('wp_head', 'bc_cookie_scripts');
	add_action('wp_footer', 'bc_cookie_consent');
}

remove_action('shutdown', 'wp_ob_end_flush_all', 1);

// set up admin ajax
// menu, and then
// boot plugin

add_action('init', function() {
	if (is_admin()) {
		if (count(_AJAX_BASIC_CLEAN)) {
			foreach (_AJAX_BASIC_CLEAN as $ajax) {
				add_action('wp_ajax_' . $ajax, 'bc_ajax');
			}
		}

		new _bcMenu(_URL_BASIC_CLEAN);
	}
});

add_action('rest_api_init', function() {
	_bcSettings::args();
	$api = new _bcAPI();
	$api->add_routes();
});

// eof