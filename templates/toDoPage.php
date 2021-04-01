<html>
<head>
    <meta charset="utf-8"/>
    <title>ToDo App</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <script src="../public/ui.js" defer></script>
<!--    <link rel="stylesheet" type="text/css" href="../public/materialize.min.css">-->
<!--    <link rel="stylesheet" type="text/css" href="../public/styles.css">-->
<!--    <script src="../public/materialize.min.js" defer></script>-->
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" defer></script>-->
    <style>
        body {
            margin: 50px 0 0 0;
            padding: 0;
            width: 100%;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-align: center;
            color: #aaa;
            font-size: 18px;
        }

        h1 {
            color: #719e40;
            letter-spacing: -3px;
            font-family: 'Lato', sans-serif;
            font-size: 100px;
            font-weight: 200;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<h1>ToDos</h1>
<div>
    <form action="post">
    <div>
        <?php foreach($toDos as $toDo) {
            echo '<div id="' . $toDo['id'] . '">' . '<input type="checkbox" /> ' . $toDo['task_desc'] . ' <button class="btn waves-effect waves-light" type="submit" name="delete">delete</button>' . '</div>';
        }
        ?>
    </div>
        <input type="text">
        <input type="submit" value="create ToDo">
    </form>
</div>
</body>
</html>

