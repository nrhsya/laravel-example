{{-- attributes tu maksudnya boleh access anything yg kita pass dekat component --}}
{{-- eg: href, id, class, etc, boleh di access from the <x-nav-link> --}}
{{-- <a {{ $attributes }}>{{ $slot }}</a> --}}

{{-- props = anything that are not attributes --}}
{{-- contoh if nak declare something as props, kena declare props mcm dekat bawah, if not dia akan baca as attributes --}}
@props(['active' => false, 'type' => 'a'])

<?php if ($type === 'a') { ?>
    <a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}"
        {{ $attributes }}>
        {{ $slot }}
    </a>
<?php } else { ?>
    <button class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}"
        {{ $attributes }}>
        {{ $slot }}
    </button>
<?php } ?>
