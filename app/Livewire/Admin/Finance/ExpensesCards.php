<?php

namespace App\Livewire\Admin\Finance;

use Livewire\Component;
use Modules\Finance\App\Models\Expense;
use Modules\Finance\App\Models\Income;

class ExpensesCards extends Component
{
    protected $listeners = ['ExpensesCards' => '$refresh'];

    public function render()
    {
        return view('livewire.admin.finance.expenses-cards',[
            'income_total_amount'=>Income::sumIncomeAmount(),
            'inital_deposit_total' =>Income::sumIncomeDeposit(),
            'total_expenses_amount' =>Expense::sumAmount()
        ]);
    }
}
