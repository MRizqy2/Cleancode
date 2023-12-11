@extends('layouts.auth-master')

@section('content')

    @component('component.container.container')
        @component('component.card.card', ['rounded' => 'rounded',
        'width' => '400px', 'height' => '500px', 'margin' => '0 auto'])
            @component('component.tabs.tabs')
            @endcomponent
            @if(request()->is('login'))
                @component('component.form.form-auth.login-form')
                @endcomponent
            @endif
            @if(request()->is('register'))
                @component('component.form.form-auth.register-form')
                @endcomponent
            @endif
        @endcomponent
    @endcomponent

@endsection
