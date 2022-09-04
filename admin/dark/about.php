<?php require_once "head.php"?>
<?php require_once "../settings/code/about.php"?>

<body class="g-sidenav-show  bg-gray-200">
<?php require_once "aside.php"?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php require_once "nav.php"?>
    <div class="container-fluid py-4">
        <form action="#" method="POST" enctype="multipart/form-data">
            <h1>Settings page edit</h1>
            <div>
                <img src="<?=$data["image"]?>" height="100px">
                <input name="old_image" type="hidden" value="<?=$data["image"]?>">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Title</label>
                <input value="<?=$data["title"]?>" name="title" type="text" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Description</label>
                <input value="<?=$data["description"]?>" name="description" type="text" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Video</label>
                <input value="<?=$data["video"]?>" name="video" type="link" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
                        <label class="form-label">Logo</label>
                        <div class="input-group input-group-outline my-3">
                            <input name="sekil" type="file" class="form-control">
                        </div>
            <button type="submit" name="about" class="btn btn-secondary">Send</button>
        </form>

        <?php require_once "footer.php"?>
    </div>
</main>

<?php require_once "foot.php"?>
</body>


</html>
