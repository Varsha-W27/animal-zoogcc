<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="ticket.css"> 
    <style>
        .navbar {
            width: 100%;
            background-color: #8BC34A;
            color: #fff;
            padding: 1px;
            text-align: center;
        }
        .centered-container {
            width: 40%;
            margin: auto;
            padding: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            padding: 10px;
        }
        .footer {
            padding: 20px;
            text-align: center;
            background-color: #8BC34A;
            color: #fff;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
        .cancel-btn {
            background-color: #f44336;
        }
        .cancel-btn:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>
    <div class="centered-container">
        <div class="navbar">
            <h1><img src="\animal-zoogcc\img\icon\icon-10.png" alt="Icon"> &nbsp;Zoogenix Ticket</h1>
        </div>
        <div class="header">
            <?php
            include_once("connection.php");
            error_reporting(0);
            $sql = "SELECT * FROM booking ORDER BY bid DESC LIMIT 1";      
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo "<h2>Visitor Details</h2>";
            echo "<p><b>Booking Id</b>: ".$row['bid']."</p>";
            echo "<p><b>Name</b>: ".$row['name']."</p>";
            echo "<p><b>Last Name</b>: ".$row['last_name']."</p>"; 
            echo "<p><b>Contact</b>: ".$row['contact']."</p>"; 
            echo "<p><b>Email</b>: ".$row['email']."</p>";
            echo "<p><b>Adult</b>: ".$row['adult']."</p>";
            echo "<p><b>Child</b>: ".$row['child']."</p>"; 
            echo "<p><b>Individual</b>: ".$row['individual']."</p>";
            echo "<p><b>Vehicle</b>: ".$row['vehicle']."</p>"; 
            echo "<p><b>Camera</b>: ".$row['camera']."</p>"; 
            echo "<p><b>Total</b>: ".$row['total']."</p>"; 
            echo "<hr>";
            echo "<p><center><b>Date of Visit</b>: ".$row['date']."</center></p>"; 
            echo "<p><center><b>Time of Visit</b>: 09:00 AM - 5:00 PM</center></p>";
            echo "<p><center><b>Zoo Location</b>: Belgavi, Belgavi, Karnataka</center></p>";
            echo "<br>";
            echo "<button onclick='window.print()'>Print Ticket</button>";
            echo "<form action='cancel_ticket1.php' method='post'>
                    <input type='hidden' name='bid' value='".$row['bid']."'>
                    <button type='submit' class='cancel-btn'>Cancel Ticket</button>
                  </form>";
            mysqli_close($con);
            ?>
        </div>
        <div class="footer">
            <p><font color="blue">Please bring this ticket to the zoo for entry. Thank you for your purchase!</font></p>
        </div>
    </div>
</body>
</html>
