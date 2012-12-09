<!DOCTYPE html>
<tpl:layout xmlns="http://www.w3.org/1999/xhtml" xmlns:tpl="http://tuiyo.co.uk/tpl">
    <html lang="en">
        <head>
            <title><tpl:element type="text" data="page.title">Budkit</tpl:element></title>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
            <meta name="description" content="<?php echo $this->getPageDescription(); ?>" />
            <meta name="author" content="<?php echo $this->getPageAuthor(); ?>" />
            <meta name="keywords" content="<?php echo $this->getPageAuthor(); ?>" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <!-- Le fav and touch icons -->
            <link rel="shortcut icon" href="images/favicon.ico" />
            <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
            <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
            <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

            <link rel="stylesheet" href="<?php echo $this->getTemplatePath() ?>/css/bootstrap.css" type="text/css" media="screen" />

            <script src='<?php echo $this->getTemplatePath() ?>/js/libs/jquery-1.7.1.min.js' type="text/javascript"></script>
            <script src='<?php echo $this->getTemplatePath() ?>/js/libs/jquery-ui.min.js' type="text/javascript"></script>
            <script src="<?php echo $this->getTemplatePath() ?>/js/libs/modernizr-2.0.6.min.js" type="text/javascript"></script>
        </head>
        <body>
            <div class="container medium navbar canvas">
                <div style="width:135px; margin: auto">
                    <a class="brand logo" href="/">Pilgrimage</a>
                </div>
            </div>
            <div class="container large top-pad">
                <tpl:block data="page.block.alerts" />  
                <tpl:block data="page.block.banner">Banner</tpl:block>
                <section class="layout-block boxed box-padding">
                    <tpl:block data="page.block.body" />              
                </section>
                <section role="footer"> 
                    <tpl:block data="page.block.footer">Footer</tpl:block>
                    <tpl:import layout="console" />                
                </section>
            </div>
            <script src="<?php echo $this->getTemplatePath() ?>/js/bootstrap.js" type="text/javascript"></script>
        </body>
    </html>
</tpl:layout>