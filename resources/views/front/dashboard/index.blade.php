<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
    Logout 
</a>    
<form id="frm-logout" action="{{ url('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>