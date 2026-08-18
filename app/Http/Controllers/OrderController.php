<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Database\Eloquent\ModelNotFoundException;


use App\Enums\OrderStatus;
use App\Models\Order;

class OrderController extends Controller
{
    public function create(): View
    {
        $currentDate = date('Y-m-d');

        return view('order.create')->with("date", $currentDate);
    }

    public function index(): View
    {
        return view('order.index')->with("orders", Order::all());
    }

    public function show(string $id): View
    {
        try {
            $order = Order::findOrFail($id);
            return view('order.show')->with('order', $order);
        }catch(ModelNotFoundException){
            return view('home.index');
        }
    }

    public function save(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'total' => 'required|numeric|min:0',
            'status' => ['required', new Enum(OrderStatus::class)],
        ]);

        Order::create($validated);

        return redirect()->route('order.index');
    }

    public function delete(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'id' => 'required|numeric|min:1',
        ]);

        $order = Order::find($validated['id']);

        if ($order) {
            $order->delete();
        }

        return redirect()->route('order.index');
    }
}
