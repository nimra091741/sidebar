
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sale Details</title>
    @livewireStyles()
</head>
<body>

    @livewire('readsaledetail',['id' =>request('id')])
    @livewireScripts
</body>
</html>
