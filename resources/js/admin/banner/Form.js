import AppForm from '../app-components/Form/AppForm';

Vue.component('banner-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                en_title:  '' ,
                en_subtitle:  '' ,
                jp_title:  '' ,
                jp_subtitle:  '' ,

            },
            mediaCollections: ['image']
        }
    }

});
