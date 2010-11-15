<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

if (TYPO3_MODE=='BE')	{
	$tmp_config = unserialize($_EXTCONF);
	
	if($tmp_config["allow_nonadmins"] == 1){
		t3lib_extMgm::addModule("user","txt3quixplorerM1","",t3lib_extMgm::extPath($_EXTKEY)."mod1/");
	} else {
		t3lib_extMgm::addModule("tools","txt3quixplorerM1","",t3lib_extMgm::extPath($_EXTKEY)."mod1/");
	}
}
?>