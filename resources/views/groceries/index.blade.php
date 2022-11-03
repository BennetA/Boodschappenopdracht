<html>
    <body>
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
        </table>
        @endforeach
    </body>
</html>