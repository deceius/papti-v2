import AppForm from '../app-components/Form/AppForm';

Vue.component('company-history-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                year_date:  '' ,
                en_description:  '' ,
                jp_description:  '' ,
                
            }
        }
    }

});