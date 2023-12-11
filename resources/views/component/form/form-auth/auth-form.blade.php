<form method="post" action="{{ route($action) }}" class="mx-3">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <h1 class="h3 my-4 fw-normal">{{ $title }}</h1>

    @include('component.message.messages')

    @foreach ($fields as $field)
        @component('component.form.form-input', array_merge($field, ['floating' => true, 'inputFirst' => true]))
        @endcomponent
    @endforeach

    <button class="w-100 btn btn-lg btn-primary" type="submit">{{ $button }}</button>

    @include('auth.part.copy')
</form>
