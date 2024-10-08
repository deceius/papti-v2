@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.product.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">

        <product-form
            :action="'{{ url('admin/products') }}'"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>

                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.product.actions.create') }}
                </div>


                @include('admin.product.components.form-elements')
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>

            </form>

        </product-form>

        </div>

        </div>


@endsection
