<!-- app/Views/prodi/delete.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Delete Prodi</title>
</head>

<body>
    <h1>Delete Prodi</h1>

    <p>Are you sure you want to delete this prodi?</p>

    <h3>Prodi Details:</h3>
    <p>Name: <?php echo $prodi['name']; ?></p>
    <p>Price: <?php echo $prodi['price']; ?></p>
    <p>Description: <?php echo $prodi['description']; ?></p>

    <form action="/prodi/delete/<?php echo $prodi['id']; ?>" method="POST">
        <button type="submit">Delete</button>
    </form>
</body>

</html>