@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.product-application.actions.edit', ['name' => $productApplication->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <product-application-form
                :action="'{{ $productApplication->resource_url }}'"
                :data="{{ $productApplication->toJson() }}"
                v-cloak
                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.product-application.actions.edit', ['name' => $productApplication->id]) }}
                    </div>

                    @include('admin.product-application.components.form-elements')


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

        </product-application-form>

        </div>

</div>

@endsection
