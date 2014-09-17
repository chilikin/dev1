<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("CATALOG_RECOMMENDED_PRODUCTS_COMPONENT_DEFAULT_TEMPLATE_NAME"),
	"DESCRIPTION" => GetMessage("CATALOG_RECOMMENDED_PRODUCTS_COMPONENT_DEFAULT_TEMPLATE_DESCRIPTION"),
	"ICON" => "/images/cat_list.gif",
	"CACHE_PATH" => "Y",
	"SORT" => 30,
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "catalog",
			"NAME" => GetMessage("CATALOG_RECOMMENDED_PRODUCTS_COMPONENT_IBLOCK_DESC_CATALOG"),
			"SORT" => 30,
			"CHILD" => array(
				"ID" => "catalog_cmpx",
			),
		),
	),
);

?>