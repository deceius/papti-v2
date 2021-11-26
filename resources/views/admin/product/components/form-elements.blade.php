@include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Product::class)->getMediaCollection('image'),
    'media' => isset($product)  ? $product->getThumbs200ForCollection('image') : null,
    'label' => 'Image'
])

<div class="card-body">

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_name'), 'has-success': fields.en_name && fields.en_name.valid }">
    <label for="en_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.en_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.en_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('en_name'), 'form-control-success': fields.en_name && fields.en_name.valid}" id="en_name" name="en_name" placeholder="{{ trans('admin.product.columns.en_name') }}">
        <div v-if="errors.has('en_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_description'), 'has-success': fields.en_description && fields.en_description.valid }">
    <label for="en_description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.en_description') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.en_description" v-validate="'required'" id="en_description" name="en_description"></textarea>
        </div>
        <div v-if="errors.has('en_description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_name'), 'has-success': fields.jp_name && fields.jp_name.valid }">
    <label for="jp_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.jp_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jp_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jp_name'), 'form-control-success': fields.jp_name && fields.jp_name.valid}" id="jp_name" name="jp_name" placeholder="{{ trans('admin.product.columns.jp_name') }}">
        <div v-if="errors.has('jp_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_description'), 'has-success': fields.jp_description && fields.jp_description.valid }">
    <label for="jp_description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.jp_description') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.jp_description" v-validate="'required'" id="jp_description" name="jp_description"></textarea>
        </div>
        <div v-if="errors.has('jp_description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('product_application_id'), 'has-success': fields.product_application_id && fields.product_application_id.valid }">
    <label for="product_application_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.product_application_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.product_application_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('product_application_id'), 'form-control-success': fields.product_application_id && fields.product_application_id.valid}" id="product_application_id" name="product_application_id" placeholder="{{ trans('admin.product.columns.product_application_id') }}">
        <div v-if="errors.has('product_application_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('product_application_id') }}</div>
    </div>
</div>

</div>

