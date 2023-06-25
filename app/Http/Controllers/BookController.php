<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\Models\User;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $objUser;
    private $objBook;

    public function __construct()
    {   
        $this->objUser=new User();
        $this->objBook=new ModelBook();
    }

    public function index()
    {
        dd($this->objUser->find(1)->relBooks);
        //dd($this->objBook);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
