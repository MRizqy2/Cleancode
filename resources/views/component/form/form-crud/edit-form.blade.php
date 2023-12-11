@component('component.form.form-crud.crud-form', [
    'action' => route('upload.update', $upload),
    'method' => 'PUT',
    'fields' => [
        [
            'name' => 'title',
            'type' => 'text',
            'value' => old('title', $upload->title),
            'placeholder' => 'Title Upload',
            'label' => 'Title',
        ],
        [
            'name' => 'upload_content',
            'type' => 'textarea',
            'value' => old('upload_content', $upload->upload_content),
            'placeholder' => 'Upload Content',
            'label' => 'Upload Content',
        ]
    ],
    'button' => 'UPDATE'
])
@endcomponent
