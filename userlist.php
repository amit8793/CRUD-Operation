<?php
include("connection.php");
$showuser = mysqli_query($conn, "SELECT * FROM `users`");
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Userlist</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><span class="text-white">CRUD</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Add User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userlist.php">Userlist</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 class="my-3">Userlist</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sno = 1;
                while ($getdata = mysqli_fetch_assoc($showuser)) {
                    ?>
                    <tr>
                        <th>
                            <?php echo $sno ?>
                        </th>
                        <td>
                            <?php echo $getdata['Name'] ?>
                        </td>
                        <td>
                            <?php echo $getdata['Email'] ?>
                        </td>
                        <td>
                            <?php echo $getdata['Phone'] ?>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="edit.php?id=<?php echo $getdata['id'] ?>">Edit</a>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $getdata['id'] ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                    $sno++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>