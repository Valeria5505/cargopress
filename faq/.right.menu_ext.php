<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
    "IS_SEF" => "Y",
    "SEF_BASE_URL" => "#SITE_DIR#/faq/index.php?ID=#IBLOCK_ID#",
    "SECTION_PAGE_URL" => "#SECTION_ID#/",
    "DETAIL_PAGE_URL" => "#SECTION_ID#/#ELEMENT_ID#.html",
    "IBLOCK_TYPE" => "faq",
    "IBLOCK_ID" => "8",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "36000000"
),
    false
);
$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);