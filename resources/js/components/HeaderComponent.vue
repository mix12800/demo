<template>
    <header>
        <h2><a href="index.html" class="name" @click.prevent="ChangePage('IndexPage')">Конференции.РФ</a></h2>
        <div class="block-link">
            <!-- <a href="index.html" class="link link-active">Конференции</a>
            <a href="Conferences.html" class="link">Мои заявки</a>
            <a href="Order.html" class="link">Сформировать заявку</a>
            <a href="Panel-orders.html" class="link">Панель</a> -->
        </div>
        <!-- <button class="btn btn-logout">Выход</button> -->
        <button class="btn btn-login" @click="ChangePage('AuthPage')">Войти</button>
    </header>
</template>
<script>
export default {
    name: 'HeaderComponent',
    props: ['ChangePage'],
};
</script>
