<div class="col-xl-3 col-lg-4 col-md-6 card-item">
    <nav>
        <a id="{{ $id }}" class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3" type="button" onclick="javascript:window.open('{{ $link }}', '{{ $target }}')">
            <span class="bg-success bg-opacity-10 p-3 rounded-3 me-3 d-inline-flex align-items-center justify-content-center" aria-hidden="true" style="color: white; color: white; height: 73px; width: 73px;">
                {!! $fontawesome !!}
            </span>

            <span class="text-start">
                <strong>{{ __($title) }}</strong>
                @if(isset($small))
                    <small class="d-block text-muted">{{ __($small) }}</small>
                @endif
            </span>
        </a>
    </nav>
</div>