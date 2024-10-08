<?php

namespace Modules\Finance\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\RequisitionFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Modules\Item\App\Models\Item;
use Modules\Department\App\Models\Department;

class Requisition extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];
    
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'requested_by');
    }
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    protected static function newFactory(): RequisitionFactory
    {
        //return RequisitionFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('work_order', 'like', '%'.$val.'%')
        ->orWhere('date', 'like', '%'.$val.'%')
        ->orWhereHas('department', function ($query) use ($val) {
            $query->where('department', 'like', '%'.$val.'%');
        })
        ->orWhereHas('item', function ($query) use ($val) {
            $query->where('item', 'like', '%'.$val.'%');
        });
    }

    public static function createRequisition($fields)
    {
        self::create([
            'requested_by' => $fields['requested_by'],
            'department_id' => $fields['department_id'],
            'item_id' => $fields['item_id'],
            'date' => $fields['date'],
            'work_order' => $fields['work_order'],
            'quantity' => $fields['quantity'],
            'description' => $fields['description'],
            'unit_cost' => $fields['unit_cost'],
            'amount' => $fields['amount'],
            'request_status' => $fields['request_status'],
        ]);
    }

    public static function getRequisition($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'work_order';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator','department','item')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }
    public static function getMoreRequisitionDetails($RequisitionId){
        return self::with('creator','department','item')->where('id',$RequisitionId)
        ->get();
    }
    public static function updateRequisition($RequisitionId, $fields)
    {
        self::whereId($RequisitionId)->update([
            'requested_by' => $fields['requested_by'],
            'department_id' => $fields['department_id'],
            'item_id' => $fields['item_id'],
            'date' => $fields['date'],
            'work_order' => $fields['work_order'], 
            'quantity' => $fields['quantity'],
            'description' => $fields['description'],
            'unit_cost' => $fields['unit_cost'],
            'amount' => $fields['amount'],
            'reason' => $fields['reason'],
            'request_status' => $fields['request_status'],
            'updated_by' => $fields['updated_by'],
        ]);
    }

    public static function rejectRequisition($RequisitionId, $fields)
    {
        self::whereId($RequisitionId)->update([
            'reason' => $fields['reason'],
            'request_status' => $fields['request_status'],
            'updated_by' => $fields['updated_by'],
        ]);
    }
    public static function forwardRequisition($RequisitionId, $fields){
        self::whereId($RequisitionId)->update([
            'comment' => $fields['comment'],
            'request_status' => $fields['request_status'],
            'forwarded_by' => $fields['forwarded_by'],
        ]);
    }
    public static function deleteRequisition($RequisitionId)
    {
        self::whereId($RequisitionId)->delete();
    }
}
