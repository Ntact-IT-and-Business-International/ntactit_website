<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="card">
        <div class="card-body p-5">
        <div class="row">
                <div class="col-sm-12 pb-2" style="text-align:center;">
                    <h6 class="text-big text-center text-large font-weight-bold mb-2">REQUISITION DETAILS</h6>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row text-center">
                <div class="col-sm-6 mb-4">
                    @foreach($requisition_deails as $details)
                    <div><span class="font-weight-bold mb-2">Employee:</span> {{ $details->creator->name }}</div>
                    <div><span class="font-weight-bold mb-2">Work Order:</span> {{ $details->work_order }}</div>
                    <div><span class="font-weight-bold mb-2">Date:</span> {{ $details->date }}</div>
                    @endforeach
                </div>
                <div class="col-sm-6 mb-4">
                   @foreach($requisition_deails as $details)
                    <div><span class="font-weight-bold mb-2">Item:</span> {{ $details->item->item }}</div>
                    <div><span class="font-weight-bold mb-2">Department:</span> {{ $details->department->department }}</div>
                    <div><span class="font-weight-bold mb-2">Status:</span> {{ $details->request_status }}</div>
                    @endforeach
                </div>
            </div>
            <div class="table-responsive mb-4">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th class="py-3">
                                Request Description
                            </th>
                            <th class="py-3">
                                Quantity
                            </th>
                            <th class="py-3">
                                Unit Cost
                            </th>
                            <th class="py-3">
                                Amount
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requisition_deails as $details)
                        <tr>
                            <td class="py-3">
                                <div class="font-weight-semibold">{{ $details->item->item }}</div>
                                <div class="text-muted">{{ $details->description }}</div>
                            </td>
                            <td class="py-3">
                                <strong>{{ $details->quantity }}</strong>
                            </td>
                            <td class="py-3">
                                <strong>Ugx: {{ number_format($details->unit_cost) }}</strong>
                            </td>
                            <td class="py-3">
                                <strong>Ugx: {{ number_format($details->amount) }}</strong>
                            </td>
                        </tr>
                        @endforeach
                        @foreach($requisition_deails as $details)
                        <tr>
                            <td colspan="3" class="text-right py-3">
                                Subtotal:
                                <br> Tax(25%):
                                <br>
                                <span class="d-block text-big mt-2">Total:</span>
                            </td>
                            <td class="py-3">
                                <strong>Ugx: {{ number_format($details->amount) }}</strong>
                                <br>
                                <strong>Ugx: 0</strong>
                                <br>
                                <strong class="d-block text-big mt-2">Ugx: {{ number_format($details->amount) }}</strong>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-muted">
                <strong>Forwarded Note:</strong> 
                @foreach($requisition_deails as $details)
                   <span style="color: blue;">{{ $details->comment }}</span>
                @endforeach
                <br>
                <strong>Rejection Note:</strong> 
                @foreach($requisition_deails as $details)
                   <span style="color: red;">{{ $details->reason }}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>
