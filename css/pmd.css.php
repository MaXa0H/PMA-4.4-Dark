<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Designer styles for the pmadarktheme theme
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMADarkTheme
 */
use PMA\libraries\Theme;

// unplanned execution path
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')) {
    exit();
}

/** @var Theme $pmaTheme */
$pmaTheme = $_SESSION['PMA_Theme'];
$headerImg = $pmaTheme->getImgPath('pmd/Header.png');
$minusImg = $pmaTheme->getImgPath('pmd/minus.png');
$plusImg = $pmaTheme->getImgPath('pmd/plus.png');
$resizeImg = $pmaTheme->getImgPath('pmd/resize.png');
?>

/* Designer */
.input_tab {
    background-color: rgba(255,255,255,0.2);
    color: #fff;
}

.content_fullscreen {
    position: relative;
    overflow: auto;
}

#canvas_outer {
    position: relative;
    width: 100%;
    display: block;
}

#canvas {
    color: #ccc;
}

canvas.pmd {
    display: inline-block;
    overflow: hidden;
    text-align: left;
}

canvas.pmd * {
    behavior: url(#default#VML);
}

.pmd_tab {
    background-color: #222;
    color: #ddd;
    border-collapse: collapse;
    border: 1px solid rgba(255,255,255,0.1);
    z-index: 1;
    -moz-user-select: none;
}

.pmd_tab .header {
    background-image: url(<?php echo $headerImg; ?>);
    background-color: #3e3e3e;
    background-repeat: repeat-x;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.tab_zag {
    vertical-align: middle;
    text-align: center;
    cursor: move;
    padding: 1px;
    font-weight: bold;
}

.tab_zag_2 {
    background-color: #d64937;
    background-repeat: repeat-x;
    vertical-align: middle;
    text-align: center;
    cursor: move;
    padding: 1px;
    font-weight: bold;
}

.tab_field {
    background: rgba(255,255,255,0.05);
    color: #ccc;
    cursor: default;
}

.tab_field_2 {
    background-color: #d64937;
    color: #fff;
    background-repeat: repeat-x;
    cursor: default;
}

.tab_field_3 {
    background-color: #000; /*#DDEEFF*/
    color: #fff;
    cursor: default;
}

#pmd_hint {
    padding: 2px;
    white-space: nowrap;
    position: absolute;
    background-color: rgba(255,255,255,0.1);
    box-shadow: 0 0 1px 1px #999;
    color: #fff;
    z-index: 3;
    border: 1px solid #333;
    display: none;
}

.scroll_tab {
    overflow: auto;
    width: 100%;
    height: 500px;
}

.pmd_Tabs {
    cursor: default;
    color: #d64937;
    white-space: nowrap;
    text-decoration: none;
    text-indent: 3px;
    font-weight: bold;
    margin-left: 2px;
    text-align: <?php echo $left; ?>;
    background-color: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
}

.pmd_Tabs2 {
    cursor: default;
    color: #fff;
    background: #d64937;
    text-indent: 3px;
    font-weight: bold;
    white-space: nowrap;
    text-decoration: none;
    border: 1px solid rgba(255,255,255,0.1);
    text-align: <?php echo $left; ?>;
}

.owner {
    font-weight: normal;
    color: #ccc;
}

.option_tab {
    padding-left: 2px;
    padding-right: 2px;
    width: 5px;
}

.select_all {
    vertical-align: top;
    padding-left: 2px;
    padding-right: 2px;
    cursor: default;
    width: 1px;
    color: #000;
    background-image: url(<?php echo $headerImg; ?>);
    background-color: #3e3e3e;
    background-repeat: repeat-x;
}

.small_tab {
    vertical-align: middle;
    color: #fff;
    background-image: url(<?php echo $headerImg; ?>);
    background-color: #3e3e3e;
    cursor: default;
    text-align: center;
    font-weight: bold;
    padding-left: 2px;
    padding-right: 2px;
    width: 1px;
    text-decoration: none;
}

.small_tab2 {
    vertical-align: middle;
    color: #fff;
    background-color: #d64937;
    cursor: default;
    padding-left: 2px;
    padding-right: 2px;
    text-align: center;
    font-weight: bold;
    width: 1px;
    text-decoration: none;
}

.small_tab_pref {
    background-image: url(<?php echo $headerImg; ?>);
    background-color: #3e3e3e;
    background-repeat: repeat-x;
    vertical-align: middle;
    text-align: center;
    width: 1px;
}

.small_tab_pref2 {
    vertical-align: middle;
    color: #fff;
    background-color: #d64937;
    cursor: default;
    text-align: center;
    font-weight: bold;
    width: 1px;
    text-decoration: none;
}

.butt {
    border: #4477aa solid 1px;
    font-weight: bold;
    height: 19px;
    width: 70px;
    background-color: #fff;
    color: #ccc;
    vertical-align: baseline;
}

.L_butt2_1 {
    padding: 1px;
    text-decoration: none;
    vertical-align: middle;
    cursor: default;
}

.L_butt2_2 {
    padding: 1px;
    background: #d64937;
    color: #fff;
    text-decoration: none;
    vertical-align: middle;
    cursor: default;
}

/* ---------------------------------------------------------------------------*/
.bor {
    width: 10px;
    height: 10px;
}

.frams1 {
    background: rgba(255,255,255,0.2);
    box-shadow: 2px 2px 2px -1px #999 inset;
    border-radius: 100% 0 0 0;
}

.frams2 {
    background: rgba(255,255,255,0.2);
    box-shadow: -2px 2px 2px -1px #999 inset;
    border-radius: 0 100% 0 0;
}

.frams3 {
    background: rgba(255,255,255,0.2);
    box-shadow: -2px -2px 2px -1px #999 inset;
    border-radius: 0 0 100% 0;
}

.frams4 {
    background: rgba(255,255,255,0.2);
    box-shadow: 2px -2px 2px -1px #999 inset;
    border-radius: 0 0 0 100%;
}

.frams5 {
    background: rgba(255,255,255,0.2);
    border-top: #999 solid 1px;
    box-shadow: 0 2px 2px -1px #999 inset;
}

.frams6 {
    background: rgba(255,255,255,0.2);
    box-shadow: -2px 0 2px -1px #999 inset;
}

.frams7 {
    background: rgba(255,255,255,0.2);
    box-shadow: 0 -2px 2px -1px #999 inset;
}

.frams8 {
    background: rgba(255,255,255,0.2);
    box-shadow: 2px 0 2px -1px #999 inset;
}

#osn_tab {
    position: absolute;
    color: #ccc;
}

