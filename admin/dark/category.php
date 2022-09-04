<?php require_once "head.php"?>
<?php require_once "../settings/code/category.php"?>

<body class="g-sidenav-show  bg-gray-200">
<?php require_once "aside.php"?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php require_once "nav.php"?>
    <div class="container-fluid py-4">
        <form action="#" method="POST" enctype="multipart/form-data">
            <h1>Category</h1>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Title</label>
                <input name="title" type="text" class="form-control">
            </div>
            <button type="submit" name="category" class="btn btn-secondary">Send</button>
        </form>

        <?php require_once "footer.php"?>
    </div>
</main>

<?php require_once "foot.php"?>
</body>


</html>

