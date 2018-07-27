<div class="panel panel-default">
  <div class="panel-heading">Send GT-Cash</div>
  <div class="panel-body">
    <form id="gt-cash-from" data-parsley-validate="">
      <div class="fields-group">

        <div class="row form-group">
          <label style="padding-top:5px;" for="slug" class="col-sm-2  control-label">Send GT-Cash To:</label>
          <div class="col-sm-8">
            <input name="email" type="email" required="" type="text" value="" class="gt-input form-control slug" placeholder="Please use Email">
          </div>
        </div>

        <div class="row form-group">
          <label style="padding-top:5px;" for="slug" class="col-sm-2  control-label">Currency:</label>
          <div class="col-sm-8">
            <div class="input-group">
              <select required="" class="gt-select" name="selcurrency" id="selcurrency">
                <option value="">---</option>
                <option value="SGD">Singapore Dollar (SGD) </option>
                <option value="MYR">Malaysian Ringgit (MYR) </option>
                <option value="USD">U.S. Dollar (USD) </option>
                <option value="THB">Thai Baht (THB) </option>
                <option value="GBP">British Pound (GBP) </option>
                <option value="CNY">China Yuan (CNY) </option>
                <option value="IDR">Indonesian Rupiah (IDR) </option>
              </select>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label style="padding-top:5px;" for="slug" class="col-sm-2  control-label">Payment Type:</label>
          <div class="col-sm-8">
            <div class="input-group">
              <select name="paymenttype" class="gt-select" name="ptype" id="ptype">
                <option value="0">Transfer</option>
                <option value="1">Deposit</option>
                <option value="2">Withdraw</option>
                <option value="3">Payment</option>
                <option value="4">Signup</option>
                <option value="5">Commission</option>
                <option value="6">Refund</option>
                <option value="7">Freecash</option>
                <option value="8">Bonus</option>
                <option value="9">CashHoney</option>
                <option value="10">Reward(add new user)</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label style="padding-top:5px;" for="slug" class="col-sm-2  control-label">Amount to transfer:</label>
          <div class="col-sm-8">
            <div class="input-group">
              <input name="amounttransfer" type="text" class="gt-input form-control slug" value="0.00">
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label style="padding-top:5px;" for="slug" class="col-sm-2  control-label">Description (optional):</label>
          <div class="col-sm-8">
            <textarea name="desc" class="form-control" rows="4" cols="70" style="width:100%;max-width:442px;"></textarea>
          </div>
        </div>

        <div class="row form-group">
          <label style="padding-top:5px;" for="slug" class="col-sm-2  control-label">Send Email:</label>
          <div class="col-sm-8" style="height: 32px;padding-top: 6px;">
            <input type="radio" value="yes" name="sendstatus" id="sendstatus">
            <span style="padding-right: 12px;padding-left:2px;">Yes</span>
            <input type="radio" value="no" name="sendstatus" id="sendstatus" checked="">
            <span style="padding-left:2px;">No</span>
          </div>
        </div>

        <div class="row form-group">
          <label style="padding-top:5px;" for="slug" class="col-sm-2  control-label">SMS Code:</label>
          <div class="col-sm-8">
            <div class="input-group">
              <input name="smscode" type="text" value="" class="gt-input form-control slug">
              <span class="input-group-btn" style="float:left">
                <button class="btn btn-default" type="button">Click to get sms code</button>
              </span>
            </div>
          </div>
        </div>

        <button type="submit" class="gt-submit btn btn-primary">Send Now!</button>

      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('#gt-cash-from').on('submit',function(e) {
    e.preventDefault();
    if ( $(this).parsley().isValid() ) {
      $.ajax({
        method: "POST",
        url: "/admin/gt-cash/send-gt-cash",
        data:$(this).serialize()
      })
      .done(function( msg ) {
          if(msg.message == 'success') {
              alert('Transaction has been confirmed');
          } else {
              alert('Oppss... something went wrong. Please contact your administrator.');
          }
      });
    }
  });
});
</script>

<style>
  .gt-select {
    height: 32px;
    min-width: 200px;
    max-width: 400px;
  }

  .gt-input {
    /* min-width: 200px; */
    /* width: 100%; */
    max-width: 442px;
  }

  .gt-submit {
    margin-top: 4rem;
    margin-bottom: 2rem;
    margin-left: auto;
    margin-right: auto;
    width: 200px;
    display: block;
  }
  .input-group {
    width: 100%;
  }
</style>
