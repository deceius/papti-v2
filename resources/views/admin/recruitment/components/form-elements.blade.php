<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_header'), 'has-success': fields.en_header && fields.en_header.valid }">
    <label for="en_header" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recruitment.columns.en_header') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.en_header" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('en_header'), 'form-control-success': fields.en_header && fields.en_header.valid}" id="en_header" name="en_header" placeholder="{{ trans('admin.recruitment.columns.en_header') }}">
        <div v-if="errors.has('en_header')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_header') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_header'), 'has-success': fields.jp_header && fields.jp_header.valid }">
    <label for="jp_header" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recruitment.columns.jp_header') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jp_header" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jp_header'), 'form-control-success': fields.jp_header && fields.jp_header.valid}" id="jp_header" name="jp_header" placeholder="{{ trans('admin.recruitment.columns.jp_header') }}">
        <div v-if="errors.has('jp_header')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_header') }}</div>
    </div>
</div>

</div>
<div class="card-header">
    <i class="fa fa-comment"></i> [EN] Recruitment Details
</div>

<div class="card-body">
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_details'), 'has-success': fields.en_details && fields.en_details.valid }">
    {{-- <label for="en_details" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recruitment.columns.en_details') }}</label> --}}
    <div :class="isFormLocalized ? 'col-md-12' : 'col-md-12'">
        <div>
            <wysiwyg v-model="form.en_details" v-validate="'required'" id="text" name="text" :config="mediaWysiwygConfig" />
        </div>
        <div v-if="errors.has('en_details')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_details') }}</div>
    </div>
</div>

</div>
<div class="card-header">
    <i class="fa fa-comment"></i> [JP] Recruitment Details
</div>

<div class="card-body">
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_details'), 'has-success': fields.jp_details && fields.jp_details.valid }">
    {{-- <label for="jp_details" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recruitment.columns.jp_details') }}</label> --}}
    <div :class="isFormLocalized ? 'col-md-12' : 'col-md-12'">
        <div>
            <wysiwyg v-model="form.jp_details" v-validate="'required'" id="text" name="text" :config="mediaWysiwygConfig" />
        </div>
        <div v-if="errors.has('jp_details')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_details') }}</div>
    </div>
</div>

</div>
<div class="card-header">
    <i class="fa fa-comment"></i> [EN] Vision Statement
</div>

<div class="card-body">
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_vision'), 'has-success': fields.en_vision && fields.en_vision.valid }">
    {{-- <label for="en_vision" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recruitment.columns.en_vision') }}</label> --}}
    <div :class="isFormLocalized ? 'col-md-12' : 'col-md-12'">
        <div>

            <wysiwyg v-model="form.en_vision" v-validate="'required'" id="text" name="text" :config="mediaWysiwygConfig" />
        </div>
        <div v-if="errors.has('en_vision')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_vision') }}</div>
    </div>
</div>

</div>
<div class="card-header">
    <i class="fa fa-comment"></i> [JP] Vision Statement
</div>

<div class="card-body">
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_vision'), 'has-success': fields.jp_vision && fields.jp_vision.valid }">
    {{-- <label for="jp_vision" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recruitment.columns.jp_vision') }}</label> --}}
    <div :class="isFormLocalized ? 'col-md-12' : 'col-md-12'">
        <div>
            <wysiwyg v-model="form.jp_vision" v-validate="'required'" id="text" name="text" :config="mediaWysiwygConfig" />
        </div>
        <div v-if="errors.has('jp_vision')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_vision') }}</div>
    </div>
</div>

</div>
<div class="card-header">
    <i class="fa fa-comment"></i> [EN] Mission Statement
</div>

<div class="card-body">
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_mission'), 'has-success': fields.en_mission && fields.en_mission.valid }">
    {{-- <label for="en_mission" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recruitment.columns.en_mission') }}</label> --}}
    <div :class="isFormLocalized ? 'col-md-12' : 'col-md-12'">
        <div>
            <wysiwyg v-model="form.en_mission" v-validate="'required'" id="text" name="text" :config="mediaWysiwygConfig" />
        </div>
        <div v-if="errors.has('en_mission')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_mission') }}</div>
    </div>
</div>
</div>
<div class="card-header">
    <i class="fa fa-comment"></i> [JP] Mission Statement
</div>

<div class="card-body">
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_mission'), 'has-success': fields.jp_mission && fields.jp_mission.valid }">
    {{-- <label for="jp_mission" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.recruitment.columns.jp_mission') }}</label> --}}
    <div :class="isFormLocalized ? 'col-md-12' : 'col-md-12'">
        <div>
            <wysiwyg v-model="form.jp_mission" v-validate="'required'" id="text" name="text" :config="mediaWysiwygConfig" />
        </div>
        <div v-if="errors.has('jp_mission')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_mission') }}</div>
    </div>
</div>


