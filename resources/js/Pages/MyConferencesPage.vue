<template>
    <div class="block-Conferences">
        <h2>Мои заявки</h2>
        <div class="row-line"></div>
        <table class="table-Conferences">
            <tr>
                <th>Помещение</th>
                <th>Способ оплаты</th>
                <th>Название</th>
                <th>Начало</th>
                <th>Статус</th>
            </tr>
            <tr v-for="order in orders">
                <td>{{ order.room.name }}</td>
                <td>{{ pay_method[order.pay] }}</td>
                <td>{{ order.name }}</td>
                <td>{{ new Date(order.date).toLocaleDateString('ru-RU') }}</td>
                <td>
                    <span class="status" :class="order.status">{{
                        status_name[order.status]
                    }}</span>
                </td>
            </tr>
        </table>
    </div>
</template>
<script>
export default {
    name: 'MyConferencesPage',
    props: ['server'],

    data() {
        return {
            orders: [],
            status_name: {
                new: 'Новая',
                active: 'Мероприятие назначено',
                completed: 'Завершено',
            },
            pay_method: {
                translation: 'Переводом СБП',
                cash: 'При очном посещении',
            },
        };
    },

    mounted() {
        this.getOregs();
    },

    methods: {
        getOregs() {
            this.server('myorder', 'GET')
                .then((result) => {
                    this.orders = result.orders;
                })
                .catch((error) => console.log('error', error));
        },
    },
};
</script>
