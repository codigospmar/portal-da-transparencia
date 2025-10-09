<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb small">
        @foreach($breadcrumbs as $breadcrumb)
            @if(isset($breadcrumb["currentPage"]))
                <li class="breadcrumb-item active" aria-current="{{ $breadcrumb["currentPage"] }}">
                    {{ __($breadcrumb["title"]) }}
                </li>
            @else
                <li class="breadcrumb-item">
                    <a href="{{ $breadcrumb["route"] }}">{{ __($breadcrumb["title"]) }}</a>
                </li>
            @endif
        @endforeach
    </ol>
</nav>