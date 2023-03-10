<?php

namespace App\Http\Livewire;

use Flasher\Prime\FlasherInterface;
use Livewire\Component;

class Counter extends Component
{
 public $count = 0;
 public function render()
 {
  return view('livewire.counter');
 }
 public function increase(FlasherInterface $flasher)
 {
  $flasher->addSuccess("Successfully Counted!");
  $this->count++;
 }
}