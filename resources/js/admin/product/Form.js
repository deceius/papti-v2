import AppForm from '../app-components/Form/AppForm';

Vue.component('product-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                en_name:  '' ,
                en_description:  '' ,
                jp_name:  '' ,
                jp_description:  '' ,
                product_application_id:  '' ,

            },
            mediaCollections: ['image']
        }
    }

});
