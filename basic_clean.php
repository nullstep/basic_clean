<?php

/*
 * Plugin Name: basic_clean
 * Plugin URI: https://xayrin.com
 * Update URI: https://api.xayr.in/wp/basic_clean.json
 * Description: make it better
 * Author: nullstep
 * Author URI: https://nullstep.com
 * Version: 1.3.14
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

// cookie icon

define('_COOKIE_BASIC_CLEAN', '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M242.11 27.12c14.72-.82 29.55-.51 44.15 1.63 9.87 1.7 15.64 13.71 11.07 22.57-7.05 14.84-4.5 33.6 6.45 45.88 3.51 4.45 9.19 7.05 11.41 12.49 1.64 3.58 1.53 7.64.67 11.42-3.12 15.79-.04 32.78 8.71 46.33 12.12 19.53 35.38 31.58 58.37 29.71 5.66-.83 11.79.81 15.55 5.3 4.34 5.14 9.61 9.56 15.79 12.32 13.09 6.09 29.3 4.92 41.25-3.24 3.33-2.4 7.15-4.49 11.39-4.31 7.54-.11 14.54 5.85 15.65 13.31 6.79 43.4.87 88.76-17.15 128.85-15.33 34.4-39.32 64.89-69.12 87.92-31.28 24.36-69.01 40.36-108.3 45.77-49.5 7.06-101.25-2.66-144.7-27.42-29.83-16.85-55.8-40.48-75.4-68.57-20.83-29.75-34.42-64.53-39.16-100.54-4.72-35.3-1.2-71.7 10.48-105.36C59.2 122.56 104.18 73.13 160.54 47.51c25.6-11.79 53.43-18.71 81.57-20.39m-43.64 89.64c-5.8 1.44-10.55 6.4-11.68 12.28-2.17 8.98 5.07 18.51 14.2 19.15 9.11 1.11 17.85-7.03 17.45-16.18.13-9.92-10.39-18.07-19.97-15.25m33.94 65.68c-12.77 3.52-21.39 17.53-18.6 30.53 2.31 14.03 17.22 24.26 31.15 21.21 14.43-2.34 24.72-18.01 21-32.18-2.94-14.55-19.42-24.2-33.55-19.56m-96.94 47.21c-6.81 1.29-12.3 7.45-12.74 14.37-.99 8.77 6.59 17.14 15.34 17.3 8.88.56 17.06-7.52 16.58-16.4.01-9.55-9.84-17.51-19.18-15.27m123 63.94c-7.66 1.24-13.65 8.7-13.11 16.47.15 8.5 8.19 15.81 16.67 15.25 8.74-.18 16.2-8.59 15.24-17.31-.55-9.06-9.86-16.32-18.8-14.41m90.87.97c-8.49 2.62-15.4 9.75-17.7 18.33-3.26 11.1 1.78 23.87 11.71 29.78 10.65 6.9 25.97 4.51 34.1-5.2 7.57-8.47 8.68-21.87 2.57-31.45-6.07-10.22-19.4-15.21-30.68-11.46M190.4 347.58c-11.58 2.95-20.23 14.42-19.71 26.39.07 11.91 9.15 22.93 20.79 25.37 9.92 2.34 20.95-1.68 27.04-9.86 5.89-7.57 7.13-18.41 3.1-27.12-5-11.66-19.01-18.31-31.22-14.78Z"/></svg>');

// cookie box styling

define('_COOKIE_STYLES_BASIC_CLEAN', '#cookie-box.bar{position:fixed;bottom:0;width:100%;background:rgb(0 0 0 / .4);color:#fff;text-align:center;z-index:9999;div{padding:15px;max-width:75%;margin-inline:auto}}#cookie-box.box{position:fixed;bottom:30px;right:30px;width:400px;border-radius:12px;background:rgb(0 0 0 / .4);color:#fff;text-align:center;z-index:9999;div{padding:15px}}#cookie-box.modal{position:fixed;display:flex;justify-content:center;align-items:center;top:0;left:0;bottom:0;right:0;background:rgb(0 0 0 / .8);z-index:9999;div{padding:15px;max-width:400px;border-radius:12px;background:rgb(255 255 255 / .7);color:#222;text-align:center}}#cookie-box{button{padding:5px 20px;margin:5px 10px;border:0;border-radius:99px;color:#fff}button.yes{background:var(--primary-colour,#58cf39)}button.no{background:#d90000}button:hover{box-shadow:inset 0 0 0 10em rgb(255 255 255 / .3)}}#cookie-icon{position:fixed;bottom:30px;right:30px;svg{width:48px;height:48px;fill:#222222}svg:hover{fill:var(--primary-colour,#666666)}}');

// basic_clean args

define('_ARGS_BASIC_CLEAN', [
	'bc_analytics' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_ignore' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_duplicate' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_position' => [
		'type' => 'string',
		'default' => 'yes'
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
	'bc_hysteria' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_backtrace' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_wp_options' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_pw_notify' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_user_notify' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_shortcode_lorem' => [
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
	'bc_cookie_style' => [
		'type' => 'string',
		'default' => 'bar'
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
	'bc_folders' => [
		'type' => 'string',
		'default' => 'no'
	],
	'bc_form_json' => [
		'type' => 'string',
		'default' => json_encode(
			json_decode(trim(_FORM_BASIC_CLEAN)),
			JSON_PRETTY_PRINT
		)
	],
	'bc_form_db' => [
		'type' => 'string',
		'default' => 'no'
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
	],
	'bc_email_html' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_smtp_host' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_smtp_port' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_smtp_username' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_smtp_password' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_smtp_from' => [
		'type' => 'string',
		'default' => ''
	],
	'bc_smtp_log' => [
		'type' => 'string',
		'default' => 'no'
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
		'columns' => 3,
		'fields' => [
			'bc_analytics' => [
				'label' => 'Analytics/Tracking Code',
				'type' => 'code'
			],
			'bc_ignore' => [
				'label' => 'IP Addresses to Ignore for Page View Count',
				'type' => 'text'
			],
			'bc_random_text' => [
				'label' => 'Text Generator Source',
				'type' => 'text'
			],
			'bc_indent' => [
				'label' => 'Tab Indents',
				'type' => 'input'
			],
			'bc_cookies' => [
				'label' => 'Cookie Consent Active',
				'type' => 'check'
			],
			'bc_cookie_style' => [
				'label' => 'Cookie Consent Style',
				'type' => 'select',
				'values' => [
					'bar' => 'Bar',
					'box' => 'Box',
					'modal' => 'Modal'
				]
			],
			'bc_position' => [
				'label' => 'Show in Main Admin Menu',
				'type' => 'check'
			],
			'bc_duplicate' => [
				'label' => 'Add "Duplicate Post" feature',
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
			'bc_hysteria' => [
				'label' => 'Stop WP Hysterical Health Warnings',
				'type' => 'check'
			],
			'bc_backtrace' => [
				'label' => 'Enable Custom PHP Backtrace',
				'type' => 'check'
			],
			'bc_wp_options' => [
				'label' => 'Enable wp_options Editor Submenu',
				'type' => 'check'
			],
			'bc_pw_notify' => [
				'label' => 'Turn off user password/email changed emails to admin',
				'type' => 'check'
			],
			'bc_user_notify' => [
				'label' => 'Turn off new user registration emails to admin',
				'type' => 'check'
			],
			'bc_shortcode_lorem' => [
				'label' => 'Lorem Shortcode Active',
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
			'bc_folders' => [
				'label' => 'Use Media Folders',
				'type' => 'check'
			],
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
			'bc_form_db' => [
				'label' => 'Store Form Submissions',
				'type' => 'check'
			],
			'bc_mail_log' => [
				'label' => 'Show Mail Errors',
				'type' => 'check'
			]
		]
	],
	'email' => [
		'label' => 'Email',
		'columns' => 1,
		'fields' => [
			'bc_email_html' => [
				'label' => 'HTML Email Template',
				'type' => 'code'
			]
		]
	],
	'smtp' => [
		'label' => 'SMTP',
		'columns' => 4,
		'fields' => [
			'bc_smtp_host' => [
				'label' => 'SMTP Host',
				'type' => 'input'
			],
			'bc_smtp_port' => [
				'label' => 'SMTP Port',
				'type' => 'input'
			],
			'bc_smtp_username' => [
				'label' => 'SMTP Username',
				'type' => 'input'
			],
			'bc_smtp_password' => [
				'label' => 'SMTP Password',
				'type' => 'input'
			],
			'bc_smtp_from' => [
				'label' => 'From',
				'type' => 'input'
			],
			'bc_smtp_log' => [
				'label' => 'Log Sending',
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
			],
			'folders' => [
				[
					'term_id' => -1,
					'term_name' => 'All Folders'
				],
				[
					'term_id' => 0,
					'term_name' => 'Uncategorized'
				]
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


//  ███    █▄      ▄███████▄  ████████▄      ▄████████      ███         ▄████████  
//  ███    ███    ███    ███  ███   ▀███    ███    ███  ▀█████████▄    ███    ███  
//  ███    ███    ███    ███  ███    ███    ███    ███     ▀███▀▀██    ███    █▀   
//  ███    ███    ███    ███  ███    ███    ███    ███      ███   ▀   ▄███▄▄▄      
//  ███    ███  ▀█████████▀   ███    ███  ▀███████████      ███      ▀▀███▀▀▀      
//  ███    ███    ███         ███    ███    ███    ███      ███        ███    █▄   
//  ███    ███    ███         ███   ▄███    ███    ███      ███        ███    ███  
//  ████████▀    ▄████▀       ████████▀     ███    █▀      ▄████▀      ██████████

if (!class_exists('BU')) {
	class BU {
	    private $plugin_file;
	    private $plugin_basename;
	    private $plugin_dir;
	    private $current_version;
	    private $github_username;
	    private $github_repo;
	    private $access_token;
	    private $cache_key;
	    private $cache_ttl = 43200;

	    public function __construct($plugin_file, $github_username, $github_repo, $access_token = '') {
	        $this->plugin_file = $plugin_file;
	        $this->github_username = $github_username;
	        $this->github_repo = $github_repo;
	        $this->access_token = $access_token;

	        $this->plugin_basename = plugin_basename($plugin_file);
	        $this->plugin_dir = dirname($this->plugin_basename);
	        $this->cache_key = 'ghu_' . md5($this->plugin_basename);

	        $headers = get_file_data($plugin_file, ['Version' => 'Version']);
	        $this->current_version = $headers['Version'] ?? '0.0.0';

	        add_filter('plugins_api', [$this, 'plugin_popup_info'], 20, 3);
	        add_filter('site_transient_update_plugins', [$this, 'push_update_to_transient']);
	        add_filter('upgrader_install_package_result', [$this, 'fix_directory_name'], 10, 2);
	        add_action('upgrader_process_complete', [$this, 'clear_cache'], 10, 2);
	    }

	    private function get_latest_release() {
	        $cached = get_transient($this->cache_key);

	        if (false !== $cached) {
	            return $cached;
	        }

	        $api_url = sprintf('https://api.github.com/repos/%s/%s/releases/latest', $this->github_username, $this->github_repo);

	        $request_args = [
	            'timeout' => 15,
	            'headers' => [
	                'Accept' => 'application/vnd.github+json',
	                'User-Agent' => 'WordPress/' . get_bloginfo( 'version' )
	            ]
	        ];

	        if (!empty($this->access_token)) {
	            $request_args['headers']['Authorization'] = 'Bearer ' . $this->access_token;
	        }

	        $response = wp_remote_get($api_url, $request_args);

	        if (is_wp_error( $response ) || 200 !== (int) wp_remote_retrieve_response_code($response)) {
	            return false;
	        }

	        $release = json_decode(wp_remote_retrieve_body($response));

	        if (empty($release) || ! isset($release->tag_name)) {
	            return false;
	        }

	        set_transient($this->cache_key, $release, $this->cache_ttl);

	        return $release;
	    }

	    private function get_download_url($release) {
	        if (!empty($release->assets)) {
	            foreach ($release->assets as $asset) {
	                if (isset( $asset->content_type ) && str_contains($asset->content_type, 'zip')) {
	                    return !empty($this->access_token) ? $asset->url : $asset->browser_download_url;
	                }
	            }
	        }

	        return $release->zipball_url ?? '';
	    }

	    private function sanitise_version($tag) {
	        return ltrim($tag, 'vV');
	    }

	    public function push_update_to_transient($transient) {
	        if (empty($transient->checked)) {
	            return $transient;
	        }

	        $release = $this->get_latest_release();

	        if (!$release) {
	            return $transient;
	        }

	        $latest_version = $this->sanitise_version($release->tag_name);

	        if (!version_compare($this->current_version, $latest_version, '<')) {
	            return $transient;
	        }

	        $download_url = $this->get_download_url($release);

	        if (empty($download_url)) {
	            return $transient;
	        }

	        $update_data = (object) [
	            'id' => sprintf(
	                'https://github.com/%s/%s',
	                $this->github_username,
	                $this->github_repo
	            ),
	            'slug' => $this->plugin_dir,
	            'plugin' => $this->plugin_basename,
	            'new_version' => $latest_version,
	            'url' => sprintf(
	                'https://github.com/%s/%s',
	                $this->github_username,
	                $this->github_repo
	            ),
	            'package' => $download_url,
	            'tested' => '',
	            'requires' => '',
	            'requires_php'=> ''
	        ];

	        $transient->response[$this->plugin_basename] = $update_data;

	        return $transient;
	    }

	    public function plugin_popup_info($result, $action, $args) {
	        if ('plugin_information' !== $action) {
	            return $result;
	        }

	        if (empty($args->slug) || $args->slug !== $this->plugin_dir) {
	            return $result;
	        }

	        $release = $this->get_latest_release();

	        if (!$release) {
	            return $result;
	        }

	        $latest_version = $this->sanitise_version($release->tag_name);
	        $changelog = !empty($release->body) ? '<pre>' . esc_html($release->body) . '</pre>' : '<p>See the <a href="' . esc_url($release->html_url) . '" target="_blank">release notes on GitHub</a>.</p>';

	        $plugin_data = get_file_data($this->plugin_file, [
	            'name' => 'Plugin Name',
	            'plugin_uri' => 'Plugin URI',
	            'author_name' => 'Author',
	            'author_uri' => 'Author URI',
	            'requires' => 'Requires at least',
	            'requires_php'=> 'Requires PHP'
	        ]);

	        $author_url = esc_url($plugin_data['author_uri'] ?? '#');
	        $author_name = esc_html($plugin_data['author_name'] ?? '');

	        $info = new stdClass();
	        $info->name = $plugin_data['name'] ?? $this->plugin_dir;
	        $info->slug = $this->plugin_dir;
	        $info->version = $latest_version;
	        $info->author = sprintf('<a href="%s">%s</a>', $author_url, $author_name);
	        $info->homepage = $plugin_data['plugin_uri'] ?? sprintf('https://github.com/%s/%s', $this->github_username, $this->github_repo);
	        $info->requires = $plugin_data['requires'] ?? '';
	        $info->requires_php = $plugin_data['requires_php'] ?? '';
	        $info->last_updated = !empty($release->published_at) ? date('Y-m-d', strtotime($release->published_at)) : '';
	        $info->download_link = $this->get_download_url($release);
	        $info->trunk = $info->download_link;
	        $info->sections = [
	            'changelog' => $changelog
	        ];

	        return $info;
	    }

	    public function fix_directory_name($result, $hook_extra) {
	        if (empty($hook_extra['plugin']) || $hook_extra['plugin'] !== $this->plugin_basename) {
	            return $result;
	        }

	        $new_path = $result['destination'] ?? '';
	        $plugins_root = $result['local_destination'] ?? WP_PLUGIN_DIR;
	        $correct_path = trailingslashit($plugins_root) . $this->plugin_dir;

	        if (empty($new_path) || $new_path === $correct_path) {
	            return $result;
	        }

	        if ($new_path !== $correct_path) {
	            move_dir($new_path, $correct_path, true);
	        }

	        $result['destination'] = $correct_path;
	        $result['destination_name'] = $this->plugin_dir;
	        $result['remote_destination']= $correct_path;

	        return $result;
	    }

	    public function clear_cache(WP_Upgrader $upgrader, $options) {
	        if ('update' === ($options['action'] ?? '') && 'plugin' === ($options['type'] ?? '')) {
	            delete_transient($this->cache_key);
	        }
	    }

	    public function set_cache_ttl($seconds) {
	        $this->cache_ttl = $seconds;
	        return $this;
	    }

	    public function flush_cache() {
	        delete_transient($this->cache_key);
	        return $this;
	    }
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


//  ███▄▄▄▄▄       ▄████████   ▄█    █▄   
//  ███▀▀▀▀██▄    ███    ███  ███    ███  
//  ███    ███    ███    ███  ███    ███  
//  ███    ███    ███    ███  ███    ███  
//  ███    ███  ▀███████████  ███    ███  
//  ███    ███    ███    ███  ▀██    ███  
//  ███    ███    ███    ███   ▀██  ██▀   
//   ▀█    █▀     ███    █▀     ▀████▀

function bc_export_nav($location) {
    if ($location === '') {
        return false;
    }

    $locations = get_nav_menu_locations();

    if (empty($locations[$location])) {
        return false;
    }

    $menu_id = (int) $locations[$location];
    $menu = wp_get_nav_menu_object($menu_id);

    if (!$menu) {
        return false;
    }

    $items = wp_get_nav_menu_items($menu_id, [
        'post_status' => 'any',
        'output' => ARRAY_A
    ]);

    if ($items === false) {
        return false;
    }

    $export_items = [];

    foreach ($items as $item) {
        $classes = [];

        if (isset($item->classes)) {
            if (is_array($item->classes)) {
                $classes = array_values(array_filter(array_map('strval', $item->classes)));
            }
            elseif (is_string($item->classes) && $item->classes !== '') {
                $classes = preg_split('/\s+/', trim($item->classes));
            }
        }

        $export_items[] = [
            'export_id' => (int) $item->ID,
            'title' => (string) $item->title,
            'menu_order' => (int) $item->menu_order,
            'parent_export_id' => (int) $item->menu_item_parent,
            'type' => (string) $item->type,
            'object' => isset($item->object) ? (string) $item->object : '',
            'object_id' => isset($item->object_id) ? (int) $item->object_id : 0,
            'url' => isset($item->url) ? (string) $item->url : '',
            'target' => isset($item->target) ? (string) $item->target : '',
            'attr_title' => isset($item->attr_title) ? (string) $item->attr_title : '',
            'description' => isset($item->description) ? (string) $item->description : '',
            'xfn' => isset($item->xfn) ? (string) $item->xfn : '',
            'classes' => $classes,
            'status' => isset($item->post_status) ? (string) $item->post_status : 'publish'
        ];
    }

    $payload = [
        'format' => 'wp-nav-menu-export-v1',
        'menu' => [
            'name' => (string) $menu->name,
            'slug' => (string) $menu->slug,
            'term_id' => (int) $menu->term_id,
            'location' => (string) $location,
            'exported' => current_time('mysql'),
            'item_count' => count($export_items)
        ],
        'items'  => $export_items
    ];

    return wp_json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}

function bc_import_nav($json, $location, $menu_name = null, $replace_existing_location_menu = false) {
    if (!is_string($json) || trim($json) === '') {
        return false;
    }

    if (!is_string($location) || $location === '') {
        return false;
    }

    $registered_locations = get_registered_nav_menus();

    if (!isset($registered_locations[$location])) {
        return false;
    }

    $data = json_decode($json, true);

    if (!is_array($data) || empty($data['items']) || !is_array($data['items'])) {
        return false;
    }

    $source_name = '';

    if (!empty($data['menu']['name'])) {
        $source_name = (string) $data['menu']['name'];
    }

    $menu_id = 0;
    $locations = get_nav_menu_locations();

    if ($replace_existing_location_menu && !empty($locations[$location])) {
        $menu_id = (int) $locations[$location];

        $existing_items = wp_get_nav_menu_items($menu_id, [
            'post_status' => 'any',
            'output' => ARRAY_A
        ]);

        if (is_array($existing_items)) {
            foreach ($existing_items as $existing_item) {
                wp_delete_post((int) $existing_item->ID, true);
            }
        }
    }
    else {
        $final_menu_name = $menu_name ? $menu_name : ($source_name ? $source_name : 'Imported Menu');

        if (!$menu_name && $location) {
            $final_menu_name .= ' (' . $location . ')';
        }

        $menu_id = wp_create_nav_menu(wp_slash($final_menu_name));

        if (is_wp_error($menu_id)) {
            return false;
        }
    }

    if (!$menu_id) {
        return false;
    }

    usort($data['items'], function($a, $b) {
        $ao = isset($a['menu_order']) ? (int) $a['menu_order'] : 0;
        $bo = isset($b['menu_order']) ? (int) $b['menu_order'] : 0;
        return $ao <=> $bo;
    });

    $id_map = [];

    foreach ($data['items'] as $item) {
        $classes = [];

        if (isset($item['classes'])) {
            if (is_array($item['classes'])) {
                $classes = array_values(array_filter(array_map('strval', $item['classes'])));
            }
            elseif (is_string($item['classes']) && trim($item['classes']) !== '') {
                $classes = preg_split('/\s+/', trim($item['classes']));
            }
        }

        $type = isset($item['type']) ? (string) $item['type'] : 'custom';
        $object = isset($item['object']) ? (string) $item['object'] : '';
        $object_id = isset($item['object_id']) ? (int) $item['object_id'] : 0;
        $url = isset($item['url']) ? (string) $item['url'] : '';
        $title = isset($item['title']) ? (string) $item['title'] : '';
        $status = !empty($item['status']) ? (string) $item['status'] : 'publish';
        $position = isset($item['menu_order']) ? (int) $item['menu_order'] : 0;

        $can_use_original_reference = false;

        switch ($type) {
			case 'post_type': {
				if ($object_id > 0 && get_post($object_id)) {
					$can_use_original_reference = true;
				}

				break;
			}
			case 'taxonomy': {
				if ($object_id > 0 && term_exists($object_id, $object)) {
					$can_use_original_reference = true;
				}

				break;
			}
			case 'post_type_archive':
			case 'custom': {
				$can_use_original_reference = true;
				break;
			}
        }

        if (!$can_use_original_reference) {
            $type = 'custom';
            $object = 'custom';
            $object_id = 0;
        }

        $new_item_id = wp_update_nav_menu_item( $menu_id, 0, [
            'menu-item-title' => $title,
            'menu-item-position' => $position,
            'menu-item-parent-id' => 0,
            'menu-item-type' => $type,
            'menu-item-object' => $object,
            'menu-item-object-id' => $object_id,
            'menu-item-url' => $url,
            'menu-item-target' => isset($item['target']) ? (string) $item['target'] : '',
            'menu-item-attr-title' => isset($item['attr_title']) ? (string) $item['attr_title'] : '',
            'menu-item-description' => isset($item['description']) ? (string) $item['description'] : '',
            'menu-item-classes' => implode(' ', $classes),
            'menu-item-xfn' => isset($item['xfn']) ? (string) $item['xfn'] : '',
            'menu-item-status' => $status
        ]);

        if (is_wp_error($new_item_id)) {
            return false;
        }

        if (isset($item['export_id'])) {
            $id_map[(int) $item['export_id']] = (int) $new_item_id;
        }
    }

    foreach ($data['items'] as $item) {
        $old_id = isset($item['export_id']) ? (int) $item['export_id'] : 0;
        $old_parent = isset($item['parent_export_id']) ? (int) $item['parent_export_id'] : 0;

        if (!$old_id || empty($id_map[$old_id])) {
            continue;
        }

        $new_id = $id_map[$old_id];
        $new_parent_id = ($old_parent && ! empty($id_map[$old_parent])) ? $id_map[$old_parent] : 0;

        $classes = [];

        if (isset($item['classes'])) {
            if (is_array($item['classes'])) {
                $classes = array_values(array_filter(array_map('strval', $item['classes'])));
            }
            elseif (is_string($item['classes']) && trim($item['classes']) !== '') {
                $classes = preg_split('/\s+/', trim($item['classes']));
            }
        }

        $type = isset($item['type']) ? (string) $item['type'] : 'custom';
        $object = isset($item['object']) ? (string) $item['object'] : '';
        $object_id = isset($item['object_id']) ? (int) $item['object_id'] : 0;

        $can_use_original_reference = false;

        switch ($type) {
			case 'post_type': {
				if ($object_id > 0 && get_post($object_id)) {
					$can_use_original_reference = true;
				}

				break;
			}
			case 'taxonomy': {
				if ($object_id > 0 && term_exists($object_id, $object)) {
					$can_use_original_reference = true;
				}

				break;
			}
			case 'post_type_archive':
			case 'custom': {
				$can_use_original_reference = true;
				break;
			}
        }

        if (!$can_use_original_reference) {
            $type = 'custom';
            $object = 'custom';
            $object_id = 0;
        }

        $updated = wp_update_nav_menu_item( $menu_id, $new_id, [
            'menu-item-title' => isset($item['title']) ? (string) $item['title'] : '',
            'menu-item-position' => isset($item['menu_order']) ? (int) $item['menu_order'] : 0,
            'menu-item-parent-id' => $new_parent_id,
            'menu-item-type' => $type,
            'menu-item-object' => $object,
            'menu-item-object-id' => $object_id,
            'menu-item-url' => isset($item['url']) ? (string) $item['url'] : '',
            'menu-item-target' => isset($item['target']) ? (string) $item['target'] : '',
            'menu-item-attr-title' => isset($item['attr_title']) ? (string) $item['attr_title'] : '',
            'menu-item-description' => isset($item['description']) ? (string) $item['description'] : '',
            'menu-item-classes' => implode(' ', $classes),
            'menu-item-xfn' => isset($item['xfn']) ? (string) $item['xfn'] : '',
            'menu-item-status' => ! empty($item['status']) ? (string) $item['status'] : 'publish'
        ]);

        if (is_wp_error($updated)) {
            return false;
        }
    }

    $locations = get_nav_menu_locations();
    $locations[$location] = (int) $menu_id;
    set_theme_mod('nav_menu_locations', $locations);

    return [
        'success' => true,
        'menu_id' => (int) $menu_id,
        'location' => (string) $location,
        'menu_name' => wp_get_nav_menu_object( $menu_id )->name,
    ];
}



//   ▄████████   ▄██████▄   ████████▄      ▄████████  
//  ███    ███  ███    ███  ███   ▀███    ███    ███  
//  ███    █▀   ███    ███  ███    ███    ███    █▀   
//  ███         ███    ███  ███    ███   ▄███▄▄▄      
//  ███         ███    ███  ███    ███  ▀▀███▀▀▀      
//  ███    █▄   ███    ███  ███    ███    ███    █▄   
//  ███    ███  ███    ███  ███   ▄███    ███    ███  
//  ████████▀    ▀██████▀   ████████▀     ██████████

// plugin init

function bc_init() {
	if (_BC['bc_form_db'] == 'yes') {
		register_post_type('form_log', [
			'labels' => [
				'name' => 'Form Log',
				'singular_name' => 'Form Log',
				'not_found' => 'No Form Logs found'
			],
			'public' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => false,
			'show_in_rest' => false,
			'show_in_admin_bar' => false,
			'publicly_queryable' => false,
			'hierarchical' => false,
			'exclude_from_search' => false,
			'capability_type' => 'post',
			'capabilities' => [
				'create_posts' => false
			],
			'map_meta_cap' => true,
			'menu_position' => 5,
			'menu_icon' => 'dashicons-book'
		]);
	}
}

// creates a random password of $count length
// avoiding ambigious characters like 1Il etc.

function bc_passwd($count) {
	$chars = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
	$nums = '23456789';
	$pass = '';

	for ($x = 0; $x < $count; $x++) {
		$type = random_int(0, 2);
		if ($type == 2) {
			$pass .= $nums[random_int(0, strlen($nums) - 1)];
		}
		else {
			$pass .= $chars[random_int(0, strlen($chars) - 1)];
		}
	}

	return $pass;
}

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
			echo "\t" . '<link rel="stylesheet" href="/fonts/fontawesome.min.css">' . "\n";

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
	echo '<style>' . _COOKIE_STYLES_BASIC_CLEAN . '</style>' . "\n";

	if ($consent == 'yes') {
		echo _BC['bc_analytics'] . "\n";
	}
	else {
		echo "\t" . '<!-- no consent -->' . "\n";
	}
}

function bc_cookie_consent() {
	$class = _BC['bc_cookie_style'];

	if (!isset($_COOKIE['user_consent'])) {
		$text = apply_filters('bc_cookie_text', '<p>This site uses cookies. Here is our <a href="/privacy-policy">privacy/cookie policy</a>. This explains the difference between essential and non-essential cookies, and lists the non-essential ones and their uses. Would you like to allow non-essential cookies on this site? You can change your mind by clicking the cookie icon in the bottom right corner of the page any time.</p>');
		$cookie = <<<HTML
	<div id="cookie-box" class="{$class}">
		<div>
			{$text}
			<button class="yes" onclick="bcc('yes')">Yes</button>
			<button class="no" onclick="bcc('no')">No</button>
		</div>
	</div>
	<script>
		function bcc(c) {
			document.cookie = 'user_consent=' + c + '; path=/; max-age=' + (31536000) + ';';
			location.reload();
		}
	</script>
HTML;
	}
	else {
		$icon = apply_filters('bc_cookie_icon', _COOKIE_BASIC_CLEAN);
		$cookie = <<<HTML
	<div id="cookie-icon">
		<a href="#" onclick="bcc()">{$icon}</a>
	</div>
	<script>
		function bcc() {
			document.cookie = 'user_consent=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC;';
			location.reload();
		}
	</script>
HTML;
	}

	echo $cookie;
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

	if (_BC['bc_folders'] == 'yes') {
		wp_register_script('js-footer', '', ['jquery', 'media-editor'], '', true);
		wp_enqueue_script('js-footer');

		// add in our folder panel to the media modal

		$js = <<<JS
		jQuery(document).ready(function($) {
			Window.bwpf = function() {
				var f = $('#folder-column');
				var h = $('<h1>Folders</h1>').css({
					'display': 'inline-block',
					'margin-right': '5px',
					'font-size': '23px',
					'font-weight': 400,
					'padding': '9px 0 4px'
				});
				f.append(h);
				var t = $('<div class="media-toolbar wp-filter"></div>').css({
					'margin-top': '3px',
					'height': '54px'
				});
				f.append(t);
			};

			if (typeof wp !== 'undefined' && wp.media) {
				wp.media.view.Modal.prototype.on('open', function() {
					setTimeout(function() {
						var f = $('.media-modal-content');
						if (!f.find('#folder-column').length && !f.find('.edit-attachment-frame').length) {
							var c = $('<div id="folder-column"></div>').css({
								'width': '160px',
								'background': '#f1f1f1',
								'padding-inline': '10px',
								'position': 'absolute',
								'top': 0,
								'bottom': 0,
								'left': 0,
								'z-index': 1000,
								'overflow-y': 'auto',
								'border-right': '1px solid #dcdcde'
							});

							f.append(c);
							$('.media-frame').css({
								'margin-left': '180px',
								'width': 'calc(100% - 180px)'
							});

							Window.bwpf();
						}					
					}, 100);
				});
			}
		});
JS;

		wp_add_inline_script('js-footer', $js);

		// add in folder panel for upload page

		if ($screen->base == 'upload') {
			$js = <<<JS
			jQuery(document).ready(function($) {
				var gl = setInterval(function() {
					var gw = $('.wp-filter');

					if (gw.length && !$('#wpcontent').hasClass('has-folder-column')) {
						$('#wpcontent').addClass('has-folder-column');
						$('#wpcontent').css('position', 'relative');

						var c = $('<div id="folder-column"></div>').css({
							'width': '160px',
							'background': '#f1f1f1',
							'padding-inline': '10px',
							'position': 'absolute',
							'top': 0,
							'bottom': 0,
							'left': 0,
							'z-index': 10,
							'overflow-y': 'auto'
						});

						$('#wpcontent').prepend(c);

						$('#wpbody-content').css({
							'margin-left': '180px',
							'width': 'calc(100% - 180px)'
						});

						clearInterval(gl);
						Window.bwpf();
					}
				}, 200);
			});
JS;

			wp_add_inline_script('js-footer', $js);
		}
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

	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
	remove_menu_page('edit-comments.php');

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

// stop wp whining about stupid stuff

function bc_remove_hysterical_checks($tests) {
	unset($tests['direct']['php_sessions']);
	unset($tests['direct']['rest_availability']);
	unset($tests['direct']['php_version']);
	unset($tests['direct']['php_extensions']);
	unset($tests['direct']['php_default_timezone']);
	unset($tests['direct']['php_sessions']);
	unset($tests['direct']['sbi_test_check_errors']);
	unset($tests['direct']['wordpress_version']);
	unset($tests['direct']['plugin_version']);
	unset($tests['direct']['theme_version']);
	unset($tests['direct']['rsssl_ssl_health']);
	unset($tests['direct']['persistent_object_cache']);
	unset($tests['direct']['headers_test']);
	unset($tests['direct']['sbi_test_check_errors']);
	unset($tests['direct']['wp_cache_status']);
	
	return $tests;
}

// add our custom backtrace for better debugging

function bc_add_backtrace() {
	function wp_log_full_backtrace($label = '') {
		$trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);

		$output = [];
		if ($label) {
			$output[] = "=== $label ===";
		}

		foreach ($trace as $i => $frame) {
			$file = $frame['file'] ?? '[internal function]';
			$line = $frame['line'] ?? '';
			$func = $frame['function'] ?? '';
			$class = $frame['class'] ?? '';
			$type = $frame['type'] ?? '';

			$output[] = sprintf(
				"#%d %s(%s): %s%s%s()",
				$i,
				$file,
				$line,
				$class,
				$type,
				$func
			);
		}

		error_log(implode("\n", $output));
	}

	set_error_handler(function ($errno, $errstr, $errfile, $errline) {
		if (!(error_reporting() & $errno)) {
			return false;
		}

		error_log("*** PHP Error [$errno]: $errstr in $errfile on line $errline");
		wp_log_full_backtrace('Stack trace');

		return false;
	});
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

// form shortcode
// THIS NEEDS UPDATING

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
			$html .= '<input type="hidden" name="action" value="form_action">';
			$html .= '<input type="hidden" name="form_id" value="' . $index . '">';
			$html .= wp_nonce_field('form_action', '_bc_nonce', true, false);
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

// form post handler

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


//   ▄████████   ▄█           ▄████████     ▄████████     ▄████████  
//  ███    ███  ███          ███    ███    ███    ███    ███    ███  
//  ███    █▀   ███          ███    ███    ███    █▀     ███    █▀   
//  ███         ███          ███    ███    ███           ███         
//  ███         ███        ▀███████████  ▀███████████  ▀███████████  
//  ███    █▄   ███          ███    ███           ███           ███  
//  ███    ███  ███▌    ▄    ███    ███     ▄█    ███     ▄█    ███  
//  ████████▀   █████▄▄██    ███    █▀    ▄████████▀    ▄████████▀

// our extensible U class of static methods that are useful

if (!class_exists('U'))
{
	class U {
		public static $user;

		public static function init()
		{
			self::$user = (is_user_logged_in()) ? wp_get_current_user() : NULL;
		}

		public static function check_consent()
		{
			if (isset($_COOKIE['user_consent'])) {
				return ($_COOKIE['user_consent'] == 'yes') ? TRUE : FALSE;
			}

			return NULL;
		}

		public static function set_cookie($key, $value, $seconds = 3600)
		{
			setcookie($key, $value, time() + $seconds, COOKIEPATH, COOKIE_DOMAIN);
		}

		public static function get_cookie($key)
		{
			return $_COOKIE[$key] ?? FALSE;
		}

		public static function hex_to_cmyk($hex)
		{
			$hex = ltrim($hex, '#');

			if (strlen($hex) != 6) {
				return FALSE;
			}

			$r = hexdec(substr($hex, 0, 2)) / 255;
			$g = hexdec(substr($hex, 2, 2)) / 255;
			$b = hexdec(substr($hex, 4, 2)) / 255;

			$k = 1 - max($r, $g, $b);
			$c = (1 - $r - $k) / (1 - $k);
			$m = (1 - $g - $k) / (1 - $k);
			$y = (1 - $b - $k) / (1 - $k);

			return [
				'c' => $c,
				'm' => $m,
				'y' => $y,
				'k' => $k
			];
		}
	}
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
	die();
}


//     ▄████████    ▄▄▄▄███▄▄▄▄       ▄████████   ▄█    ▄█        
//    ███    ███  ▄██▀▀▀███▀▀▀██▄    ███    ███  ███   ███        
//    ███    █▀   ███   ███   ███    ███    ███  ███▌  ███        
//   ▄███▄▄▄      ███   ███   ███    ███    ███  ███▌  ███        
//  ▀▀███▀▀▀      ███   ███   ███  ▀███████████  ███▌  ███        
//    ███    █▄   ███   ███   ███    ███    ███  ███   ███        
//    ███    ███  ███   ███   ███    ███    ███  ███   ███▌    ▄  
//    ██████████   ▀█   ███   █▀     ███    █▀   █▀    █████▄▄██

function bc_send_email($args, $to, $subject) {
	$html = _BC['bc_email_html'];

	$in = [
		'[[year]]'
	];
	$out = [
		date('Y')
	];

	if (is_array($args)) {
		foreach ($args as $key => $value) {
			$in[] = '[[' . $key . ']]';
			$out[] = $value;
		}
	}

	$message = str_replace($in, $out, $html);
	return bc_email($to, $subject, $message);
}

function bc_email($to, $subject, $message, $headers = [], $attachments = []) {
	global $phpmailer;

	if (!($phpmailer instanceof PHPMailer\PHPMailer\PHPMailer)) {
		require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
		require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
		require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';
		$phpmailer = new PHPMailer\PHPMailer\PHPMailer();
	}

	$phpmailer->isSMTP();
	$phpmailer->SMTPDebug = 0;
	$phpmailer->Debugoutput = 'error_log';
	$phpmailer->Host = _BC['bc_smtp_host'];
	$phpmailer->SMTPAuth = true;
	$phpmailer->Username = _BC['bc_smtp_username'];
	$phpmailer->Password = _BC['bc_smtp_password'];
	$phpmailer->SMTPSecure = 'ssl';
	$phpmailer->Port = _BC['bc_smtp_port'];
	$phpmailer->isHTML(true);

	if ($attachments) {
		if (is_array($attachments) && count($attachments) > 0) {
			foreach ($attachments as $a) {
				if (file_exists($a)) {
					$phpmailer->addAttachment($a);
				}
			}
		}
		else {
			if (file_exists($attachments)) {
				$phpmailer->addAttachment($attachments);
			}
		}
	}

	$phpmailer->setFrom(_BC['bc_smtp_username'], _BC['bc_smtp_from']);

	if (is_array($to) && count($to) > 0) {
		foreach ($to as $a) {
			$phpmailer->addAddress($a);
		}
	}
	else {
		$phpmailer->addAddress($to);
	}

	$phpmailer->Subject = $subject;
	$phpmailer->Body = $message;

	if (_BC['bc_smtp_log'] == 'yes') {
		error_log('basic_clean - php mailer sending email to: "' . (is_array($to) ? implode(', ', $to) : $to) . '" with subject "' . $subject . '"');
	}

	$sent = $phpmailer->send();
	$phpmailer = null;

	return $sent;
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

if (_BC['bc_backtrace'] == 'yes') {
	add_action('plugins_loaded', 'bc_add_backtrace');
}

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

	remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

	add_action('widgets_init', 'bc_remove_recent_comments_style');
	add_action('admin_action_bc_duplicate_post_as_draft', 'bc_duplicate_post_as_draft');

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
	add_filter('wp_img_tag_add_width_and_height_attr', 'bc_remove_img_width_height', 10, 4);
	add_filter('wp_img_tag_add_auto_sizes', '__return_false');
	add_filter('wp_speculation_rules_configuration', '__return_null');
}

if (_BC['bc_duplicate'] == 'yes') {
	add_filter('post_row_actions', 'bc_duplicate_post_link', 10, 2);
	add_filter('page_row_actions', 'bc_duplicate_post_link', 10, 2);
}

if (_BC['bc_global'] == 'yes') {
	remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
	remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
}

if (_BC['bc_blocks'] == 'yes') {
	add_action('wp_enqueue_scripts', 'bc_remove_block_styles');
	add_filter('should_load_separate_core_block_assets', '__return_false');
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

if (_BC['bc_fa'] != 'none') {
	if (in_array(_BC['bc_fa_load'], ['public', 'both'])) {
		add_action('wp_head', 'bc_font_awesome', 0);
	}

	if (in_array(_BC['bc_fa_load'], ['admin', 'both'])) {
		add_action('admin_head', 'bc_font_awesome', 0);
	}
}

if (_BC['bc_mimes'] == 'yes') {
	add_filter('upload_mimes', 'bc_add_mime_types');
}

if (_BC['bc_wp_options'] == 'yes') {
	add_action('admin_menu', function() {
		add_options_page(
			'Edit wp_options',
			'Edit wp_options',
			'manage_options',
			'options.php',
			'',
			99
		);
	});
}

if (_BC['bc_user_notify'] == 'yes') {
	remove_action('register_new_user', 'wp_send_new_user_notifications');
	remove_action('edit_user_created_user', 'wp_send_new_user_notifications');
}

if (_BC['bc_pw_notify'] == 'yes') {
	add_filter('send_password_change_email', '__return_false');
	add_filter('send_email_change_email', '__return_false');
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
	add_action('wp_ajax_form_action', 'bc_form_callback');
	add_action('wp_ajax_nopriv_form_action', 'bc_form_callback');
	add_shortcode('form', 'bc_form_shortcode');
}

if (_BC['bc_mail_log'] == 'yes') {
	add_action('wp_mail_failed', 'bc_mail_error', 10, 1);
}

if (_BC['bc_dashboard'] == 'yes') {
	add_action('wp_dashboard_setup', 'bc_remove_dashboard_widgets');
}

if (_BC['bc_hysteria'] == 'yes') {
	add_filter('site_status_tests', 'bc_remove_hysterical_checks');
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
	bc_init();

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

// updater

// add github token as 4th parameter
// for updates from a private repo

new BU(__FILE__, 'nullstep', _PLUGIN_BASIC_CLEAN);

// eof