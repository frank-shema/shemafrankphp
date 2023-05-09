<?php
require_once("connectdb.php");

$name = "";
$email = "";
$phone = "";
$address = "";
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        $errorMessage = "All the fields are required";
    } else {
        // Add the new client to the database
        $sql = "INSERT INTO clients(name,email,phone,address) VALUES ('$name','$email','$phone','$address')";

        $result = $connection->query($sql);
        if (!$result) {
            die("Invalid query: " . $connection->error);
        } else {
            $name = "";
            $email = "";
            $phone = "";
            $address = "";
            $successMessage = "Client added successfully";
            header("location: ./crud.php");
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
        <h2>New Student</h2>

        <?php if (!empty($errorMessage)): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?php echo $errorMessage; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
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