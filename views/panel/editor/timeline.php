<?php
/**
 * @var $this View
 */

use amintado\slider\assets\VisTimelineAsset;
use yii\web\View;

?>
    <style>
        #box {
            position: absolute;
            top: 100px;
            margin-top: 100px !important;
            width: 100% !important;
            height: 50px;
            background: red;
        }
    </style>


    <div id="visualization"></div>
    <input id="animateDate" value="2" placeholder="SSS">
    <button id="go" onclick="go()" type="button">Animate to</button>

<?php


VisTimelineAsset::register($this);
$js = <<< JS
    var container = document.getElementById('visualization');

  // Create a DataSet (allows two way data-binding)
  var items = new vis.DataSet([
    {id: 1, content: 'item 1', start: 0,group:1},
    {id: 2, content: 'item 2', start: 2,group:2},
    {id: 3, content: 'item 3', start: 3,group:3},
    {id: 4, content: 'item 4', start: 4,group:4, end: 6},
    {id: 5, content: 'item 5', start: 4,group:5,end:10},
    {id: 6, content: 'item 6', start: 8,group:6}
  ]);
 var groups = new vis.DataSet([
    {id: 1, content: 'Truck&nbsp;1'},
    {id: 2, content: 'Truck&nbsp;2'},
    {id: 3, content: 'Truck&nbsp;3'},
    {id: 4, content: 'Truck&nbsp;4'},
    {id: 5, content: 'Truck&nbsp;5'},
    {id: 6, content: 'Truck&nbsp;6'}
  ]);
  // Configuration for the Timeline
  var options = {
              format:{
          minorLabels: {
            //millisecond:'SSS',
            second:     'MMMM',
            minute:     'MMMM',
            hour:       'MMMM'
            // weekday:    'MMMM',
            // day:        'MMMM',
            // week:       'MMMM',
            // month:      'MMMM',
            // year:       ''
          },
          majorLabels: {
            //millisecond:'SSS',
            second:     'MMMM',
            minute:     'MMMM',
            hour:       'MMMM'
            // weekday:    'MMMM',
            // day:        'MMMM',
            // week:       'MMMM',
            // month:      'MMMM',
            // year:       ''
          }
        },
        rtl: false,
        min:0,
        max:300,
         editable: 
         {
            add: true,         // add new items by double tapping
            updateTime: true,  // drag items horizontally
            updateGroup: true, // drag items from one group to another
            remove: true,       // delete an item by tapping the delete button top right
            overrideItems: false  // allow these options to override item.editable
         }
         // rollingMode: 
         // {
         //      follow: true,
         //      offset: 10
         // }

       // timeAxis: {scale: 'second', step: 0}

        
      
  };
  


  // Create a Timeline
  var timeline = new vis.Timeline(container, null,null, options);
  timeline.setGroups(groups);
  timeline.setItems(items);
  function drawVisualization() {
    vis.events.addListener(timeline, 'rangechange', function (properties) {
                animateCancel();
            });
    }
            function animateTo(date) {
                // get the new final date
                animateFinal = date.valueOf();
                timeline.setCustomTime(5);
    
                // cancel any running animation
                animateCancel();
    
                // animate towards the final date
                var animate = function () {
                    var range = timeline.getVisibleChartRange();
                    var current = (range.start.getTime() + range.end.getTime())/ 2;
                    var width = (range.end.getTime() - range.start.getTime());
                    var minDiff = Math.max(width / 1000, 1);
                    var diff = (animateFinal - current);
                    if (Math.abs(diff) > minDiff) {
                        // move towards the final date
                        var start = new Date(range.start.getTime() + diff / 4);
                        var end = new Date(range.end.getTime() + diff / 4);
                        timeline.setVisibleChartRange(start, end);
    
                        // start next timer
                        animateTimeout = setTimeout(animate, 50);
                    }
                };
                animate();
            }
            function animateCancel () {
                if (animateTimeout) {
                    clearTimeout(animateTimeout);
                    animateTimeout = undefined;
                }
            }
    
            function go () {
               
                // interpret the value as a date formatted as "yyyy-MM-dd"
                var v = document.getElementById('animateDate').value.split('-');
                // var date = new Date(v[0], v[1], v[2]);
                
                    animateTo(v);
                
            }
JS;

$this->registerJs($js, View::POS_END);


?>