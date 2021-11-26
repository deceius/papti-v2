<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CertificationPolicy\BulkDestroyCertificationPolicy;
use App\Http\Requests\Admin\CertificationPolicy\DestroyCertificationPolicy;
use App\Http\Requests\Admin\CertificationPolicy\IndexCertificationPolicy;
use App\Http\Requests\Admin\CertificationPolicy\StoreCertificationPolicy;
use App\Http\Requests\Admin\CertificationPolicy\UpdateCertificationPolicy;
use App\Models\CertificationPolicy;
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

class CertificationPolicyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCertificationPolicy $request
     * @return array|Factory|View
     */
    public function index(IndexCertificationPolicy $request)
    {
        $existingData = CertificationPolicy::find(1);
        if ($existingData == null){
            $this->authorize('admin.certification-policy.create');
            return view('admin.certification-policy.create');
        }
        else {
            $this->authorize('admin.certification-policy.edit', $existingData);
            return view('admin.certification-policy.edit', [
                'certificationPolicy' => $existingData,
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
        $this->authorize('admin.certification-policy.create');

        return view('admin.certification-policy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCertificationPolicy $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCertificationPolicy $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CertificationPolicy
        $certificationPolicy = CertificationPolicy::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/certification-policies'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/certification-policies');
    }

    /**
     * Display the specified resource.
     *
     * @param CertificationPolicy $certificationPolicy
     * @throws AuthorizationException
     * @return void
     */
    public function show(CertificationPolicy $certificationPolicy)
    {
        $this->authorize('admin.certification-policy.show', $certificationPolicy);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CertificationPolicy $certificationPolicy
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CertificationPolicy $certificationPolicy)
    {
        $this->authorize('admin.certification-policy.edit', $certificationPolicy);


        return view('admin.certification-policy.edit', [
            'certificationPolicy' => $certificationPolicy,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCertificationPolicy $request
     * @param CertificationPolicy $certificationPolicy
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCertificationPolicy $request, CertificationPolicy $certificationPolicy)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CertificationPolicy
        $certificationPolicy->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/certification-policies'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/certification-policies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCertificationPolicy $request
     * @param CertificationPolicy $certificationPolicy
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCertificationPolicy $request, CertificationPolicy $certificationPolicy)
    {
        $certificationPolicy->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCertificationPolicy $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCertificationPolicy $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CertificationPolicy::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
