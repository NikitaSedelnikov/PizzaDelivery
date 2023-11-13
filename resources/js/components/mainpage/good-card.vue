<template>
    <div class="good-card">
        <img v-bind:src="/images/ + good.poster_url">
        <div><p class="lead">{{good.name}}</p></div>
        <div class="description-card"><p class="text-sm-start">{{good.description}}</p></div>
        <div><p class="text-sm-start">Вес: <u>{{good.weight}}г.</u></p></div>
        <div class="price-and-button">
            <p class="lead">{{good.price}} руб.</p>
            <button v-bind:name="good.id" @click.prevent="addToBasket(good.id, good.name, good.price, good.description)">В корзину</button>
        </div>
    </div>
</template>

<script>
export default {
    props: [
    'good',
    ],
    methods: {
        addToBasket(id, name, price, description) {
            let basket = localStorage.getItem('basket')
            let newBasket = [{
                'id': id,
                'name': name,
                'description': description,
                'price': price,
                'count': 1
            }]

            if (!basket){
                localStorage.setItem('basket', JSON.stringify(newBasket));
            } else {
                basket = JSON.parse(basket)
                basket.forEach(goodInBasket => {
                    if (goodInBasket.id === id) {
                        goodInBasket.count = Number(goodInBasket.count) + 1
                        newBasket = null
                    }
                })
                Array.prototype.push.apply(basket, newBasket)
                localStorage.setItem('basket', JSON.stringify(basket))
            }
        }
    }
}

</script>

<style scoped>

.good-card{
    flex: 0 0 25%;
    width: 15%;
    display: flex;
    flex-direction: column;
    align-content: space-between;
    padding: 3% 2%;
}

.good-card img{
    width: 100%;
    height: auto;
    margin-bottom: 5%;
    transition: 0.2s;
}

.good-card img:hover{
    transform: translateY(2px);
}

.description-card{
    height: 40%;
}

.price-and-button{
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.price-and-button p {
    font-weight: bold;
}

.price-and-button button {
    width: 50%;
    border-radius: 24px;
    color: white;
    background-color: #ff8a5b;
    box-shadow: 0 -3px #B6514A inset;
    transition: 0.2s;
}

.price-and-button button:hover {
    background-color: #DB6E53;
}

.price-and-button button:active{
    background-color: #C9604F;
    box-shadow: 0 -3px #8A3D38 inset;
}

</style>
