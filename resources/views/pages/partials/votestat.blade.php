<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';
    // Bar Chart Example
    var ctx = document.getElementById("myBarChart");
    var accreditated = <?php echo json_encode($accreditated); ?>;
    var vote = <?php echo json_encode($vote); ?>;
    var invalidvotes = <?php echo json_encode($invalid_votes); ?>;

    var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: {
          //  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          labels: ["Accredited Voters", "Valid Votes", "Invalid Votes"],
            datasets: [{
                label: "Vote Statistics",
                backgroundColor: ['#00008c', '#006600', '#8c0000'],
                borderColor: ['#00008c', '#006600', '#8c00000'],
               // data: [4215, 5312, 6251, 7841, 9821, 14984, 4215, 5312, 6251, 7841, 9821, 14984],
               data: [accreditated,  vote, invalidvotes]
            }],
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        //  max: 15000,
                        maxTicksLimit: 5
                    },
                    gridLines: {
                        display: true
                    }
                }],
            },
            legend: {
                display: true
            }
        }
    });
</script>
