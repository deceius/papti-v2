import AppForm from '../app-components/Form/AppForm';

Vue.component('technology-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                en_title:  '' ,
                en_description:  '' ,
                jp_title:  '' ,
                jp_description:  '' ,

            },
            mediaCollections: ['image']
        }
    }

});
