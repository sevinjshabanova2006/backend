<?php require_once "head.php"?>
<?php require_once "../settings/code/settings.php"?>

<body class="g-sidenav-show  bg-gray-200">
<?php require_once "aside.php"?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php require_once "nav.php"?>
    <div class="container-fluid py-4">
        <form action="#" method="POST" enctype="multipart/form-data">
            <h1>Settings page edit</h1>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Title</label>
                <input value="<?=$data["title"]?>" name="title" type="text" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Description</label>
                <input value="<?=$data["description"]?>" name="description" type="text" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Keywords</label>
                <input value="<?=$data["keywords"]?>" name="keywords" type="text" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Phone</label>
                <input value="<?=$data["phone"]?>" name="phone" type="tel" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Email</label>
                <input value="<?=$data["email"]?>" name="email" type="email" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Location</label>
                <input value="<?=$data["location"]?>" name="location" type="text" class="form-control">
            </div>
<!--            <label class="form-label">Logo</label>-->
<!--            <div class="input-group input-group-outline my-3">-->
<!--                <input name="logo" type="file" class="form-control">-->
<!--            </div>-->
            <button type="submit" name="settings" class="btn btn-secondary">Send</button>
        </form>

        <?php require_once "footer.php"?>
    </div>
</main>

<?php require_once "foot.php"?>
</body>


</html>
