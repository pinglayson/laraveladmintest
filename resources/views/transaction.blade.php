<div>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Amout</th>
            <th>Currency</th>
            <th>Date</th>
            <th>Id</th>
            <th>Receiver</th>
            <th>Sender</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>
</table>

<script>

function sendConfirm(id){
    $.ajax({
        method: "POST",
        url: "/admin/confirm-transations/"+id
    })
    .done(function( msg ) {
        if(msg.message == 'success') {
            alert('Transaction has been confirmed');
        } else {
            alert('Oppss... something went wrong. Please contact your administrator.');
        }
    });
}

$( document ).ready(function() {
    $('#example').DataTable({
        ajax: {
            url: '/admin/get-transations',
        },
        columns: [
            { data: 'amount'},
            { data: 'currency'},
            { data: 'date'},
            { data: 'id'},
            { data: 'receiver'},
            { data: 'sender'},
            { data: 'type'},
            @if(Admin::user()->can('transaction.admin'))
            {
                mRender: function (data, type, row) {
                    return '<button onClick="sendConfirm(' + row.id + ')" class="transaction-confirm" >Confirm</button>'
                }
            }
            @endif
        ]
    });
});

</script>

</div>
