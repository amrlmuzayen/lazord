<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\ContactRequest;

class ContactRequestController extends Controller
{
    public function store(StoreContactRequest $request)
    {
        ContactRequest::create($request->validated());

        return redirect()->to(route('pricing') . '#contact')
            ->with('success', 'تم إرسال طلبك بنجاح! سنتواصل معك قريباً.');
    }
}