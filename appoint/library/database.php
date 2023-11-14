<?php
require_once 'config.php';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass,$dbName);// or die ('MySQL connect failed. ' . mysql_error());
// mysql_select_db($dbName) or die('Cannot select database. ' . mysql_error());

function dbQuery($sql)
{
	global $dbConn;
	$result = mysqli_query($dbConn,$sql); //or die(mysql_error());
	return $result;
}

function dbAffectedRows()
{
	global $dbConn;
	return mysql_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
	return mysql_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	return mysqli_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysqli_free_result($result);
}

function dbNumRows($result)
{
	return mysqli_num_rows($result);
	
}

function dbSelect($dbName)
{
	return mysqli_select_db($dbName);
}

function dbInsertId()
{
	return mysqli_insert_id();
}
?>