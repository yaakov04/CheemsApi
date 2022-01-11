<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Cheems Api</title>
</head>
<body>
    <header class="header">
        <h1 class="header__h1">Cheems Api</h1>
        <p>Api Rest de noticias sobre Cheems </p>
    </header>
    <main>
        <section class="container">
            <div class="request">
                <h2 class="request__header">¡Haz una consulta!</h2>
                <form class="form">
                    <label class="form__label" for="endpoint">{{ route('v1.index')}}</label>
                    <input class="form__input" type="text" value="/newspapers/1">
                    <button class="form__btn" type="submit">Consultar</button>
                </form>
            </div>
            <article class="container response">
                <h3 class="response__header">Respuesta:</h3>
                <div class="response__body response__body-center">
                    <p>No se ha hecho ninguna consulta</p>
                </div>
            </article>
        </section>
    </main>
    <section class="container info-api">
        <h2 class="info-api__header">¿Qué es esto?</h2>
        <p>
            Esta es un API REST que busca noticias relacionadas a Cheems mediante web scraping de algunos sitios web noticias.
        </p>
    </section>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>