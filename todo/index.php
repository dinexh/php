<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>To-Do List</title>
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Enter a new task" required>
            <button type="submit">Add Task</button>
        </form>
        <ul>
            <?php
            include 'db.php';
            $result = $conn->query("SELECT * FROM todos ORDER BY created_at DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row['task']) . " <a href='delete_task.php?id=" . $row['id'] . "'>Delete</a></li>";
            }
            $conn->close();
            ?>
        </ul>
    </div>
</body>
</html>
