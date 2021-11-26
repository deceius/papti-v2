import AppForm from '../app-components/Form/AppForm';

Vue.component('president-message-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                en_name:  '' ,
                jp_name:  '' ,
                en_message:  '' ,
                jp_message:  '' ,

            },
            mediaCollections: ['image']
        }
    }

});
