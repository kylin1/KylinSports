/**
 * Created by kylin on 16/10/2016.
 */
var responsiveOptions = [
    ['screen and (max-width: 640px)', {
        seriesBarDistance: 5,
        axisX: {
            labelInterpolationFnc: function (value) {
                return value[0];
            }
        }
    }]
];

function createSleepBarChart(dataSleepBar){
    // 睡眠时间柱状图
    var optionsSleepBar = {
        axisX: {
            showGrid: false
        },
        low: 0,
        high: 12,

        chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
    };



    var sleepBarChart = Chartist.Bar('#sleepBarChart', dataSleepBar, optionsSleepBar, responsiveOptions);
    md.startAnimationForBarChart(sleepBarChart);
}

function createHeartRateChart() {
    // 心率折线图

    var optionsHeartChart = {
        low: 0,
        showArea: true
    };

    var heartRateChart = new Chartist.Line('#heartRateChart',dataHeartChart, optionsHeartChart);
    md.startAnimationForLineChart(heartRateChart);

}

function createStepBarChart() {
    /* ----------==========     步数柱状图    ==========---------- */

    var optionStepsLineChart = {
        axisX: {
            showGrid: false
        },
        low: 0,
        high: 10000,
        chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
    };

    var stepsBarChart = Chartist.Bar('#stepsBarChart', dataStepsLineChart, optionStepsLineChart, responsiveOptions);
    md.startAnimationForBarChart(stepsBarChart);

}

function createRunLineChart() {

    var optionsRunLineChart = {
        axisX: {
            showGrid: false
        },
        low: 0,
        high: 10,
        chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
    };

    var runLineChart = Chartist.Bar('#runLineChart', dataRunLineChart, optionsRunLineChart, responsiveOptions);
    md.startAnimationForBarChart(runLineChart);
}

function createWeightCHart() {
    var dataWeightChart = {
        labels: ['3月', '4月', '5月', '6月', '7月',
            '8月', '9月', '10月', '11月', '12月'],
        series: [
            [150, 151, 152, 151, 153,
                154, 155, 156, 160, 158, 156, 156]
        ]
    };
    var optionsWeightChart = {
        axisX: {
            showGrid: false
        },
        low: 145,
        high: 175,
        chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
    };

    var weightChart = Chartist.Line('#weightChart', dataWeightChart, optionsWeightChart, responsiveOptions);
    md.startAnimationForLineChart(weightChart);
}

function createFatChart() {

    var dataFatChart = {
        labels: ['3月', '4月', '5月', '6月', '7月',
            '8月', '9月', '10月', '11月', '12月'],
        series: [
            [18, 18, 18, 19, 19,
                19, 19, 20, 22, 20, 19, 18]
        ]
    };
    var optionsFatChart = {
        axisX: {
            showGrid: false
        },
        axisY: {
            labelInterpolationFnc: function(value) {
                return value + '%';
            }
        },
        low: 15,
        high: 25,
        chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
    };

    var fatChart = Chartist.Line('#fatChart', dataFatChart, optionsFatChart, responsiveOptions);
    md.startAnimationForLineChart(fatChart);
}


function createLineChart(id, data, title) {

    var options = {
        axisX: {
            showGrid: false
        },
        chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
    };

    var runLineChart = Chartist.Bar(document.getElementById(id), data, options, responsiveOptions);
    md.startAnimationForBarChart(runLineChart);
}

function createBarChart(id, data, title) {

    // 睡眠时间柱状图
    var options = {
        axisX: {
            showGrid: false
        },
        chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
    };

    var sleepBarChart = Chartist.Bar(document.getElementById(id), data, options, responsiveOptions);
    md.startAnimationForBarChart(sleepBarChart);
}



