<?php

use Bitrix\Main\Application;

define("DEFAULT_TEMPLATE_PATH", '/local/templates/.default');

if (Application::getInstance()->getContext()->getRequest()->getRequestedPageDirectory() === '/')
{
	$isMain = true;
}
