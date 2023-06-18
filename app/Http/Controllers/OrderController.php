<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller {

    public function __construct() {
		$this->authorizeResource(Order::class, 'order');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $user = auth()->user();
        $orders = Order::query();
		$orders->where('user_id', auth()->id());

        if(!empty($request->search)) {
			$orders->where('name', 'like', '%' . $request->search . '%');
		}

        $orders = $orders->paginate(10);

        return view('orders.index', compact('orders', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('orders.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ) {

        $request->validate([]);

        try {

            $order = new Order();
            $order->user_id = auth()->id();
		$order->name = $request->name;
		$order->lastname = $request->lastname;
		$order->company = $request->company;
		$order->position = $request->position;
		$order->country = $request->country;
		$order->dateoftravel = $request->dateoftravel;
            $order->save();

            return redirect()->route('orders.index', [])->with('success', __('Order created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('orders.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order $order
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order,) {

        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order,) {

        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order,) {

        $request->validate([]);

        try {
            $order->name = $request->name;
		$order->lastname = $request->lastname;
		$order->company = $request->company;
		$order->position = $request->position;
		$order->country = $request->country;
		$order->dateoftravel = $request->dateoftravel;
            $order->save();

            return redirect()->route('orders.index', [])->with('success', __('Order edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('orders.edit', compact('order'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order,) {

        try {
            $order->delete();

            return redirect()->route('orders.index', [])->with('success', __('Order deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('orders.index', [])->with('error', 'Cannot delete Order: ' . $e->getMessage());
        }
    }

    
}
