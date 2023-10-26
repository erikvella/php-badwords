<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap cdnj -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>php badwords</title>
</head>
<body>
  <div class="container my-5 ">
    <div class="row">
      <div class="col-6">

      <!-- qui inizia il form -->
      <form action="form-di-atterraggio.php" method="GET">
  <div class="mb-3">
    <label for="paragraph" class="form-label">Paragrafo</label>
    <input type="text" class="form-control" id="paragraph" name="paragraph" placeholder ="Inserire un testo">
    
  </div>
  <div class="mb-3">
    <label for="word" class="form-label">Parola da censurare</label>
    <input type="text" class="form-control" id="word" name="word" placeholder ="bad word">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Invia</button>
</form>




      </div>
    </div>
  </div>
</body>
</html>