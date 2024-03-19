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
        <h1>List des modules</h1>
        <table>
            <tr>
                <th>Code</th>
                <th>Intitulé</th>
                <th>Coef</th>
                <th>Nombres d'heures</th>
            
            </tr>

            @foreach($listModuels as $v)
                <tr>
                    <td>{{$v["code"]}}</td>
                    <td>{{$v["intitule"]}}</td>
                    <td>{{$v["Coef"]}}</td>
                    <td>{{$v["heures"]}}</td>
                </tr>
            @endforeach
        </table>
    </section>
    
</body>
</html>