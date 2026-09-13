<template>
    <div class="block-panel">
        <div class="head-page-panel">
            <a
                href="Panel-orders.html"
                @click.prevent="changePage('PanelOrdersPage')"
                class=""
                >Заявки</a
            >
            <a href="#" class="active-head">Помещения</a>
            <div class="border-head"></div>
        </div>
        <div class="block-orders">
            <button class="btn btn-add">Добавить Помещение +</button>
            <div class="panel-table">
                <table class="table-Conferences">
                    <tr>
                        <th>Фото</th>
                        <th>Название</th>
                        <th>Действие</th>
                    </tr>
                    <tr>
                        <td><img src="media/diploma.webp" alt="" /></td>
                        <td><h3>Малоне</h3></td>
                        <td>
                            <button class="btn btn-danger">Удалить</button>
                            <button class="btn btn-form">Редактировать</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="media/diploma.webp" alt="" /></td>

                        <td><h3>Большое</h3></td>
                        <td>
                            <button class="btn btn-danger">Удалить</button>
                            <button class="btn btn-form">Редактировать</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="media/diploma.webp" alt="" /></td>
                        <td><h3>Большое</h3></td>
                        <td>
                            <button class="btn btn-danger">Удалить</button>
                            <button class="btn btn-form">Редактировать</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="modal-fon">
        <div class="modal">
            <h1>Добавить комнату</h1>
            <div class="mb-3">
                <label for="name" class="label-form">Название</label>
                <input
                    type="text"
                    id="name"
                    class="input-form"
                    placeholder="Название"
                />
                <!-- <p v-if="errors.login" class="error-form">
                    {{ errors.login.join('. ') }}
                </p> -->
            </div>
            <div class="mb-3">
                <label for="image" class="label-form">Фото</label>
                <input
                    type="file"
                    id="image"
                    class="input-form"
                    placeholder="Фото"
                />
                <!-- <p v-if="errors.password" class="error-form">
                    {{ errors.password.join('. ') }}
                </p> -->
            </div>

            <template v-if="loading">
                <button class="btn btn-form w-100">
                    <span class="loading-btn"></span>
                    Отправка...
                </button>
            </template>
            <template v-else>
                <button class="btn btn-form w-100" @click="addRoom()">
                    Войти
                </button>
            </template>
        </div>
    </div>
</template>
<script>
export default {
    name: 'PanelOffice',
    props: ['changePage', 'server'],

    data() {
        return {
            loading: false,
        };
    },

    methods: {
        addRoom() {
            this.loading  = true;
        },
    },
};
</script>
