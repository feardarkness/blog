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
                @unless (empty($people))
                    <h3>Listado de personas</h3>
                    @foreach ($people as $person)
                        <li>{{$person}}</li>
                    @endforeach
                @endunless
                </ul>
            </div>
        </div>
    </body>
</html>
