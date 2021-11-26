<div class="form-group row align-items-center" :class="{'has-danger': errors.has('company_name'), 'has-success': fields.company_name && fields.company_name.valid }">
    <label for="company_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-profile.columns.company_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.company_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('company_name'), 'form-control-success': fields.company_name && fields.company_name.valid}" id="company_name" name="company_name" placeholder="{{ trans('admin.company-profile.columns.company_name') }}">
        <div v-if="errors.has('company_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('company_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('date_established'), 'has-success': fields.date_established && fields.date_established.valid }">
    <label for="date_established" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-profile.columns.date_established') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.date_established" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('date_established'), 'form-control-success': fields.date_established && fields.date_established.valid}" id="date_established" name="date_established" placeholder="{{ trans('admin.company-profile.columns.date_established') }}">
        <div v-if="errors.has('date_established')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('date_established') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('capital'), 'has-success': fields.capital && fields.capital.valid }">
    <label for="capital" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-profile.columns.capital') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.capital" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('capital'), 'form-control-success': fields.capital && fields.capital.valid}" id="capital" name="capital" placeholder="{{ trans('admin.company-profile.columns.capital') }}">
        <div v-if="errors.has('capital')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('capital') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('company_address'), 'has-success': fields.company_address && fields.company_address.valid }">
    <label for="company_address" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-profile.columns.company_address') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.company_address" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('company_address'), 'form-control-success': fields.company_address && fields.company_address.valid}" id="company_address" name="company_address" placeholder="{{ trans('admin.company-profile.columns.company_address') }}">
        <div v-if="errors.has('company_address')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('company_address') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('factory_address'), 'has-success': fields.factory_address && fields.factory_address.valid }">
    <label for="factory_address" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-profile.columns.factory_address') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.factory_address" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('factory_address'), 'form-control-success': fields.factory_address && fields.factory_address.valid}" id="factory_address" name="factory_address" placeholder="{{ trans('admin.company-profile.columns.factory_address') }}">
        <div v-if="errors.has('factory_address')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('factory_address') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('sales_address'), 'has-success': fields.sales_address && fields.sales_address.valid }">
    <label for="sales_address" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-profile.columns.sales_address') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.sales_address" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('sales_address'), 'form-control-success': fields.sales_address && fields.sales_address.valid}" id="sales_address" name="sales_address" placeholder="{{ trans('admin.company-profile.columns.sales_address') }}">
        <div v-if="errors.has('sales_address')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('sales_address') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email_company'), 'has-success': fields.email_company && fields.email_company.valid }">
    <label for="email_company" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-profile.columns.email_company') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.email_company" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email_company'), 'form-control-success': fields.email_company && fields.email_company.valid}" id="email_company" name="email_company" placeholder="{{ trans('admin.company-profile.columns.email_company') }}">
        <div v-if="errors.has('email_company')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email_company') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email_hr'), 'has-success': fields.email_hr && fields.email_hr.valid }">
    <label for="email_hr" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-profile.columns.email_hr') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.email_hr" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email_hr'), 'form-control-success': fields.email_hr && fields.email_hr.valid}" id="email_hr" name="email_hr" placeholder="{{ trans('admin.company-profile.columns.email_hr') }}">
        <div v-if="errors.has('email_hr')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email_hr') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email_sales'), 'has-success': fields.email_sales && fields.email_sales.valid }">
    <label for="email_sales" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-profile.columns.email_sales') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.email_sales" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email_sales'), 'form-control-success': fields.email_sales && fields.email_sales.valid}" id="email_sales" name="email_sales" placeholder="{{ trans('admin.company-profile.columns.email_sales') }}">
        <div v-if="errors.has('email_sales')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email_sales') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('en_production_line'), 'has-success': fields.en_production_line && fields.en_production_line.valid }">
    <label for="en_production_line" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-profile.columns.en_production_line') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.en_production_line" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('en_production_line'), 'form-control-success': fields.en_production_line && fields.en_production_line.valid}" id="en_production_line" name="en_production_line" placeholder="{{ trans('admin.company-profile.columns.en_production_line') }}">
        <div v-if="errors.has('en_production_line')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('en_production_line') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jp_production_line'), 'has-success': fields.jp_production_line && fields.jp_production_line.valid }">
    <label for="jp_production_line" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.company-profile.columns.jp_production_line') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jp_production_line" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jp_production_line'), 'form-control-success': fields.jp_production_line && fields.jp_production_line.valid}" id="jp_production_line" name="jp_production_line" placeholder="{{ trans('admin.company-profile.columns.jp_production_line') }}">
        <div v-if="errors.has('jp_production_line')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jp_production_line') }}</div>
    </div>
</div>


