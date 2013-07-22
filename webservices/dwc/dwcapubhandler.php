<?php
include_once('../../config/symbini.php');
include_once($serverRoot.'/classes/OccurrenceDwcArchiver.php');

$action = array_key_exists("action",$_REQUEST)?$_REQUEST["action"]:'';
$collid = array_key_exists("collid",$_REQUEST)?$_REQUEST["collid"]:0;
$cond = array_key_exists("cond",$_REQUEST)?$_REQUEST["cond"]:'';
$collType = array_key_exists("colltype",$_REQUEST)?$_REQUEST["colltype"]:'specimens';
$includeDets = array_key_exists("dets",$_REQUEST)?$_REQUEST["dets"]:1;
$includeImgs = array_key_exists("imgs",$_REQUEST)?$_REQUEST["imgs"]:1;

if($collid){
	$dwcaHandler = new OccurrenceDwcArchiver();
	
	$dwcaHandler->setSilent(1);
	$dwcaHandler->setFileName('webreq');
	$dwcaHandler->setCollArr($collid,$collType);
	if($cond) $dwcaHandler->setConditionStr($cond);

	$archiveFile = $dwcaHandler->createDwcArchive($includeDets, $includeImgs, 1);

	if($archiveFile){
		//ob_start();
		header('Content-Description: DwC-A File Transfer');
		header('Content-Type: application/zip');
		header('Content-Disposition: attachment; filename='.basename($archiveFile));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($archiveFile));
		ob_clean();
		flush();
		//od_end_clean();
		readfile($archiveFile);
		unlink($archiveFile);
		exit;
	}
	else{
		header('Content-Description: DwC-A File Transfer Error');
		header('Content-Type: text/plain');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		echo 'Error: unable to create archive';
	}
}
else{
	header('Content-Description: DwC-A File Transfer Error');
	header('Content-Type: text/plain');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Pragma: public');
	echo 'Error: collectoin identifier is not defined';
}
?>