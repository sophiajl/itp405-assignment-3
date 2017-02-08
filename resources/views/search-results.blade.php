<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Search {{ $search }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {{--<style>--}}
        {{--table, th, td{--}}
            {{--text-align:left;--}}
            {{--border:1px solid black;--}}
            {{--padding: 5px;--}}
        {{--}--}}
    {{--</style>--}}
</head>

<body>
vardump($uri);
<h3>Search for DVD Title: {{ $search }}</h3>
<br>


    <table class="table">
        <tr>
            <th>Dvd Title</th>
            <th>Rating</th>
            <th>Genre</th>
        </tr>
        @foreach($dvds as $dvd)
        <tr>
            <td> {{ $dvd->title }} </td>
            <td> {{ $dvd->rating_name }} </td>
            <td> {{ $dvd->genre_name }} </td>

        </tr>
    @endforeach
    </table>




</body>
</html>