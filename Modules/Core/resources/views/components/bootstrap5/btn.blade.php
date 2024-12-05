<div>
    <button
        @style([
          'flex-direction: row-reverse' => $iconRight,
        ])

        {{ $attributes->class([
              'd-flex align-items-center',
              "btn-$color" => $color,
              "btn-$size" => $size,
              'w-100' => $fullWidth
        ])->merge([
              'type' => $type,
              'class' => 'btn btn-primary gap-2 justify-content-center'
        ]) }}>

        <x-modularavel::icon name="{{ $icon ?? $iconRight }}" />

        {{ $slot->isEmpty() ? $label : $slot }}
    </button>
</div>
