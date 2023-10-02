<?php

namespace App\Http\Livewire;

use App\Http\Livewire\BaseComponent;

class Blog extends BaseComponent
{
    public $blog_title = 'Some article';

    public function mount(){
        $this->cta_title = 'Discover more';
        $this->cta_text = 'lots of interesting facts about bacon you never knew';
        $this->cta_link = 'https://list25.com/25-crazy-bacon-facts-that-will-blow-your-mind/';
        $this->cta_link_title = 'Bacon Facts!';
        $this->cta_bottom = true;
        //$this->cta_top = true;
    }

    public function render()
    {
        return view('livewire.blog');
    }
}
