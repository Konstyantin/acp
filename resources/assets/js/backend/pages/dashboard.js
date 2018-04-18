const addUIActions = function() {
  const $ctx = document.getElementById('myChart');
  const myChart = new Chart($ctx, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June'],
      datasets: [
        {
          label: 'Sent messages',
          fill: false,
          lineTension: 0.45,
          backgroundColor: 'rgba(75,192,192,0.4)',
          borderColor: 'rgba(75,192,192,1)',
          borderWidth: 1,
          borderCapStyle: 'butt',
          borderDash: [],
          borderDashOffset: 0.0,
          borderJoinStyle: 'miter',
          pointBorderColor: 'rgba(75,192,192,1)',
          pointBackgroundColor: '#fff',
          pointHoverBackgroundColor: 'rgba(75,192,192,1)',
          pointHoverBorderColor: 'rgba(220,220,220,1)',
          pointRadius: 3,
          pointHoverRadius: 5,
          pointBorderWidth: 0,
          pointHoverBorderWidth: 0,
          pointHitRadius: 5,
          data: [65, 59, 80, 81, 56, 55, 40],
          spanGaps: false,
        },
        {
          label: 'Received messages',
          fill: false,
          lineTension: 0.45,
          backgroundColor: 'rgba(247,65,64,0.4)',
          borderColor: 'rgba(247,65,64,1)',
          borderWidth: 1,
          borderCapStyle: 'butt',
          borderDash: [],
          borderDashOffset: 0.0,
          borderJoinStyle: 'miter',
          pointBorderColor: 'rgba(247,65,64,1)',
          pointBackgroundColor: '#fff',
          pointHoverBackgroundColor: 'rgba(247,65,64,1)',
          pointHoverBorderColor: 'rgba(220,220,220,1)',
          pointRadius: 3,
          pointHoverRadius: 5,
          pointBorderWidth: 0,
          pointHoverBorderWidth: 0,
          pointHitRadius: 5,
          data: [40, 55, 56, 35, 80, 60, 65],
          spanGaps: false,
        },
      ],
    },
  });
};

export {addUIActions};
