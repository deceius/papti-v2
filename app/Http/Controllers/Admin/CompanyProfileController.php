<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CompanyProfile\BulkDestroyCompanyProfile;
use App\Http\Requests\Admin\CompanyProfile\DestroyCompanyProfile;
use App\Http\Requests\Admin\CompanyProfile\IndexCompanyProfile;
use App\Http\Requests\Admin\CompanyProfile\StoreCompanyProfile;
use App\Http\Requests\Admin\CompanyProfile\UpdateCompanyProfile;
use App\Models\CompanyProfile;
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

class CompanyProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCompanyProfile $request
     * @return array|Factory|View
     */
    public function index(IndexCompanyProfile $request)
    {
        $existingData = CompanyProfile::find(1);
        if ($existingData == null){
            $this->authorize('admin.company-profile.create');
            return view('admin.company-profile.create');
        }
        else {
            $this->authorize('admin.company-profile.edit', $existingData);
            return view('admin.company-profile.edit', [
                'companyProfile' => $existingData,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.company-profile.create');

        return view('admin.company-profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCompanyProfile $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCompanyProfile $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CompanyProfile
        $companyProfile = CompanyProfile::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/company-profiles'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/company-profiles');
    }

    /**
     * Display the specified resource.
     *
     * @param CompanyProfile $companyProfile
     * @throws AuthorizationException
     * @return void
     */
    public function show(CompanyProfile $companyProfile)
    {
        $this->authorize('admin.company-profile.show', $companyProfile);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CompanyProfile $companyProfile
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CompanyProfile $companyProfile)
    {
        $this->authorize('admin.company-profile.edit', $companyProfile);


        return view('admin.company-profile.edit', [
            'companyProfile' => $companyProfile,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCompanyProfile $request
     * @param CompanyProfile $companyProfile
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCompanyProfile $request, CompanyProfile $companyProfile)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CompanyProfile
        $companyProfile->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/company-profiles'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/company-profiles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCompanyProfile $request
     * @param CompanyProfile $companyProfile
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCompanyProfile $request, CompanyProfile $companyProfile)
    {
        $companyProfile->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCompanyProfile $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCompanyProfile $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CompanyProfile::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
