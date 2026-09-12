<template>
    <HeaderComponent :ChangePage="ChangePage" />

    <div class="form">
        <h1>Регистрация</h1>
        <div class="mb-3">
            <label for="fio" class="label-form">ФИО</label>
            <input
                type="text"
                id="fio"
                v-model="fio"
                class="input-form error-input"
                placeholder="Фамилия имя отчество"
            />
            <p class="error-form">Это поле обязательно</p>
        </div>
        <div class="mb-3">
            <label for="email" class="label-form"
                >Адрес электронной почты</label
            >
            <input
                type="email"
                id="email"
                v-model="email"
                class="input-form"
                placeholder="ivan@email.com"
            />
        </div>
        <div class="mb-3">
            <label for="phone" class="label-form">Номер телефона</label>
            <input
                type="text"
                id="phone"
                v-model="phone"
                class="input-form"
                placeholder="8(XXX)XXX-XX-XX"
            />
        </div>
        <div class="mb-3">
            <label for="login" class="label-form">Логин</label>
            <input
                type="text"
                id="login"
                v-model="login"
                class="input-form"
                placeholder="Логин"
            />
        </div>
        <div class="mb-3">
            <label for="password" class="label-form">Пароль</label>
            <input
                type="password"
                id="password"
                v-model="password"
                class="input-form"
                placeholder="Пароль"
            />
        </div>
        <template v-if="loading">
            <button class="btn btn-form w-100">
                <span class="loading-btn"></span>
                Отправка...
            </button>
        </template>
        <template v-else>
            <button class="btn btn-form w-100" @click="BtnReg()">
                Создать пользователя
            </button>
        </template>

        <p class="link">
            Уже были зарегистрированы?
            <a href="authorization.html" @click.prevent="ChangePage('AuthPage')"
                >Авторизация</a
            >
        </p>
    </div>
</template>
<script>
import HeaderComponent from '@/components/HeaderComponent.vue';

export default {
    name: 'RegistrationPage',
    props: ['ChangePage', 'server'],

    data() {
        return {
            fio: '',
            email: '',
            phone: '',
            login: '',
            password: '',
            loading: false,
        };
    },

    methods: {
        BtnReg() {
            this.loading = true;
            let formdata = new FormData();
            formdata.append('fio', this.fio);
            formdata.append('email', this.email);
            formdata.append('phone', this.phone);
            formdata.append('login', this.login);
            formdata.append('password', this.password);
            this.server('registration', 'POST', formdata)
                .then((result) => {
                    this.loading = false;
                    console.log(result);
                })
                .catch((error) => console.log('error', error));
        },
    },

    components: {
        HeaderComponent,
    },
};
</script>
