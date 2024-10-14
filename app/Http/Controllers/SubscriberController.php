<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index(){
        $subscribers = Subscriber::all();
        return view('subscribers.index', compact('subscribers'));
    }

    public function create()
    {
        return view('subscriber.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);

        $subscriber = new Subscriber();
        $subscriber->name = $request->input('name');
        $subscriber->email = $request->input('email');
        $subscriber->save();

        session()->flash('status', 'subscriber subscribed successfully');

        return to_route('subscriber.index');
    }
}
