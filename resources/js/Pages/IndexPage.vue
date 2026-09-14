<template>
    <div class="block-сonferences">
        <!-- Карточка -->

        <template v-for="order in orders.data">
            <CartComponent
                :order="order"
                :server="server"
                :isAuthUser="isAuthUser"
            />
        </template>

        <div class="block-btn">
            <button
                class="btn btn-page"
                :disabled="orders.current_page <= 1"
                @click="getOregs(orders.current_page - 1)"
            >
                Назад
            </button>
            <button
                class="btn btn-page"
                :disabled="orders.current_page >= orders.last_page"
                @click="getOregs(orders.current_page + 1)"
            >
                Далее
            </button>
        </div>
    </div>
</template>
<script>
import CartComponent from '@/components/CartComponent.vue';

export default {
    name: 'IndexPage',
    props: ['server', 'isAuthUser'],

    data() {
        return {
            orders: [],
        };
    },

    mounted() {
        this.getOregs();
    },

    methods: {
        getOregs(page = 1) {
            this.server('order?page=' + page, 'GET')
                .then((result) => {
                    this.orders = result.orders;
                })
                .catch((error) => console.log('error', error));
        },
    },

    components: {
        CartComponent,
    },
};
</script>
