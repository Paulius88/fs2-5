<?php
session_start();

$url = $_SESSION['url'] ?? null;
$location = $_SESSION['location'] ?? null;

if (!$url || !$location) {
    http_response_code(403);
    exit();
}
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/end.css">
    <script src="https://kit.fontawesome.com/f688d35c35.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container d-flex justify-content-center py-5">
    <div class="col-12 col-lg-8 d-flex flex-column align-items-center">
        <h4>Generated photo:</h4>
        <p class="m-0 mb-4 text-secondary">(Redirection in motion <strong><?php echo $location ?></strong>)</p>
        <div class="url w-100 mb-3 d-flex">
            <div class="col-10 url-p d-flex justify-content-center px-5 py-4 ">
                <p class="m-0 fst-italic"><?php echo $url ?></p>
            </div>
            <div class="col-2 url-copy d-flex justify-content-end">
                <button class="btn btn-warning copy-button"><i class="far fa-copy"></i> Copy</button>
            </div>
        </div>
        <a href="index.php" class="btn btn-dark w-100">Back to beginning</a>
    </div>
</div>
<script src="assets/end.js"></script>
</body>
</html>
