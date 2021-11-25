<div class="collapse  nav-desk" id="navbarToggleExternalContent">
    <ul class="nav-cat title-font">
        @foreach($categories as $item)
            <li><a href="/blog/category/{{$item->id}}/1/5">مقاله - {{$item->title}}</a></li>
        @endforeach
    </ul>
</div>
