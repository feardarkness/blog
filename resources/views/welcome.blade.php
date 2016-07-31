<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div>
            <div>
                <h1>Laravel 5</h1>
                <h2>Prueba con Apache :O</h2>
                <h2>Los datos son:</h2>
                <ul>                
                @foreach ($people as $person)
                    <li>{{$person}}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
