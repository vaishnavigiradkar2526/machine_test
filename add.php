<?php
require ("function.php");
?>


<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="d-flex flex-column h-100 container" style="background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwallpaperaccess.com%2Femployee&psig=AOvVaw1yhyPBfoBHKeDyaadM_bO5&ust=1634191278438000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCIiTqY3bxvMCFQAAAAAdAAAAABAE');
    background-repeat: no-repeat; background-size: cover;">

        <h3 style="margin-top: 10px; font-style: italic; font-weight: bold;text-align: center;">Add Record</h3>

        <center>
                <form action = "add_action.php" method "POST"  style="margin-top: 20px; background-color: rgba(0, 0, 0, 0.6); padding: 40px;color: white; border-radius: 10px;max-width: 800px; text-align: left;" />

                        <div class="mb-3">
                                <label for="name" class="form-label">First_name</label>
                                <input type = "text" name = "full_name" class = "w-100 p-1" required autofocus placeholder = "FIRST NAME.."/></div>
                        <div class="mb-3">
                                <label for="name" class="form-label">Last_Name</label>
                                <input type = "text" name = "last_name" class = "w-100 p-1"  required autofocus placeholder = "LAST NAME.."/></div>
                        <div class="mb-3">
                                <label for="name" class="form-label">Address</label>
                                <input type = "text" name = "address" class = "w-100 p-1" required autofocus placeholder = "ADDRESS.."/></div>
                        <div class="mb-3">
                                <label for="name" class="form-label">Mobile Number</label>
				<input type = "text" name = "contact_no" class = "w-100 p-1" required autofocus placeholder = "MOBILE NUMBER.."/></div>

<input type="submit" class="btn btn-success" value="Add"/>&nbsp;&nbsp;
                        <input type="reset" class="btn btn-dark" value="Clear"/>&nbsp;&nbsp;
                        <a href="listing.php" class="btn btn-warning" >Close</a>
<br>

</form>
</center>
</body>
