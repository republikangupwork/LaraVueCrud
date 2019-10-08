<template>
    <div class="col-md-10">
        <div class="container container-contents">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    EDIT
                    <span class="float-right">
                        <div class="btn-group">
                            <a :href="/crud/" class="btn btn-light btn-sm">CANCEL</a>
                        </div>
                    </span>
                </div>
                <form @submit.prevent="submit">
                    <div class="card-body">
                        
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" v-if="data" v-model="data.id">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" v-if="data" v-model="data.name">
                            <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" v-if="data" v-model="data.email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="pay_draw">Are you taking Drawings or Paye?</label>
                            <select class="form-control" id="pay_draw" name="pay_draw" v-if="data" v-model="data.pay_draw">
                                <option>Drawings/Shareholder salary(i.e non paye income)</option>
                                <option>PAYE</option>
                                <option>Combination of Drawings/Shareholder salary(i.e non paye income) and PAYE</option>
                            </select>
                            <div v-if="errors && errors.pay_draw" class="text-danger">{{ errors.pay_draw[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="three_years_in_business">Been in business in more than 3 years?</label>
                            <select class="form-control" id="three_years_in_business" name="three_years_in_business"  v-if="data" v-model="data.three_years_in_business">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            <div v-if="errors && errors.three_years_in_business" class="text-danger">{{ errors.three_years_in_business[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="years">How many years?</label>
                            <input type="text" class="form-control" id="years" name="years" v-if="data" v-model="data.years">
                            <div v-if="errors && errors.years" class="text-danger">{{ errors.years[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="fulltime">Working full time?</label>
                            <select class="form-control" id="fulltime" name="fulltime" v-if="data" v-model="data.fulltime">
                                <option>Part Time</option>
                                <option>Full Time</option>
                            </select>
                            <div v-if="errors && errors.fulltime" class="text-danger">{{ errors.fulltime[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="staff_count">How many staff do you have working for you?</label>
                            <input type="text" class="form-control" id="staff_count" name="staff_count" v-if="data" v-model="data.staff_count">
                            <div v-if="errors && errors.staff_count" class="text-danger">{{ errors.staff_count[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="on_tool">Now, Are you on tools?</label>
                            <select class="form-control" id="on_tool" name="on_tool" v-if="data" v-model="data.on_tool">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            <div v-if="errors && errors.on_tool" class="text-danger">{{ errors.on_tool[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="share_dir_on_tool">Is there any other shareholders/director that are not on the tools?</label>
                            <select class="form-control" id="share_dir_on_tool" name="share_dir_on_tool" v-if="data" v-model="data.share_dir_on_tool">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            <div v-if="errors && errors.share_dir_on_tool" class="text-danger">{{ errors.share_dir_on_tool[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="take_out_money">How much income did you take out last year from the business?</label>
                            <input type="text" class="form-control" id="take_out_money" name="take_out_money" v-if="data" v-model="data.take_out_money">
                            <div v-if="errors && errors.take_out_money" class="text-danger">{{ errors.take_out_money[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="pay_freq">Payment Frequency</label>
                            <select class="form-control" id="pay_freq" name="pay_freq" v-if="data" v-model="data.pay_freq">
                                <option>Weekly</option>
                                <option>Fortnightly</option>
                                <option>Monthly</option>
                                <option>Annually</option>
                            </select>
                            <div v-if="errors && errors.pay_freq" class="text-danger">{{ errors.pay_freq[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="acc_cover">What ACC cover plan do you have?</label>
                            <select class="form-control" id="acc_cover" name="acc_cover" v-if="data" v-model="data.acc_cover">
                                <option>ACC Cover Plus/Work Place Cover</option>
                                <option>ACC Cover Plus Extra</option>
                            </select>
                            <div v-if="errors && errors.acc_cover" class="text-danger">{{ errors.acc_cover[0] }}</div>
                        </div>
                        <div class="form-group">
                            <label for="cover_plus_extra_amt">Your nominated Cover Plus Extra cover amount</label>
                            <input type="text" class="form-control" id="cover_plus_extra_amt" name="cover_plus_extra_amt" v-if="data" v-model="data.cover_plus_extra_amt">
                            <div v-if="errors && errors.cover_plus_extra_amt" class="text-danger">{{ errors.cover_plus_extra_amt[0] }}</div>
                        </div>

                        <div v-if="success" class="alert alert-success mt-3">
                            Form updated successfully!
                        </div>
                            
                    </div>
                    <div class="card-footer clearfix">
                        <button type="submit" class="btn btn-primary float-right">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            var currentUrl = window.location.pathname;
            var id = currentUrl.split('/')[3];
            console.log(id)
            return {
                fields: {},
                errors: {},
                success: false,
                loaded: true,
                data: null,
                id: id,
            }
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
            submit() {
                if (this.loaded) {
                    this.loaded = false;
                    this.success = false;
                    this.errors = {};
                    axios.post('/crud/update', this.data).then(response => {
                        console.log(response)
                        this.loaded = true;
                        this.success = true;
                    }).catch(error => {
                        this.loaded = true;
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                    });
                }
            },
        },
    }
</script>
