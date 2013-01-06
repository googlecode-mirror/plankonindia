<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
	<?php
		echo $this->Meta->meta();
		echo $this->Layout->feed();
		echo $this->Html->css(array(
			'index',
			'slimbox2'
		));
		echo $this->Layout->js();
		echo $this->Html->script(array(
			'jquery-1.3.2.min',
			'jqueryslidemenu',
			'slideswitch',
			'jquery-ui-1.7.2.custom.min',
			'slimbox2',
                        'cufon-yui',
                        'Liberation_Sans_400.font'
		));

		echo $this->Blocks->get('css');
		echo $this->Blocks->get('script');
	?>
<!--[if IE 6]>
	<?php echo $this->Html->css(array(
			'ie6'
		));
        echo $this->Html->script(array('dd_belated_png'));
        ?>

    
	<script>DD_belatedPNG.fix('#logo a, .h-box-1 img, .h-box-2 img, .brochure img, .slide-txt');</script>
<![endif]-->
<script type="text/javascript">
	Cufon.replace('h1');
	Cufon.replace('h2');
	Cufon.replace('h3');
	Cufon.replace('h4');
</script>
</head>
<body>
	<div id="body-wrapper">
            <div class="clearfix">
                <div id="logo">
                    <?php echo $this->Html->link(Configure::read('Site.title'), '/'); ?>
                    <p class="logo-desc"><?php echo Configure::read('Site.tagline'); ?></p>
                </div>
                <form action="javascript: document.location.href=''+Croogo.basePath+'search/q:'+encodeURI($('#searchform #q').val());" method="post" id="searchform">
                    <fieldset class="search-fieldset">
                        <input type="text" class="search-input" value="search" name="q" />
                        <input type="submit" value="" class="input-arrow" />
                    </fieldset>
                </form>
                <?php echo $this->Regions->blocks('search'); ?>
            </div>
		

            <div class="main-menu-wrapper">
                <div id="myslidemenu" class="jqueryslidemenu">
                    <?php echo $this->Menus->menu('main', array('dropdown' => true,'dropdownClass'=>'primary-menu')); ?>
                </div>
            </div>

		 <div id="left">
			<div id="content" class="grid_11">
			<?php
				echo $this->Layout->sessionFlash();
				echo $content_for_layout;
			?>
			</div>	
			<div class="clear"></div>
		</div>
            <div id="right">
                <?php echo $this->Regions->blocks('right'); ?>
            </div>

		<div id="footer">
                    
                    <ul>
                        <li><a href="homepage.html">Home</a></li>
                        <li><a href="about_us.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Case Studies</a></li>
                        <li><a href="news_list.html">News</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
		</div>
	</div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".ln-list li").click(function(){//makes entire area "ln-list li" clickable
                window.location=$(this).find("a").attr("href");return false;
            });

            $(".brochure").click(function(){//makes entire area "brochure" clickable
                window.location=$(this).find("a").attr("href");return false;
            });

        });
    </script>
	<?php
		echo $this->Blocks->get('scriptBottom');
		echo $this->Js->writeBuffer();
	?>
	</body>
</html>