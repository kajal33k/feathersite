<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div>
        <h2>Track Your Mood</h2>
        <select wire:model="mood">
            <option value="happy">😊 Happy</option>
            <option value="neutral">😐 Neutral</option>
            <option value="sad">😢 Sad</option>
        </select>
        <button wire:click="saveMood">Save</button>
    
        @if(session()->has('message'))
            <p>{{ session('message') }}</p>
        @endif
    </div>
    
</div>
