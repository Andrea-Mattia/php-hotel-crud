<?php require_once __DIR__ . '/partials/scripts/get-room-info.php' ?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once __DIR__ . '/partials/templates/head.php'; ?>

<body>
    
    <main class="container">
        <?php if(!empty($room)) { ?>
            <h1 class="my-4">
                Room n°: <?php echo $room['room_number'] ?>, 
                <?php echo $room['floor'] ?>° floor.
            </h1>

            <ul>
                <li>Configuration ID: <?php echo $room['configurazione_id'] ?></li>
                <li>Title: <?php echo $room['title'] ?></li>
                <li>Description: <?php echo $room['description'] ?></li>
            </ul>
        <?php } else { ?>
            <h2>No room found</h2>
        <?php } ?>
        

        <a href="./">Back to archive</a>
    </main>

</body>
</html>