<?php

namespace Kerozn\Modules\Contact\Entities;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
	protected $table = 'kerozn_contact_requests';
    protected $fillable = [
        'name',
        'object',
        'email',
        'company',
        'phone',
        'message',
    ];
}
