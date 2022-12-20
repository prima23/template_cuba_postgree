<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= (isset($page_name) ? $page_name : ''). ' | ' .(isset($app_name) ? $app_name : '');?></title>
    <link rel="icon" type="image/png" href="<?php echo $this->asset->image_path((isset($app_favico) ? $app_favico : '')) ?>">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/assets/css/vendors/themify.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/vendors/waitMe.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/assets/css/vendors/animate.css">
    <?= isset($page_css) ? $page_css : ''; ?>

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/mycss.css">