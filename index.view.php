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
            <?php foreach ($task as $feature => $value) :?>
                <li><strong><?= ucwords($feature); ?>: </strong><?= $value; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>