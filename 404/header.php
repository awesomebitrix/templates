<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowMeta("keywords")?>
    <?$APPLICATION->ShowMeta("description")?>
    <!-- plugin -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.particleground.min.js");?>
    <!-- CUSTOM -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js");?>
    <!-- print -->
    <?$APPLICATION->ShowCSS();?>
    <?$APPLICATION->ShowHeadStrings()?>
    <?$APPLICATION->ShowHeadScripts()?>

    <link rel="shortcut icon" href="/upload/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/upload/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/upload/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/upload/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/upload/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/upload/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/upload/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/upload/favicon/apple-touch-icon-76x76.png">
    <link rel="icon" type="image/png" href="/upload/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/upload/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/upload/favicon/favicon-32x32.png" sizes="32x32">

    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-TileImage" content="/upload/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="/upload/favicon/browserconfig.xml">
  </head>
  <body>
    <div id="particles">
      <div id="intro">
