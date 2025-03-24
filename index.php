<?php
/*      AUTHOR: Christopher Sparrowgrove | CodeStrm
 *     WEBSITE: https://CodeStrm.com
 *        NAME: ChkStatus | BullFrog
 * DESCRIPTION: Checks Operating status of website displaying the aproperate page. Effective simple maintenance page display tool.
 *   COPYRIGHT: ©Copyright 2012-2025 - All Rights Reserved
 */

## CONFIGURATION ##
$Home_Page = "Pages/Home.php"; //Default Home page
$Maint_Page = "Pages/Maintenance.php"; //Maintenance page
$Error_Page = "404.php";
$server_status = 0; //Set server status of the website to 0 for normal or 1 for Maintenance

 switch($server_status)
 {
  case 0: //Operating Normaly
      include ("Pages/Home.php");
   break;

  case 1||2||3: //Down for maintenance, construction, or offline
      echo "$server_status";
     // include '';
   include ($Maint_Page);
   break;

  default: //invalid or no status set
   include ($Error_Page);
   break;
 }

?>
