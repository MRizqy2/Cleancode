@extends('layouts.auth-master')

@section('content')

    @component('component.container.container')
        @component('component.card.card', ['rounded' => 'rounded',
        'width' => '400px', 'height' => '600px', 'margin' => '0 auto'])
            @component('component.tabs.tabs')
            @endcomponent
            @if(request()->is('login'))
                @component('component.form.form-auth.login-form')
                @endcomponent
            @else
                @component('component.form.form-auth.register-form')
                @endcomponent
            @endif
        @endcomponent
    @endcomponent

@endsection
