function getLabels() {
    var labels = [];
    for (var i = 0; i <= 24; i++) {
        labels.push(i);
    }
    return labels
}

var user = {
    1 : {'name':'Justin', 'id' : '0001', 'von' : '10', 'bis' : '18'},
    2 : {'name':'Julian', 'id' : '0002', 'von' : "11", 'bis' : '20'}
};


function returnUserData(member, key) {
    return user[member][key];
}

var data = [];

function setData() {
    for (var i in user) {
        var object = {
            data : [returnUserData(i, 'von'), 11,12,13,14,15,16,17,18],
            label: returnUserData(i, 'name'),
            borderColor: '#000',
            fill: false
        };
        data.push(object);
    }
    return data;
}


new Chart(document.getElementById("canvas"), {
    type: 'line',
    data: {
        labels: getLabels(),
        datasets: setData()/*{
            data: [0,24],
            label: returnUserData(1, 'name'),
            borderColor: "#3e95cd",
            fill: false
        }, {
            data: [0,24],
            label: returnUserData(2, 'name'),
            borderColor: "#8e5ea2",
            fill: false
        }, {
            data: [0,24],
            label: "Europe",
            borderColor: "#3cba9f",
            fill: false
        }, {
            data: [0,24],
            label: "Latin America",
            borderColor: "#e8c3b9",
            fill: false
        }, {
            data: [0,24],
            label: "North America",
            borderColor: "#c45850",
            fill: false
        }*/

    },
    options: {
        title: {
            display: true,
            text: 'World population per region (in millions)'
        },
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                    suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                    suggestedMax: 24,
                    stepSize: 1,
                    // OR //
                    beginAtZero: true   // minimum value will be 0.
                }
            }]
        }
    }
});
