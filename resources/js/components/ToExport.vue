<template>
    <div class="table table-borderless" id="table">
    <table class="table table-borderless" id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Profession</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tr v-for="item in items">
            <td>@{{ item.id }}</td>
            <td>@{{ item.name }}</td>
            <td>@{{ item.email }}</td>
            <td>@{{ item.pay_draw }}</td>
            
            <td id="show-modal" @click="showModal=true; setVal(item.id, item.name, item.age, item.profession)"  class="btn btn-info" ><span
            class="glyphicon glyphicon-pencil"></span></td>
            <td @click.prevent="deleteItem(item)" class="btn btn-danger"><span
                class="glyphicon glyphicon-trash"></span></td>
        </tr>
    </table>
</div>
</template>

<script>
    export default{
        name: "toexport",
        mounted: function mounted() {
          this.getVueItems();
        },

        getVueItems: function getVueItems() {
          var _this = this;
         
          axios.get('/crud/display').then(function (response) {
            _this.items = response.data;
          });
        }

    }
</script>