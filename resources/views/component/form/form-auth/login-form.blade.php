@component('component.form.form-auth.auth-form', [
    'action' => 'login.perform',
    'title' => 'Login',
    'fields' => [
        [
            'type' => 'text',
            'name' => 'username',
            'placeholder' => 'Username',
            'label' => 'Email or Username',
        ],
        [
            'type' => 'password',
            'name' => 'password',
            'placeholder' => 'Password',
            'label' => 'Password',
        ]
    ],
    'button' => 'Login'
])
@endcomponent
