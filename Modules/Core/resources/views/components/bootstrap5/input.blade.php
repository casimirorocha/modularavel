@props(['id'])

<div {{ $attributes->class(['input-group'])->merge(['class' => 'has-validation'])->exceptProps(['autocomplete', 'autofocus']) }} up-form-group>

	@if($icon)
		<span class="input-group-text text-[1.5rem]">
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
			id="{{ $id ?? $name }}"
			type="{{ $type }}"
			name="{{ $name }}"
			placeholder="{{ $placeholder }}"
			value="{{ old($name, request()->string($name)) }}"
			@required($required)
			@disabled($disabled)
		/>

		<label for="{{ $id ?? $name }}">
			{{ $label }}
		</label>
	</div>

	@if($append)
		<span {{ $append->attributes->class(['input-group-text' => true])->merge(['class' => ' text-[1.5rem]']) }}>
			{{ $append }}
		</span>
	@endif

	<div class="invalid-feedback error">
		{{ $errors?->first($name) }}
	</div>
</div>
