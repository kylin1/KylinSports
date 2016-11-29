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



