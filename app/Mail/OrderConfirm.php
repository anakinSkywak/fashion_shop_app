<?php

namespace App\Mail;

use App\Models\DonHang;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderConfirm extends Mailable
{
    use Queueable, SerializesModels;

    public $donhang;

    /**
     * Create a new message instance.
     */
    public function __construct(DonHang $donhang)
    {
        //
        $this->donhang = $donhang;
    }


    public function build()
    {
        $this->subject('Xác nhận đơn hàng')
                ->markdown('user.donhangs.mail')
                ->with('donhang', $this->donhang);
    }
}
