<?php
include("connection.php");

if (isset($_POST['submit'])) {

    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];

    $sql = "INSERT INTO users (Name,Email,Phone)
    VALUES('$Name','$Email',$Phone)";

    if ($conn->query($sql) === TRUE) {
        header("Location:userlist.php");
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home</title>
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
        <h3 class="mt-3">Crud Operation</h3>
        <form action="#" method="post" class="was-validated">
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Name:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter Name" name="name" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Email:</label>
                <input type="email" class="form-control" id="pwd" placeholder="Enter Email" name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Phone:</label>
                <input type="number" class="form-control" id="number" placeholder="Enter Phone" name="phone" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>