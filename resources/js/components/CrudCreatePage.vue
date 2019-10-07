<template>
    <div class="col-md-10">
        <div class="container" style="margin-top: 20px;">
            <div class="card">
                <div class="card-header bg-primary text-white">CREATE</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="email">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Are you taking Drawings or Paye?</label>
                        <select class="form-control" id="">
                            <option>Drawings/Shareholder salary(i.e non paye income)</option>
                            <option>PAYE</option>
                            <option>Combination of Drawings/Shareholder salary(i.e non paye income) and PAYE</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Been in business in more than 3 years?</label>
                        <select class="form-control" id="">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">How many years?</label>
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Working full time?</label>
                        <select class="form-control" id="">
                            <option>Part Time</option>
                            <option>Full Time</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">How many staff do you have working for you?</label>
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Now, Are you on tools?</label>
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Is there any other shareholders/director that are not on the tools?</label>
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">How much income did you take out last year from the business?</label>
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Payment Frequency</label>
                        <select class="form-control" id="">
                            <option>Weekly</option>
                            <option>Fortnightly</option>
                            <option>Monthly</option>
                            <option>Annually</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">What ACC cover plan do you have?</label>
                        <select class="form-control" id="">
                            <option>ACC Cover Plus/Work Place Cover</option>
                            <option>ACC Cover Plus Extra</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Your nominated Cover Plus Extra cover amount</label>
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary float-right">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

