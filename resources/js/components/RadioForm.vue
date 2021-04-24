<template>
    <div>
        <div class="mt-4"></div>
        <div class="form">
            <div>
                 <h2>y2_radio Form</h2>
                 <div class="form-group">
                    <h5>質問・感想</h5>
                    ラジオネーム
                    <input type="text" class="form-control" v-model="newName">
                    <br>
                    質問・感想
                    <textarea class="form-control" rows="4" v-model="newComment"></textarea>
                </div>  
                <input type="button" class="btn btn-secondary btn-sm" value="送信" @click="addComment">
            </div>
            <hr>
            <ul class="list-group">
                <li v-for="item in list" :key="item.id" class="list-group-item">
                    {{ item.name }} <br>
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
            newName: "ラジオネーム",
            newComment: "コメント",
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