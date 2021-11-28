@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.certification-policy.actions.edit', ['name' =>'Certification Policy']))

@section('body')

    <div class="container-xl">
        <div class="card">

            <certification-policy-form
                :action="'{{ $certificationPolicy->resource_url }}'"
                :data="{{ $certificationPolicy->toJson() }}"
                v-cloak
                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>





                    @include('admin.certification-policy.components.form-elements')


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

        </certification-policy-form>

        </div>

</div>

@endsection
