<!DOCTYPE html>
<tpl:layout xmlns="http://www.w3.org/1999/xhtml" xmlns:tpl="http://tuiyo.co.uk/tpl">

    <html class="no-js" lang="en">
        <head>
            <title><tpl:element type="text" data="page.title">Sign up</tpl:element></title>
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


        </head>
        <body>
            <tpl:import layout="navbar" />
            
            <div class="container">  
                <tpl:block data="page.block.alerts" />           
                <tpl:block data="page.block.banner">Banner</tpl:block>
                <section class="layout-block boxed has-bg">  
                    <div class="row-fluid">
                        <div class="span12">           
                            <div class="row-fluid">
                                <div class="span8"> 
                                    <tpl:i18n>Features</tpl:i18n>
                                    <tpl:block data="page.block.body">Content</tpl:block></div>
                                <div class="span4">
                                    <div class="left-pad">  
                                        <div class="row-fluid">
                                            <form id="form" name="form" method="post" action="/member/account/update">
                                                <fieldset class="no-margin">
                                                    <legend>Register a new account</legend><tpl:block data="page.block.alerts" />
                                                    <div class="control-group">
                                                        <label class="control-label" for="user_name"><tpl:i18n>Full Name</tpl:i18n><em class="mandatory">*</em></label>
                                                        <div class="controls row-fluid">
                                                            <input class="input-large focused span11" id="user_name" name="user_name" type="text" placeholder="John Doe" />
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="user_name_id"><tpl:i18n>Unique Username</tpl:i18n><em class="mandatory">*</em></label>
                                                        <div class="controls row-fluid">
                                                            <input class="input-large focused span11" id="user_name_id" name="user_name_id" type="text" placeholder="JohnDoe1976" />
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="user_email"><tpl:i18n>Email address</tpl:i18n><em class="mandatory">*</em></label>
                                                        <div class="controls row-fluid">
                                                            <input class="input-large focused span11" id="user_email" name="user_email" type="text" placeholder="<?php echo _('e.g john.doe@example.com'); ?>" />
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="user_password"><tpl:i18n>Password</tpl:i18n><em class="mandatory">*</em></label>
                                                        <div class="controls row-fluid">
                                                            <input class="input-large focused span11" id="user_password" name="user_password" type="password" />
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="user_password_2"><tpl:i18n>Verify Password</tpl:i18n><em class="mandatory">*</em></label>
                                                        <div class="controls row-fluid">
                                                            <input class="input-large focused span11" id="user_password_2" name="user_password_2" type="password" />
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
                                                    <div class="btn-group">
                                                        <button type="reset" class="btn" tpl:i18n="">Cancel</button> 
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <tpl:block data="page.block.side">Sidebar</tpl:block>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <tpl:import layout="footer" />    
            </div>

            <script src='<?php echo $this->getTemplatePath() ?>/js/libs/jquery-1.7.1.min.js' type="text/javascript"></script>
            <script src='<?php echo $this->getTemplatePath() ?>/js/libs/jquery-ui.min.js' type="text/javascript"></script>
            <script src="<?php echo $this->getTemplatePath() ?>/js/libs/modernizr-2.0.6.min.js" type="text/javascript"></script>
            <script src="<?php echo $this->getTemplatePath() ?>/js/bootstrap.js" type="text/javascript"></script>
            
        </body>

    </html>

</tpl:layout>