<?php
$inputwords = $_POST["inputwords"] ?? null;
$censored = $_POST["censored"] ?? null;
  //daModificare,conCosa, stringa soggetto cioè quella sulla quale eseguire l'operazione richiesta
$result = str_replace($censored, '<span class="text-danger">***</span>', $inputwords);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>PHP Badwords</title>
</head>
<body>
  <div class="container">
    <div class="row py-3">
      <div class="col-6 mx-auto">
        <h2>Original Text</h2>
        <p><?php echo $inputwords ?></p>
      </div>
      <div class="col-6 mx-auto">
        <h2>Censored Text</h2>
        <p><?php echo $result ?></p>
      </div>
      <a href="./index.php">Riprova</a>
    </div>
  </div>
</body>
</html>