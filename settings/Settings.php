<?php

$wgLogos = [
    'icon' => "$wgScriptPath/public_assets/main/logo.svg",
    '1x' => "$wgScriptPath/public_assets/main/logo.svg",
];
$wgFavicon = "$wgScriptPath/public_assets/main/favicon.ico";

wfLoadExtension( 'SemanticMediaWiki' );
enableSemantics();
$smwgQMaxLimit = 10000;
$smwgQMaxInlineLimit = 10000;

define( 'NS_CUSTOMER', 3000 );
define( 'NS_CUSTOMER_TALK', 3001 );
define( 'NS_JOB', 3002 );
define( 'NS_JOB_TALK', 3003 );
define( 'NS_TASK', 3004 );
define( 'NS_TASK_TALK', 3005 );
$wgExtraNamespaces[NS_CUSTOMER] = 'Customer';
$wgExtraNamespaces[NS_CUSTOMER_TALK] = 'Customer_talk';
$wgExtraNamespaces[NS_JOB] = 'Job';
$wgExtraNamespaces[NS_JOB_TALK] = 'Job_talk';
$wgExtraNamespaces[NS_TASK] = 'Task';
$wgExtraNamespaces[NS_TASK_TALK] = 'Task_talk';
$wgContentNamespaces[] = NS_CUSTOMER;
$wgContentNamespaces[] = NS_JOB;
$wgContentNamespaces[] = NS_TASK;
$smwgNamespacesWithSemanticLinks[NS_CUSTOMER] = true;
$smwgNamespacesWithSemanticLinks[NS_JOB] = true;
$smwgNamespacesWithSemanticLinks[NS_TASK] = true;

wfLoadExtension( 'DisplayTitle' );
$wgAllowDisplayTitle = true;
$wgRestrictDisplayTitle = false;
$wgDisplayTitleHideSubtitle = true;

wfLoadExtension( 'PageForms' );
$wgPageFormsUseDisplayTitle = true;

wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;

wfLoadExtension( 'UrlGetParameters' );

wfLoadExtension( 'TitleIcon' );

// Vector 2022 forces a 1120px viewport on phones by default, which kills the
// dashboard and timer @media rules; responsive mode restores width=device-
// width. WrapTables catches any wide result table we didn't wrap.
$wgVectorResponsive = true;
$wgVectorWrapTablesTemporary = true;

wfLoadExtension( 'TimeTracker' );
$wgGroupPermissions['timetracker-admin']['timetracker-editothers'] = true;

wfLoadExtension( 'CreateUserPage' );
$wgCreateUserPage_PageContent = '{{User}}';