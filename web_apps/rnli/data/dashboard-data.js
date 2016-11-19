$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2015 Q1',
            real: 4,
            false: 3
        }, {
            period: '2015 Q2',
            real: 6,
            false: 3
        }, {
            period: '2015 Q3',
            real: 2,
            false: 11
        }, {
            period: '2015 Q4',
            real: 5,
            false: 3
        }, {
            period: '2016 Q1',
            real: 9,
            false: 0
        }, {
            period: '2016 Q2',
            real: 14,
            false: 12
        }, {
            period: '2016 Q3',
            real: 3,
            false: 1
        }, {
            period: '2016 Q4',
            real: 7,
            false: 3
        }],
        xkey: 'period',
        ykeys: ['real', 'false'],
        labels: ['Real', 'False'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Respondents that helped",
            value: 42
        }, {
            label: "Respondents that didn't help",
            value: 30
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2015 Q1',
            involved: 167,
            saved: 145,
            lost: 22
        }, {
            y: '2015 Q2',
            involved: 27,
            saved: 15,
            lost: 12
        }, {
            y: '2015 Q3',
            involved: 33,
            saved: 13,
            lost: 20
        }, {
            y: '2015 Q4',
            involved: 97,
            saved: 59,
            lost: 38
        }, {
            y: '2016 Q1',
            involved: 77,
            saved: 37,
            lost: 40
        }, {
            y: '2016 Q2',
            involved: 67,
            saved: 45,
            lost: 22
        }, {
            y: '2016 Q3',
            involved: 177,
            saved: 77,
            lost: 100
        }, {
            y: '2016 Q4',
            involved: 67,
            saved: 45,
            lost: 22
        }],
        xkey: 'y',
        ykeys: ['involved', 'saved', 'lost'],
        labels: ['Involved', 'Saved', 'Lost'],
        hideHover: 'auto',
        resize: true
    });

});
