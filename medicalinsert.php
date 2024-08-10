<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "girls";
$conn = mysqli_connect($servername, $username, $password, $database);  




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST['userID']; 
    $dates = $_POST['dates']; 
    $mid = $_POST['mid'];
    $quantity = $_POST['quantity'];

    
    $insert_sql_med = "INSERT INTO possess (userID, dates, mid, quantity) 
                     VALUES ('$userID', '$dates', '$mid', '$quantity')";

    if ($conn->query($insert_sql_med) === TRUE) {
        echo "Medical Record added successfully";
    } else {
        echo "Error adding medical record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Medical Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            text-align: center;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Insert Medical Record</h1>
        <form action="" method="post">
            <label for="userID">User ID:</label><br>
            <input type="text" id="userID" name="userID"><br>
            <label for="dates">Issued on date:</label><br>
            <input type="date" id="dates" name="dates"><br>
            <label for="mid">Medicalkit ID:</label><br>
            <input type="text" id="mid" name="mid"><br>
            <label for="quantity">Quantity:</label><br>
            <input type="text" id="quantity" name="quantity"><br><br>
            <input type="submit" value="Insert">
        </form>
    </div>
</body>
</html>
