<div {{ $attributes->class(['card']) }}>
    @isset($header)
        <div {{ $header->attributes->class(['card-header']) }}>
            {{ $header }}
        </div>
    @endisset

    <div {{ $body->attributes->class(['card-body'])->merge(['class' => 'p-4']) }}>
        @isset($title)
            <h5 {{ $title->attributes->class(['card-title']) }}>
                {{ $title }}
            </h5>
        @endisset

        {{ $body }}
    </div>

    @isset($footer)
        <div {{ $footer->attributes->class(['card-footer'])->merge(['class' => 'text-body-secondary']) }}>
            {{ $footer }}
        </div>
    @endisset
</div>
