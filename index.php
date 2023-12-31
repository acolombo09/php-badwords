<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- FONTAWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- VUE CDN -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- LUXON CDN -->
  <script src="https://cdn.jsdelivr.net/npm/luxon@3.3.0/build/global/luxon.min.js"></script>
  <!-- AXIOS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- My css link -->
  <link rel="stylesheet" href="css/style.css">
  <title>PHP Badwords</title>
</head>
<body class="bg-dark">
  <div class="container my-5 py-4 bg-body-tertiary">
    <div class="row justify-content-center">
      <div class="col-6 d-flex flex-column justify-content-center mx-auto">
        <div class="col d-flex flex-column justify-content-center mx-auto">
          <img class="mb-3 mx-auto" src="./imgs/vuejs-logo.png" alt="" width="90" height="75">
        </div>
        <div class="col">
          <div class="w-50 mx-auto">
            <form action="indexbackend.php" method="POST">
              <div class="form my-3">
                <label for="text" class="form-label">Write text here</label>
                <textarea type="text" class="form-control mt-2" style="height: 150px" id="inputwords" name="inputwords"></textarea>
              </div>
              <div class="form my-3">
                <label for="censor" class="form-label">Write what you want to censor here</label>
                <input type="text" class="form-control mt-2" id="censored" name="censored">
              </div>
              <button class="btn btn-success w-100 py-2" type="submit">Send</button>
            </form>
            <p class="my-3 text-body-secondary">© 2023</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- My JS file -->
  <script src="js/main.js"></script>
  <!-- Bootstrap JS file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>