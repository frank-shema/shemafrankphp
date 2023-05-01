<?php
require_once("connectdb.php");
header('Content-type: application/vnd-ms-excel');
$filename = "user_data.xls";
header("Content-Disposition: attachment; filename=\"$filename\"");
?>
<table class="table">
  <thead>
    <tr>
      <th style="border:2px solid black">ID</th>
      <th style="border:2px solid black">Name</th>
      <th style="border:2px solid black">Email</th>
      <th style="border:2px solid black">Phone</th>
      <th style="border:2px solid black">Address</th>
      <th style="border:2px solid black">Created At</th>
      <th style="border:2px solid black">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT * FROM clients";
      $result = $connection->query($sql);
      if (!$result) {
        die("Invalid query: " . $connection->error);
      }

      while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
          <td style='border:2px solid black'>$row[id]</td>
          <td style='border:2px solid black'>$row[name]</td>
          <td style='border:2px solid black'>$row[email]</td>
          <td style='border:2px solid black'>$row[phone]</td>
          <td style='border:2px solid black'>$row[address]</td>
          <td style='border:2px solid black'>$row[created_at]</td>
          <td style='border:2px solid black'>
              <a href=\"./edit.php?id=$row[id]\" class=\"btn btn-primary btn-sm\">Edit</a>
              <a href=\"./delete.php?id=$row[id]\" class=\"btn btn-danger btn-sm\">Delete</a>
          </td>
        </tr>
        ";
      } 
    ?>
  </tbody>
</table>

