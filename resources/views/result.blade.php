<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultat</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="grid place-items-center m-10">
        <h1 class="text-3xl font-bold">Här finns din fil att hämta!</h1>
        {{-- Tillgång till fil --}}
        <a class="m-4 p-4 bg-blue-700 text-white" download="Result" href="{{ Storage::url('result.txt') }}">Ladda ner</a>
    </div>
</body>

</html>
