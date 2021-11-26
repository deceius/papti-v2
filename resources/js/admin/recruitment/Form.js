import AppForm from '../app-components/Form/AppForm';

Vue.component('recruitment-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                en_header:  '' ,
                jp_header:  '' ,
                en_details:  '' ,
                jp_details:  '' ,
                en_vision:  '' ,
                jp_vision:  '' ,
                en_mission:  '' ,
                jp_mission:  '' ,
                
            }
        }
    }

});