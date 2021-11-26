@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.president-message.actions.edit', ['name' => 'President Message']))

@section('body')

    <div class="container-xl">
        <div class="card">

            <president-message-form
                :action="'{{ $presidentMessage->resource_url }}'"
                :data="{{ $presidentMessage->toJson() }}"
                v-cloak
                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.president-message.actions.edit', ['name' =>'President Message']) }}
                    </div>


                    @include('admin.president-message.components.form-elements')


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

        </president-message-form>

        </div>

</div>

@endsection
