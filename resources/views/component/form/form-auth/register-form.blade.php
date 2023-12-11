@component('component.form.form-auth.auth-form', [
    'action' => 'register.perform',
    'title' => 'Register',
    'fields' => [
        [
            'type' => 'text',
            'name' => 'username',
            'placeholder' => 'Username',
            'label' => 'Username'
        ],
        [
            'type' => 'email',
            'name' => 'email',
            'placeholder' => 'name@example.com',
            'label' => 'Email address'
        ],
        [
            'type' => 'password',
            'name' => 'password',
            'placeholder' => 'Password',
            'label' => 'Password'
        ],
        [
            'type' => 'password',
            'name' => 'password_confirmation',
            'placeholder' => 'Confirm Password',
            'label' => 'Confirm Password'
        ]
    ],
    'button' => 'Register'
])
@endcomponent
