<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="justify-center bg-white dark:bg-gray-800 overflow-hidden shadow-xl text-white sm:rounded-lg p-8 h-[80vh]">
            <table class="bg-gray-500 text-white w-full">
                <tr class="border-b text-left">
                    <th>
                        Name
                    </th>
                    <th>
                        Colour
                    </th>
                    <th>
                        Mana Value
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        created at
                    </th>
                </tr>
                @foreach($cards->sortBy("created_at")->reverse() as $card)
                    <tr class="border-b">
                        <td>
                            {{ $card->name }}
                        </td>
                        <td>
                            {{ $card->colour }}
                        </td>
                        <td>
                            {{ $card->cost }}
                        </td>
                        <td>
                            {{ $card->description }}
                        </td>
                        <td>
                            {{ $card->created_at }}
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
