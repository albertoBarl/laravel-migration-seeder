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
    <div class="d-flex flex-wrap gap-5">

        @foreach ($train as $card)
            <div class="card">
                <p>Azienda: {{ $card['Azienda'] }}</p>
                <p>Stazione di partenza: {{ $card['Stazione_di_partenza'] }}</p>
                <p>Stazione di arrivo: {{ $card['Stazione_di_arrivo'] }}</p>
                <p>Partenza: {{ $card['Orario_di_partenza'] }}</p>
                <p>Arrivo: {{ $card['Orario_di_arrivo'] }}</p>
                <p>ID. Treno: {{ $card['Codice_Treno'] }}</p>
                <p>N. Carrozze: {{ $card['Numero_Carrozze'] }}</p>
                <span>Treno in orario: @switch($card['In_orario'])
                        @case(0)
                            "No"
                        @break

                        @case(1)
                            "Si"
                        @break

                        @default
                    @endswitch
                </span>
                <span>Cancellato:
                    @switch($card['Cancellato'])
                        @case(0)
                            "No"
                        @break

                        @case(1)
                            "Si"
                        @break

                        @default
                    @endswitch
                </span>
            </div>
        @endforeach
    </div>
</body>

</html>
<style>
    .card {
        width: 250px;

    }
</style>
