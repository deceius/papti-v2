import AppForm from '../app-components/Form/AppForm';

Vue.component('certification-policy-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                en_ims:  '' ,
                jp_ims:  '' ,
                en_iso:  '' ,
                jp_iso:  '' ,
                
            }
        }
    }

});