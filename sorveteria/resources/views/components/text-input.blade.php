@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-rose-400 focus:ring-rose-500 rounded-md shadow-sm']) }}>
