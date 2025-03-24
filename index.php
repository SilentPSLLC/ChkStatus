<?php
/*      AUTHOR: Christopher Sparrowgrove | CodeStrm
 *     WEBSITE: https://CodeStrm.com
 *        NAME: ChkStatus | BullFrog
 * DESCRIPTION: Checks operating status of the website, displaying the appropriate page. An effective and simple maintenance page display tool.
 *   COPYRIGHT: ©Copyright 2012-2025 - All Rights Reserved
 */

## CONFIGURATION ##
$Home_Page = "Pages/Home.php"; //Default Home page
$Maint_Page = "Pages/Maintenance.php"; //Maintenance page
$Error_Page = "404.php";
$server_status = 0; // 0 = Normal, 1 = Maintenance

## STATUS HANDLER ##
 switch($server_status) {
  case 0: //Normal
   include ($Home_Page);
   break;
  case 1: //Maintenance
   include ($Maint_Page);
   break;
  default: //Invalid or no status set
   include ($Error_Page);
   break;
 }
?>
