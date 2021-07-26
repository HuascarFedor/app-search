<div class="bg-red-100 flex flex-col p-4 rounded-xl">
    <div class="mb-4">
        <input 
            type="text"
            placeholder="Search"
            class="h-10 px-5 rounded-full text-sm focus:outline-none text-gray-600"
            wire:model="searchTerm"
        >
    </div>
    <div class="mb-4 bg-white rounded-xl p-6 shadow-md">
        <ul>
            @foreach ($users as $user)
                <li>
                    {{ $user->name }}
                </li>
            @endforeach
        </ul>
    </div>
    <div class="p-2 bg-white rounded-xl">
        {{ $users->links() }}
    </div>
</div>