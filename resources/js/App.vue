<template>
    <IndexPage :ChangePage="ChangePage" v-if="page == 'IndexPage'" />
    <AuthPage :ChangePage="ChangePage" v-if="page == 'AuthPage'" />
    <RegistrationPage
        :ChangePage="ChangePage"
        :server="server"
        v-if="page == 'RegistrationPage'"
    />
</template>
<script>
import AuthPage from './Pages/AuthPage.vue';
import IndexPage from './Pages/IndexPage.vue';
import RegistrationPage from './Pages/RegistrationPage.vue';

export default {
    name: 'App',

    data() {
        return {
            page: 'IndexPage',
            APIserver: 'http://127.0.0.1:8000/api/',
        };
    },

    methods: {
        ChangePage(page) {
            this.page = page;
        },

        async server(route, method = 'GET', formdata = null) {
            let myHeaders = new Headers();
            myHeaders.append('Accept', 'application/json');

            let requestOptions = {
                method: method,
                headers: myHeaders,
                redirect: 'follow',
            };

            if (method != 'GET') {
                requestOptions.body = formdata;
            }

            return await fetch(this.APIserver + route, requestOptions).then(
                (response) => {
                    return response.json();
                },
            );
        },
    },

    components: {
        IndexPage,
        AuthPage,
        RegistrationPage,
    },
};
</script>
