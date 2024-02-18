<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="myChart" width="400" height="400"></canvas>

<script> 
    var data = {
        labels: ["Meciul 1", "Meciul 2", "Meciul 3", "Meciul 4", "Meciul 5", "Meciul 6", "Meciul 7", "Meciul 8", "Meciul 9", "Meciul 10"],
        datasets: [{
            label: 'Scor',
            data: [6, 0, 3, 4, 0, 3, 1, 2, 1, 3, 1, 2, 2, 1],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
        }
    });
</script>
