<?php

namespace App\Livewire\Admin;

use App\Models\Media;
use Livewire\Component;
use Livewire\WithPagination;

class MediaView extends Component
{
    use WithPagination;
    public function render()
    {
        $media = Media::with('category')->paginate();

        return view('livewire.admin.media-view', [
            'media'=> $media
        ])->layout('layout.admin');
    }
}
