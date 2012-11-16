<?php
date_default_timezone_set("Asia/Shanghai");

$path = dirname(__FILE__);

//获取文件列表
$file_list = glob("*.md");

/*
 章节号转成key
 1.1 =》 11000000 总共8位数
*/
foreach($file_list as $value)
{
	$id = basename($value,".md");

	$key = id2key($id);
    
    $body = file($value);

    $h1 = '';

    foreach ($body as $k=>$v) {
        if (preg_match('!^#([^#])$!', $v, $m)) {
            $h1 = $m[1];
            unset($body[$k]);
        } elseif (preg_match('!^## links!', $v, $m)) {
            //接下来的两行是link
        }
    }

	//对content的code部分进行处理
	$content = preg_replace_callback(
		"!<code\s+([A-Za-z_0-9]+)?>(.*?)</code>!ism",
		create_function('$m','return "<pre class=\"sh_{$m[1]}\">".htmlspecialchars($m[2],ENT_QUOTES)."</pre>";'),
		$content
	);
	
	clearstatcache();
	
	$c[$key]=array(
		'id'=>$id,
		'title'=>$meta[0],
		'prev'=>$meta[1],
		'next'=>$meta[2],
		'content'=>$content,
		'last_modified'=>date("Y-m-d",filemtime($value))
	);
}

function chapter_id($id)
{
	$id = explode(".",$id);
	return $id[0];
}


function page_title($id)
{
	global $c;
	$key = id2key($id);
	if(isset($c[$key]))
	{
		return $c[$key]['title'];
	}
}

function create($value)
{
	global $c;
	extract($value);
	$chapter_id = chapter_id($value['id']);
	$chapter_title = page_title($chapter_id);
	$chapter_link = page_link($chapter_id);

	if($value['prev'])
	{
		$prev_link = page_link($value['prev']);
		$prev_title = page_title($value['prev']);
	}

	if($value['next'])
	{
		$next_link = page_link($value['next']);
		$next_title = page_title($value['next']);
	}

	ob_start();
	require('tpl.html');
	$content = ob_get_contents();
	ob_end_clean();
	file_put_contents("html/".page_link($id),$content);
}

//生成文章
foreach($c as $value)
{
	create($value);
}

//生成站点地图

$content = '<?xml version="1.0" encoding="UTF-8"?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">	
	';
foreach($c as $value)
{
	$link = page_link($value['id']);
$content .= <<<eot
	
	<url>
		<loc>http://phpbook.sinaapp.com/{$link}</loc>
		<lastmod>{$value['last_modified']}</lastmod>
		<changefreq>daily</changefreq>
		<priority>0.6</priority>
	</url>
eot;
}
$content .= '</urlset>';

file_put_contents("html/sitemap.xml",$content);
