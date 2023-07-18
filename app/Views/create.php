<!-- app/Views/prodi/create.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Create prodi</title>
</head>

<body>
    <h1>Create prodi</h1>

    <?php if (isset($validation)) : ?>
        <div class="alert alert-danger">
            <?php echo $validation->listErrors(); ?>
        </div>
    <?php endif; ?>

    <form action="/prodi/create" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>

        <button type="submit">Create</button>
    </form>
</body>

</html>