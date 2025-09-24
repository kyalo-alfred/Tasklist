<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>My Task List</h2>
    <form method="POST">
        <input type="text" name="task" placeholder="Enter new task">
        <button type="submit" name="add">Add Task</button>
    </form>

    <?php
    // Insert new task
    if (isset($_POST['add'])) {
        $task = $_POST['task'];
        if (!empty($task)) {
            $sql = "INSERT INTO tasks (task) VALUES ('$task')";
            $conn->query($sql);
            header("Location: index.php"); // Refresh after insert
        }
    }

    // Display tasks
    $result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['task']) . "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
