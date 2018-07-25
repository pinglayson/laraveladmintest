<div class="panel panel-default">
    <div class="panel-heading">Credit Transactions</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table" style="width:100%">
                    <tbody>
                        <tr>
                            <td>All Credit Transaction:</td>
                            <td>1057723</td>
                        </tr>
                        <tr>
                            <td>Transfer Transaction:</td>
                            <td>16295</td>
                        </tr>
                        <tr>
                            <td>Deposit Transaction:</td>
                            <td>1800</td>
                        </tr>
                        <tr>
                            <td>Rewards Transaction:</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <td>Signup Rewards:</td>
                            <td>38466</td>
                        </tr>
                        <tr>
                            <td>Red Packet Transaction:</td>
                            <td>841667</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                @include('credit.credit-transaction-pie')
            </div>
        </div>
    </div>
</div>
