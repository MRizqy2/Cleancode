@extends('layouts.app-master')

@section('content')

    @component('component.container.container')
        @component('component.card.card', ['title' => 'Update Upload'])
            @include('component.message.messages')

            @component('component.form.form-crud.edit-form', ['upload' => $upload])
            @endcomponent
        @endcomponent
    @endcomponent

@endsection
