<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>PHP Learning</title>
    </head>
    <body>
        <h1>Task for the Day</h1>
        <ul>
            <li>
                <strong> Name: </strong> <?= $task['title']; ?>
            </li>
            <li>
                <strong>Due Date: </strong> <?= $task['due']; ?>
            </li>
            <li>
                <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
            </li>
            <li>
                <strong>Status: </strong> <?= $task['completed'] ? '&#9989' : 'Incomplete'; ?>
            </li>
            <li>
                <strong>Status: </strong> 

                <?php if ($task['completed']) : ?> 
                    <span class="icon"> &#9989; </span> 
                <?php else : ?>
                    <span class="icon"> &#9757; </span> 
                <?php endif; ?>
            </li>
        </ul>
    </body>
</html>