<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Частые вопросы");
?><div class="container">
	<div class="row margin-bottom-60 hentry">
		<div class="col-xs-12 col-md-9">
			<h3>Текст вопроса</h3>
			<div>
				 Текст ответа
			</div>
			<h3>Текст вопроса</h3>
			<div>
				 Текст ответа
			</div>
			<h3>Текст вопроса</h3>
			<div>
				 Текст ответа
			</div>
		</div>
		 <!-- /.col -->
		<div class="col-xs-12 col-md-3">
			<div class="sidebar widget_nav_menu faq">
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"cargopress_left_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "right",
		"COMPONENT_TEMPLATE" => "cargopress_left_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "right",
		"USE_EXT" => "Y"
	),
	false
);?>
			</div>
            <a target="_self" class="btn btn-info" id="button_requestQuote" data-toggle="modal" data-target="#myModal">Задать вопрос</a>
		</div>
		 <!-- /.col -->
	</div>
	 <!-- /.row -->
</div>
<!-- /.container --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>