<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>	
	<meta http-equiv="Cache-Control" content="no-siteapp"/>
	<meta http-equiv="Cache-Control" content="no-transform"/>
	<meta name="applicable-device" content="pc,mobile"/>
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=yes"/>
	
	<!-- 输出HTML头部信息 -->
	<meta name="author" content="Roogle QQ1989473781" />
	<meta name="generator" content="Moidea.info" />
	<meta name="keywords" content="<?php $this->options->keywords(); ?>" />
	<?php if($this -> is('category')){ ?><meta name="description" content="<?php echo $this->getDescription(); ?>" />
	<?php } else if($this -> is('post')){ ?><meta name="description" content="<?php echo getPostDesc($this); ?>" />
	<?php } else { ?><meta name="description" content="<?php $this->options->description(); ?>" />
	<?php } ?>
	
	<title><?php if($this->is('index')){ ?><?php $this->options->sologn() ?> - <?php $this->options->title(); ?>
	<?php if($this->_currentPage>1) echo ' 第 '.$this->_currentPage.' 页 '; ?>
	<?php }  else if($this->is('category')) { ?>
	<?php $this->archiveTitle(' &lt; ','',''); ?> - <?php $this->options->title(); ?> - <?php $this->options->sologn() ?>
	<?php } else if($this->is('tag')) { ?>
	标签: <?php $this->archiveTitle(' &lt; ','',''); ?> - <?php $this->options->title(); ?> - <?php $this->options->sologn() ?>
	<?php } else if($this->is('archive'))  { ?>
	关键词: <?php $this->archiveTitle(' &lt; ','',''); ?> - <?php $this->options->title(); ?> - <?php $this->options->sologn() ?>
	<?php } else if($this->is('attachment')) {?>
	附件: <?php $this->archiveTitle(' &lt; ','',''); ?> - <?php $this->options->title(); ?> - <?php $this->options->sologn() ?><?php } else  { ?>
	<?php $this->archiveTitle('', '', ''); ?> - <?php $this->options->title(); ?> - <?php $this->options->sologn() ?>
	<?php } ?>
	</title>
	
	<link rel="shortcut icon" href="data:image/x-icon;base64,AAABAAEAICAAAAEAIACoEAAAFgAAACgAAAAgAAAAQAAAAAEAIAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAOwf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8NwP//DcD//w3B/v8OwP7/DcH//w3B/v8Nwf//DsD//w7A//8OwP//DcH//w3A//8NwP//DcD//w7A//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w3A/f8Owf3/EMD8/wzA/f8Uwfr/Gr7y/xm05/8XtOT/Frzv/xLB+f8Svvz/C8D9/wzB/f8PwP3/DcH+/w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf7/C8D+/w/A+/8Xsdv/I3mR/ylPXP8kNzv/JzE0/ywvNf8mMzv/KEdR/yZwif8cp9X/EcL5/wy//v8Nwf7/DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8NwP//EL/+/wzB/f8Zt+r/Jmp+/yozN/8qUFn/IH6a/xmcxf8bqNX/GabT/x6WuP8kdo3/KUZM/ygzNv8nZnb/FLbl/w7A/v8OwP7/DcH+/w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7A/v8PwP3/IKfN/ytER/8lSlb/HJ3E/xm/+v8Owfz/DcD9/w3A/f8Mwf3/DsH9/w7A+/8Xv/j/HZS2/ytDTP8pQUj/IaXO/w3A/P8OwP7/DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w3B/v8Mwf7/D8D+/x6mz/8uOT//I2R3/xa+8v8Mv/7/C8L+/wvB/v8OwP7/DsD//wzA/v8QwP7/DcH9/w3B/f8Owf3/F7vs/yRcbv8rOz7/IqnR/w/A/f8Mwf7/DsD+/w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DMH+/w/A/v8Zt+j/LEFK/yRhc/8RwfX/DcD9/wy///8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w3B/v8Qvvz/E7/z/yJdbv8qRE7/Grnt/wzA/v8OwP7/DcH+/w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8RwP7/EMD8/ydpff8rRk//GLvw/w3A/v8Nwf7/DMH+/w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DcH+/w3B/v8Qvvz/GLrs/yxDTv8jb4f/EsD7/w7A/v8Nwf7/DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//xK//v8ZrNr/KTM3/yKWuf8Qwfr/DMD+/w3B/v8Nwf7/DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8OwP//DcH+/w3B/v8PwP3/HpS1/yY1Of8cseP/DcL7/w7A/v8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//EMD+/yN3kf8mSFL/E8H4/xHA/v8Lwf7/DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//wzA/v8XwPf/LURP/yN+l/8Lv/7/DcD+/w7B//8Owf//DsH//w7B//8Owf//DsD//w7B/v8Swvv/Kkta/yF4kP8OwPz/DcD+/w7B/v8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DMH+/wu//P8ndYv/K1Jd/xO//P8Nwf7/DsH//w7B//8Owf//DsH//w7B//8OwP//DcH9/xe+8f8pNDv/HJe//wzA/f8NwP7/DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8QwP7/Db/9/x6Uuf8mOTz/Gb70/w3B//8Owf//DsH//w7B//8Owf//DsH//w7A//8Nwf7/FrLl/ywvMv8Xqdj/DMD9/w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//wzB/v8Pv/3/F6TS/ysyMP8Ztuj/DcH+/w7B//8Owf//DsH//w7B//8Owf//DsH//w3A/v8VuvP/InGL/xi68f8OwP7/DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH+/w3A/f8YuO//IHKM/xa79f8NwP//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w/A/v8NwP3/DsD8/w7A//8Nwf7/DcH+/w7A/v8OwP//DsD+/w3A//8Nwf//DsH//w7B//8Owf7/DcH+/w7A/v8NwP//DsD+/w3B/v8OwP7/DsH+/w7B/P8Nvv3/DsH8/w7A/v8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH+/wzA//8Nwf7/D8D+/xG//v8LwP3/FcL3/xnA9f8Owfv/D8H8/w7A/v8Owf//DsD+/w7A/v8PwP3/EMH6/xfA8/8Vwff/CsH8/w7A/f8Owf7/DsH+/w3A/v8Nwf7/DcH+/w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w3B/v8Qv/7/C8L6/yGNq/8sP0r/Jzs//yZwhv8Vvvb/DcD+/w7B//8Mwf3/Cr/+/xm24/8sWGz/Jjg8/ytLVv8hos//DMD+/w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DcH+/xG//v8ZrNb/LTM3/zIzMv8yMjT/NTE0/yGFp/8Nwf7/DsH//w7B/v8MwPz/I2F1/y8zMv8yMjP/MTIz/yVDTf8TwvX/DsH+/w7A//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8NwP//DMD+/x6Msf8vNDD/MzMz/zMzMv8wMzP/J2V+/w/A/v8Owf//CcL9/xbB/P8qQEr/NDIz/zAzM/8yMjP/LjIz/xez5P8NwP3/DsD//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w3B/v8OwP7/GKrT/y0yNv8vMzL/MDI0/zIxNf8hgqX/DcH+/w7B//8PwP3/DcD9/yNfcv8xMzP/NDIz/zIyM/8rPkv/FcD1/w7B/v8OwP//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DcH+/xG//v8Pwvn/I4ml/y43Rf8nMzn/JWp9/xW+9P8OwP//DsH//w/A/v8LwP7/HLTe/yxRZf8mMjT/LUZN/xmjyf8NwP3/DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8OwP7/DsD+/xDA/v8Pv/3/GMH2/xe/9f8Qv/3/DsD+/w3A/v8Owf//DcD+/w7A/v8Nv/7/FsD7/xu+9P8SwPv/D7/+/wzB/v8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7A//8NwP7/DsD+/w3B/v8OwP7/DsD+/w7B/v8NwP7/DsD//w7B//8Nwf//DsD+/w3A/v8Owf7/DsD+/w7B/v8NwP7/DcH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8NwP7/DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//DsH//w7B//8Owf//AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" >
	<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
	
