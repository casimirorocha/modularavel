<i
	{{ $attributes->class([
    'bi' => !$brand,
    "bi-$name" => $name
  ])->merge(['class' => '']) }}
></i>
