<template>
    <HeaderComponent :ChangePage="ChangePage" />

    <div class="block-сonferences">
        <!-- Карточка -->
        <!-- <div class="cart-m mb-3">
            <div class="cart-conferences">
                <img src="media/e0aa2a26192b2d5bd69.jpg" alt="" />
                <div class="cart-body">
                    <div class="cart-content w-100">
                        <div class="cart-text">
                            <p>Конференция</p>
                            <p>Дата проведения 01.01.2027</p>
                        </div>
                        <button class="btn btn-cart">Коментрировать</button>
                    </div>
                </div>
            </div>

            <div class="coment-block">
                <div class="mb-2">
                    <label for="coment" class="label-form"
                        >Отзыв для: Конференция</label
                    >
                    <textarea
                        name="coment"
                        class="input-form error-input"
                        placeholder="Оставите отзыв..."
                    ></textarea>
                    <p class="error-form">Это поле обязательно</p>
                </div>
                <button class="btn btn-form w-100">Отправить</button>

                <div class="coments">
                    <div class="user-coment mt-2">
                        <div class="user-coment-header">
                            <p>Ивнов Ивани Иванович</p>
                        </div>
                        <p>
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто
                        </p>
                    </div>

                    <div class="user-coment mt-2">
                        <div class="user-coment-header">
                            <p>Ивнов Ивани Иванович</p>
                        </div>
                        <p>
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто Круто Круто Круто Круто Круто Круто
                            Круто Круто
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="block-btn">
            <button class="btn btn-page" disabled>Назад</button>
            <button class="btn btn-page">Далее</button>
        </div>
    </div>
</template>
<script>
import HeaderComponent from '@/components/HeaderComponent.vue';

export default {
    name: 'IndexPage',
    props: ['ChangePage'],

    components: {
        HeaderComponent,
    },
};
</script>
