<form id="{{ $id }}" class="d-flex mb-4 pt-4" method="get">
    <input type="hidden" name="page" value="{{ request()->input('page', 1) }}">
    <input type="text" class="form-control me-2" name="q" placeholder="{{ $placeholder }}"
        value="{{ request()->input('q') }}">
    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>