<div>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->category_name) : 'Categories' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style=""/>
        </button>
    </x-slot>

    <x-dropdown-item href="/" :active"request() ->routeIS('home')">All</x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item
            href="/?category= {{ $category->name }}"
            :active='request()->is("categories/{$category->name}")'
        >{{ ucwods($category->name) }}</x-dropdown-item>
    @endforeach
</div>