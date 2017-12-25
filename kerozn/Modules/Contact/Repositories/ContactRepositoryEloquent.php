<?php

namespace Kerozn\Modules\Contact\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;
use Kerozn\Modules\Contact\Repositories\ContactRepository;
use Kerozn\Modules\Contact\Entities\ContactRequest;
use Kerozn\Modules\Contact\Validator\ContactValidator;


/**
 * Class ContactRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ContactRepositoryEloquent extends BaseRepository implements ContactRepository, CacheableInterface
{
	use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ContactRequest::class;
	}   

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
	}
	
	 /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return "Kerozn\\Modules\\Contact\\Validator\\ContactValidator";
    }
}
