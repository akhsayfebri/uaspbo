<!-- app/Views/prodi/read.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Prodi List</title>
</head>

<body>
    <h1>Prodi List</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prodi as $prodi) : ?>
                <tr>
                    <td><?php echo $prodi['name']; ?></td>
                    <td><?php echo $prodi['price']; ?></td>
                    <td><?php echo $prodi['description']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>