<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// // require_once __DIR__ . '/plates_common.php';
// // include_once('./_common.php');

// // helper include
// // include_once('./helper/main/authHelper.php');

// // 기존에 정의된 _INDEX_ 상수가 없다면 _INDEX_ 상수를 true로 정의
// // defineIndexCheck();
// require 'vendor/autoload.php';

// use League\Plates\Engine;
// // 템플릿 엔진 초기화 (템플릿 파일들이 있는 폴더 경로 지정)
// $templates = new Engine(__DIR__ . '/templates');

// $mainArgs = ['type' => 'main'];

// echo $templates->render('main/home', ['args' => $mainArgs]);
include_once('./_common.php');

if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}