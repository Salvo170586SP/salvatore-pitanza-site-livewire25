<?php

namespace App\Livewire\Admin\Drawings;

use App\Models\Drawing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class IndexDrawings extends Component
{
    public function deleteDraw($draw_id)
    {
        $drawing = Drawing::findOrFail($draw_id);

        if ($drawing) {
            if ($drawing->img_url) {
                Storage::disk('public')->delete($drawing->img_url);
            }
            $drawing->delete();
            session()->flash('message', 'Elemento eliminato con successo!');
        }
    }

    public function render()
    {
        $drawings = Drawing::where('user_id', Auth::id())->get();
        return view('livewire.admin.drawings.index-drawings', compact('drawings'));
    }
}
