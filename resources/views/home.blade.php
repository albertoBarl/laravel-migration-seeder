<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body class="bg-dark">
    <div>

        @foreach ($train as $card)
            <div class="card">
                <p>{{ $card['Azienda'] }}</p>
                <p>{{ $card['Stazione_di_partenza'] }}</p>
                <p>{{ $card['Stazione_di_arrivo'] }}</p>
                <p>{{ $card['Orario_di_partenza'] }}</p>
                <p>{{ $card['Orario_di_arrivo'] }}</p>
                <p>{{ $card['Codice_Treno'] }}</p>
                <p>{{ $card['Numero_Carrozze'] }}</p>
                <span>{{ $card['In_orario'] }}</span>
                <span>{{ $card['Cancellato'] }}</span>
            </div>
        @endforeach
    </div>
</body>

</html>