.pmd_header {
    background-color: #EAEEF0;
    color: #000;
    text-align: center;
    font-weight: bold;
    margin: 0;
    padding: 0;
    background-position: top;
    background-repeat: repeat-x;
    border-right: #999 solid 1px;
    border-left: #999 solid 1px;
    height: 28px;
    z-index: 101;
    width: 100%;
    position: fixed;
}

.pmd_header a, .pmd_header span{
    display: block;
    float: <?php echo $left; ?>;
    margin: 3px 1px 4px;
    height: 20px;
    border: 1px dotted #fff;
}

.pmd_header .M_bord {
    display: block;
    float: <?php echo $left; ?>;
    margin: 4px;
    height: 20px;
    width: 2px;
}

.pmd_header a.first {
    margin-right: 1em;
}

.pmd_header a.last {
    margin-left: 1em;
}

a.M_butt_Selected_down_IE,
a.M_butt_Selected_down {
    border: 1px solid rgba(255,255,255,0.1);
    background-color: #222;
    color: #fff;
}

a.M_butt_Selected_down_IE:hover,
a.M_butt_Selected_down:hover,
a.M_butt:hover {
    background-color: #d64937;
    color: #fff;
}

#layer_menu {
    z-index: 98;
    position: relative;
    float: right;
    background-color: #333;
    border: 1px solid rgba(255,255,255,0.1);
}

#layer_menu.left {
    float: left;
}

#layer_upd_relation {
    position: absolute;
    <?php echo $left; ?>: 637px;
    top: 224px;
    z-index: 100;
}

#layer_new_relation {
    position: absolute;
    <?php echo $left; ?>: 636px;
    top: 85px;
    z-index: 100;
    width: 153px;
}

#pmd_optionse {
    position: absolute;
    <?php echo $left; ?>: 636px;
    top: 85px;
    z-index: 100;
    width: 153px;
}

#layer_menu_sizer {
    background-image: url(<?php echo $resizeImg; ?>);
    cursor: ew-resize;
}

#layer_menu_sizer .icon {
    margin: 0;
}

.panel {
    position: fixed;
    top: 60px;
    <?php echo $right; ?>: 0;
    width: 350px;
    max-height: 500px;
    display: none;
    overflow: auto;
    padding-top: 34px;
    z-index: 102;
}

a.trigger {
    position: fixed;
    text-decoration: none;
    top: 60px;
    <?php echo $right; ?>: 0;
    color: #fff;
    padding: 10px 40px 10px 15px;
    background: #333 url(<?php echo $plusImg; ?>) 85% 55% no-repeat;
    border: 1px solid #444;
    display: block;
    z-index: 102;
}

a.trigger:hover {
    color: #080808;
    background: #fff696 url(<?php echo $plusImg; ?>) 85% 55% no-repeat;
    border: 1px solid #999;
}

a.active.trigger {
    background: #222 url(<?php echo $minusImg; ?>) 85% 55% no-repeat;
    z-index: 999;
}

a.active.trigger:hover {
    background: #fff696 url(<?php echo $minusImg; ?>) 85% 55% no-repeat;
}

.toggle_container .block {
    background-color: #DBE4E8;
    border-top: 1px solid #999;
}

.history_table {
    text-align: center;
    background-color: #9999CC;
    cursor: pointer;
}

.history_table2 {
    text-align: center;
    background-color: #DBE4E8;
}

#ab {
    min-width: 300px;
}

#ab .ui-accordion-content {
    padding: 0;
}

#box {
    display: none;
}

#foreignkeychk {
    text-align: <?php echo $left; ?>;
    position: absolute;
    cursor: pointer;
}

.side-menu {
    float: left;
    position: fixed;
    width: auto;
    height: auto;
    background: #333;
    border: 1px solid rgba(255,255,255,0.1);
    overflow: hidden;
    z-index: 50;
    padding: 2px;
}

.side-menu.right {
    float: right;
    right: 0;
}

.side-menu .hide {
    display: none;
}

.side-menu a {
    display: block;
    float: none;
    overflow: hidden;
    border: 1px solid rgba(255,255,255,0.05);
}

.side-menu a:hover, .side-menu a:focus {
    display: block;
    float: none;
    overflow: hidden;
    border: 1px solid rgba(255,255,255,0.05);
}

.side-menu span {
    border: none;
}

.side-menu img,
.side-menu .text {
    float: left;
}

#name-panel {
    border-bottom: 1px solid rgba(255,255,255,0.1);
    text-align: center;
    background: #333;
    width: 100%;
    font-size: 1.2em;
    padding: 10px;
    font-weight: bold;
}

#container-form {
    width: 100%;
    position: absolute;
    left: 0;
}
