<template>
    <div class="cart-m mb-3">
        <div class="cart-conferences">
            <img :src="'storage/' + order.room.image" alt="" />
            <div class="cart-body">
                <div class="cart-content w-100">
                    <div class="cart-text">
                        <p>{{ order.name }}</p>
                        <p>Дата проведения {{ new Date(order.date).toLocaleDateString('ru-RU') }}</p>
                    </div>
                    <button v-if="order.status == 'completed'" class="btn btn-cart" @click="getcomments()">
                        Отзывы
                    </button>
                </div>
            </div>
        </div>

        <div class="coment-block">
            <label for="coment" class="label-form"
                >Отзыв для: {{ order.name }}</label
            >
            <template v-if="isAuthUser">
                <div class="mb-2">
                    <textarea
                        name="coment"
                        v-model="comment"
                        class="input-form"
                        :class="{ 'error-input': errors.comment }"
                        placeholder="Оставите отзыв..."
                    ></textarea>
                    <p v-if="errors.comment" class="error-form">
                        {{ errors.comment.join('. ') }}
                    </p>
                </div>
                <template v-if="btn_loading">
                    <button class="btn btn-form w-100">
                        <span class="loading-btn"></span>
                        Отправка...
                    </button>
                </template>
                <template v-else>
                    <button class="btn btn-form w-100" @click="addComment()">
                        Отправить
                    </button>
                </template>
            </template>

            <div v-if="loading" class="block-loading w-100">
                <span class="loading"></span>
            </div>

            <div v-else class="coments">
                <div v-for="comment in comments" class="user-coment mt-2">
                    <div class="user-coment-header">
                        <p>{{ comment.user.fio }}</p>
                    </div>
                    <p>
                        {{ comment.comment }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'CartComponent',
    props: ['order', 'server', 'isAuthUser'],

    data() {
        return {
            comments: [],
            loading: false,
            comment: '',
            errors: {},
            btn_loading: false,
        };
    },

    methods: {
        getcomments(id) {
            this.loading = true;
            let formdata = new FormData();
            formdata.append('order_id', this.order.id);
            this.server('comments', 'POST', formdata)
                .then((result) => {
                    this.loading = false;
                    this.comments = result.comments;
                })
                .catch((error) => console.log('error', error));
        },

        addComment() {
            this.btn_loading = true;
            let formdata = new FormData();
            formdata.append('comment', this.comment);
            formdata.append('order_id', this.order.id);
            this.server('comment', 'POST', formdata)
                .then((result) => {
                    this.btn_loading = false;
                    if (result.errors) {
                        this.errors = result.errors;
                    } else {
                        this.getcomments();
                        this.errors = {};
                        this.comment = '';
                    }
                })
                .catch((error) => console.log('error', error));
        },
    },
};
</script>
