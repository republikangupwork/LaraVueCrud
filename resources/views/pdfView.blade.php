
         <h1>FORM REPORT</h1> 
         <p><strong>Name:</strong> <span>{{$data['name']}}</span> <strong>    Email:</strong>  {{$data['email']}}<span></p>  

        <h3>1. Are you taking Drawings? Or Paye? </h3>
        <p>- <span>{{$data['pay_draw']}}</span></p>
<!--         <p>- <span>Combination of Drawings/Shareholder salary(i.e none paye income and PAYE)</span></p> -->

        <h3>2. Been in business in more than 3 years? </h3>
        <p>- <span>{{$data['three_years_in_business']}}</span></p>

        <h3>3. How many years? </h3>
        <p>- <span>{{$data['years']}}</span></p>

        <h3>4. Working full time? </h3>
        <p>- <span>{{$data['fulltime']}}</span></p>

        <h3>5. How many staff do you have working for you?</h3>
        <p>- <span>{{$data['staff_count']}}</span></p>

        <h3>6. Now, Are you on tools? </h3>
        <p>- <span>{{$data['on_tool']}}</span></p>

        <h3>7. Is there any other shareholders/director that are not on the tools? </h3>
        <p>- <span>{{$data['share_dir_on_tool']}}</span></p>

        <h3>8. How much income did you take out last year from the business? </h3>
        <p>- <span>${{$data['take_out_money']}}</span></p>

        <h3>9. Payment Frequency </h3>
        <p>- <span>{{$data['pay_freq']}}</span></p>

        <h3>10. What ACC cover plan do you have? </h3>
        <p>- <span>{{$data['acc_cover']}}</span></p>

        <h3>11. Your nominated Cover Plus Extra cover amount </h3>
        <p>- <span>${{$data['cover_plus_extra_amt']}}</span></p>



