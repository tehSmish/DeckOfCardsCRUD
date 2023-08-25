<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="justify-center bg-white dark:bg-gray-800 overflow-hidden shadow-xl text-white sm:rounded-lg p-8 h-[80vh]">
            <h1 class="text-2xl">Card Browser</h1>
            <input wire:model="search" type="text" class="mb-2 bg-gray-500 text-white placeholder-gray-300" placeholder="Search..."/>
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
                    <th>

                    </th>
                </tr>
                @foreach($cards->sortBy("created_at")->reverse() as $card)
                    <tr class="border-b group">
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
                        <td class="min-w-[40px]">
                            <div class="hidden group-hover:block">
                                <a href="{{ route('cardEditor', $card->id ) }}">
                                    edit
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
