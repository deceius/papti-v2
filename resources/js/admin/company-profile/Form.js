import AppForm from '../app-components/Form/AppForm';

Vue.component('company-profile-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                company_name:  '' ,
                date_established:  '' ,
                capital:  '' ,
                company_address:  '' ,
                factory_address:  '' ,
                sales_address:  '' ,
                email_company:  '' ,
                email_hr:  '' ,
                email_sales:  '' ,
                en_production_line:  '' ,
                jp_production_line:  '' ,
                
            }
        }
    }

});