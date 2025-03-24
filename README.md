# ChkStatus

ChkStatus is a simple PHP script used to check and display the operational status of a website. Based on a defined status code, it dynamically displays the appropriate page: either a home page, a maintenance page, or an error page. The script is designed to be lightweight and easy to configure.

## Features

- **Server Status Check**: The script can display different pages based on the server status.
- **Easy Configuration**: Simply change the status code to alter the page that is displayed.
- **Customizable Pages**: You can customize the home page, maintenance page, and error page to fit your needs.

## Status Codes

The script uses a simple status code system to determine which page to display. The following status codes are used:

- `0`: Operating Normally (Home page)
- `1`: Under Maintenance (Maintenance page)
- Default: Error page

## Usage

1. Define your pages:
   - `$Home_Page`: Path to the home page.
   - `$Maint_Page`: Path to the maintenance page.
   - `$Error_Page`: Path to the error page.

2. Set the `server_status` variable to the appropriate code:
   - `0` for normal operation
   - `1` for maintenance
   - Default for invalid or no status set

3. Include the script in your `index.php` to display the correct page based on the current server status.

## Configuration Example

```php
<?php
/* CONFIGURATION */
$Home_Page  = "Pages/Home.php";         
$Maint_Page = "Pages/Maintenance.php";  
$Error_Page = "404.php";                

$server_status = 1; // Change this value to reflect different statuses

/* STATUS HANDLER */
switch($server_status) {
    case 0: // Normal
        include($Home_Page);
        break;
    case 1: // Maintenance
        include($Maint_Page);
        break;
    default:
        include($Error_Page);
        break;
}
?>
