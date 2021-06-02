google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

    var data = google.visualization.arrayToDataTable([
        ['Estados', 'Vacinados até 23/05/2021',],
        ['AC', 174221],
        ['AL', 879429],
        ['AM', 1142930],
        ['AP', 168356],
        ['Ba', 4585382],
        ['CE', 2491785],
        ['DF', 893471],
        ['ES', 1286398],
        ['GO', 1913848],
        ['MA', 1641028],
        ['MG', 6606587],
        ['MS', 1050346],
        ['MT', 824885],
        ['PA', 2022700],
        ['PB', 1215510],
        ['PE', 2536569],
        ['PI', 840141],
        ['PR', 3407832],
        ['RJ', 4448106],
        ['RN', 970751],
        ['RO', 341619],
        ['RR', 130667],
        ['RS', 4188860],
        ['SC', 2107536],
        ['SE', 599692],
        ['SP', 15787255],
        ['TO', 364855],
    ]);

    var options = {
        title: 'Vacinação no Brasil por Estado',
        chartArea: {width: '50%'},
        hAxis: {
            title: 'Total Vacinados, Fonte: G1',
            minValue: 0
        },
        vAxis: {
            title: 'Estados'
        }
    };

    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

    chart.draw(data, options);
}

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart1);
function drawChart1() {
    var data = google.visualization.arrayToDataTable([
        ['Região', 'Total de Casos', 'Total de Óbitos'],
        ['Sudeste',  6014887,      206727],
        ['Centro-oeste',  1662222,      41987],
        ['Nordeste',  3754438,       92173],
        ['Sul',  3068483,      67747],
        ['Norte',  1583228,      40434]
    ]);

    var options = {
        title: 'Dados estatistico da Covid no Brasil 23/05/2021',
        hAxis: {title: 'Fonte: Gov.br', titleTextStyle: {color: 'black'}}
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
    chart.draw(data, options);
}

$(window).resize(function(){
    drawChart1();
    drawBasic();
});