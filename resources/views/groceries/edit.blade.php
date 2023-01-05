@extends ('layouts.app')


<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
        <h1>Werk een boodschap bij</h1>
        <form method="post" action="{{ route('groceries.update', $grocery->id) }}">
            @method('PATCH')

            @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif


            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="naam">
                    naam
                </label>
                <input class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="name"
                    id="naam"
                    required
                    value="{{ $grocery->name }}"
                >

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="categorie">
                    categorie
                </label>
                <select class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl"
                        name="category_id">
                    
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}"@selected($grocery->category->id == $category->id)>{{ $category->category_name }}</option>
                    @endforeach
                </select>

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="prijs">
                    prijs
                </label>
                <input class="border border-gray-400 p-2 w-full"
                    type="decimal"
                    name="price"
                    id="prijs"
                    required
                    value="{{ $grocery->price }}"
                >
                
                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="aantal">
                    aantal
                </label>
                <input class="border border-gray-400 p-2 w-full"
                    type="integer"
                    name="quantity"
                    id="aantal"
                    required
                    value="{{ $grocery->quantity }}"
                >
                
                @error('quantity')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>
            <div class="mb-6">
                <button type="submit">Werk boodschap bij</button> 
            </div>


        </form>


    </main>
</section>
