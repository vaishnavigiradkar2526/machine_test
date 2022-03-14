<?php 
require("dbconn.php");?>
<html>

        <head>
                <title>List Of users</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>



        </head>
         <header>
                        <h2 style="margin-top: 10px; font-style: font-weight: bold;text-align: center;">List Of Users</h2>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <div class="container-fluid">
                                        <a class="btn btn-primary" role="button" href="add.php">ADD Record</a>
                                        <form class="d-flex">
                                                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-outline-dark" type="submit">Search</button>
                                        </form>
                                </div>
                        </nav>
                </header>
                <body>

                <table class="table table-striped table-hover text-center">
                        <thead>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last_Name</th>
                                <th>Address</th>
                                <th>Mobile_number</th>
                                <th>Action</th>
			</thead>
<tbody id="tbody">I
 <?php foreach($records as $row) { ?>

                                        <tr>

                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['full_name']; ?></td>
                                                <td><?php echo $row['last_name']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['contact_no']; ?></td>
                                            
                                           
                                                <td>
                                           
                                                        <a href="edit.php?id=<?php echo $row["id"]; ?>">EDIT</a>
                                                        &nbsp;| &nbsp;
                                                        <a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure you want to delete this record?');">DELETE</a></td>

                                        </tr>

                                <?php } ?>



</tbody>
</table>

</body>

</html>
