<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PresidentMessage\BulkDestroyPresidentMessage;
use App\Http\Requests\Admin\PresidentMessage\DestroyPresidentMessage;
use App\Http\Requests\Admin\PresidentMessage\IndexPresidentMessage;
use App\Http\Requests\Admin\PresidentMessage\StorePresidentMessage;
use App\Http\Requests\Admin\PresidentMessage\UpdatePresidentMessage;
use App\Models\PresidentMessage;
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

class PresidentMessageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPresidentMessage $request
     * @return array|Factory|View
     */
    public function index(IndexPresidentMessage $request)
    {
        $existingData = PresidentMessage::find(1);
        if ($existingData == null){
            $this->authorize('admin.president-message.create');
            return view('admin.president-message.create');
        }
        else {
            $this->authorize('admin.president-message.edit', $existingData);
            return view('admin.president-message.edit', [
                'presidentMessage' => $existingData,
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
        $this->authorize('admin.president-message.create');

        return view('admin.president-message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePresidentMessage $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePresidentMessage $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the PresidentMessage
        $presidentMessage = PresidentMessage::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/president-messages'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/president-messages');
    }

    /**
     * Display the specified resource.
     *
     * @param PresidentMessage $presidentMessage
     * @throws AuthorizationException
     * @return void
     */
    public function show(PresidentMessage $presidentMessage)
    {
        $this->authorize('admin.president-message.show', $presidentMessage);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param PresidentMessage $presidentMessage
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(PresidentMessage $presidentMessage)
    {
        $this->authorize('admin.president-message.edit', $presidentMessage);


        return view('admin.president-message.edit', [
            'presidentMessage' => $presidentMessage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePresidentMessage $request
     * @param PresidentMessage $presidentMessage
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePresidentMessage $request, PresidentMessage $presidentMessage)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values PresidentMessage
        $presidentMessage->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/president-messages'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/president-messages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPresidentMessage $request
     * @param PresidentMessage $presidentMessage
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPresidentMessage $request, PresidentMessage $presidentMessage)
    {
        $presidentMessage->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPresidentMessage $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPresidentMessage $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    PresidentMessage::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
