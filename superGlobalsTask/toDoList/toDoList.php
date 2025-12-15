<?php
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
    $_SESSION['tasks'][] = array(
        'text' => $_POST['task'],
        'isDone' => false
    );
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    foreach ($_SESSION['tasks'] as $i => $task) {
        if (isset($_POST['isDone'][$i])) {
            $_SESSION['tasks'][$i]['isDone'] = true;
        } else {
            $_SESSION['tasks'][$i]['isDone'] = false;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $index = $_POST['delete'];
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']); 
    }
}
?>
<!DOCTYPE html>
<html>

<body>

    <h2>To Do List</h2>

    <form method="post">
        <input type="text" name="task" placeholder="Enter a task" required>
        <button type="submit" name="add">Add</button>
    </form>

    <hr>

    <?php if (!empty($_SESSION['tasks'])) { ?>
        <form method="post">

            <input type="hidden" name="update" value="1">

            <?php foreach ($_SESSION['tasks'] as $i => $task) { ?>
                <div>
                    <input type="checkbox" name="isDone[<?php echo $i; ?>]" onchange="this.form.submit()" 
                    <?php if ($task['isDone'])
                           echo 'checked'; ?> >
                    <?php
                    if ($task['isDone']) {
                        echo '<del>' . $task['text'] . '</del>';
                    } else {
                        echo $task['text'];
                    }
                    ?>
                    <button type="submit" name="delete" value="<?php echo $i; ?>">
                        delete
                    </button>
                </div>
            <?php } ?>

        </form>
    <?php } ?>

</body>

</html>