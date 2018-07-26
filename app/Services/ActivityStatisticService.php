<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Builder;

class ActivityStatisticService
{
    use Hasher;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the account record associated with the debt.
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the contact record associated with the debt.
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    /**
     * Limit results to unpaid/unreceived debt.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeInProgress(Builder $query)
    {
        return $query->where('status', 'inprogress');
    }

    /**
     * Limit results to due debt.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeDue(Builder $query)
    {
        return $query->where('in_debt', 'yes');
    }

    /**
     * Limit results to owed debt.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeOwed(Builder $query)
    {
        return $query->where('in_debt', 'no');
    }
}