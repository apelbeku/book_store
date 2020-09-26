<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Order;
use App\Model\Category;
use App\Model\Book;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->orders = new Order();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->orders;
        $orders = $this->orders::orderBy('created_at', 'desc')->get();

        return view('/order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();

        return view('/order.forms', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books = $this->Book::create(request::all());

        return redirect('/order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->orders;
        $orders = $this->orders::with('order_details')->find($id);
        $books = Book::all();

        return view('/order.forms', compact('books', 'orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->orders;
        $orders->customer_name = $request->customer_name;
        $orders->book_id = $request->book_id;
        $orders->qty = $request->qty;
        $orders->subtotal = $request->subtotal;
        $orders->price = $request->price;
        $orders->save();

        return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = $this->order::find(id);
        $orders->delete();

        return view('/order');
    }
}
