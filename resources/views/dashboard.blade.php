<h1>Iniciaste sesión</h1>
<form method="POST" action="{{ route('logout') }}">

@csrf

<a href="route('logout')" onclick="event.preventDefault();
                this.closest('form').submit();" class="text-black  ring-transparent text-white">
    {{ __('Log Out') }}
</a>
</form>