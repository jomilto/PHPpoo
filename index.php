<?php require "code.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina Principal</h1>
    <?php 
        echo "<h2>$post->title</h2>";
        echo "<p>$post->content</p>";
        echo "Categories: <br>";
        echo "<li>";
        foreach($post->getCategories() as $category){
            echo "<ul>$category->name</ul>";
        }
        echo "</li>";
        echo "<em>by: {$post->author->getName()}</em>";
    ?>
</body>
</html>