<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="grid h-screen place-items-center mx-[25%]">
        <h1 class="text-3xl font-bold">Hej!</h1>
        <p>Arbetsprov för Etteplan av John Jangard.</p>
        <p>Knappen nedan startar funktion som går igenom XML-filen, läsa av id och därefter ge möjlighet att ladda ner
            resultat till fil.</p>
        <form method="GET" action="/readXML">
            <button class="m-4 p-4 bg-blue-700 text-white" type="submit">Kör funktion</button>
        </form>
    </div>
</body>

</html>
