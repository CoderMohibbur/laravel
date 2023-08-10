<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        p{
            padding: 10px;
            border: 1px black;
        }
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center">Home</h1>
    {{-- <p>This is data from database: {{$home}}</p> --}}
    <br>
    <a href="/home">Home</a>
    <a href="/about">About</a>

    <br>
    <br>

    <table id="customers">
        <thead>
            <tr>
                <th>ID</th>
                <th>Created Date</th>
                <th>Updated Date</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($home as $hom)
            <tbody>
                <tr>
                    <td>{{$hom->id}}</td>
                    <td>{{$hom->created_at}}</td>
                    <td>{{$hom->updated_at}}</td>
                    <td>
                        <form action="home/{{$hom->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            </tbody>
    @endforeach

    </table>

    <br>
    <br>
    <form action="/home" method="post">
        @csrf
        <input type="text" name="id">
        <button type="submit">Add Home</button>
        
    </form>
</body>
</html>