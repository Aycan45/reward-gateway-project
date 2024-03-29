<?php
 include("./includes/admin.header.inc.php");
?>
<body>
    <div class="row justify-content-center m-5">
        <div class="col-5">
            <h2>Add card to database</h2>
            <form action="card-add.php" method="POST" enctype='multipart/form-data'>
                <label for="title" class="form-label">Title:</label>
                <div class="mb-3">
                    <input type="text" name="title" class="col-8 p-1">
                </div>
                <label for="description" class="form-label">Description:</label>
                <div class="mb-3">
                    <input type="text" name="description" class="col-8 p-1">
                </div>
                <div class="mb-3">     
                    <input type="file" class="custom-file-input" name="myFile">
                </div>
                <div class="col-7 mx-auto">
                    <input type="submit" name="add" class="btn btn-primary col-5" value="Add card">
                </div>
            </form>
        </div>
    </div>
</body>
<?php

?>