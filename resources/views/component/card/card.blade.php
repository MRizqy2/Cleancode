<div class="card mt-5 {{ $rounded ?? '' }}"
style="width: {{ $width ?? 'auto' }}; height: {{ $height ?? 'auto' }}; margin: {{ $margin ?? '0 auto' }};">
@isset($title)
<div class="card-header">
    <h5>{{ $title }}</h5>
</div>
@endisset
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
