<?php
// post vars
$page = rex_request('page', 'string');
$subpage = rex_request('subpage', 'string');

// if no subpage specified, use this one
if ($subpage == '') {
	$subpage = 'help';
}

// layout top
require($REX['INCLUDE_PATH'] . '/layout/top.php');

// title
rex_title($REX['ADDON']['name']['opengeodb'] . ' <span style="font-size:14px; color:silver;">' . $REX['ADDON']['version']['opengeodb'] . '</span>'/*, $REX['ADDON']['opengeodb']['SUBPAGES']*/);

// include subpage
include($REX['INCLUDE_PATH'] . '/addons/opengeodb/pages/' . $subpage . '.inc.php');
?>

<style type="text/css">
a.extern,
#rex-page-opengeodb .rex-addon-output a[href^="http://"],
#rex-page-opengeodb .rex-addon-output a[href^="https://"] {
	background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAA8CAYAAACq76C9AAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFFSURBVHjaYtTpO/CfAQcACCAmBjwAIIAY//9HaNTtP4hiCkAAMeGSAAGAAGJCl7hcaM8IYwMEEBMuCRAACCAmXBIgABBAKA5CBwABhNcrAAGEVxIggPBKAgQQXkmAAMIrCRBAeCUBAgivJEAA4ZUECCC8kgABhFcSIIDwSgIEEF5JgADCKwkQQHglAQIIryRAAOGVBAggvJIAAYRXEiCA8EoCBBBeSYAAwisJEEB4JQECiAVbNoABgADCqxMggPDmMoAAwpvLAAIIby4DCCC8uQwggPDmMoAAwpvLAAIIr1cAAgivJEAA4ZUECCC8kgABhFcSIIDwSgIEEF5JgADCKwkQQHglAQIIryRAAOGVBAggvJIAAYRXEiCA8EoCBBBeSYAAwisJEEB4JQECCK8kQADhlQQIILySAAGEVxIggPBKAgQYAARTLlfrU5G2AAAAAElFTkSuQmCC) no-repeat right 3px;
	padding-right: 10px;
}

#rex-page-opengeodb div.rex-addon-content p.rex-code {
	margin-bottom: 22px;
	margin-top: 3px;
}

#rex-page-opengeodb .addon-template h1 {
	font-size: 18px;
	margin-bottom: 7px;
}

#rex-page-opengeodb .rex-addon-output a.rex-active {
    color: #14568A;
}

#rex-page-opengeodb .rex-addon-output div.rex-addon-content {
    padding: 10px 12px;
}

#rex-page-opengeodb .rex-addon-output div.rex-addon-content ul {
	margin-top: 0;
}

#rex-page-opengeodb .rex-code {
	overflow: auto;
	white-space: nowrap;
}

#rex-page-opengeodb p.logo {
	text-align: center;
	margin-top: 30px;
	margin-bottom: 15px;
}
</style>

<?php 
// layout bottom
require($REX['INCLUDE_PATH'] . '/layout/bottom.php');
?>
