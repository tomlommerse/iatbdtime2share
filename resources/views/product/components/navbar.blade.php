<nav>
    <a href="/">producten</a>
    <a href="/account">account</a>
    @if(auth()->check())
        <button onclick="displayConfirmModal()" class="modal-trigger">uitloggen</button>
    @else
        <a href="/login">inloggen</a>
    @endif
    <a class="add" href="/product/create">+</a>
</nav>
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
