@props([ 'header', 'body', 'title', 'footer'])

<div {{ $attributes->class(['card']) }}>
    <div {{ $header->attributes->class(['card-header']) }}>
        {{ $header }}
    </div>

    <div {{ $body->attributes->class(['card-body']) }}>
        <h5 {{ $title->attributes->class(['card-title']) }}>
            {{ $title }}
        </h5>

        {{ $body }}
    </div>

    <div {{ $footer->attributes->class(['card-footer'])->merge(['class' => 'text-body-secondary']) }}>
        {{ $footer }}
    </div>
</div>
