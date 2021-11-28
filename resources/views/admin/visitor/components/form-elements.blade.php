<div class="form-group row align-items-center" :class="{'has-danger': errors.has('country_code'), 'has-success': fields.country_code && fields.country_code.valid }">
    <label for="country_code" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.visitor.columns.country_code') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.country_code" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('country_code'), 'form-control-success': fields.country_code && fields.country_code.valid}" id="country_code" name="country_code" placeholder="{{ trans('admin.visitor.columns.country_code') }}">
        <div v-if="errors.has('country_code')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('country_code') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('count'), 'has-success': fields.count && fields.count.valid }">
    <label for="count" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.visitor.columns.count') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.count" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('count'), 'form-control-success': fields.count && fields.count.valid}" id="count" name="count" placeholder="{{ trans('admin.visitor.columns.count') }}">
        <div v-if="errors.has('count')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('count') }}</div>
    </div>
</div>


