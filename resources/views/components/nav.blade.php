<div class="container">
    <nav>
        <ul>
            <li><a class="menu" href="/">home</a></li>
            <li><a class="menu" href="/news">All news</a></li>
            @if (Auth::user())
        @if (Auth::user()->admin)

        <li><a class="menu" href="/admin/cat">Category</a></li>
        <li><a class="menu" href="/admin/myAdmin">Admin</a></li>
        <li><a class="menu" href="/user">Users</a></li>
        <li><a class="menu" href="/parser">Parser</a></li>
        <li><a class="menu" href="/url">Parser url</a></li>

        @endif
    @endif

            {{-- <li><a class="menu" href="#">featured</a></li>
            <li><a class="menu" href="#">hot deals</a></li> --}}
        </ul>

    </nav>
</div>
