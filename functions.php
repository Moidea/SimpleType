<?php

// 设置时区
date_default_timezone_set('Asia/Shanghai');

function themeConfig($form) {	
	/** 网站顶部的标语设置 */
	$sologn = new Typecho_Widget_Helper_Form_Element_Text('sologn', NULL, NULL, _t('网站顶部标题后面的标语'), _t('<strong>用来显示在网站顶部标题后面的标语</strong>'));
    $form->addInput($sologn);
	
	/** 手机版底部电话 */
	$tel = new Typecho_Widget_Helper_Form_Element_Text('tel', NULL, NULL, _t('联系电话'), _t('<strong>将显示在手机版底部</strong>'));
    $form->addInput($tel);
	
	/** 站长支付宝二维码 */
	$alipay = new Typecho_Widget_Helper_Form_Element_Text('alipay', NULL, NULL, _t('文章底部的支付宝捐赠二维码'), _t('<strong>文章底部的支付宝捐赠二维码</strong>'));
    $form->addInput($alipay);
	
	/** 站长微信支付二维码 */
	$weixin = new Typecho_Widget_Helper_Form_Element_Text('weixin', NULL, NULL, _t('文章底部的微信捐赠二维码'), _t('<strong>文章底部的微信捐赠二维码</strong>'));
    $form->addInput($weixin);
	
	/** 网站统计代码 */
	$block01 = new Typecho_Widget_Helper_Form_Element_Textarea('block01', NULL, NULL, _t('网站统计代码'), _t('<strong>将网站统计代码复制到此处</strong>'));
    $form->addInput($block01);
}

// 获取文章摘要
function getPostDesc($obj){
	$code=array(" ","　","\t","\n","\r");
	$post=str_replace($code, '', strip_tags($obj->content)); 
	if(isset($obj->fields->desc)){
		return $obj->fields->desc;
	}else{
		return substr($post,0,280);
	}
}  


// 本站创建的时间
function getBuildTime(){
	$site_create_time = strtotime('2012-06-26 00:00:00');
	$time = time() - $site_create_time;
	
	if(is_numeric($time)){
		$value = array(
			"years" => 0, "days" => 0, "hours" => 0,
			"minutes" => 0, "seconds" => 0,
		);
		if($time >= 31556926){
			$value["years"] = floor($time/31556926);
			$time = ($time%31556926);
		}
		if($time >= 86400){
			$value["days"] = floor($time/86400);
			$time = ($time%86400);
		}
		if($time >= 3600){
			$value["hours"] = floor($time/3600);
			$time = ($time%3600);
		}
		if($time >= 60){
			$value["minutes"] = floor($time/60);
			$time = ($time%60);
		}
		$value["seconds"] = floor($time);
		
		echo '<span style="color:red;">'.$value['years'].'年'.$value['days'].'天'.$value['hours'].'小时'.$value['minutes'].'分</span>';
	}else{
		echo '';
	}
}


// 分类文章数量控制 
function themeInit($archive) { 
    if ($archive->is('index')) { 
        $archive->parameter->pageSize = 16; // 自定义条数 
    } else if ($archive->is('category', 'manage')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	} else if ($archive->is('category', 'diary')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	} else if ($archive->is('category', 'mind')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	} else if ($archive->is('category', 'psychic')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	} else if ($archive->is('category', 'thinking')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	} else if ($archive->is('category', 'zhihu')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	} else if ($archive->is('category', 'share')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	} else if ($archive->is('category', 'style')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	}
}

// 手机端判断
function isMobile()
{ 
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
    {
        return true;
    } 
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    { 
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    } 
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile'
            ); 
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
        {
            return true;
        } 
    } 
    // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    { 
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        } 
    } 
    return false;
} 
