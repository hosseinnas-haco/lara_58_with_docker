<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
    <h2>Hello World</h2>

    @can('edit_forum')
        <a href="#">Edit the forum</a>
    @endcan
    </body>
</html>
