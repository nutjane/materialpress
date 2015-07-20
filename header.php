<!DOCTYPE html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
      https://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="description" content="<?php  echo get_bloginfo('description'); ?>">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php  wp_title( '|', true, 'right' ); ?></title>
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <!--<link rel="icon" sizes="192x192" href="<?php  echo esc_url( get_template_directory_uri() ); ?>/images/touch/chrome-touch-icon-192x192.png">-->
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php  wp_title( '|', true, 'right' ); ?>">
    <!--<link rel="apple-touch-icon-precomposed" href="<?php  echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon-precomposed.png">-->
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <!--<meta name="msapplication-TileImage" content="<?php  echo esc_url( get_template_directory_uri() ); ?>/images/touch/ms-touch-icon-144x144-precomposed.png">-->
    <meta name="msapplication-TileColor" content="#3372DF">
    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <!-- you can choose to use local or CDN file -->
    <!--<link href="<?php  echo esc_url( get_template_directory_uri() ); ?>/css/icon.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--<link rel="stylesheet" href="<?php  echo esc_url( get_template_directory_uri() ); ?>/css/material.indigo-pink.min.css"> -->
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css" />
    <link rel="stylesheet" href="<?php  echo esc_url( get_template_directory_uri() ); ?>/material.scss">
    <link rel="stylesheet" href="<?php  echo esc_url( get_template_directory_uri() ); ?>/style.css">
    <style>
    .myfab {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
<?php  wp_head(); ?>
  </head>
<body style="background-image: url('<?php  echo get_blog_bg_url(); ?>');">