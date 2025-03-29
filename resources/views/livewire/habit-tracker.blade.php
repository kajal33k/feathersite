<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="p-4 bg-white shadow rounded-lg">
        <h2 class="text-lg font-semibold mb-2">Your Habits</h2>
        
        @foreach($habits as $habit)
            <div class="flex justify-between items-center p-2 border-b">
                <span>{{ $habit->name }}</span>
                <button wire:click="completeHabit({{ $habit->id }})" class="px-3 py-1 bg-blue-500 text-white rounded-lg">
                    ✅ Complete
                </button>
            </div>
        @endforeach
    
        @if(session()->has('message'))
            <div class="mt-3 p-2 bg-green-300 text-green-800">
                {{ session('message') }}
            </div>
        @endif
    </div>
    
</div>
