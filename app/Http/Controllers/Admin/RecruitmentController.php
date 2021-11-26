<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Recruitment\BulkDestroyRecruitment;
use App\Http\Requests\Admin\Recruitment\DestroyRecruitment;
use App\Http\Requests\Admin\Recruitment\IndexRecruitment;
use App\Http\Requests\Admin\Recruitment\StoreRecruitment;
use App\Http\Requests\Admin\Recruitment\UpdateRecruitment;
use App\Models\Recruitment;
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

class RecruitmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexRecruitment $request
     * @return array|Factory|View
     */
    public function index(IndexRecruitment $request)
    {
        $existingData = Recruitment::find(1);
        if ($existingData == null){
            $this->authorize('admin.recruitment.create');
            return view('admin.recruitment.create');
        }
        else {
            $this->authorize('admin.recruitment.edit', $existingData);
            return view('admin.recruitment.edit', [
                'recruitment' => $existingData,
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
        $this->authorize('admin.recruitment.create');

        return view('admin.recruitment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRecruitment $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreRecruitment $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Recruitment
        $recruitment = Recruitment::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/recruitments'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/recruitments');
    }

    /**
     * Display the specified resource.
     *
     * @param Recruitment $recruitment
     * @throws AuthorizationException
     * @return void
     */
    public function show(Recruitment $recruitment)
    {
        $this->authorize('admin.recruitment.show', $recruitment);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Recruitment $recruitment
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Recruitment $recruitment)
    {
        $this->authorize('admin.recruitment.edit', $recruitment);


        return view('admin.recruitment.edit', [
            'recruitment' => $recruitment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRecruitment $request
     * @param Recruitment $recruitment
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateRecruitment $request, Recruitment $recruitment)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Recruitment
        $recruitment->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/recruitments'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/recruitments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRecruitment $request
     * @param Recruitment $recruitment
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyRecruitment $request, Recruitment $recruitment)
    {
        $recruitment->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyRecruitment $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyRecruitment $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Recruitment::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
