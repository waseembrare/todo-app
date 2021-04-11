<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/styles.css">
</head>
<body>
<h1 class="header">DoMore</h1>
<div>
    <div>
        <?php \App\ViewHelpers\ToDoPageViewHelper::DisplayTasks($toDos); ?>
    </div>
    <form method="post" action ="/create">
        <div class="create-task-container">
            <input id="task-text" type="text" name="task-text" placeholder="DoWhat...">
            <input id="create-task-button" type="submit" value="create task">
        </div>
    </form>
</div>
</body>
</html>

