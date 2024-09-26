<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href ="/public/style.css" type="text/css">
<head>
    <div class="parole">
        <h1>
            Voici le détail de votre chat:</strong>
        </h1>
    </div>
</head>
<body>
<ul>
    <li> name : {{$cat -> name}}</li>
    <li> price : {{$cat -> price}}</li>
    <li> description :{{$cat -> description}}</li>
    <li>image :<img src="{{$cat -> image}}"></li>
    <li>birth date : {{$cat -> birth_date}}</li>
</ul>

<a href='/cats'>
    <button class="buttonRetour">
        Retour
    </button>
</a>
</body>
