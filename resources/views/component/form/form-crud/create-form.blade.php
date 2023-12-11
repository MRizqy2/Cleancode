@component('component.form.form-crud.crud-form', [
    'action' => route('upload.store'),
    'method' => 'POST',
    'fields' => [
        [
            'name' => 'title',
            'type' => 'text',
            'value' => old('title'),
            'placeholder' => 'Title Upload',
            'label' => 'Title',
        ],
        [
            'name' => 'upload_content',
            'type' => 'textarea',
            'value' => old('upload_content'),
            'placeholder' => 'Upload Content',
            'label' => 'Upload Content',
        ]
    ],
    'button' => 'CREATE'
])
@endcomponent
