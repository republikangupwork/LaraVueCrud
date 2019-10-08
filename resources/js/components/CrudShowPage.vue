<template>
    <div class="col-md-10">
        <div class="container container-contents">
            <div class="card" id="show_page">
                <div class="card-header bg-primary text-white">
                    <b>SHOW</b> 
                    <span class="float-right">
                        <div class="btn-group">
                            <a v-if="data" :href="'/crud/edit/'+ data.id"" class="btn btn-info btn-sm text-white">EDIT</a>
                            <a href="" @click.prevent="deleteRow" class="btn btn-danger btn-sm text-white">DELETE</a>
                            <button class="btn btn-success btn-sm">GENERATE</button>
                        </div>
                    </span>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <p v-if="data">{{ data.name }}</p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <p v-if="data">{{ data.email }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pay_draw">Are you taking Drawings or Paye?</label>
                        <p v-if="data">{{ data.pay_draw }}</p>
                    </div>
                    <div class="form-group">
                        <label for="three_years_in_business">Been in business in more than 3 years?</label>
                        <p v-if="data">{{ (data.three_years_in_business == 1) ? 'Yes' : 'No' }}</p>
                    </div>
                    <div class="form-group">
                        <label for="years">How many years?</label>
                        <p v-if="data">{{ data.years }}</p>
                    </div>
                    <div class="form-group">
                        <label for="fulltime">Working full time?</label>
                        <p v-if="data">{{ data.fulltime }}</p>
                    </div>
                    <div class="form-group">
                        <label for="staff_count">How many staff do you have working for you?</label>
                        <p v-if="data">{{ data.staff_count }}</p>
                    </div>
                    <div class="form-group">
                        <label for="on_tool">Now, Are you on tools?</label>
                        <p v-if="data">{{ (data.on_tool == 1) ? 'Yes' : 'No' }}</p>
                    </div>
                    <div class="form-group">
                        <label for="share_dir_on_tool">Is there any other shareholders/director that are not on the tools?</label>
                        <p v-if="data">{{ (data.share_dir_on_tool == 1) ? 'Yes' : 'No' }}</p>
                    </div>
                    <div class="form-group">
                        <label for="take_out_money">How much income did you take out last year from the business?</label>
                        <p v-if="data">$ {{ data.take_out_money }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pay_freq">Payment Frequency</label>
                        <p v-if="data">{{ data.pay_freq }}</p>
                    </div>
                    <div class="form-group">
                        <label for="acc_cover">What ACC cover plan do you have?</label>
                        <p v-if="data">{{ data.acc_cover }}</p>
                    </div>
                    <div class="form-group">
                        <label for="cover_plus_extra_amt">Your nominated Cover Plus Extra cover amount</label>
                        <p v-if="data">$ {{ data.cover_plus_extra_amt }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    #show_page p {
        border-bottom: 1px solid #ccc;
    }
</style>
<script>
    export default {
        mounted () {

        },
        data() {
            var currentUrl = window.location.pathname;
            var id = currentUrl.split('/')[3];
            return {
                data: null,
                id: id,
            };
        },
        created() {
            this.fetchData(this.id);
        },
        methods: {
            fetchData(id) {
                this.data = null;
                axios
                    .post('/crud/get_single/'+id)
                    .then(response => {
                        if (response['data']) {
                            this.data = response['data'];
                        }
                    });
            },
            deleteRow() {
                var id = this.id;
                axios.delete('/crud/delete/'+ id)
                    .then(function (response) {
                        window.location.href = '/crud/';
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>
