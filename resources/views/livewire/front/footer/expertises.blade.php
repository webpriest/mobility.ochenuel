<ul class="user-links">
    @if($expertises->isNotEmpty())
        @foreach($expertises as $expert)
            <li><a href="{{ route('expertise.show', $expert) }}">{{ $expert->title }}</a></li>
        @endforeach
    @endif
</ul>