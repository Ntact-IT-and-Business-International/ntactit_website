<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 bg-pattern-2-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="lnr lnr-cart display-4 text-primary"></div>
                        <div class="ml-3">
                            <div class="text-muted small">Expected</div>
                            <div class="text-medium font-weight-bold">Ugx: {{ number_format($income_total_amount) }}</div>
                        </div>
                        <div class="ml-3">
                            <div class="text-muted small">Cash At Hand</div>
                            <div class="text-medium font-weight-bold">Ugx: {{ number_format($inital_deposit_total) }}</div>
                        </div>
                    </div><br>
                    <span class="text-danger font-weight-bold text-center"> Standing Balance Ugx : {{ number_format($income_total_amount - $inital_deposit_total) }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 bg-pattern-2-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="lnr lnr-gift display-4 text-danger"></div>
                        <div class="ml-3">
                            <div class="text-muted small">Expenditure</div>
                            <div class="text-large">Ugx : {{number_format($total_expenses_amount)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 bg-pattern-2-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="lnr lnr-gift display-4 text-danger"></div>
                        <div class="ml-3">
                            <div class="text-muted small">Actual Cash</div>
                            <div class="text-large">Ugx: {{ number_format($income_total_amount - $total_expenses_amount)}} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
