<template>
    <div class="col-md-10">
        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="card">
                <div class="card-header bg-primary text-white">CREATE</div>
                <form @submit.prevent="submit">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="" v-model="fields.name">
                                <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="" v-model="fields.email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="pay_draw">Are you taking Drawings or Paye?</label>
                                <select class="form-control" id="pay_draw" name="pay_draw" v-model="fields.pay_draw">
                                    <option>Drawings/Shareholder salary(i.e non paye income)</option>
                                    <option>PAYE</option>
                                    <option>Combination of Drawings/Shareholder salary(i.e non paye income) and PAYE</option>
                                </select>
                                <div v-if="errors && errors.pay_draw" class="text-danger">{{ errors.pay_draw[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="three_years_in_business">Been in business in more than 3 years?</label>
                                <select class="form-control" id="three_years_in_business" name="three_years_in_business" v-model="fields.three_years_in_business">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                                <div v-if="errors && errors.three_years_in_business" class="text-danger">{{ errors.three_years_in_business[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="years">How many years?</label>
                                <input type="text" class="form-control" id="years" name="years" placeholder="" v-model="fields.years">
                                <div v-if="errors && errors.years" class="text-danger">{{ errors.years[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="fulltime">Working full time?</label>
                                <select class="form-control" id="fulltime" name="fulltime" v-model="fields.fulltime">
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                </select>
                                <div v-if="errors && errors.fulltime" class="text-danger">{{ errors.fulltime[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="staff_count">How many staff do you have working for you?</label>
                                <input type="text" class="form-control" id="staff_count" name="staff_count" placeholder="" v-model="fields.staff_count">
                                <div v-if="errors && errors.staff_count" class="text-danger">{{ errors.staff_count[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="on_tool">Now, Are you on tools?</label>
                                <select class="form-control" id="on_tool" name="on_tool" v-model="fields.on_tool">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                                <div v-if="errors && errors.on_tool" class="text-danger">{{ errors.on_tool[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="share_dir_on_tool">Is there any other shareholders/director that are not on the tools?</label>
                                <select class="form-control" id="share_dir_on_tool" name="share_dir_on_tool" v-model="fields.share_dir_on_tool">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                                <div v-if="errors && errors.share_dir_on_tool" class="text-danger">{{ errors.share_dir_on_tool[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="take_out_money">How much income did you take out last year from the business?</label>
                                <input type="text" class="form-control" id="take_out_money" name="take_out_money" placeholder="" v-model="fields.take_out_money">
                                <div v-if="errors && errors.take_out_money" class="text-danger">{{ errors.take_out_money[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="pay_freq">Payment Frequency</label>
                                <select class="form-control" id="pay_freq" name="pay_freq" v-model="fields.pay_freq">
                                    <option>Weekly</option>
                                    <option>Fortnightly</option>
                                    <option>Monthly</option>
                                    <option>Annually</option>
                                </select>
                                <div v-if="errors && errors.pay_freq" class="text-danger">{{ errors.pay_freq[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="acc_cover">What ACC cover plan do you have?</label>
                                <select class="form-control" id="acc_cover" name="acc_cover" v-model="fields.acc_cover">
                                    <option>ACC Cover Plus/Work Place Cover</option>
                                    <option>ACC Cover Plus Extra</option>
                                </select>
                                <div v-if="errors && errors.acc_cover" class="text-danger">{{ errors.acc_cover[0] }}</div>
                            </div>
                            <div class="form-group">
                                <label for="cover_plus_extra_amt">Your nominated Cover Plus Extra cover amount</label>
                                <input type="text" class="form-control" id="cover_plus_extra_amt" placeholder="" name="cover_plus_extra_amt" v-model="fields.cover_plus_extra_amt">
                                <div v-if="errors && errors.cover_plus_extra_amt" class="text-danger">{{ errors.cover_plus_extra_amt[0] }}</div>
                            </div>
                            <div v-if="success" class="alert alert-success mt-3">
                                Form created successfully!
                            </div>
                            
                    </div>
                    <div class="card-footer clearfix">
                        <button type="submit" class="btn btn-primary float-right">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                fields: {},
                errors: {},
                success: false,
                loaded: true,
            }
        },
        methods: {
            submit() {
                if (this.loaded) {
                    this.loaded = false;
                    this.success = false;
                    this.errors = {};
                    axios.post('/crud/store', this.fields).then(response => {
                        this.fields = {};
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
