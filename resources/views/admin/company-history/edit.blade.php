@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.company-history.actions.edit', ['name' => $companyHistory->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <company-history-form
                :action="'{{ $companyHistory->resource_url }}'"
                :data="{{ $companyHistory->toJson() }}"
                v-cloak
                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.company-history.actions.edit', ['name' => $companyHistory->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.company-history.components.form-elements')
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

        </company-history-form>

        </div>

</div>

@endsection
