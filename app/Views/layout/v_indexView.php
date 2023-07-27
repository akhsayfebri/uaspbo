<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNU JOGJA - Prodi</title>

    <link rel="stylesheet" href="/template/dist/assets/css/main/app.css">
    <link rel="stylesheet" href="/template/dist/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="/template/dist/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/template/dist/assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="/template/dist/assets/css/shared/iconly.css">

</head>

<body>
    <div id="app">
        <?php include('v_sidebar.php'); ?>;
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>


            <?= $this->renderSection('content') ?>

            <?php include('v_footer.php') ?>
        </div>
    </div>
    <?php include('js.php') ?>

</body>

</html>