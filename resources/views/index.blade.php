<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href ="style.css" type="text/css">
<head>
    <div class="parole">
        <h1>
              Voici tous les chats:</strong>
        </h1>
    </div>
</head>
<body>
<table id="list des chats">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Birth date</th>
        <th>Detail</th>
    </tr>
    @foreach($cats as $cat)
        <tr>
        <td>{{$cat -> id}}</td>
        <td>{{$cat -> name}}</td>
        <td>{{$cat -> price}}</td>
        <td>{{$cat -> description}}</td>
        <td>{{$cat -> birth_date}}</td>
        <td><a href="/cats/{{$cat->id}}">Voir</a></td>
    </tr>
    @endforeach
</table>
</body>
</html>
