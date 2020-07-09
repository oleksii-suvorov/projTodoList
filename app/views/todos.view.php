<?php include "partials/header.php" ?>
    <header class="title">
        <h1>My Todo App</h1>
    </header>

    <main class="todos <?= count($fetchedTodos) == 0 ? "empty" : "" ?>">
        <ul>

            <?php foreach ($fetchedTodos as $todo) : ?>
                    <li class="lists <?= $todo->isCompleted ? "done" : "notdone"?>" todoId="<?= $todo->id ?>">
                        <p><?= $todo->title ?></p><span class="delete"><i class="fas fa-trash"></i></span>
                    </li>
            <?php endforeach; ?>
        </ul>
    </main>

    <form method="POST">
        <input type="text" name="todo" placeholder="type your todo here" maxlength="20" required>
        <button type="submit">Save</button>
    </form>
    <script type="module" src="../../public/js/index.js"></script>
<?php include "partials/footer.php"; ?>