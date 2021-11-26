@include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\ProductApplication::class)->getMediaCollection('image'),
    'media' => isset($productApplication)  ? $productApplication->getThumbs200ForCollection('image') : null,
    'label' => 'Image'
])

<div class="card-body">

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_title'), 'has-success': fields.en_title && fields.en_title.valid }">
    <label for="en_title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product-application.columns.en_title') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.en_title" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('en_title'), 'form-control-success': fields.en_title && fields.en_title.valid}" id="en_title" name="en_title" placeholder="{{ trans('admin.product-application.columns.en_title') }}">
        <div v-if="errors.has('en_title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_title') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_description'), 'has-success': fields.en_description && fields.en_description.valid }">
    <label for="en_description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product-application.columns.en_description') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.en_description" v-validate="'required'" id="en_description" name="en_description"></textarea>
        </div>
        <div v-if="errors.has('en_description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_title'), 'has-success': fields.jp_title && fields.jp_title.valid }">
    <label for="jp_title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product-application.columns.jp_title') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jp_title" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jp_title'), 'form-control-success': fields.jp_title && fields.jp_title.valid}" id="jp_title" name="jp_title" placeholder="{{ trans('admin.product-application.columns.jp_title') }}">
        <div v-if="errors.has('jp_title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_title') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_description'), 'has-success': fields.jp_description && fields.jp_description.valid }">
    <label for="jp_description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product-application.columns.jp_description') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.jp_description" v-validate="'required'" id="jp_description" name="jp_description"></textarea>
        </div>
        <div v-if="errors.has('jp_description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_description') }}</div>
    </div>
</div>
</div>


