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
        <h1>List des eleves</h1>
        <table>
            <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Group</th>
            </tr>
        @foreach($listEleves as $v)

        <tr>
            <td> {{$v["code"] }}</td>
            <td> {{$v["nom"] }}</td>
            <td> {{$v["Prenom"] }}</td>
            <td> {{$v["Groupe"] }}</td>
        </tr>

        @endforeach
        </table>
    </section>
    
</body>
</html>