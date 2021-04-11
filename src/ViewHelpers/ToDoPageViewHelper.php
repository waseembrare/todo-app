<?php


namespace App\ViewHelpers;


class ToDoPageViewHelper
{
    public static function DisplayTasks($toDos)
    {
        $string = '';

        foreach($toDos as $toDo) {
            if($toDo['completed'] === null){
                echo '<div class="todo-item-row" id="' . $toDo['id'] . '">' . '<a class="accent" href="/completed/'. $toDo['id'] . '">done</a> <p class="uncompleted">' . $toDo['task_desc'] . '</p> <a href="/deleted/'. $toDo['id'] . '">delete</a>' . '</div>';
            } else {
                echo '<div class="todo-item-row" id="' . $toDo['id'] . '">' . '<a class="accent" href="/undo/'. $toDo['id'] . '">undo</a> <p class="completed">' . $toDo['task_desc'] . '</p> <a href="/deleted/'. $toDo['id'] . '">delete</a>' . '</div>';
            }
        }
        return $string;
    }
}