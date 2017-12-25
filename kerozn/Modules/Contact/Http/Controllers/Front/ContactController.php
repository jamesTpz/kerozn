<?php

namespace Kerozn\Modules\Contact\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Kerozn\Modules\Contact\Repositories\ContactRepository;
use Kerozn\Modules\Contact\Events\ContactRequestWasCreated;

class ContactController extends Controller
{
	/**
     * @var PostRepository
     */
    protected $repository;

    public function __construct(ContactRepository $repository){
        $this->repository = $repository;
	}

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('contact::public.contact');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
		try {
			$contactRequest = $this->repository->create($request->all());
			event(new ContactRequestWasCreated($contactRequest));
			return redirect()->back()->withSuccess(trans('contact::contactrequests.success'));
        } catch (\Prettus\Validator\Exceptions\ValidatorException $e) {
			return redirect()->back()->withErrors($e->getMessageBag());
        }
		
    }


}
