<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/main.js" defer></script>
    <title>time2share</title>
</head>

<body>
    @include('product.components.navbar')
    <main>
        @yield('content')
    </main>
    <div onclick="closeModal()" id="logout-modal" class="modal">
        <div onclick="event.stopPropagation();" class="modal-content">
            <p>Weet je zeker dat je uit wil loggen?</p>
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button type="submit">Log uit</button>
            </form>
            <button onclick="closeModal()">annuleer</button>
        </div>  
    </div>

    
</body>
</html>