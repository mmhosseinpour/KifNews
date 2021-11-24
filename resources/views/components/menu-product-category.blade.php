<div class="collapse  nav-desk" id="navbarToggleExternalContent">
    <ul class="nav-cat title-font">
        @foreach($categories as $item)
            <li><a href="/productCategory/{{$item->id}}">product - {{$item->title}}</a></li>
        @endforeach
    </ul>
</div>
