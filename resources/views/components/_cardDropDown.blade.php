<div class="col-xl-3 col-lg-4 col-md-6 card-item">
    <nav>
        <div class="dropdown">
            <button id="{{ $id }}" class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-controls="{{ $dropdownId }}">
                <span class="bg-success bg-opacity-10 p-3 rounded-3 me-3 d-inline-flex align-items-center justify-content-center" aria-hidden="true" style="color: white;">
                    {!! $fontawesome !!}
                </span>

                <span class="text-start">
                    <strong>{{ __($title) }}</strong>
                    @if(isset($small))
                        <small class="d-block text-muted">{{ __($small) }}</small>
                    @endif
                </span>
            </button>

            @if(isset($dropdown))

                <ul class="dropdown-menu text-wrap shadow-sm" id="{{ $dropdownId }}" role="menu" aria-labelledby="{{ $dropdownId }}">
                    @foreach($dropdown as $dd)
                    <li role="none">
                        <a role="menuitem" class="dropdown-item" alt="{{ __($dd["title"]) }}" href="{{ $dd["link"] }}" target="{{ $dd["target"] }}" rel="noopener noreferrer">
                            {{ __($dd["title"]) }}
                        </a>
                    </li>
                    @endforeach
                </ul>

            @endif
        </div>
    </nav>
</div>