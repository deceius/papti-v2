<div class="form-group row align-items-center" :class="{'has-danger': errors.has('year_date'), 'has-success': fields.year_date && fields.year_date.valid }">
    <label for="year_date" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-history.columns.year_date') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.year_date" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('year_date'), 'form-control-success': fields.year_date && fields.year_date.valid}" id="year_date" name="year_date" placeholder="{{ trans('admin.company-history.columns.year_date') }}">
        <div v-if="errors.has('year_date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('year_date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_description'), 'has-success': fields.en_description && fields.en_description.valid }">
    <label for="en_description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-history.columns.en_description') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.en_description" v-validate="'required'" id="en_description" name="en_description"></textarea>
        </div>
        <div v-if="errors.has('en_description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_description'), 'has-success': fields.jp_description && fields.jp_description.valid }">
    <label for="jp_description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-history.columns.jp_description') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.jp_description" v-validate="'required'" id="jp_description" name="jp_description"></textarea>
        </div>
        <div v-if="errors.has('jp_description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_description') }}</div>
    </div>
</div>


