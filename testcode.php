<?php
include_once 'FunctionCRUD/crudusers.php';

// ตรวจสอบการส่งคำร้องขอแก้ไข
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $idToUpdate = $_POST["update"];
    $recordToUpdate = getRecordById($idToUpdate);
}

// ตรวจสอบการส่งคำร้องขอลบ
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $idToDelete = $_POST["delete"];
    deleteRecord($idToDelete);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Example with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>User Records</h2>

        <?php
        // แสดงรายการ
        $records = getRecords();

        if (!empty($records)) {
            echo '<table class="table table-striped">';
            echo '<thead>';
            echo '<tr><th>Name</th><th>Username</th><th>Email</th><th>Action</th></tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach ($records as $record) {
                echo '<tr>';
                echo '<td>' . $record['name'] . '</td>';
                echo '<td>' . $record['username'] . '</td>';
                echo '<td>' . $record['email'] . '</td>';
                echo '<td>';
                echo '<form method="post" action="">';
                echo '<input type="hidden" name="update" value="' . $record['user_id'] . '">';
                echo '<button type="submit" class="btn btn-warning btn-sm">Update</button>';
                echo '</form>';
                echo '<form method="post" action="" class="ml-2" onsubmit="return confirm(\'Are you sure?\');">';
                echo '<input type="hidden" name="delete" value="' . $record['user_id'] . '">';
                echo '<button type="submit" class="btn btn-danger btn-sm">Delete</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo "<p>No records found</p>";
        }
        ?>

        <h2><?php echo isset($recordToUpdate) ? 'Update User' : 'Add User'; ?></h2>
        <form method="post" action="">
            <?php if (isset($recordToUpdate)): ?>
                <input type="hidden" name="id" value="<?php echo $recordToUpdate['id']; ?>">
            <?php endif; ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo isset($recordToUpdate) ? $recordToUpdate['name'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="<?php echo isset($recordToUpdate) ? $recordToUpdate['email'] : ''; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary"><?php echo isset($recordToUpdate) ? 'Update' : 'Add'; ?></button>
        </form>

        <?php
        // ตรวจสอบการส่งคำร้องขอเพิ่มหรือแก้ไข
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];

            if (isset($_POST["id"])) {
                $idToUpdate = $_POST["id"];
                updateRecord($idToUpdate,$name, $username, $password, $email, $tel, $address);
            }
        }
        ?>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
