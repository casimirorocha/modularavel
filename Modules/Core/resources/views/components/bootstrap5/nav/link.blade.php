<a {{ $attributes->merge([
        'class' => 'nav-link px-2 text-muted',
        'tabindex' => 0,
        'role' => 'link'
    ]) }}

   up-follow
   up-clickable
>{{ $label ?? $slot }}</a>
