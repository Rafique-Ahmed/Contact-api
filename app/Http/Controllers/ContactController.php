<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->user()->contacts();
        
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('phone', 'LIKE', "%{$search}%");
            });
        }
        
        $contacts = $query->orderBy('created_at', 'desc')->get();
        
        return response()->json($contacts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
        ]);

        $contact = $request->user()->contacts()->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return response()->json($contact, 201);
    }

    public function show(Request $request, $id)
    {
        $contact = $request->user()->contacts()->findOrFail($id);
        return response()->json($contact);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
        ]);

        $contact = $request->user()->contacts()->findOrFail($id);
        $contact->update($request->only(['name', 'email', 'phone']));

        return response()->json($contact);
    }

    public function destroy(Request $request, $id)
    {
        $contact = $request->user()->contacts()->findOrFail($id);
        $contact->delete();

        return response()->json(['message' => 'Contact deleted successfully']);
    }

    public function dashboard(Request $request)
    {
        $totalContacts = $request->user()->contacts()->count();
        
        return response()->json([
            'total_contacts' => $totalContacts
        ]);
    }
}