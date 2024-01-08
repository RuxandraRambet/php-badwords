<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-5">
        <form action="result.php" method="get">
            <label for="word" class="form-label">Inserisci una parola</label>
            <input class="form-control"  type="text" name="word" id="word">

            <label for="text"  class="form-label mt-4">Inserisci un paragrafo</label>
            <textarea  class="form-control" name="text" id="text" cols="30" rows="10"></textarea>

            <button class="btn btn-primary mt-4">Invia</button>
        </form>
    </div>

</body>
</html>