<?php

require("function.php");
$conn = getconn();

$id = $_REQUEST["id"];
$sql = "SELECT * FROM users WHERE id = $id";
error_log($sql);

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$record = $stmt->fetch();
//print_r($record);

?>
<html>
<head>
        <title>EDIT USER</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
        <body class="d-flex flex-column h-100 container" style="background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwallpaperaccess.com%2Femployee&psig=AOvVaw1yhyPBfoBHKeDyaadM_bO5&ust=1634191278438000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCIiTqY3bxvMCFQAAAAAdAAAAABAE');
    background-repeat: no-repeat; background-size: cover;">
                <header>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                          <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                  </div>
                                </div>
                          </div>
                        </nav>
                </header>
                <h3 style="margin-top: 10px; font-style: italic; font-weight: bold;text-align: center;">Edit Record</h3>
                <form action="edit_action.php" method="POST" style="margin-top: 20px; background-color: rgba(0, 0, 0, 0.6); padding: 20px;color: white; border-radius: 10px;max-width: 800px; text-align: left;">

                        <input type="hidden" name="id" required value="<?php echo $record["id"] ?>"/>
                <div class="mb-3">
                        <label for="name" class="form-label">First Name</label>
                        <input type="text" class ="w-100 p-1" name="full_name" required value="<?php echo $record["full_name"]; ?>"/></div>
                <div class="mb-3">
                        <label for="name" class="form-label">Last Name</label>
                        <input type="text" class ="w-100 p-1" name="last_name" required value="<?php echo $record["last_name"]; ?>"/></div>
                <div class="mb-3">
                        <label for="name" class="form-label">Address</label>
                        <input type="text" name="address" class ="w-100 p-1" required value="<?php echo $record["address"]; ?>"/></div>
                <div class="mb-3">
                        <label for="name" class="form-label">What's App Number</label>
                        <input type="text" name="contact_no" class ="w-100 p-1" required value="<?php echo $record["contact_no"]; ?>"/></div>

<center>
                <input type="submit" value="Update" class="btn btn-success"/>&nbsp;&nbsp;
                <input type="reset" value="Clear" class="btn btn-dark"/>&nbsp;&nbsp;
                <a href="listing.php" class="btn btn-warning">Close</a>
        </center>
        </form>
</html>
