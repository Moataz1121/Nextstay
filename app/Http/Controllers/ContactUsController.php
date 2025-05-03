<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    public function index(): Factory|View
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'));
    }


    public function create(): Factory|Application|View
    {
        return view('user.contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $request = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'message' => 'required|string'
        ]);

        $data = $request;
        $data['user_id'] = Auth::id();

        Contact::query()->create($data);

        return redirect()->route('contact')->with('success', 'Your message has been sent');
    }
}
