<?php
require_once("connectdb.php");
$id="";
$name = "";
$email = "";
$phone = "";
$address = "";
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //get method: show the data of the client
    if(!isset($_GET["id"])) {
        header("location: ./crud.php");
        exit;
    }

    $id = $_GET["id"];
    $sql = "SELECT * FROM clients WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row) {
        header("location:./crud.php");
        exit;
    }

    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
} else {
    //post method:update the data of the client
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    if (empty($id) || empty($name) || empty($email) || empty($phone) || empty($address)) {
        $errorMessage = "All the fields are required";
    } else {
        $sql = "UPDATE clients SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id"; 

        $result = $connection->query($sql);

        if(!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
        } else {
            $successMessage = "Client updated correctly";
            header("location:./crud.php");
            exit;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Edit student</h2>

        <?php if (!empty($errorMessage)): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?php echo $errorMessage; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" >
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email"  value="<?php echo $email; ?>" >
                </div>
            </div>

            <div class="row mb-3">
                <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="tel" class="form-control" name="phone"  value="<?php echo $phone; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="address" class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address"  value="<?php echo $address; ?>">
                </div>
            </div>

            <?php if (!empty($successMessage)): ?>
    <div class="row mb-3">
        <div class="offset-sm-3 col-sm-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $successMessage; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>


            <div class="row mb-3">
             <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
             </div>

             <div class="col-sm-3 d-grid">
                <a href="/crud.php" class="btn btn-outline-primary" role="button">Cancel</a>
             </div>
            </div>
        </form>
    </div>
</body>
</html>