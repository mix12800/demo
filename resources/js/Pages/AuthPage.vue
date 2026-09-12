<template>
    <HeaderComponent :ChangePage="ChangePage" />

    <div class="form">
        <h1>Авторизация</h1>
        <div class="mb-3">
            <label for="fio" class="label-form">Логин</label>
            <input
                type="text"
                id="fio"
                class="input-form"
                placeholder="Логин"
            />
        </div>
        <div class="mb-3">
            <label for="fio" class="label-form">Пароль</label>
            <input
                type="password"
                id="fio"
                class="input-form"
                placeholder="Пароль"
            />
        </div>
        <button class="btn btn-form w-100">Войти</button>
        <p class="link">
            Еще не зарегистрированы? <a href="Registration.html" @click.prevent="ChangePage('RegistrationPage')">Регистрация</a>
        </p>
    </div>
</template>
<script>
import HeaderComponent from '@/components/HeaderComponent.vue';

export default {
    name: 'AuthPage',
    props: ['ChangePage'],

    components: {
        HeaderComponent,
    },
};
</script>
