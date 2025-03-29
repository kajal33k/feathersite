<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Habit;
use App\Models\HabitLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HabitTracker extends Component
{
    public $habits;

    public function mount()
    {
        $this->habits = Habit::where('user_id', Auth::id())->get();
    }

    public function completeHabit($habitId)
    {
        $habit = Habit::find($habitId);
        
        // Increment the streak
        $habit->increment('streak');

        // Check for badge achievement
        if ($habit->streak == 7) {
            Auth::user()->badges()->attach(1); // Example Badge ID
            session()->flash('message', 'Congratulations! You earned a 7-day streak badge! 🎉');
        } else {
            session()->flash('message', 'Habit completed successfully!');
        }

        // Log the completion
        HabitLog::create([
            'user_id' => Auth::id(),
            'habit_id' => $habitId,
            'date' => Carbon::today(),
        ]);
    }

    public function render()
    {
        return view('livewire.habit-tracker', ['habits' => $this->habits]);
    }
}