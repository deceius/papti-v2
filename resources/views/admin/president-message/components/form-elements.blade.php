@include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\PresidentMessage::class)->getMediaCollection('image'),
    'media' => isset($presidentMessage)  ? $presidentMessage->getThumbs200ForCollection('image') : null,
    'label' => 'Image'
])

<div class="card-body">

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_name'), 'has-success': fields.en_name && fields.en_name.valid }">
    <label for="en_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.president-message.columns.en_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.en_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('en_name'), 'form-control-success': fields.en_name && fields.en_name.valid}" id="en_name" name="en_name" placeholder="{{ trans('admin.president-message.columns.en_name') }}">
        <div v-if="errors.has('en_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_name'), 'has-success': fields.jp_name && fields.jp_name.valid }">
    <label for="jp_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.president-message.columns.jp_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jp_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jp_name'), 'form-control-success': fields.jp_name && fields.jp_name.valid}" id="jp_name" name="jp_name" placeholder="{{ trans('admin.president-message.columns.jp_name') }}">
        <div v-if="errors.has('jp_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_message'), 'has-success': fields.en_message && fields.en_message.valid }">
    <label for="en_message" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.president-message.columns.en_message') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.en_message" v-validate="'required'" id="en_message" name="en_message"></textarea>
        </div>
        <div v-if="errors.has('en_message')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_message') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_message'), 'has-success': fields.jp_message && fields.jp_message.valid }">
    <label for="jp_message" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.president-message.columns.jp_message') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.jp_message" v-validate="'required'" id="jp_message" name="jp_message"></textarea>
        </div>
        <div v-if="errors.has('jp_message')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_message') }}</div>
    </div>
</div>



</div>
