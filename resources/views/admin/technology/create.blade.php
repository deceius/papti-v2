@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.technology.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">

        <technology-form
            :action="'{{ url('admin/technologies') }}'"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>

                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.technology.actions.create') }}
                </div>


                @include('admin.technology.components.form-elements')

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>

            </form>

        </technology-form>

        </div>

        </div>


@endsection
