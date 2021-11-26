<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Technology\BulkDestroyTechnology;
use App\Http\Requests\Admin\Technology\DestroyTechnology;
use App\Http\Requests\Admin\Technology\IndexTechnology;
use App\Http\Requests\Admin\Technology\StoreTechnology;
use App\Http\Requests\Admin\Technology\UpdateTechnology;
use App\Models\Technology;
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

class TechnologyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTechnology $request
     * @return array|Factory|View
     */
    public function index(IndexTechnology $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Technology::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'en_title', 'jp_title'],

            // set columns to searchIn
            ['id', 'en_title', 'en_description', 'jp_title', 'jp_description']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.technology.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.technology.create');

        return view('admin.technology.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTechnology $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreTechnology $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Technology
        $technology = Technology::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/technologies'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/technologies');
    }

    /**
     * Display the specified resource.
     *
     * @param Technology $technology
     * @throws AuthorizationException
     * @return void
     */
    public function show(Technology $technology)
    {
        $this->authorize('admin.technology.show', $technology);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Technology $technology
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Technology $technology)
    {
        $this->authorize('admin.technology.edit', $technology);


        return view('admin.technology.edit', [
            'technology' => $technology,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTechnology $request
     * @param Technology $technology
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateTechnology $request, Technology $technology)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Technology
        $technology->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/technologies'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/technologies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTechnology $request
     * @param Technology $technology
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyTechnology $request, Technology $technology)
    {
        $technology->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyTechnology $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyTechnology $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Technology::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
