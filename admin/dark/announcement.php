<?php require_once "head.php"?>
<?php require_once "../settings/code/announcement.php"?>

    <body class="g-sidenav-show  bg-gray-200">
    <?php require_once "aside.php"?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php require_once "nav.php"?>
        <div class="container-fluid py-4">
            <form action="#" method="POST">
                <h1>Announcement</h1>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Title</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="input-group input-group-outline my-3">
                    <select name="category_select" class="form-control">
                        <?php
                        for($i=0;$i<count($category);$i++){
                            ?>
                            <option value=" <?=$category[$i]["id"]?>">
                                <?=$category[$i]["title"]?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group input-group-outline my-3">
                    <select name="subcategory_select" class="form-control">
                        <?php
                        for($i=0;$i<count($subcategory);$i++){
                            ?>
                            <option value=" <?=$category[$i]["id"]?>">
                                <?=$subcategory[$i]["title"]?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Link</label>
                    <input name="link" type="link" class="form-control">
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Video</label>
                    <input name="video" type="link" class="form-control">
                </div>
                <div class="input-group input-group-outline my-3">
                    <textarea name="description" placeholder="Description"  class="form-control"></textarea>
                </div>
<!--                <div class="input-group input-group-outline my-3">-->
<!--                    <label class="form-label">Image</label>-->
<!--                    <input name="image" type="file" class="form-control">-->
<!--                </div>-->
                <button type="submit" name="announcement" class="btn btn-secondary">Send</button>
            </form>

            <?php require_once "footer.php"?>
        </div>
    </main>

    <?php require_once "foot.php"?>
    </body>


    </html><?php
