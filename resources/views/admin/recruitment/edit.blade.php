@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.recruitment.actions.edit', ['name' => 'Recruitment']))

@section('body')

    <div class="container-xl">
        <div class="card">

            <recruitment-form
                :action="'{{ $recruitment->resource_url }}'"
                :data="{{ $recruitment->toJson() }}"
                v-cloak
                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.recruitment.actions.edit', ['name' => 'Recruitment']) }}
                    </div>

                    <div class="card-body">
                        @include('admin.recruitment.components.form-elements')
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

        </recruitment-form>

        </div>

</div>

@endsection
