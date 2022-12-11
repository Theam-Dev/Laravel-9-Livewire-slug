<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class Slug extends Component
{
    public $title;
    public $slug;
    public function render()
    {
        $blogs = Blog::latest()->take(7)->get();
        return view('livewire.slug', compact('blogs'));
    }
    public function generateSlug()
    {
        $this->slug = SlugService::createSlug(Blog::class, 'slug', $this->title);
    }
    public function store()
    {
        Blog::create([
            'title' => $this->title,
            'slug'  => $this->slug
        ]);
    }
}
