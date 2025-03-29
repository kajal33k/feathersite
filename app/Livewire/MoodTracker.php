<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Mood;
use Illuminate\Support\Facades\Auth;

class MoodTracker extends Component
{
    public $mood;

    public function saveMood()
    {
        Mood::create([
            'user_id' => Auth::id(),
            'mood' => $this->mood,
            'date' => now(),
        ]);
        session()->flash('message', 'Mood saved!');
    }

    public function render()
    {
        return view('livewire.mood-tracker');
    }
}
