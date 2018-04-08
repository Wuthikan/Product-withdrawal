/** 
 * @author: สถาพร สำราญ
 * @phone: 0805799619
 * @email: bbird_ss@outlook.com
 */

 $(document).ready(function(){

    var dHeight = $('#3 .scroll-content').eq(0).outerHeight();
    $('.content.left').css({'height': dHeight+'px', 'padding-top': '16%'});

    var ctx = document.getElementsByClassName("content_pie");

    for (var i = ctx.length - 1; i >= 0; i--){
        var myPieChart = new Chart( ctx[i],{
            type: 'pie',
            options: {
                animation:{
                    animateRotate: false
                },
                legend: {
                    display: false
                }
            },
            data: {
                datasets: [{
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 206, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(153, 102, 255)'
                    ]
                }],
                labels: [
                    'THA',
                    'HK',
                    'SIN',
                    'CN',
                    'MY'
                ]
            }
            
        });
    }
    

 });