@extends ('layouts.app')

@section('banner')
    <h1>Boodschappen</h1>
@endsection

@section('content')
        @php 
            $grandTotal = 0;
        @endphp
        <table>
            <tr>
                <td>
                    Product
                </td>
                <td>
                    Prijs
                </td>
                <td>
                    Aantal
                </td>
                <td>
                    Totaal
                </td>
            </tr>
        @foreach ($groceries as $grocery)
       
        
            <tr>
                <td>
                    {{ $grocery->name }}
                </td>
                <td>
                    {{ $grocery->price }}
                </td>
                <td>
                    {{ $grocery->quantity }}
                </td>
                <td>
                    {{ $subtotal = $grocery->price * $grocery->quantity }}
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('groceries.edit', $grocery->id) }}" class="text-blue-500 hover:text-indigo-900">Bijwerken</a>
                 </td>
                 <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <form method="post" action="{{ route('groceries.destroy', $grocery->id) }}">
                        @csrf
                        @method('delete')
                        <button class="text-xs text-gray-400">Verwijderen</button>
                    </form>
                 </td>
            </tr>
        

        @php
        $grandTotal += $subtotal;
        @endphp

        @endforeach
        <tr>
            <td>
                Totaal
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
                {{ $grandTotal }}
             </td>
        </tr>
    </table>
@endsection

@section('homepage')
    <p>
        <a href="{{ route('groceries.index') }}">Overzicht
    </p>
@endsection

@section('boodschaptoevoeging')
    <p>
    <a href="{{ route('groceries.create') }}"> Voeg nieuwe boodschappen toe
    </p>
@endsection