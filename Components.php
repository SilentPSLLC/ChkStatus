<?PHP

//storing database details in variables.
    $hostname = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "database";

    //creating connection to database
    $con = mysqli_connect($hostname, $username, $password, $dbname);
    //checking if connection is working or not
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    else
    {
        echo "Successfully Connected! <br>";
    }
    //Output Form Entries from the Database
    $sql = "SELECT * FROM Components";
    //fire query
    $result = mysqli_query($con, $sql);

?>
