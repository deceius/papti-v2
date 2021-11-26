<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CompanyHistory\BulkDestroyCompanyHistory;
use App\Http\Requests\Admin\CompanyHistory\DestroyCompanyHistory;
use App\Http\Requests\Admin\CompanyHistory\IndexCompanyHistory;
use App\Http\Requests\Admin\CompanyHistory\StoreCompanyHistory;
use App\Http\Requests\Admin\CompanyHistory\UpdateCompanyHistory;
use App\Models\CompanyHistory;
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

class CompanyHistoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCompanyHistory $request
     * @return array|Factory|View
     */
    public function index(IndexCompanyHistory $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CompanyHistory::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'year_date'],

            // set columns to searchIn
            ['id', 'year_date', 'en_description', 'jp_description']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.company-history.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.company-history.create');

        return view('admin.company-history.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCompanyHistory $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCompanyHistory $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CompanyHistory
        $companyHistory = CompanyHistory::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/company-histories'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/company-histories');
    }

    /**
     * Display the specified resource.
     *
     * @param CompanyHistory $companyHistory
     * @throws AuthorizationException
     * @return void
     */
    public function show(CompanyHistory $companyHistory)
    {
        $this->authorize('admin.company-history.show', $companyHistory);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CompanyHistory $companyHistory
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CompanyHistory $companyHistory)
    {
        $this->authorize('admin.company-history.edit', $companyHistory);


        return view('admin.company-history.edit', [
            'companyHistory' => $companyHistory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCompanyHistory $request
     * @param CompanyHistory $companyHistory
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCompanyHistory $request, CompanyHistory $companyHistory)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CompanyHistory
        $companyHistory->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/company-histories'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/company-histories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCompanyHistory $request
     * @param CompanyHistory $companyHistory
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCompanyHistory $request, CompanyHistory $companyHistory)
    {
        $companyHistory->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCompanyHistory $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCompanyHistory $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CompanyHistory::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
