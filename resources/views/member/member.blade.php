<div class="panel panel-default">
    <div class="panel-heading">Total Number of Members</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table" style="width:100%">
                    <tbody>
                        <tr>
                            <td>Active members:</td>
                            <td>455863</td>
                        </tr>
                        <tr>
                            <td>Suspended members:</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Closed accounts:</td>
                            <td>14</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                @include('member.member-pie')
                @include('member.member-bar')
            </div>
        </div>
    </div>
</div>
