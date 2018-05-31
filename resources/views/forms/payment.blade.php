<div class="accordion-content">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-sub-title">Enter valid details</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Card Type:</label>
                        <select class="form-control">
                            <option selected>Visa</option>
                            <option>MasterCard</option>
                            <option>PayPal</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Card No:</label>
                        <input name="card[card_no]"type="password" class="form-control" placeholder="Enter valid credit/debit card number">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Card Cvv:</label>
                        <input name="card[cvv]"type="password" class="form-control" placeholder="Enter valid card Cvv">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email:</label>
                        <input name="card[cvv]"type="password" class="form-control" placeholder="Enter valid email">
                    </div>
                </div>
            </div>
            <div class="form-sub-title">Expiration Date:</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <select name="card[month]" class="form-control">
                            <option selected>Month</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <select name="card[year]" class="form-control">
                            <option selected>Year</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cards">
                        <div class="card">
                            <a href="#"><img src="{{asset('flextop/images/payment01.png')}}" alt="" class="img-responsive" title="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="#"><img src="{{asset('flextop/images/payment02.png')}}" alt="" class="img-responsive" title="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="#"><img src="{{asset('flextop/images/payment03.png')}}" alt="" class="img-responsive" title="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>