<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include("layouts.accueil")

    <section>
        <h1>List des controles</h1>

        <table>
            <tr>
                <th>Numéro</th>
                <th>Code Module</th>
                <th>Date</th>
                <th>Durée</th>
            
            </tr>

            @foreach($ListControles as $v)
                <tr>
                    <td>{{$v["numero"]}}</td>
                    <td>{{$v["codeModule"]}}</td>
                    <td>{{$v["Date"]}}</td>
                    <td>{{$v["Durée"]}}</td>
                </tr>
            @endforeach
        </table>
    </section>
    
</body>
</html>