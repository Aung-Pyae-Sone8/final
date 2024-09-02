@component('mail::message')
# Order Accepted

Hello {{ $order->name }},

We are pleased to inform you that your order has been accepted. You can expect your book to arrive within the next few days.

You can download your book by clicking the link below:

@component('mail::button', ['url' => $pdfUrl])
Download Book
@endcomponent

Thank you for your purchase.

Best regards,

The Bookstore Team
@endcomponent