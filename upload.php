<!DOCTYPE html>
<html>
<head>
    <title>Upload file from URL</title>
</head>
<body>
<?php
    $BASE_URL = strtok($_SERVER['REQUEST_URI'],'?');

    if (isset($_POST['url'])){
        $url = $_POST['url'];
        echo "Transferring file: {$url}<br>";
        exec("wget {$url}");
    }
?>
    <form name='upload' method='post' action="<?php echo $BASE_URL; ?>">
        <input type='text' id='url' name='url' size='128' /><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>