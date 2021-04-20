<style>
.form {
    font-family: serif;
}
</style>
<template>
    <div>
        <div class="mt-5"></div>
        <div class="form">
            <div>
                 <h2>y2_radio Form</h2>
                 <div class="form-group">
                    <h5>質問・感想</h5>
                    <textarea class="form-control" rows="4"></textarea>
                </div>  
                <input type="button" class="btn btn-secondary btn-sm" value="送信">
            </div>
            <hr>
            <ul class="list-group">
                <li v-for="item in list" :key="item.id" class="list-group-item">
                    {{ item.value }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return{
            list: [
                {id:1, value: 'comment1'},
                {id:2, value: 'comment2'},
                {id:3, value: 'comment3'},
            ]
        };
    }
}
</script>

<style>

</style>