<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="justify-center bg-white dark:bg-gray-800 overflow-hidden shadow-xl text-white sm:rounded-lg py-4 h-[80vh]">
            <div class="flex justify-center">
                <div class="flex flex-col gap-y-4 w-[260px]">
                    <div class="text-2xl">
                        <h1>Card Creator</h1>
                    </div>
                    <div>
                        <div class="flex flex-col">
                            <label for="name">Card Name</label>
                            <input wire:model="name" class="text-black" id="name" type="text"/>
                            @error('name') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col">
                            <label for="colour">Card Colour</label>
                            <input wire:model="colour" class="text-black" id="colour" type="text"/>
                            @error('colour') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col">
                            <label for="cost">Mana Value</label>
                            <input wire:model="cost" class="text-black" id="cost" type="text"/>
                            @error('cost') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col">
                            <label for="description">Card Text</label>
                            <input wire:model="description" class="text-black" id="description" type="text"/>
                            @error('description') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="flex">
                    <button wire:click="create()" class="bg-gray-500 w-full py-2 hover:bg-gray-700">
                        submit
                    </button>
                    </div>
                    @if (session()->has('message'))

                        <div class="alert alert-success">

                            {{ session('message') }}

                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
