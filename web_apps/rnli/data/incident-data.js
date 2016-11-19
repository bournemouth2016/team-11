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

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2015 Q1',
            a: 46
        }, {
            y: '2015 Q2',
            a: 73
        }, {
            y: '2015 Q3',
            a: 51
        }, {
            y: '2015 Q4',
            a: 72
        }, {
            y: '2016 Q1',
            a: 22
        }, {
            y: '2016 Q2',
            a: 61
        }, {
            y: '2016 Q3',
            a: 45
        }, {
            y: '2016 Q4',
            a: 22
        }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Trips'],
        hideHover: 'auto',
        resize: true
    });

});
