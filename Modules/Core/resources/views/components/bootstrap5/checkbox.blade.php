<div>
    <div {{ $attributes->only('class')->merge(['class' => 'form-check']) }}>
        <input class="form-check-input"
               type="{{ $type }}"
               id="{{ $id }}"
               name="{{ $name }}"
               role="{{ $role }}"
               @checked(old($name, $checked))
               aria-label="{{ $label }}"
        >
        <label class="form-check-label" for="{{ $id }}">{{ $label }}</label>
    </div>
</div>
