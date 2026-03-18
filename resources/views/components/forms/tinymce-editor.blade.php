@props([
    'name',
    'value' => '',
    'id' => 'tinymce-editor-' . \Illuminate\Support\Str::random(5),
])

<textarea 
    {{ $attributes->merge(['class' => 'tinymce-editor']) }}
    id="{{ $id }}" 
    name="{{ $name }}"
>{!! $value !!}</textarea>