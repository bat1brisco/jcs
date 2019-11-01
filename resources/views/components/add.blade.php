<div class="row mb-3">
    <div class="col-md-3">
        <h3>
        @isset($icon)
            <i class="fas fa-{{ $icon }}"></i>
        @endisset
        {{ ucfirst($title) }}
        </h3>
    </div>
    <div class="col-md-2 offset-md-7">
        @isset($btn_link)
            <a href="{{ $btn_link }}" class="btn btn-primary float-right shadow">
                <i class="fas fa-{{ $btn_icon }} mr-2"></i>{{ $btn_title }}
            </a>
        @endisset
    </div>
</div>
