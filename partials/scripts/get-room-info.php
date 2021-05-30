<?php

/**
 * GET DETAIL FOR ROOM ID
 */

require_once __DIR__ . '/database.php';

// get room id
$id = empty($_GET['id']) ? false : $_GET['id'];

if ($id) {

    $stmt = $conn->prepare("SELECT `stanze`.`id`, `stanze`.`room_number`, `stanze`.`floor`, `configurazione_id`, `configurazioni`.`title`, `configurazioni`.`description` 
    FROM `stanze` 
    INNER JOIN `prenotazioni` 
    ON `stanze`.`id` = `prenotazioni`.`stanza_id` 
    INNER JOIN `configurazioni` 
    ON `prenotazioni`.`configurazione_id` = `configurazioni`.`id`
    WHERE `stanze`.`id` = ?");
    $stmt->bind_param('s', $id);
    //execute query
    $stmt->execute();
    // get results
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $room = $result->fetch_assoc();
    }
}

// chiusura db connection
$conn->close();