<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "girls";
$conn = mysqli_connect($servername, $username, $password, $database);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST['userID'];
    $room_no = $_POST['room_no'];

    
    $insert_sql_l = "INSERT INTO rooms_alloted (userID, room_no) 
                     VALUES ('$userID', '$room_no')";

    if ($conn->query($insert_sql_l) === TRUE) {
        echo "Rooms added successfully";
    } else {
        echo "Error adding Rooms: " . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>add room</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background:linear-gradient(45deg,#b0e0e6,#f5f5f5,#fff);
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border:5px solid black;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            text-align: center;
            border:3px solid black;
            display:inline-block;
            padding:10px;
            border-radius:5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 3px solid black;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #CBC3E3;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #CBC3E3;
        }
    </style>
</head>
<body>

</body>
</html>