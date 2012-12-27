<!DOCTYPE html>
<tpl:layout xmlns="http://www.w3.org/1999/xhtml" xmlns:tpl="http://budkit.org/tpl">
    <html lang="en">
        <head>
            <title><tpl:element type="text" data="page.title">Sign In</tpl:element></title>
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

            <!-- Scripts -->
            <script src='<?php echo $this->getTemplatePath() ?>/js/libs/jquery-1.7.1.min.js' type="text/javascript"></script>
            <script src='<?php echo $this->getTemplatePath() ?>/js/libs/jquery-ui.min.js' type="text/javascript"></script>
            <script src="<?php echo $this->getTemplatePath() ?>/js/libs/modernizr-2.0.6.min.js" type="text/javascript"></script>
            <script src="<?php echo $this->getTemplatePath() ?>/js/bootstrap.js" type="text/javascript"></script>  
            <script src="<?php echo $this->getTemplatePath() ?>/js/libs/budkit-1.0.0.min.js" type="text/javascript"></script>
        </head>
        <body>
            <div class="container navbar canvas" style="width: 135px; margin: auto">
                <a class="brand logo" href="/">Budkit</a>
            </div>
            <tpl:block data="page.block.alerts" /> 
            <div class="container mini top-pad">
                 
                <tpl:block data="page.block.banner">Banner</tpl:block>
                <section class="layout-block boxed box-padding">
                    <form id="form" name="form" method="post" action="/member/account/update">
                        <fieldset class="no-margin">
                            <legend tpl:i18n="">Register a new account</legend>
                            <div class="control-group">
                                <label class="control-label" for="user_name"><tpl:i18n>First Name</tpl:i18n><em class="mandatory">*</em></label>
                                <div class="controls row-fluid">
                                    <input class="input-large focused span12" id="first_name" name="user_first_name" type="text" placeholder="Johnatan" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="user_name"><tpl:i18n>Last Name</tpl:i18n><em class="mandatory">*</em></label>
                                <div class="controls row-fluid">
                                    <input class="input-large focused span12" id="last_name" name="user_last_name" type="text" placeholder="Johnatan" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="user_name_id"><tpl:i18n>Unique Username</tpl:i18n><em class="mandatory">*</em></label>
                                <div class="controls row-fluid">
                                    <input class="input-large focused span12" id="user_name_id" name="user_name_id" type="text" placeholder="JohnDoe1976" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="user_email"><tpl:i18n>Email address</tpl:i18n><em class="mandatory">*</em></label>
                                <div class="controls row-fluid">
                                    <input class="input-large focused span12" id="user_email" name="user_email" type="text" placeholder="<?php echo _('e.g john.doe@example.com'); ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="user_password"><tpl:i18n>Password</tpl:i18n><em class="mandatory">*</em></label>
                                <div class="controls row-fluid">
                                    <input class="input-large focused span12" id="user_password" name="user_password" type="password" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="user_password_2"><tpl:i18n>Verify Password</tpl:i18n><em class="mandatory">*</em></label>
                                <div class="controls row-fluid">
                                    <input class="input-large focused span12" id="user_password_2" name="user_password_2" type="password" />
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="control-group">
                                <div class="controls">
                                    <label class="checkbox">
                                        <input type="checkbox" name="user_accepted_terms" value="1" />
                                        You agree to our <a href="#">terms and conditions</a>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="user_accepted_terms_2" value="2" />
                                        You agree to our <a href="#">privacy policy</a>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button type="submit" class="btn" tpl:i18n="">Create an Account</button> 
                            </div>
                        </div>
                    </form>
                    <tpl:block data="page.block.body" />    
                </section>
                <section role="footer"> 
                    <tpl:block data="page.block.footer">Footer</tpl:block>
                    <tpl:import layout="console" />                
                </section>
            </div>
        </body>
    </html>
</tpl:layout>

