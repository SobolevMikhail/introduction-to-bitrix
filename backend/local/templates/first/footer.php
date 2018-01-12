<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();   
IncludeTemplateLangFile(__FILE__);
?>
		</main>
		<footer>
			<div class="klim-footer-block">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH . "/include/logo.php"
					)
				);?>
			</div>
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"klim_footer_block",
				Array(
					"ROOT_MENU_TYPE" => "top",
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "top",
					"USE_EXT" => "Y",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "Y",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => "",
				),
				false
			);?>
			<div class="klim-footer-block">
				<span class="klim-head-phone">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/include/phone.php"
						)
					);?>
				</span>
				<br>
				<span>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/include/address.php"
						)
					);?>
				</span>
			</div>
		</footer>
	</div>
</body>
</html>