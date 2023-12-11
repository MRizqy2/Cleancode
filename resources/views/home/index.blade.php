@extends('layouts.app-master')

@section('content')

@auth
    @component('component.container.container')
        @if (Session::has('success'))
            <div class="alert alert-success mt-3">
                {{ Session::get('success') }}
            </div>
        @endif

        @component('component.card.card', ['title' => 'Data Upload'])
            <a href="{{ route('upload.create') }}" class="btn btn-success mb-3">+ Create Upload</a>

            @component('component.table.table')
                <?php $no = 1; ?>
                @forelse ($uploads as $upload)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $upload->title }}</td>
                        <td>{{ $upload->upload_content }}</td>
                        <td>
                            <a href="{{ route('upload.edit',$upload) }}" class="btn btn-warning btn-sm">Edit</a>

                            @component('component.form.form-crud.delete-form', ['upload' => $upload])
                            @endcomponent
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No data.</td>
                    </tr>
                @endforelse
            @endcomponent
        @endcomponent
    @endcomponent
@endauth

@endsection
