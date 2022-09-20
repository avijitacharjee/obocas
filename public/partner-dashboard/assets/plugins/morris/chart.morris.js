$(function() {

    window.mA = Morris.Area({
        element: 'morrisArea',
        data: [{
            d: '2012-02-25',
            a: 11
        }, {
            d: '2012-02-26',
            a: 24
        }, {
            d: '2012-02-27',
            a: 12
        }, {
            d: '2012-02-28',
            a: 80
        }, {
            d: '2012-02-29',
            a: 10
        }, {
            d: '2012-03-01',
            a: 30
        }, {
            d: '2012-03-02',
            a: 32
        }, {
            d: '2012-03-03',
            a: 30
        }, {
            d: '2012-03-04',
            a: 36
        }, {
            d: '2012-03-05',
            a: 40
        }, {
            d: '2012-03-06',
            a: 30
        }, {
            d: '2012-03-07',
            a: 39
        }, ],
        xkey: 'd',
        ykeys: ['a'],
        labels: ['Visitors'],
        lineColors: ['#1b5a90'],
        lineWidth: 2,

        fillOpacity: 0.4,
        gridTextSize: 10,
        hideHover: 'auto',
        resize: true,
        redraw: true
    });

    /* Morris Line Chart */

    window.mL = Morris.Line({
        element: 'morrisLine',
        data: [{
                y: '2015',
                a: 100,
                b: 30
            },
            {
                y: '2016',
                a: 20,
                b: 60
            },
            {
                y: '2017',
                a: 90,
                b: 120
            },
            {
                y: '2018',
                a: 50,
                b: 80
            },
            {
                y: '2019',
                a: 120,
                b: 150
            },
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Doctors', 'Patients'],
        lineColors: ['#1b5a90', '#ff9d00'],
        lineWidth: 1,
        gridTextSize: 10,
        hideHover: 'auto',
        resize: true,
        redraw: true
    });
    $(window).on("resize", function() {
        mA.redraw();
        mL.redraw();
    });

});