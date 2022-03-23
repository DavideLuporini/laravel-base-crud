<header>
    <h1>comic</h1>
    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}">HOME</a>

                <a href="{{ route('comics.index') }}">comics</a>
            </li>
        </ul>
    </nav>
</header>

<style>
    header {
    background-color: black;
}
ul{
    list-style-type: none;
    color: white;
    ;
}

a{
    color: white;
    text-decoration: none;
}
</style>