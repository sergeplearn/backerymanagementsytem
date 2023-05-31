<?php

namespace App\Policies;

use App\Models\User;
use App\Models\money;
use Illuminate\Auth\Access\Response;

class MoneyPolicy
{

    public function before(User $user, $ability){
        if($user->role == 'super_admin'){
            return true;
        }

    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, money $money): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, money $money): bool
    {
        return $user->role == 'admin';
            
         
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, money $money): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, money $money): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, money $money): bool
    {
        //
    }
}
