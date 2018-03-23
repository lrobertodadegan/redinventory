<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\HostCreateRequest;
use App\Http\Requests\HostUpdateRequest;
use App\Repositories\HostRepository;
use App\Validators\HostValidator;

/**
 * Class HostsController.
 *
 * @package namespace App\Http\Controllers;
 */
class HostsController extends Controller
{
    /**
     * @var HostRepository
     */
    protected $repository;

    /**
     * @var HostValidator
     */
    protected $validator;

    /**
     * HostsController constructor.
     *
     * @param HostRepository $repository
     * @param HostValidator $validator
     */
    public function __construct(HostRepository $repository, HostValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $hosts = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $hosts,
            ]);
        }

        return view('hosts.index', compact('hosts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  HostCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(HostCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $host = $this->repository->create($request->all());

            $response = [
                'message' => 'Host created.',
                'data'    => $host->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $host = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $host,
            ]);
        }

        return view('hosts.show', compact('host'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $host = $this->repository->find($id);

        return view('hosts.edit', compact('host'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  HostUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(HostUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $host = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Host updated.',
                'data'    => $host->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Host deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Host deleted.');
    }
}
