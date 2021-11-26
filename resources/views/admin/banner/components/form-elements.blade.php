@include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Banner::class)->getMediaCollection('image'),
    'media' => isset($banner)  ? $banner->getThumbs200ForCollection('image') : null,
    'label' => 'Image'
])

<div class="card-body">
    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_title'), 'has-success': fields.en_title && fields.en_title.valid }">
        <label for="en_title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.banner.columns.en_title') }}</label>
            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <input type="text" v-model="form.en_title" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('en_title'), 'form-control-success': fields.en_title && fields.en_title.valid}" id="en_title" name="en_title" placeholder="{{ trans('admin.banner.columns.en_title') }}">
            <div v-if="errors.has('en_title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_title') }}</div>
        </div>
    </div>

    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_subtitle'), 'has-success': fields.en_subtitle && fields.en_subtitle.valid }">
        <label for="en_subtitle" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.banner.columns.en_subtitle') }}</label>
            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <input type="text" v-model="form.en_subtitle" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('en_subtitle'), 'form-control-success': fields.en_subtitle && fields.en_subtitle.valid}" id="en_subtitle" name="en_subtitle" placeholder="{{ trans('admin.banner.columns.en_subtitle') }}">
            <div v-if="errors.has('en_subtitle')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_subtitle') }}</div>
        </div>
    </div>

    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_title'), 'has-success': fields.jp_title && fields.jp_title.valid }">
        <label for="jp_title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.banner.columns.jp_title') }}</label>
            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <input type="text" v-model="form.jp_title" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jp_title'), 'form-control-success': fields.jp_title && fields.jp_title.valid}" id="jp_title" name="jp_title" placeholder="{{ trans('admin.banner.columns.jp_title') }}">
            <div v-if="errors.has('jp_title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_title') }}</div>
        </div>
    </div>

    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_subtitle'), 'has-success': fields.jp_subtitle && fields.jp_subtitle.valid }">
        <label for="jp_subtitle" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.banner.columns.jp_subtitle') }}</label>
            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <input type="text" v-model="form.jp_subtitle" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jp_subtitle'), 'form-control-success': fields.jp_subtitle && fields.jp_subtitle.valid}" id="jp_subtitle" name="jp_subtitle" placeholder="{{ trans('admin.banner.columns.jp_subtitle') }}">
            <div v-if="errors.has('jp_subtitle')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_subtitle') }}</div>
        </div>
    </div>
</div>

