<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Admin Area</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
   <h1>Welcome to the Admin Page!</h1>
   <p>Below you can view and edit the responses to the user survey</p>
   <div class="container">
      <div class="table-responsive">
         <h3>Fruit Survey Results</h3>
         <span id="result"></span>
         <div id="live_data"></div>
      </div>
   </div>
   <p><a href="logout.php">Sign Out of Your Account</a></p>
</body>
</html>

<script>
    $(document).ready(function() {
        function fetch_data() {
            $.ajax({
                url: "php/select.php",
                method: "POST",
                success: function(data) {
                    $('#live_data').html(data);
                }
            });
        }
        fetch_data();
        $(document).on('click', '#btn_add', function() {
            var first_name = $('#first_name').text();
            var last_name = $('#last_name').text();
            var new_fruit = $('#new_fruit').text();
            if (first_name == '') {
                alert("Enter First Name");
                return false;
            }
            if (last_name == '') {
                alert("Enter Last Name");
                return false;
            }
            if (new_fruit == '') {
                alert("Enter Favorite Fruit");
                return false;
            }
            $.ajax({
                url: "php/insert.php",
                method: "POST",
                data: {
                    first_name: first_name,
                    last_name: last_name,
                    new_fruit: new_fruit
                },
                dataType: "text",
                success: function(data) {
                    alert(data);
                    fetch_data();
                }
            })
        });

        function edit_data(id, text, column_name) {
            $.ajax({
                url: "php/edit.php",
                method: "POST",
                data: {
                    id: id,
                    text: text,
                    column_name: column_name
                },
                dataType: "text",
                success: function(data) {
                    //alert(data);
                    $('#result').html("<div class='alert alert-success'>" + data + "</div>");
                }
            });
        }
        $(document).on('blur', '.first_name', function() {
            var id = $(this).data("id1");
            var first_name = $(this).text();
            edit_data(id, first_name, "first_name");
        });
        $(document).on('blur', '.last_name', function() {
            var id = $(this).data("id2");
            var last_name = $(this).text();
            edit_data(id, last_name, "last_name");
        });
        $(document).on('blur', '.new_fruit', function() {
            var id = $(this).data("id3");
            var new_fruit = $(this).text();
            edit_data(id, new_fruit, "new_fruit");
        });
        $(document).on('click', '.btn_delete', function() {
            var id = $(this).data("id5");
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    url: "php/delete.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    dataType: "text",
                    success: function(data) {
                        alert(data);
                        fetch_data();
                    }
                });
            }
        });
    });
</script>