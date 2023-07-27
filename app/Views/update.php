<!-- app/Views/prodi/update.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Update Prodi</title>
</head>

<body>
    <h1>Update Prodi</h1>

    <?php if (isset($validation)) : ?>
        <div class="alert alert-danger">
            <?php echo $validation->listErrors(); ?>
        </div>
    <?php endif; ?>

    <form action="/prodi/update/<?php echo $prodi['id']; ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $prodi['name']; ?>" required>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="<?php echo $prodi['price']; ?>" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required><?php echo $prodi['description']; ?></textarea>

        <button type="submit">Update</button>
    </form>
</body>

</html>