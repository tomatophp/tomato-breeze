@props(['as' => 'Link'])

<{{ $as }} {{ $attributes->class('block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 dark:bg-gray-800  dark:hover:bg-gray-600 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out') }}>{{ $slot }}</{{ $as }}>
