<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        5. Использование find:
        ● Задача: У вас есть массив объектов, представляющих собой
        список книг с их названиями и авторами. Используйте метод find,
        чтобы найти книгу по заданному названию.
        ● Пример: [{title: '1984', author: 'George Orwell'}, {title: 'To
        Kill a Mockingbird', author: 'Harper Lee'}] -> {title: '1984',
        author: 'George Orwell'}
    </h3>

    <?php
    $books = [
        ['title' => '1984', 'author' => 'George Orwell'],
        ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
    ];

    $searchTitle = '1984';

    $book = current(array_filter($books, fn($book) => $book['title'] === $searchTitle));

    print_r($book);
    ?>
</body>

</html>