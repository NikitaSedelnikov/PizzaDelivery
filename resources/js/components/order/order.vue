<template>
    <div class="main">
    <div><h1>Оформить заказ</h1></div>
    <div class="order-main">
        <div class="order-form">
        <form :action="order" method="post" class="form">
            <input type="hidden" name="_token" :value="csrf">
            <span>Введите имя получателя: </span><input type="text" name="name" placeholder="Ваше имя" required>
            <span>Введите номер телефона: </span><input type="text" name="phone" placeholder="+1(912)765-83-49" required>
            <span>Введите адрес получателя: </span><input type="text" name="address" placeholder="Адрес" required>
            <span>Дополнительный комментарий: </span>
            <input type="hidden" name="order" :value="getOrder()">
            <input type="hidden" name="total" :value="total()">
            <textarea name="comment" placeholder="Комментарий" value=""></textarea>
            <button type="submit" class="button-order">Отправить</button>
        </form>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    props: [
        'order'
    ],
    data: () => ({
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    }),
    methods: {
        getOrder()
        {
            let orderGood = localStorage.getItem('basket')
            return orderGood;
        },
        total() {
            let orderGood = JSON.parse(localStorage.getItem('basket'))
            let sum = 0;
            for (let i = 0; i < orderGood.length; i++)
            {
                sum += orderGood[i].price * orderGood[i].count;
            }
            return sum;
        }
    },
}
</script>

<style scoped>
.form input, .form span, .form textarea{
    width: 100%;
    display: flex;
    flex-direction: column;
}

.order-main {
    margin-top: 5%;
    display: flex;
    justify-content: center;

}
.order-form{

    width: 25%;
    height: 60%;
    margin-right: 100px;

}
.form {
    width: 100%;
}
.button-order {
    margin-top: 10px;
    width: 50%;
    height: 3vh;
    border-radius: 24px;
    color: white;
    background-color: #ff8a5b;
    box-shadow: 0 -3px #B6514A inset;
    transition: 0.2s;
    font-weight: bold;
    font-size: large;
}
.button-order:hover {
    background-color: #DB6E53;
}

.button-order:active{
    background-color: #C9604F;
    box-shadow: 0 -3px #8A3D38 inset;
}
input, textarea {
    border-radius: 15px;
}
span {
    font-size: 20px;
}
</style>
