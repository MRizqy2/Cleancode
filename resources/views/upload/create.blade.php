@extends('layouts.app-master')

@section('content')

    @component('component.container.container')
        @component('component.card.card', ['title' => 'Create Upload'])
            @include('component.message.messages')

            @component('component.form.form-crud.create-form')
            @endcomponent
        @endcomponent
    @endcomponent

@endsection
