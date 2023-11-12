<template>
    <div class="success">
        <p>Заказ успешно оформлен</p>
    </div>
</template>

<script>
export default {
}
</script>

<style>
.success {
    width: 100vw;
    height: 10vh;
    position: absolute;
    background-color: rgba(69 , 69 , 69 , 0.3);
    color: white;
    display: flex;
    justify-content: center;
    font-size: 40px;
    opacity: 1;
    animation: fadeOut 1s forwards;
    animation: fadeIn 3s forwards;

}
@keyframes fadeIn {
    100% {opacity:0;
        transform: translateY(-20vh);}
    0% {opacity:1;
        transform: translateY(0vh);}
}
@keyframes fadeOut {
    100% {opacity:1;}
    0% {opacity:2;}
}
</style>
