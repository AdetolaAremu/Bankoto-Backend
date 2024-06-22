<?php

namespace App\Livewire\Admin;

use App\Models\Media;
use App\Models\MediaCategory;
use Livewire\Component;
use Livewire\WithFileUploads;   
class MediaCreate extends Component
{
    use WithFileUploads;
    public $name;
    public $media_image;
    public $media_category;
    public $description;

    protected $rules = [
        'name' => 'required|string|max:255',
        // 'media_image' => 'image',
        'description' => 'required|string|max:1000',
        'media_category' => 'required|exists:categories,id',
    ];

    public function createMedia()
    {
        // dd($this->media_image);
        $this->validate();

        $dcmedia_image_name = uniqid(). '.' . $this->media_image->extension();
        $this->media_image->storeAs('product_media', $dcmedia_image_name, 'public_uploads');

        Media::create([
            'name' => $this->name,
            'file_link' => $dcmedia_image_name,
            'description' => $this->description,
            'media_categories_id' => $this->media_category,
        ]);

        $this->reset();

        return $this->dispatch('notify', "Media created successfully", 'Success', 'success');
    }
    
    public function render()
    {
        $categories = MediaCategory::get();

        return view('livewire.admin.media-create', [
            'categories' => $categories
        ])->layout('layout.admin');
    }
}
