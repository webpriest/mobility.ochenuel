<li class="dropdown {{ Route::is('expertise.*') ? 'current' : ''}}"><a href="javascript:void(0)">Expertise</a>
    @if($experts)
    <ul>
        @foreach($experts as $expert)
            <li><a href="{{ route('expertise.show', $expert) }}">{{ $expert->title }}</a></li>
        @endforeach
    </ul>
    @endif
</li>