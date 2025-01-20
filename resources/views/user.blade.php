<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <div>
        <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
        {{-- @dd($data); --}}

        {{-- simple string interpolation - inserting string or the process of replacing placeholders with values in a string literal --}}
        <button>Goto Home</button>
        <h1>Hello! I'm user {{ $id }}</h1>
        <p>I'm {{ $name }}, {{ $age }} years old. You can email me at {{ $email }}. 😊</p>
        <p>Note: {{ print_r($data) }}</p>

    </div>

</body>
</html>
