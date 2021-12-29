<?php
session_start();

$link = $_POST['link'] ?? null;

$link = filter_var($link, FILTER_SANITIZE_URL);

if (empty($link)) {
    echo 'Please enter a URL';
    exit;
} else if (filter_var($link, FILTER_VALIDATE_URL) == false){
    echo "$link is not a valid URL";
    exit;
}

$data = file_get_contents('redirect.json');
$data = json_decode($data, true);

$key = uniqid() . '-' . rand(1, 100);

$data[$key] = $link;

file_put_contents('redirect.json', json_encode($data));

$link = array_keys($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/index.css">
</head>
<body>
    <div>
        <?php echo "Your new link for {$_POST['link']} is:"; ?>
    </div>
    <br>
    <strong>
        <a href="<?php echo "http://localhost/12-26/open.php?link={$key}"; ?>"><?php echo "http://localhost/12-26/index.php?link={$key}"; ?></a>
    </strong>
</body>
</html>