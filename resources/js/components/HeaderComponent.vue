<template>
    <header>
        <h2>
            <a
                href="index.html"
                class="name"
                @click.prevent="changePage('IndexPage')"
                >Конференции.РФ</a
            >
        </h2>
        <div class="block-link">
            <template v-if="isAuthUser">
                <a
                    href="index.html"
                    class="link"
                    @click.prevent="changePage('IndexPage')"
                    :class="{ 'link-active': page == 'IndexPage' }"
                    >Конференции</a
                >
                <template v-if="user.role == 'user'">
                    <a
                        href="Conferences.html"
                        @click.prevent="changePage('MyConferencesPage')"
                        class="link"
                        :class="{ 'link-active': page == 'MyConferencesPage' }"
                        >Мои заявки</a
                    >
                    <a
                        href="Order.html"
                        class="link"
                        @click.prevent="changePage('OrderPage')"
                        :class="{ 'link-active': page == 'OrderPage' }"
                        >Сформировать заявку</a
                    >
                </template>
                <a
                    v-if="user.role == 'admin'"
                    href="Panel-orders.html"
                    class="link"
                    :class="{
                        'link-active':
                            page == 'PanelOrdersPage' || page == 'PanelOffice',
                    }"
                    @click.prevent="changePage('PanelOrdersPage')"
                    >Панель</a
                >
            </template>
        </div>
        <button v-if="isAuthUser" class="btn btn-logout" @click="logout()">
            Выход
        </button>
        <button v-else class="btn btn-login" @click="changePage('AuthPage')">
            Войти
        </button>
    </header>
</template>
<script>
export default {
    name: 'HeaderComponent',
    props: ['changePage', 'isAuthUser', 'logout', 'page', 'user'],
};
</script>
