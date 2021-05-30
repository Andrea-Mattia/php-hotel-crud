<?php require_once __DIR__ . '/partials/scripts/get-room-info.php' ?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once __DIR__ . '/partials/templates/head.php'; ?>

<body class="bg-success">
    
    <main class="container">
        <?php if(!empty($room)) { ?>
            <h1 class="my-4 text-white">
                Room n°: <?php echo $room['room_number'] ?>, 
                <?php echo $room['floor'] ?>° floor.
            </h1>

            <ul class="list-group my-4">
                <li class="list-group-item list-group-item-primary">
                    Configuration ID: <?php echo $room['configurazione_id'] ?>
                </li>
                <li class="list-group-item list-group-item-info">
                    Title: <?php echo $room['title'] ?>
                </li>
                <li class="list-group-item list-group-item-info">
                    Description: <?php echo $room['description'] ?>
                </li>
            </ul>
        <?php } else { ?>
            <h2>No room found</h2>
        <?php } ?>
        

        <a class="link-dark rounded-pill bg-info p-2" href="./">Back to archive</a>
    </main>

</body>
</html>