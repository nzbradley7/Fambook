
<?php

require 'config.php';
require 'session.php';

$sql = "SELECT * FROM posts ORDER BY id DESC";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  echo("<div class='well well-sm'>
    <div id='" . $row['id'] . "'>
    <h3>" . $row['name'] . "</h3>
      <div id='body' class='container'>
        <div class='row'>
          <p class='text-justify col-sm-11'>". $row['body'] . "</p>
        </div>
      </div>
    </div>
  </div>");
  }

$conn->close();
?>
