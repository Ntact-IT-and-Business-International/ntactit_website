$(function() {
  // Wrap charts
  $('.chartjs-demo').each(function() {
    $(this).wrap($('<div style="height:' + this.getAttribute('height') + 'px"></div>'));
  });


  var graphChart = new Chart(document.getElementById('chart-graph').getContext("2d"), {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label:           'Income',
        data:            [43, 91, 89, 16, 21, 79, 28],
        borderWidth:     1,
        backgroundColor: 'rgba(255,165,0, 0.3)',
        borderColor:     '#FFA500',
        borderDash:      [5, 5],
        fill: false
      }, {
        label:           'Expenditure',
        data:            [24, 63, 29, 75, 28, 54, 38],
        borderWidth:     1,
        backgroundColor: 'rgba(0,0,205, 0.5)',
        borderColor:     '#0000cd',
      }],
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });

  var barsChart = new Chart(document.getElementById('chart-bars').getContext("2d"), {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'April', 'May', 'June'],
      datasets: [{
        label: '2024 Pending',
        data: [53, 99, 14, 10, 43, 27],
        borderWidth: 1,
        backgroundColor: 'rgba(255,165,0, 0.9)',
        borderColor: '#FFA500'
      }, {
        label: '2024 Successful',
        data: [55, 74, 20, 90, 67, 97],
        borderWidth: 1,
        backgroundColor: 'rgba(0,0,205, 0.9)',
        borderColor: '#0000cd'
      }]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });

  var pieChart = new Chart(document.getElementById('chart-pie').getContext("2d"), {
    type: 'pie',
    data: {
      labels: [ 'Employees', 'Partners', 'Clients' ],
      datasets: [{
        data: [ 180, 272, 100 ],
        backgroundColor: [ '#0000cd', '#ff4a00', '#f4ab55' ],
        hoverBackgroundColor: [ '#FF4961', '#ff4a00', '#f4ab55' ]
      }]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });
  var pieChart = new Chart(document.getElementById('chart-pie2').getContext("2d"), {
    type: 'pie',
    data: {
      labels: [ 'Income', 'Expenditure', 'Cash' ],
      datasets: [{
        data: [ 180, 272, 100 ],
        backgroundColor: [ '#ff4a00','#f4ab55','#0000cd' ],
        hoverBackgroundColor: [ '#FF4961', '#ff4a00', '#f4ab55' ]
      }]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });
  var radarChart = new Chart(document.getElementById('chart-radar').getContext("2d"), {
    type: 'radar',
    data: {
      labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
      datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgba(40, 208, 148, 0.3)',
        borderColor: '#62d493',
        pointBackgroundColor: '#62d493',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: '#62d493',
        data: [39, 99, 77, 38, 52, 24, 89],
        borderWidth: 1
      }, {
        label: 'My Second dataset',
        backgroundColor: 'rgba(255, 73, 97, 0.3)',
        borderColor: '#FF4961',
        pointBackgroundColor: '#FF4961',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: '#FF4961',
        data: [6, 33, 14, 70, 58, 90, 26],
        borderWidth: 1
      }]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });

  var polarAreaChart = new Chart(document.getElementById('chart-polar-area').getContext("2d"), {
    type: 'polarArea',
    data: {
      datasets: [{
        data: [ 12, 10, 14, 6, 15 ],
        backgroundColor: [ '#FF4961', '#62d493', '#f4ab55', '#E7E9ED', '#55a3f4' ],
        label: 'My dataset'
      }],
      labels: [ 'Red', 'Green', 'Yellow', 'Grey', 'Blue' ]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });
  var doughnutChart = new Chart(document.getElementById('chart-doughnut').getContext("2d"), {
    type: 'doughnut',
    data: {
      labels: [ 'Red', 'Blue', 'Yellow' ],
      datasets: [{
        data: [ 137, 296, 213 ],
        backgroundColor: [ '#FF4961', '#ff4a00', '#f4ab55' ],
        hoverBackgroundColor: [ '#FF4961', '#ff4a00', '#f4ab55' ]
      }]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });

  // Resizing charts

  function resizeCharts() {
    graphChart.resize();
    barsChart.resize();
    radarChart.resize();
    polarAreaChart.resize();
    pieChart.resize();
    doughnutChart.resize();
  }

  // Initial resize
  resizeCharts();

  // For performance reasons resize charts on delayed resize event
  window.layoutHelpers.on('resize.charts-demo', resizeCharts);
});
