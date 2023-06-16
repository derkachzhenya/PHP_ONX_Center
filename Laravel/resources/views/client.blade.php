<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container col-6 ">
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Buyer</th>
                    <th scope="col">Salesman</th>
                    <th scope="col">Things</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($things as $thing)
                    <tr>
                        <td>{{ $thing->id }}</td>
                        <td>{{ $thing->name }}</td>
                        <td>{{ $thing->client->name }}</td>
                        <td>{{ $thing->client->things }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
