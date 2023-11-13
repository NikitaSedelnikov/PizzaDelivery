<template>
    <div class="main">
        <div><h1>Корзина</h1></div>
        <div class="route">
            <a :href="homeRoute"><button class="button">На главную</button></a>
        </div>
        <input :value="getOrder()" type="hidden">
        <div v-if="this.goods.length > 0">\
            <div class="basket">
                <table>
                    <tr class="one-good">
                        <th class="title"><p>Название позиции</p></th>
                        <th class="title"><p>Описание</p></th>
                        <th class="count"><p>Количество</p></th>
                        <th class="price"><p>Общая стоимость позиции</p></th>
                    </tr>
                    <tr v-for="item in this.goods" :key="item.id" class="positions">
                        <td class="title">
                            <p><strong>{{item.name}}</strong></p>
                        </td>
                        <td class="description">
                            <p>{{item.description}}</p>
                        </td>
                        <td class="count">
                            <p>Количество: {{item.count}}</p>
                        </td>
                        <td class="price">
                            <p>Стоимость: {{item.price * item.count}} руб.</p>
                        </td>
                        <button @click="remove(item.id)" class="button">Удалить позицию</button>
                    </tr>
                </table>
            </div>
            <div class="total">
                <p>Общая стоимость: {{total}} руб.</p>
            </div>
            <div class="route">
                <a :href="orderRoute"><button class="button">Оформить</button></a>
            </div>
        </div>
        <div v-else class="empty">
            <h2>Корзина пуста</h2>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            goods: []
        }
    },
    props: [
        'homeRoute',
        'orderRoute',
    ],
    methods: {
        remove(id){
            for (let i = 0; i < this.goods.length; i++){
                const position = this.goods[i].id;
                if (position == id)
                {
                    this.goods.splice(i, 1);
                    localStorage.setItem('basket', JSON.stringify(this.goods))
                }
            }
        },
        getOrder()
        {
            this.goods = JSON.parse(localStorage.getItem('basket'))
        }
    },
    computed: {
        total() {
            let sum = 0;
            for (let i = 0; i < this.goods.length; i++)
            {
                sum += this.goods[i].price * this.goods[i].count;
            }
            return sum;
        }
    }
}
</script>

<style>

.main {
    width: 100vw;
    height: 90vh;
    padding: 0px 0px;
    background-color: #fceade;
    background-size: 100%;
}

.one-good{
    height: 50%;
}

.title p, .description p, .count p, .price p {
    font-size: larger;
    align-items: center;
    vertical-align: center;
    margin-bottom: 20px;
}

.title, .description, .count, .price{
    border-bottom: 1px black solid;
}

table {
    border-collapse: collapse;
}

.description {
    width: 50%;
    font-size: small;
    vertical-align: middle;
}

.route button {
    width: 8%;
    height: 4vh;
    margin: 20px;
    margin-left: 15%;
    font-weight: bold;
    font-size: large;
}

.total p {
    margin: 20px;
    margin-left: 15%;
    font-size: 25px;
    font-weight: bold;
}

tr button {
    vertical-align: center;
    width: 90%;
    height: 4vh;
    margin: 10px;
}

.button {
    border-radius: 24px;
    color: white;
    background-color: #ff8a5b;
    box-shadow: 0 -3px #B6514A inset;
    transition: 0.2s;
}

.button:hover {
    background-color: #DB6E53;
}

.button:active{
    background-color: #C9604F;
    box-shadow: 0 -3px #8A3D38 inset;
}

.basket, .empty{
    display: flex;
    justify-content: center;
}

</style>
