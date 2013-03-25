<?php
header('Content-type: application/xml');

require_once '../common/settings.php'; // database settings
require_once PROJECT_PATH . '/lib/php_adodb_v5.18/adodb.inc.php';
require_once PROJECT_PATH . '/lib/small_blog_v0.8.0/smallblog.php'; // custom blogging engine
require_once PROJECT_PATH . '/lib/utils/utils.php'; // utility functions: date_decode, now

// configuration
$url_prefix = 'http://www.pontikis.net/blog/';
$blog_timezone = 'UTC';
$timezone_offset = '+00:00';
$W3C_datetime_format_php = 'Y-m-d\Th:i:s'; // See http://www.w3.org/TR/NOTE-datetime
$null_sitemap = '<urlset><url><loc></loc></url></urlset>';

$blog = new smallblog(); // custom blogging engine
$res = $blog->db_connect($blog_db_settings);
if($res === false) {
	echo $null_sitemap;
	exit; // Database connection error...
} else {

	// get all posts meta-data
	$posts = $blog->getPosts(0, 0, '', '', '', now($blog_timezone));
	if($posts === false) {
		echo $null_sitemap;
		exit; // Error retreiving posts...
	}

	$len = count($posts);
	for($i = 0; $i < $len; $i++) {
		// entities encode URL according http://www.sitemaps.org/protocol.html#escaping
		$posts[$i]['url'] = $url_prefix . htmlspecialchars($posts[$i]['url']);
		// convert dates to W3C datetime format http://www.sitemaps.org/protocol.html#xmlTagDefinitions
		$posts[$i]['date_updated'] = date_decode($posts[$i]['date_updated'], $blog_timezone, $W3C_datetime_format_php) . $timezone_offset;
	}

	// retrieve max date
	$max_date = $posts[0]['date_updated'];
}

$output = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
echo $output;
?>
<url>
	<loc>http://www.pontikis.net/blog/</loc>
	<lastmod><?php print $max_date ?></lastmod>
	<changefreq>daily</changefreq>
</url>
<url>
	<loc>http://www.pontikis.net/blog/archive/</loc>
	<lastmod><?php print $max_date ?></lastmod>
	<changefreq>daily</changefreq>
</url>
<?php for($i = 0; $i < $len; $i++) { ?>
	<url>
		<loc><?php print $posts[$i]['url'] ?></loc>
		<lastmod><?php print $posts[$i]['date_updated'] ?></lastmod>
	</url>
<?php } ?>
</urlset>