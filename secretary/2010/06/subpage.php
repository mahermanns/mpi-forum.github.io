<?
if (!isset($topdir)) {
    $meeting_top = ".";
    $topdir = "../../..";
}
if (!isset($long_desc)) {
    $long_desc = $short_desc;
}
include_once("$meeting_top/top-nav.php");
$top_navlist[] = new TopNav($short_desc, "$topdir/secretary/2010/06/$file");

$head_title = "MPI Forum meeting June '10: $short_desc";
$body_title = "MPI Forum meeting: $long_desc";
include_once("$topdir/include/header.php");
include_once("$topdir/secretary/meetings.php");

meeting_header("June 14-16, 2010", 
               "San Jose, CA, USA");
