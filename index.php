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

#$server_status = $_SESSION['status']; //Set server status as a variable
$server_status = "0";

#SERVER STATUS MEANINGS & CODES
# Code 1: Under Construction
# Code 2: Offline (Shutdown) [TODO: Beta Testing Maybe? Via IP Filter]
# Code 3: Offline (Connect Error)

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
