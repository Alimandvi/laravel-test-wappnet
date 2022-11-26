<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\Tags;
use Symfony\Component\HttpFoundation\Response;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contacts::leftJoin('tags', 'tags.id', '=', 'contacts.tags')->select('contacts.id', 'contacts.name', 'tags.name as tag_name')->cursorPaginate(10);
        return response()->json([
            'success' => true,
            'data' => $contacts
        ], Response::HTTP_OK);
    }
}
