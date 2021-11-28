@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.visitor.actions.index'))

@section('body')
    <visitor-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/visitors') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.visitor.actions.index') }}
                        {{-- <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/visitors/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.visitor.actions.create') }}</a> --}}
                    </div>
                    <div class="card-body" v-cloak style="padding: 0px;">
                        <div class="card-block" style="padding: 0px;">


                            <table class="table table-hover table-listing" style="padding: 0px;">
                                <thead>
                                    <tr>

                                        <th is='sortable' :column="'country_code'">Country</th>
                                        <th is='sortable' :column="'count'">{{ trans('admin.visitor.columns.count') }}</th>

                                        <th></th>
                                    </tr>
                                    <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                        <td class="bg-bulk-info d-table-cell text-center" colspan="4">
                                            <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/visitors')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                        href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                            <span class="pull-right pr-2">
                                                <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/visitors/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                            </span>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" :key="item.country_code" :class="bulkItems[item.country_code] ? 'bg-bulk' : ''">


                                    <td>@{{ item.country_code }}</td>
                                        <td>@{{ item.count }}</td>

                                        <td>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </visitor-listing>

@endsection
