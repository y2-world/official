<template>
    <div>
        <div class="mt-4"></div>
        <div class="form">
            <div>
                 <h2>y2_radio</h2>
                 <div class="form-group">
                    <h5>質問・感想フォーム</h5>
                    ラジオネーム
                    <input type="text" class="form-control" v-model="newName">
                    <br>
                    <input type="radio" value="【質問】" name="type" v-model="newType">
                    <label for="質問">質問</label>
                    <input type="radio" value="【感想】" name="type" v-model="newType">
                    <label for="感想">感想</label>
                    <textarea class="form-control" rows="4" v-model="newComment"></textarea>
                </div>  
                <input type="button" class="btn btn-secondary btn-sm" value="送信" @click="addComment">
            </div>
            <hr>
            <ul class="list-group">
                <li v-for="item in list" :key="item.id" class="list-group-item">
                    {{ item.name }} <br>
                    {{ item.type }} <br>
                    {{ item.comment }} 
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
            ],
            newName: "",
            newType: "",
            newComment: "",
            nextId: 1,
        };
    },
    methods: {
        addComment() {
            if (!this.newComment.trim()) {
                alert("コメントを入力してください。");
                return;
            }
            this.list.push({
                id: this.nextId++,
                name: this.newName,
                type: this.newType,
                comment: this.newComment
            });
            this.newName = "",
            this.newComment = "";
        }
    }
};
</script>

<style>
.form {
    font-family: serif;
}
h5 {
    color:gray;
}
</style>