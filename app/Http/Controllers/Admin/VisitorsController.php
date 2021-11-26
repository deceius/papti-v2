<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Visitor\BulkDestroyVisitor;
use App\Http\Requests\Admin\Visitor\DestroyVisitor;
use App\Http\Requests\Admin\Visitor\IndexVisitor;
use App\Http\Requests\Admin\Visitor\StoreVisitor;
use App\Http\Requests\Admin\Visitor\UpdateVisitor;
use App\Models\Visitor;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class VisitorsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexVisitor $request
     * @return array|Factory|View
     */
    public function index(IndexVisitor $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Visitor::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'country_code'],

            // set columns to searchIn
            ['id', 'country_code']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.visitor.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.visitor.create');

        return view('admin.visitor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreVisitor $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreVisitor $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Visitor
        $visitor = Visitor::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/visitors'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/visitors');
    }

    /**
     * Display the specified resource.
     *
     * @param Visitor $visitor
     * @throws AuthorizationException
     * @return void
     */
    public function show(Visitor $visitor)
    {
        $this->authorize('admin.visitor.show', $visitor);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Visitor $visitor
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Visitor $visitor)
    {
        $this->authorize('admin.visitor.edit', $visitor);


        return view('admin.visitor.edit', [
            'visitor' => $visitor,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateVisitor $request
     * @param Visitor $visitor
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateVisitor $request, Visitor $visitor)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Visitor
        $visitor->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/visitors'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/visitors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyVisitor $request
     * @param Visitor $visitor
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyVisitor $request, Visitor $visitor)
    {
        $visitor->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyVisitor $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyVisitor $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Visitor::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
