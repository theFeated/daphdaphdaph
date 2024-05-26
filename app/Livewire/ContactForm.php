<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Redirect;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:3|max:255',
        'email' => 'required|email|min:3|max:255',
        'subject' => 'required|string|min:3|max:255',
        'message' => 'required|string|min:3|max:1000'
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function send()
    {
        $validatedData = $this->validate();

        try {
            Mail::to('admin@gmail.com')->send(new ContactUsMail($validatedData));

            session()->flash('success', 'Message sent successfully!');
        } catch (\Throwable $th) {
            session()->flash('error', 'Failed to send message. Please try again later.');
        }

        return redirect()->route('index');
    }
}