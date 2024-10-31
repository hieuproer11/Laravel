<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href ="style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<head>
    <div class="parole" >
        <h1>
          Ajoutez vos chats ici!</strong>
        </h1>
    </div>
</head>
<body>
{{--@if ($erreurs -> any())
    <ul>
        @foreach($erreurs -> all() as $e)
            <li>{{ $e }}</li>
        @endforeach
    </ul>--}}

<form action="/cats" method="post">
    @csrf
    <label for="name" class="form-label">Name</label><br>
    <input type="text" name="name" id="name" class="form-control">
    @error('name')
    {{@$message}} @enderror<br>
    <label for="price" class="form-label">Price</label><br>
    <input value="{{ old('price') }}" type="number" name="price" id="price" class="form-control">
    @error('price')
    {{@$message}} @enderror
    <br>
    <label for="description" class="form-label" >Description</label><br>
    <input type="text" name="description" id="description" class="form-control">
    @error('description')
    {{@$message}} @enderror
    <br>
<label for="image" class="form-label">Image</label><br>
<input type="text" name="image" id="image" class="form-control">
    @error('image')
    {{@$message}} @enderror
    <br>
<label for="birth_date" class="form-label">Birth Date</label><br>
<input type="date" name="birth_date" id="birth_date" class="form-control">
    @error('birth_date')
    {{@$message}} @enderror
    <br><br>
<button type="submit" class="btn btn-primary">Save</button>
<button type="submit" class="btn btn-primary" formaction="/cats" formmethod="get" >Return</button>
</form>
</body>
