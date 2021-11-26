<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductApplication\BulkDestroyProductApplication;
use App\Http\Requests\Admin\ProductApplication\DestroyProductApplication;
use App\Http\Requests\Admin\ProductApplication\IndexProductApplication;
use App\Http\Requests\Admin\ProductApplication\StoreProductApplication;
use App\Http\Requests\Admin\ProductApplication\UpdateProductApplication;
use App\Models\ProductApplication;
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

class ProductApplicationsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexProductApplication $request
     * @return array|Factory|View
     */
    public function index(IndexProductApplication $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(ProductApplication::class)->processRequestAndGet(
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

        return view('admin.product-application.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.product-application.create');

        return view('admin.product-application.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductApplication $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreProductApplication $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the ProductApplication
        $productApplication = ProductApplication::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/product-applications'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/product-applications');
    }

    /**
     * Display the specified resource.
     *
     * @param ProductApplication $productApplication
     * @throws AuthorizationException
     * @return void
     */
    public function show(ProductApplication $productApplication)
    {
        $this->authorize('admin.product-application.show', $productApplication);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductApplication $productApplication
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(ProductApplication $productApplication)
    {
        $this->authorize('admin.product-application.edit', $productApplication);


        return view('admin.product-application.edit', [
            'productApplication' => $productApplication,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductApplication $request
     * @param ProductApplication $productApplication
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateProductApplication $request, ProductApplication $productApplication)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values ProductApplication
        $productApplication->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/product-applications'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/product-applications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyProductApplication $request
     * @param ProductApplication $productApplication
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyProductApplication $request, ProductApplication $productApplication)
    {
        $productApplication->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyProductApplication $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyProductApplication $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    ProductApplication::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
