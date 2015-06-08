<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?$APPLICATION->ShowTitle()?></title>
        <?$APPLICATION->ShowMeta("keywords")?>
        <?$APPLICATION->ShowMeta("description")?>
        <!--modernizr -->
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/modernizr-2.8.3.min.js");?>
        <!--jquery -->
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery-1.11.2.min.js");?>
        <!-- Bootstrap -->
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/bootstrap/dist/js/bootstrap.min.js");?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/bootstrap/dist/css/bootstrap.min.css");?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/bootstrap/dist/css/bootstrap-theme.min.css");?>
        <!-- CUSTOM -->
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js");?>
        <!-- PLUGIN -->
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/plugin.js");?>
        <!-- develop//remove from prod -->
        <link rel="stylesheet/less" type="text/css" href="/less/styles.less" />
        <link rel="stylesheet/less" type="text/css" href="/less/template_styles.less" />
        <script src="/js/vendor/less.js-master/dist/less.min.js" type="text/javascript"></script>
        <!-- end develop -->
        <!-- print -->
        <?$APPLICATION->ShowCSS();?>
        <?$APPLICATION->ShowHeadStrings()?>
        <?$APPLICATION->ShowHeadScripts()?>
    </head>
    <body class="<? if ($APPLICATION->GetCurPage() == '/'){print "front";}else{ print "inner";}?>">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?$APPLICATION->ShowPanel();?>
        <header>

        </header>
