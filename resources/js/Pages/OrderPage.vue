<template>
    <div class="form-order">
        <h1>Формирование заявки</h1>
        <div class="mb-3">
            <label for="name" class="label-form">Названи конференции</label>
            <input
                type="text"
                id="name"
                class="input-form error-input"
                placeholder="Названи конференции"
            />
            <p class="error-form">Это поле обязательно</p>
        </div>
        <div class="mb-3">
            <label for="date" class="label-form">Дата проведения</label>
            <input type="date" id="date" class="input-form" />
        </div>
        <div class="mb-3">
            <label for="Room" class="label-form">Помещение</label>
            <select name="Room" id="Room" class="select-form">
                <option value="1">Большое</option>
                <option value="1">Средние</option>
                <option value="1">Малоне</option>
            </select>
        </div>
        <div class="mb-2">
            <label for="pay" class="label-form">Выбирите cпособ оплаты</label>
        </div>
        <div class="mb-3">
            <input type="radio" id="pay-1" name="pay" class="sheck-form" />
            <label for="pay-1" class="sheck-label-form"
                >При очном посещении</label
            >
            <input type="radio" id="pay-2" name="pay" class="sheck-form" />
            <label for="pay-2" class="sheck-label-form">Переводом СБП</label>
        </div>
        <!-- <button class="btn btn-form w-100">Отправить</button> -->

        <button disabled class="btn btn-form w-100">
            <span class="loading-btn"></span>
            Отправка...
        </button>
    </div>
</template>
<script>
export default {
    name: 'OrderPage',
    props: ['server'],

    data() {
        return {

        };
    },

    methods: {
        CreasteOrder() {
            // this.loading = true;
            // let formdata = new FormData();
            // formdata.append('fio', this.fio);
           
            // this.server('registration', 'POST', formdata)
            //     .then((result) => {
            //         this.loading = false;
            //         if (result.errors) {
            //             this.errors = result.errors;
            //         } else {
            //             this.loginUser(result.token);
            //         }
            //     })
            //     .catch((error) => console.log('error', error));
        },
    },
};
</script>
