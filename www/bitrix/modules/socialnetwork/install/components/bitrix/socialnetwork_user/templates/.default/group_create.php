<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
$pageId = "";
include("util_menu.php");
?>
<?

if ($_GET["IFRAME"] == "Y")
	$component_tmp = "bitrix:socialnetwork.group_create.ex";
else
	$component_tmp = "bitrix:socialnetwork.group_create";

$APPLICATION->IncludeComponent(
	$component_tmp, 
	"", 
	Array(
		"PATH_TO_USER" => $arResult["PATH_TO_USER"],
		"PATH_TO_GROUP" => $arParams["PATH_TO_GROUP"],
		"PATH_TO_GROUP_CREATE" => $arResult["PATH_TO_GROUP_CREATE"],
		"ALLOW_REDIRECT_REQUEST" => $arParams["ALLOW_GROUP_CREATE_REDIRECT_REQUEST"],
		"REDIRECT_REQUEST" => $arParams["GROUP_CREATE_REDIRECT_REQUEST"],
		"PAGE_VAR" => $arResult["ALIASES"]["page"],
		"USER_VAR" => $arResult["ALIASES"]["user_id"],
		"GROUP_VAR" => $arResult["ALIASES"]["group_id"],
		"SET_NAV_CHAIN" => $arResult["SET_NAV_CHAIN"],
		"SET_TITLE" => $arResult["SET_TITLE"],
		"USER_ID" => $arResult["VARIABLES"]["user_id"],
		"GROUP_ID" => $arResult["VARIABLES"]["group_id"],
		"NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
		"SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
		"USE_KEYWORDS" => $arParams["GROUP_USE_KEYWORDS"],
		"USE_AUTOSUBSCRIBE" => "N",
	),
	$component 
);
?>