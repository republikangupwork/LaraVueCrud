<template>
    <div class="col-md-10">
        <div class="container" style="margin-top: 20px;">
            <div class="card">
                <div class="card-header bg-primary text-white">DASHBOARD</div>

                <div class="card-body">
                    <div class="loading" v-if="loading">
                        No Data Available...
                    </div>
                    <table class="table table-striped table-bordered" v-if="data">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="data in data">
                                <td><p>{{ data.name }}</p></td>
                                <td><p>{{ data.email }}</p></td>
                                <td>
                                    <a :href="'/crud/show/'+ data.id"" class="btn btn-success">Show</a>
                                    <a :href="'/crud/edit/'+ data.id"" class="btn btn-primary">Edit</a>
                                    <a href="" @click.prevent="deleteRow(data.id)" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            // console.log('Component mounted.')
        },
        data() {
            return {
                loading: false,
                data: null,
                error: null,
            };
        },
        created() {
            this.fetchData();
        },
        methods: {
            fetchData() {
                this.error = this.data = null;
                this.loading = true;
                axios
                    .post('/crud/get_data')
                    .then(response => {
                        if (response['data'].length > 0) {
                            this.loading = false;
                            this.data = response['data'];
                        }
                    });
            },
            deleteRow: function(id) {
                var self = this;
                axios.delete('/crud/delete/'+id)
                    .then(function (response) {
                        // console.log(response);
                        self.fetchData()
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>
