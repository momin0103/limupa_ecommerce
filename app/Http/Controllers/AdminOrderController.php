<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use Illuminate\Http\Request;
use PDF;

class AdminOrderController extends Controller
{
    private $orders;
    private $order;
    private $orderDetails;
    private $payment;

    public function manage()
    {
        $this->orders = Order::orderBy('id', 'desc')->get();
        return view('admin.order.manage', ['orders' => $this->orders]);
    }

    public function viewOrderDetail($id)
    {
        $this->order = Order::find($id);
        return view('admin.order.detail', ['order' => $this->order]);
    }

    public function viewOrderInvoice($id)
    {
        $this->order = Order::find($id);
        return view('admin.order.invoice', ['order' => $this->order]);
    }

    public function downloadOrderInvoice($id)
    {
        $this->order = Order::find($id);
        $pdf = PDF::loadView('admin.order.print-invoice', ['order' =>  $this->order]);
        return $pdf->stream('momin.pdf');
//        return $pdf->download('momin.pdf');

    }

    public function editOrder($id)
    {
        $this->order = Order::find($id);
        return view('admin.order.edit', ['order' => $this->order]);
    }

    public function updateOrder(Request $request, $id)
    {
        $this->order = Order::find($id);
        $this->order->delivery_address = $request->delivery_address;
        $this->order->order_status = $request->order_status;
        $this->order->payment_status = $request->payment_status;
        $this->order->save();

        if ($request->order_status == 'Complete')
        {
            $this->payment = new Payment();
            $this->payment->order_id             = $id;
            $this->payment->payment_amount       = $this->order->order_total;
            $this->payment->payment_type         = $this->order->payment_type;
            $this->payment->payment_date         = date('Y-m-d');
            $this->payment->payment_timestamp    = strtotime(date('Y-m-d'));
            $this->payment->payment_status       = 'Complete';
            $this->payment->save();
        }

        return redirect('/admin-manage-order')->with('message', 'Order Status info Update Successfully.');
    }

    public function deleteOrder($id)
    {
        $this->order = Order::find($id);
        $this->order->delete();

        $this->orderDetails = OrderDetail::where('order_id', $id)->get();
        foreach ($this->orderDetails as $orderDetail)
        {
            $orderDetail->delete();
        }
        return redirect('/admin-manage-order')->with('message', 'Order Status info Delete Successfully.');
    }
}
