var user = {
    1: {
        'name': 'Justin',
        'id': '0001',
        '05.04.2020': {'von': '11', 'bis': '19'},
        '06.04.2020': {'von': '8', 'bis': '10'},
        '07.04.2020': {'von': '10', 'bis': '18'},
        '08.04.2020': {'von': '9', 'bis': '19'},
        '09.04.2020': {'von': '8', 'bis': '16'},
        '10.04.2020': {'von': '8', 'bis': '17'},
        '11.04.2020': {'von': '9', 'bis': '13'}
    },
    2: {
        'name': 'Julian',
        'id': '0002',
        '05.04.2020': {'von': '13', 'bis': '19'},
        '06.04.2020': {'von': '8', 'bis': '14'},
        '07.04.2020': {'von': '11', 'bis': '17'},
        '08.04.2020': {'von': '19', 'bis': '20'},
        '09.04.2020': {'von': '9', 'bis': '20'},
        '10.04.2020': {'von': '12', 'bis': '15'},
        '11.04.2020': {'von': '9', 'bis': '13'}
    }
};

function returnUserData(member, key) {
    return user[member][key];
}

function returnDateData(member, date, start) {
    return user[member][date][start];
}


function fillDates(member) {
    var newDates = [];
    for (var i = 0; i < dates.length; i++) {
        newDates.push(returnDateData(member, dates[i], 'von'), returnDateData(member, dates[i], 'bis'))
    }
    return newDates;
}


function setData() {
    var data = [];
    for (var i in user) {
        var object = {
            data: fillDates(i),
            label: returnUserData(i, 'name'),
            borderColor: color = random_rgba(),
            backgroundColor: color,
            fill: true
        };
        data.push(object);
    }

    return data;
}


new Chart(document.getElementById("canvas"), {
    type: 'line',
    data: {
        labels: dates,
        datasets: setData()
    },
    options: {
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                    suggestedMin: 5,
                    suggestedMax: 20,
                    stepSize: 1,
                    beginAtZero: false
                },
                scaleLabel: {
                    display: true,
                    fontSize: 14,
                    labelString: "Uhrzeit",
                }
            }],
        }
    }
});

//TODO: auslagern

function random_rgba() {
    var o = Math.round, r = Math.random, s = 255;
    return 'rgba(' + o(r() * s) + ',' + o(r() * s) + ',' + o(r() * s) + ',' + .3 + ')';
}


