<?php
if (file_exists('todo.json')) {
    $json = file_get_contents('todo.json');
    $todos = json_decode($json, true);
} else {
    $todos = [];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="newTodo.php" method="post">
        <input type="text" name="todo_name" placeholder="Enter your todo">
        <button>New todo</button>
    </form>
    <br>

    <?php foreach ($todos as $todoName => $todo): ?>
        <div style="margin-bottom: 10px;">
            <form action="change_status.php" method="post" style="display: inline-block;">
                <input type="hidden" name="todo_name" value="<?= $todoName ?>">
                <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : ""; ?>>
            </form>
            <?= $todoName ?>
            <form action="delete.php" method="post" style="display: inline-block;">
                <input type="hidden" name="todo_name" value="<?= $todoName ?>">
                <button type="submit">Delete</button>
            </form>
        </div>
    <?php endforeach; ?>
</body>
<script>
    const checkboxes = document.querySelectorAll('input[type=checkbox]');
    checkboxes.forEach(ch => {
        ch.onclick = function () {
            this.parentNode.submit();
        };
    })
</script>

</html>