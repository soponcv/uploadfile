<!DOCTYPE html>
<html>

<body>

    <form action="" enctype="multipart/form-data" method="POST">
        <input type="file" name="file">
        <input type="submit">
    </form>

    <p><strong>Result</strong></p>
    <pre><?php var_dump($_FILES['file']) ?></pre>
    
    <h4>post_max_size: <?= ini_get('post_max_size') ?></h4>
    <h4>upload_max_filesize: <?= ini_get('upload_max_filesize') ?></h4>

    <h4>Change setting:</h4>
    <p><strong>php-fpm Global |CUSTOM2|</strong></p>
    <pre>php_admin_value[post_max_size] = 128M<br>php_admin_value[upload_max_filesize] = 128M</pre>
</body>

</html>
