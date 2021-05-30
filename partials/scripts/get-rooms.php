<?php
/**
 * GET DATA FOR CUSTOMERS ARCHIVE
 */

require_once __DIR__ . '/database.php';

// Ottieni stanze
$sql = "SELECT `id`, `room_number`, `floor`, `beds` FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $rooms = [];

    while ($row = $result->fetch_assoc()) {
        // popolare array stanze
        $rooms[] = $row;
    }
} else {
    echo 'Query error';
}

// close db connection
$conn->close();