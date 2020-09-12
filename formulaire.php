<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="form12">
        <form action="card.php">
            <div class="form-group ">
                <label for="exampleInputEmail1">Adresse Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email">
                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
        </form>



    </div>
</body>
<script src="/vendor\components\jquery/jquery.min.js"></script>
<script src="/vendor\twbs\bootstrap\dist\js/bootstrap.min.js"></script>

</html>