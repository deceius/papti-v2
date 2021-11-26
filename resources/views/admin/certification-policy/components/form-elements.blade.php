<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_ims'), 'has-success': fields.en_ims && fields.en_ims.valid }">
    <label for="en_ims" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.certification-policy.columns.en_ims') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.en_ims" v-validate="'required'" id="en_ims" name="en_ims"></textarea>
        </div>
        <div v-if="errors.has('en_ims')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_ims') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_ims'), 'has-success': fields.jp_ims && fields.jp_ims.valid }">
    <label for="jp_ims" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.certification-policy.columns.jp_ims') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.jp_ims" v-validate="'required'" id="jp_ims" name="jp_ims"></textarea>
        </div>
        <div v-if="errors.has('jp_ims')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_ims') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_iso'), 'has-success': fields.en_iso && fields.en_iso.valid }">
    <label for="en_iso" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.certification-policy.columns.en_iso') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.en_iso" v-validate="'required'" id="en_iso" name="en_iso"></textarea>
        </div>
        <div v-if="errors.has('en_iso')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_iso') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_iso'), 'has-success': fields.jp_iso && fields.jp_iso.valid }">
    <label for="jp_iso" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.certification-policy.columns.jp_iso') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.jp_iso" v-validate="'required'" id="jp_iso" name="jp_iso"></textarea>
        </div>
        <div v-if="errors.has('jp_iso')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_iso') }}</div>
    </div>
</div>


