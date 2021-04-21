<template>
    <div>
        <div class="mt-4"></div>
        <div class="form">
            <div>
                 <h2>y2_radio Form</h2>
                 <div class="form-group">
                    <h5>質問・感想</h5>
                    ラジオネーム
                    <input type="text" class="form-control">
                    <br>
                    <label>
                    <input type="radio" name="type">
                    質問
                    </label>
                    <label>
                    <input type="radio" name="type">
                    感想
                    </label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>  
                <input type="button" class="btn btn-secondary btn-sm" value="送信">
            </div>
            <hr>
            <ul class="list-group">
                <li v-for="item in list" :key="item.id" class="list-group-item">
                    {{ item.name }} <br>
                    {{ item.type }} <br>
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
                {id:1, name:'name1', type:'type1', value: 'comment1'},
                {id:2, name:'name2', type:'type2', value: 'comment2'},
                {id:3, name:'name3', type:'type3', value: 'comment3'},
            ]
        };
    }
}
</script>

<style>
.form {
    font-family: serif;
}
h5 {
    color:gray;
}
</style>