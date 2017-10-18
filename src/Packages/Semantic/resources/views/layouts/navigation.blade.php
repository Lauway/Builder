<div class="ui fixed inverted menu">
    <div class="header item">
        <span class="fa fa-cogs"></span> Brand
    </div>
    <div class="header item">
        @if (Auth::user())
            <p>Signed in as {{ Auth::user()->name }}</p>
        @endif
    </div>
    <div class="ui simple dropdown item right">
        App Menu <i class="dropdown icon"></i>
        <div class="menu">
            <a class="item" href="{{ url('dashboard') }}">Dashboard</a>
        </div>
    </div>
    @if (Auth::user())
        <a class="item" href="/logout">Logout</a>
        <a href="{!! url('logout') !!}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <span class="fa fa-sign-out"></span>
            Logout
        </a>
        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endif
</div>
