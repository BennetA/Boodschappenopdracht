@extends ('layouts.app')

@section('banner')
    <h1>Boodschappen</h1>
@endsection

@section('content')
        @php 
            $grandTotal = 0;
        @endphp

        @foreach ($groceries as $grocery)
       
        <table>
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
                </td>
            </tr>
        </table>

        @php
        $grandTotal += $subtotal;
        @endphp

        @endforeach

    {{ $grandTotal }}
@endsection

