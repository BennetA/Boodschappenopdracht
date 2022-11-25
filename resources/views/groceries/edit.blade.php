@extends ('layouts.app')

@extends ('layouts.app')

<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
        <h1>Werk een boodschap bij</h1>
        <form method="put" action="{{ route('groceries.update') }}">

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
                    value="$grocery->name"
                >
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
                    value="$grocery->price"
                >
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
                    value="$grocery->quantity"
                >
            </div>
            <div class="mb-6">
                <button type="submit">Werk boodschap bij</button> 
            </div>


        </form>


    </main>
</section>
