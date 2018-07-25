<div>

<canvas id="myChart-credit-pie"></canvas>

<script>

var ctx = document.getElementById('myChart-credit-pie').getContext('2d');

var randomScalingFactor = function() {
    return Math.round(Math.random() * 100);
};

var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [{
            //label: "My First dataset",
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            data: [ 8, 6, 11, 20, 15, 20 ],
        }]
    },

    // Configuration options go here
    options: {}
});

</script>

</div>
