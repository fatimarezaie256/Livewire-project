<?php

namespace App\Livewire;

use Livewire\Component;

class FQ extends Component
{
    public function render()
    {
        
        $allQuestions = [
          [
            "lorem ipsum dolor sit?",
            "lorem ipsum dolor sit",
            false
          ],
          [
            "lorem ipsum dolor sit?",
            "lorem ipsum dolor sit",
            false
          ],
          [
            "lorem ipsum dolor sit?",
            "lorem ipsum dolor sit",
            false
          ],
          [
            "lorem ipsum dolor sit?",
            "lorem ipsum dolor sit",
            false
          ],
          [
            "lorem ipsum dolor sit?",
            "lorem ipsum dolor sit",
            false
          ],
        ];
        
        return view('livewire.f-q')->with('data',$allQuestions);
    }
}
