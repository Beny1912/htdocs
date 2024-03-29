<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
   <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>StarCraft Yii Theme</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link type="text/css" rel="stylesheet" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
        <link type="text/css" rel="stylesheet" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
   </head>
<body>
<div id="container">


<div id="page">
       <div id="header">
               <div class="site_title">
                       <h1><a href="http://demo.templatepanic.com" title="WP Theme Demo
home page">SISTEMA DE CONTROL DE FLOTA</a></h1>
                       <div class="description">Forestal Anchile</div>
               </div> <!-- end site_title -->

               <div class="topmenu">
                    <?php $this->widget('zii.widgets.CMenu',array(
                        'id' => 'menu',
                        'items'=>array(
                            array('label'=>'Home', 'url'=>array('/site/index'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'Contact', 'url'=>array('/site/contact'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest, 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'linkOptions' => array( 'class' => 'menulink' ) ),
                        ),
                    )); ?>                   
               </div> <!-- end topmenu -->
       </div> <!-- end header -->


        <div class="mainwrap">
            <div class="content">
                
                <?php echo $content; ?>
            </div>

       </div><!-- end columns_wrapper -->


       <div id="footer">

               <div class="footer-left">
                    <p>
                        Design <a href="http://www.game-puzzle.info/">Tetsuo</a><br />
                        Adopted by <a href="http://www.mehesz.net">mehesz<span style="color:#f00;">.</span>net</a>
                    </p>
               </div>

               <div class="footer-right">
                       <p>&#169; 2010 <a href="http://demo.templatepanic.com/" title="WP
Theme Demo" >WP Theme Demo</a></p>
               </div>

       </div> <!-- end footer -->


</div> <!-- end page -->

</div>

</body>
</html>
