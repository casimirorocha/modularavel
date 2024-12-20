<div {{ $attributes->class(['input-group'])->merge(['class' => 'has-validation'])->exceptProps(['autocomplete', 'autofocus']) }} up-form-group>

    @if($icon)
        <span class="input-group-text text-[1.4rem]">
            <x-modularavel::icon :name="$icon" />
        </span>
    @endif

    <div @class(['form-floating', 'is-invalid' => $errors->has($name)])>
        <input
            {{ $attributes->onlyProps(['autocomplete', 'autofocus']) }}
            @class([
              'form-control',
              'is-invalid' => $errors->has($name)
            ])
            id="{{ $id }}"
            type="{{ $type }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            value="{{ old($name, request()->string($name)) }}"
            @required($required)
        />

        <label for="{{ $id }}">
            {{ $label }}
        </label>
    </div>

    <div class="invalid-feedback error">
        {{ $errors?->first($name) }}
    </div>
</div>
