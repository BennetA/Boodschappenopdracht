@extends ('layouts.app')

<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
        <h1>Voeg een boodschap toe</h1>
        <form method="post" action="{{ route('groceries.store') }}">

            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="naam">
                    naam
                </label>
                <input class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="naam"
                    id="naam"
                    required
                >
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="prijs">
                    prijs
                </label>
                <input class="border border-gray-400 p-2 w-full"
                    type="decimal"
                    name="prijs"
                    id="prijs"
                    required
                >
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="aantal">
                    aantal
                </label>
                <input class="border border-gray-400 p-2 w-full"
                    type="integer"
                    name="aantal"
                    id="aantal"
                    required
                >
            </div>
            <div class="mb-6">
                <button type="submit">Sla boodschap op</button> 
            </div>


        </form>


    </main>
</section>
<!-- <form action="" method="get"></form>
<form action="" method="post"></form> -->
