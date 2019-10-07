<template>
    <div class="col-md-10">
        <div class="container" style="margin-top: 20px;">
            <div class="card">
                <div class="card-header bg-primary text-white">DASHBOARD</div>

                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <td>Cardo</td>
                            <td>cardo@example.com</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-info text-white">Generate pdf</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
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
            console.log('Component mounted.')
        }
    }
</script>
