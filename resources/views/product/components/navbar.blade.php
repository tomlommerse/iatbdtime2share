<nav>
    <a href="/">producten</a>
    
    <a href="/product/create">toevoegen</a>
    @if(auth()->check())
        <a href="/user/{{ Auth::id() }}">account</a>
        <button class="login" onclick="displayConfirmModal()" class="modal-trigger">uitloggen</button>
    @else
        <a class="login" href="/login">account</a>
        <a class="login" href="/login">inloggen</a>
    @endif
    
</nav>