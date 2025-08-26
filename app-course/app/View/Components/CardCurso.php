<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardCurso extends Component
{
    public $id;
    public $title;
    public $description;
    public $image;
    public $link;

    public function __construct($id, $title, $description, $image, $link)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.card-curso');
    }
}
