<?php
require_once("includes/config.php");

if (!empty($_POST["roomno"]) && !empty($_POST["roomtype"])) {
    $roomno = $_POST["roomno"];
    $roomtype = $_POST["roomtype"];

    $room = getRoomDetails($roomno);

    if ($room === null) {
        echo "Invalid room number.";
    } else {
        $occupiedSeats = getOccupiedSeats($roomno); // You'll need to implement this
        $availableSeats = calculateAvailableSeats($room['seater'], $roomtype, $occupiedSeats);

        if ($availableSeats > 0) {
            echo "<span style='color:green'>$availableSeats Seats available.</span>";
        } else {
            echo "<span style='color:red'>No seats available.</span>";
        }
    }
}

function getRoomDetails($roomno) {
    global $mysqli;

    $stmt = $mysqli->prepare("SELECT seater FROM rooms WHERE room_no = ?");
    $stmt->bind_param('i', $roomno);
    $stmt->execute();
    $stmt->bind_result($seater);
    $stmt->fetch();
    $stmt->close();

    if ($seater === null) {
        return null;
    }

    return ['seater' => $seater];
}

function getOccupiedSeats($roomno) {
    // Implement your logic to get occupied seats for the specified room
    // You might need to adjust your database schema to track this information
    // For now, let's assume you have a separate table to track occupied seats
    // You would query that table and return the count of occupied seats.
}

function calculateAvailableSeats($totalSeats, $roomtype, $occupiedSeats) {
    // Define predefined capacities for each room type
    $capacities = [
        'single' => 1,
        'double' => 2,
        'three' => 3,
        'four' => 4
    ];

    $capacity = $capacities[$roomtype];

    // Calculate available seats based on the predefined capacity, occupied seats, and total seats
    $availableSeats = ($totalSeats / $capacity) - $occupiedSeats;

    return $availableSeats;
}
?>
