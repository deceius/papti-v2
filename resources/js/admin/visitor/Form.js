import AppForm from '../app-components/Form/AppForm';

Vue.component('visitor-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                country_code:  '' ,
                
            }
        }
    }

});