<?php

// basic_clean sitemap/file handler

function get_attachment_id_by_filename($filename) {
    global $wpdb;
    $attachments = $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '_wp_attached_file' AND meta_value like'%$filename'", OBJECT);
    return $attachments[0]->post_id ?? false;
}

if (isset($_GET['file'])) {
	if ($_GET['file'] != '') {
		require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

		$mimes = [
			'hqx' => 'application/mac-binhex40',
			'cpt' => 'application/mac-compactpro',
			'csv' => [
				'text/x-comma-separated-values',
				'text/comma-separated-values',
				'application/octet-stream',
				'application/vnd.ms-excel',
				'application/x-csv',
				'text/x-csv',
				'text/csv',
				'application/csv',
				'application/excel',
				'application/vnd.msexcel'
			],
			'bin' => 'application/macbinary',
			'dms' => 'application/octet-stream',
			'lha' => 'application/octet-stream',
			'lzh' => 'application/octet-stream',
			'exe' => [
				'application/octet-stream',
				'application/x-msdownload'
			],
			'class' => 'application/octet-stream',
			'psd' => 'application/x-photoshop',
			'so' => 'application/octet-stream',
			'sea' => 'application/octet-stream',
			'dll' => 'application/octet-stream',
			'oda' => 'application/oda',
			'pdf' => [
				'application/pdf',
				'application/x-download'
			],
			'ai' => 'application/postscript',
			'eps' => 'application/postscript',
			'ps' => 'application/postscript',
			'smi' => 'application/smil',
			'smil' => 'application/smil',
			'mif' => 'application/vnd.mif',
			'xls' => [
				'application/excel',
				'application/vnd.ms-excel',
				'application/msexcel'
			],
			'ppt' => [
				'application/powerpoint',
				'application/vnd.ms-powerpoint'
			],
			'wbxml' => 'application/wbxml',
			'wmlc' => 'application/wmlc',
			'dcr' => 'application/x-director',
			'dir' => 'application/x-director',
			'dxr' => 'application/x-director',
			'dvi' => 'application/x-dvi',
			'gtar' => 'application/x-gtar',
			'gz' => 'application/x-gzip',
			'php' => 'application/x-httpd-php',
			'php4' => 'application/x-httpd-php',
			'php3' => 'application/x-httpd-php',
			'phtml' => 'application/x-httpd-php',
			'phps' => 'application/x-httpd-php-source',
			'js' => 'application/x-javascript',
			'swf' => 'application/x-shockwave-flash',
			'sit' => 'application/x-stuffit',
			'tar' => 'application/x-tar',
			'tgz' => [
				'application/x-tar',
				'application/x-gzip-compressed'
			],
			'xhtml' => 'application/xhtml+xml',
			'xht' => 'application/xhtml+xml',
			'zip' => [
				'application/x-zip',
				'application/zip',
				'application/x-zip-compressed'
			],
			'mid' => 'audio/midi',
			'midi' => 'audio/midi',
			'mpga' => 'audio/mpeg',
			'mp2' => 'audio/mpeg',
			'mp3' => [
				'audio/mpeg',
				'audio/mpg',
				'audio/mpeg3',
				'audio/mp3'
			],
			'aif' => 'audio/x-aiff',
			'aiff' => 'audio/x-aiff',
			'aifc' => 'audio/x-aiff',
			'ram' => 'audio/x-pn-realaudio',
			'rm' => 'audio/x-pn-realaudio',
			'rpm' => 'audio/x-pn-realaudio-plugin',
			'ra' => 'audio/x-realaudio',
			'rv' => 'video/vnd.rn-realvideo',
			'wav' => [
				'audio/x-wav',
				'audio/wave',
				'audio/wav'
			],
			'bmp' => [
				'image/bmp',
				'image/x-windows-bmp'
			],
			'gif' => 'image/gif',
			'jpeg' => [
				'image/jpeg',
				'image/pjpeg'
			],
			'jpg' => [
				'image/jpeg', 
				'image/pjpeg'
			],
			'jpe' => [
				'image/jpeg',
				'image/pjpeg'
			],
			'png' => [
				'image/png',
				'image/x-png'
			],
			'svg' => 'image/svg+xml',
			'ico' => 'image/vnd.microsoft.icon',
			'tiff' => 'image/tiff',
			'tif' => 'image/tiff',
			'css' => 'text/css',
			'html' => 'text/html',
			'htm' => 'text/html',
			'shtml' => 'text/html',
			'txt' => 'text/plain',
			'text' => 'text/plain',
			'log' => [
				'text/plain',
				'text/x-log'
			],
			'rtx' => 'text/richtext',
			'rtf' => 'text/rtf',
			'xml' => 'text/xml',
			'xsl' => 'text/xml',
			'mpeg' => 'video/mpeg',
			'mpg' => 'video/mpeg',
			'mpe' => 'video/mpeg',
			'mp4' => 'video/mp4',
			'qt' => 'video/quicktime',
			'mov' => 'video/quicktime',
			'avi' => 'video/x-msvideo',
			'movie' => 'video/x-sgi-movie',
			'doc' => 'application/msword',
			'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
			'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
			'word' => [
				'application/msword',
				'application/octet-stream'
			],
			'xl' => 'application/excel',
			'eml' => 'message/rfc822',
			'json' => [
				'application/json',
				'text/json'
			],
			'otf' => 'application/octet-stream',
			'sfnt' => 'application/octet-stream',
			'ttf' => 'application/octet-stream',
			'woff' => 'application/octet-stream',
			'woff2' => 'application/octet-stream'
		];

		$req = $_GET['file'];

		if ($req == 'sitemap' && (_BC['bc_sitemap'] == 'yes')) {
			header('Content-Type: text/xml');
			
			echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
			echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

				$posts = get_posts([
					'numberposts' => -1,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => ['post', 'page'],
					'post_status' => 'publish',
					'suppress_filters' => TRUE
				]);

				$site = get_site_url() . '/';

				foreach ($posts as $p) {
					echo '<url>' . "\n";
						echo '<loc>' . $site . $p->post_name . '</loc>' . "\n";
						echo '<lastmod>' . substr($p->post_modified, 0, 10) . '</lastmod>' . "\n";
					echo '</url>' . "\n";
				}			

			echo '</urlset>' . "\n";
		}
		else {
			$x = explode('.', $req);
			$extension = end($x);
			array_pop($x);
			$name = implode('.', $x);

			$ip = $_SERVER['REMOTE_ADDR'];
			$ips = explode("\n", str_replace(["\r\n","\n\r","\r"], "\n", _BC['bc_ignore']));

			if (!in_array($ip, $ips)) {
				$id = get_attachment_id_by_filename($name);
				if ($id) {
					$count = get_post_meta($id, 'file_downloads', true);
					update_post_meta($id, 'file_downloads', ($count != '') ? (int)$count + 1 : 1);
				}
			}

			if (!isset($mimes[$extension])) {
				$mime = 'application/octet-stream';
			}
			else {
				$mime = (is_array($mimes[$extension])) ? $mimes[$extension][0] : $mimes[$extension];
			}

			$len = strlen($req);
			$it = new RecursiveDirectoryIterator(dirname(__FILE__, 3) . '/uploads');

			foreach (new RecursiveIteratorIterator($it) as $file) {
				if ($req == basename($file)) {
					header('Content-Type: ' . $mime);
					echo file_get_contents($file);
					die;
				}
			}
		}
	}
	else {
		header('Location: /404');
	}
}
else {
	header('Location: /404');
}

// eof