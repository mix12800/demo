<template>
    <div class="block-panel">
        <div class="head-page-panel">
            <a href="#" class="active-head">Заявки</a>
            <a href="Panel-office.html" @click.prevent="changePage('PanelOffice')">Помещения</a>
            <div class="border-head">
                <button class="btn btn-form p-05">Сохранить</button>
            </div>
        </div>
        <div class="block-orders">
            <table class="table-Conferences">
                <tr>
                    <th>Помещение</th>
                    <th>Способ оплаты</th>
                    <th>Название</th>
                    <th>Начало</th>
                    <th>Статус</th>
                </tr>
                <tr>
                    <td>Малоне</td>
                    <td>Переводом СБП</td>
                    <td>Конференция</td>
                    <td>07.09.2026</td>
                    <td>
                        <select id="" class="select-status">
                            <option value="1">Новая</option>
                            <option value="2">Мероприятие назначено</option>
                            <option value="3">Завершено</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Большое</td>
                    <td>При очном посещении</td>
                    <td>Конференция</td>
                    <td>07.09.2026</td>
                    <td>
                        <select id="" class="select-status">
                            <option value="1">Новая</option>
                            <option value="2">Мероприятие назначено</option>
                            <option value="3">Завершено</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Большое</td>
                    <td>Переводом СБП</td>
                    <td>Конференция</td>
                    <td>07.09.2026</td>
                    <td>
                        <select id="" class="select-status">
                            <option value="1">Новая</option>
                            <option value="2">Мероприятие назначено</option>
                            <option value="3">Завершено</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    name: 'PanelOrdersPage',
    props: ['changePage'],
};
</script>
