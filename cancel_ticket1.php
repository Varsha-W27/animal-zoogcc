<?php
include_once("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bid = $_POST['bid'];

    // Delete the booking record from the database
    $sql = "DELETE FROM booking WHERE bid = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $bid);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Booking cancelled successfully.'); window.location='zootickets1.php';</script>";
    } else {
        echo "<script>alert('Error cancelling booking. Please try again.'); window.location='zootickets1.php';</script>";
    }

    $stmt->close();
    $con->close();
} else {
    echo "<script>alert('Invalid request.'); window.location='zootickets1.php';</script>";
}
?>
