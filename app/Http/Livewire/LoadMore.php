<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class LoadMore extends Component
{
    public $page_number=3;
    use WithPagination;
    public function render()
    {
        $posts=Post::orderBy('id','DESC')->paginate($this->page_number);
        return view('livewire.load-more',compact(
            ['posts']))
            ->layout('layouts.app');
    }

    public function loadMore(){
      $this->page_number += 6;  
    }
}
