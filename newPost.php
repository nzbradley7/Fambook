<?php

            require 'config.php';
            require 'session.php';
            require 'inputTest.php';
            $message = '';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $body = test_input($_POST["body"]);

              $sql = "INSERT INTO posts (name, body) VALUES ('$login_session', '$body')";
              if ($conn->query($sql) === TRUE) {
                  header('Location: index.php');
              } else {
                  $message = "Error: " . $sql . "<br>" . $conn->error;
              }
            }
?>