</head>

<body>
	<div class="body">
	
	<div class="header ofh">
		<div class="hd ofh">
			<div class="logo"><a href="<?php $this->options->siteUrl(); ?>" alt="<?php $this->options->title() ?>" title="<?php $this->options->sologn() ?>"><?php $this->options->title() ?></a></div>
			
			<?php if($this->is('post')){ ?>	<?php }else{ ?>
			<!-- 瑪利歐追香菇 -->
			<marquee direction='right' scrolldelay='60' class="mario">
				<img alt='Mario' src='data:image/x-icon;base64,R0lGODlhEQARAPcAAAAAAAAAQAAAgAAA/wAgAAAgQAAggAAg/wBAAABAQABAgABA/wBgAABgQABggABg/wCAAACAQACAgACA/wCgAACgQACggACg/wDAAADAQADAgADA/wD/AAD/QAD/gAD//yAAACAAQCAAgCAA/yAgACAgQCAggCAg/yBAACBAQCBAgCBA/yBgACBgQCBggCBg/yCAACCAQCCAgCCA/yCgACCgQCCggCCg/yDAACDAQCDAgCDA/yD/ACD/QCD/gCD//0AAAEAAQEAAgEAA/0AgAEAgQEAggEAg/0BAAEBAQEBAgEBA/0BgAEBgQEBggEBg/0CAAECAQECAgECA/0CgAECgQECggECg/0DAAEDAQEDAgEDA/0D/AED/QED/gED//2AAAGAAQGAAgGAA/2AgAGAgQGAggGAg/2BAAGBAQGBAgGBA/2BgAGBgQGBggGBg/2CAAGCAQGCAgGCA/2CgAGCgQGCggGCg/2DAAGDAQGDAgGDA/2D/AGD/QGD/gGD//4AAAIAAQIAAgIAA/4AgAIAgQIAggIAg/4BAAIBAQIBAgIBA/4BgAIBgQIBggIBg/4CAAICAQICAgICA/4CgAICgQICggICg/4DAAIDAQIDAgIDA/4D/AID/QID/gID//6AAAKAAQKAAgKAA/6AgAKAgQKAggKAg/6BAAKBAQKBAgKBA/6BgAKBgQKBggKBg/6CAAKCAQKCAgKCA/6CgAKCgQKCggKCg/6DAAKDAQKDAgKDA/6D/AKD/QKD/gKD//8AAAMAAQMAAgMAA/8AgAMAgQMAggMAg/8BAAMBAQMBAgMBA/8BgAMBgQMBggMBg/8CAAMCAQMCAgMCA/8CgAMCgQMCggMCg/8DAAMDAQMDAgMDA/8D/AMD/QMD/gMD///8AAP8AQP8AgP8A//8gAP8gQP8ggP8g//9AAP9AQP9AgP9A//9gAP9gQP9ggP9g//+AAP+AQP+AgP+A//+gAP+gQP+ggP+g///AAP/AQP/AgP/A////AP//QP//gP///yH/C05FVFNDQVBFMi4wAwEAAAAh/htHaWZBbmltIGJ5IE5vYnVoaXJvIEhhdHRvcmkAIfkECQYAEwAsAAAAABEAEQAACFwAJwgcSLCgwQnsEiY8SFChw4UHIUmkRw8SPYYTLFqkuPGiQY0dO3ocOJFiRYmQMJpciVEiO5QYM6JMKLGlS3b0Eo4siBLSQ4YvOyrE+JLi0JgKYcbsqZRhT4YBAQAh+QQJBgATACwAAAAAEQARAAAIVwAnCBxIsKDBgwgJslu4MKFAhhAbHoREkR49SPQSYsRokWNGgxs9egTp8SJFSAktqrSo8SQ7lB8Nmjw5sqDFlzRZkowoESTPngQpMpwwdGJQig6PIi0YEAAh+QQJBgATACwAAAAAEQARAAAIYQAnCBxIsKBBgewSJjxIUKHDhQchSaRHDxI9hhMsWqS48aJBjR07fuxYUSIkjBRTUoxoMqHEgxxbupy4ckLKjJDY0VNIU2DNhxBPFgTKU+hAokUJSlR4dKbSlxgLmow6ISAAOw==' width='17'/>&#12288;&#12288;&#12288;<img alt='mushroom' src='data:image/x-icon;base64,R0lGODlhEAAQAKIEALW1tf9gAP////+gAP///wAAAAAAAAAAACH5BAEAAAQALAAAAAAQABAAAAM9SLrTsxC6EUKUrtZLJtUW5mkN8wXepJxVWjYgOrUZONIwPstu32mCoJAUAQiFAA7BeBwkOUyhU7kEWK2RBAA7' width='17'/>
			</marquee>
			<!-- 瑪利歐追香菇 -->
			<nav class="nav ofh">
				<li class="li-up"><a href="<?php $this->options->siteUrl(); ?>">首  页</a><a href="<?php $this->options->siteUrl(); ?>about.html">关 于</a><?php if(!isMobile()): ?><a href="<?php $this->options->siteUrl(); ?>feed">订 阅</a><?php endif; ?></li>
			</nav>

			<?php if($this->is('index')): ?>
			<div class="site-search">
                <form class="site-search-form" id="search" method="post" action="" role="search">
                    <input id="st-search-input" type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                </form>
            </div>
			<?php endif; ?>
			<?php } ?>
			
		</div>
	</div>
	
