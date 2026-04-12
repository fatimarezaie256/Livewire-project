<?php

namespace App\Livewire;

use Livewire\Component;

class FQ extends Component
{
    public $openIndex = null;

    public function toggle($index)
    {
        if ($this->openIndex === $index) {
            $this->openIndex = null; // close if same clicked
        } else {
            $this->openIndex = $index; // open clicked
        }
    }

    public function render()
    {
      $allQuestions = [
    [
        "Why is school important?",
        "School helps us gain knowledge, learn skills, and build a better future."
    ],
    [
        "What subjects should students focus on?",
        "Students should focus on subjects like math, science, and languages, but also follow what they are interested in."
    ],
    [
        "How can I study better?",
        "You can study better by making a schedule, practicing regularly, and avoiding distractions."
    ],
    [
        "Why is homework important?",
        "Homework helps you practice what you learned in class and understand lessons more deeply."
    ],
    [
        "What should I do if I don’t understand a lesson?",
        "You should ask your teacher, study again at home, or ask a friend for help."
    ],
];
        return view('livewire.f-q')->with('data', $allQuestions);
    }
}