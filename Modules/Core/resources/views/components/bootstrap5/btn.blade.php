<button
	@style([
	  'flex-direction: row-reverse' => $iconRight,
	])

	{{ $attributes->class([
			'flex items-center justify-content-center',
			"btn-$color" => $color,
			"btn-$size" => $size,
			'w-100' => $fullWidth
	])->merge([
			'type' => $type,
			'class' => 'btn btn-primary gap-2 justify-content-center'
	]) }}>

	<x-modularavel::icon name="{{ $icon ?? $iconRight }}" />

	<span>{{ $slot->isEmpty() ? $label : $slot }}</span>
</button>
