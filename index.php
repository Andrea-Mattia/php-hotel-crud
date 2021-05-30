<?php require_once __DIR__ . '/partials/scripts/get-rooms.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php require_once __DIR__ . '/partials/templates/head.php'; ?>

<body class="bg-success">
    
    <header class="bg-primary">
        <div class="container">
            <h1 class="header py-4 text-white">Hotel rooms</h1>
        </div>
    </header>

    <main class="container my-4">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room Number</th>
                    <th>Floor</th>
                    <th>Beds</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?php // Loop db records
                if(!empty($rooms)) {
                    foreach ($rooms as $room) { ?>
                        <tr>
                            <td><?php echo $room['id'] ?></td>
                            <td><?php echo $room['room_number'] ?></td>
                            <td><?php echo $room['floor'] ?></td>
                            <td><?php echo $room['beds'] ?></td>
                            <td>
                                <a class="link-info" 
                                    href="./show-info.php?id=<?php echo $room['id'] ?>">
                                    View details
                                </a>
                            </td>
                        </tr>
                   <?php }
                }
                ?>
            </tbody>
        </table>
    </main>

</body>
</html>