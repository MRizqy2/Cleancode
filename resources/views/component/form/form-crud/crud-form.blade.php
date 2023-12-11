<form action="{{ $action }}" method="POST">
    @csrf
    @if($method == 'PUT') @method('PUT') @endif

    @foreach ($fields as $field)
        @if($field['type'] == 'text')
            @component('component.form.form-input', array_merge($field, ['floating' => false, 'inputFirst' => false]))
            @endcomponent
        @elseif($field['type'] == 'textarea')
            @component('component.form.form-textarea', $field)
            @endcomponent
        @endif
    @endforeach

    <button type="submit" class="btn btn-success">{{ $button }}</button>
</form>
