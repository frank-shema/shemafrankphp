<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My shop</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    />
  </head>

  <body>
    <div class="container my-5">
      <h2>List of students </h2>
      <a href="./create.php" class="btn btn-primary" role="button"
        >New Student</a
      >
      <br />
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <?php
            require_once("connectdb.php");
            $sql = "SELECT * FROM clients";
            $result = $connection->query($sql);
            if (!$result) {
              die("Invalid query: " . $connection->error);
            }
          
            while ($row = $result->fetch_assoc()) {
              echo "
              <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[phone]</td>
                <td>$row[address]</td>
                <td>$row[created_at]</td>
                <td>
                    <a href=\"./edit.php?id=$row[id]\" class=\"btn btn-primary btn-sm\">Edit</a>
                    <a href=\"./delete.php?id=$row[id]\" class=\"btn btn-danger btn-sm\">Delete</a>
                </td>
              </tr>
              ";
            } 
          ?>
        </tbody>
      </table>

      <div class="text-center">
        <a href="./userdata.php" class="btn btn-primary btn-sm" target="blank">Data export/Download</a>
      </div>
    </div>
  </body>
</html>

