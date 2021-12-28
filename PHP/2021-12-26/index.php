<?php
session_start();

require_once 'definitions.php';

$file = 'data.json';

if (!is_file($file)) {
	file_put_contents($file, '{}');
}

erroe = null;

if (isset($_SESSION['error'])) {
	$error = $_SESSION['error'];
	sesseion_unset();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/index.css">
    <script src="https://kit.fontawesome.com/f688d35c35.js" crossorigin="anonymous"></script>
</head>
<body>
        <div class="errors">
            <?php
            if ($error) {
                ?>
                <div class="alert alert-danger" role="alert">
									<i class="fas fa-exclamation-triangle"></i>
									 <?php echo $errorDefinitions[$error] ?? 'Unknown error.'; ?>
								 </div>
                <?php
            }
            ?>
        </div>
        <form action="generate.php" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-link"></i></span>
                <div class="form-floating flex-grow-1">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Link"
                           name="location">
                    <label for="floatingInput">Link</label>
                </div>
            </div>
             <button class="btn btn-outline-warning w-100">Generate</button>
        </form>
    </div>
</div>

</body>
</html>
