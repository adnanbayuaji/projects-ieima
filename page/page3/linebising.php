<canvas id="chart4"></canvas>
<script type="text/JavaScript">
  window.count = 0;
  Chart.defaults.global.pointHitDetectionRadius = 1;
  var customTooltips = function(tooltip) {

    // Tooltip Element
    var tooltipEl = $('#chartjs-tooltip');

    if (!tooltipEl[0]) {
      $('body').append('<div id="chartjs-tooltip"></div>');
      tooltipEl = $('#chartjs-tooltip');
    }

    // Hide if no tooltip
    if (!tooltip.opacity) {
      tooltipEl.css({
        opacity: 0
      });
      $('.chartjs-wrap canvas')
        .each(function(index, el) {
          $(el).css('cursor', 'default');
        });
      return;
    }

    $(this._chart.canvas).css('cursor', 'pointer');

    // Set caret Position
    tooltipEl.removeClass('above below no-transform');
    if (tooltip.yAlign) {
      tooltipEl.addClass(tooltip.yAlign);
    } else {
      tooltipEl.addClass('no-transform');
    }

    // Set Text
    if (tooltip.body) {
      var innerHtml = [
        (tooltip.beforeTitle || []).join('\n'), (tooltip.title || []).join('\n'), (tooltip.afterTitle || []).join('\n'), (tooltip.beforeBody || []).join('\n'), (tooltip.body || []).join('\n'), (tooltip.afterBody || []).join('\n'), (tooltip.beforeFooter || [])
        .join('\n'), (tooltip.footer || []).join('\n'), (tooltip.afterFooter || []).join('\n')
      ];
      tooltipEl.html(innerHtml.join('\n'));
    }

    // Find Y Location on page
    var top = 0;
    if (tooltip.yAlign) {
      if (tooltip.yAlign == 'above') {
        top = tooltip.y - tooltip.caretHeight - tooltip.caretPadding;
      } else {
        top = tooltip.y + tooltip.caretHeight + tooltip.caretPadding;
      }
    }

    var position = $(this._chart.canvas)[0].getBoundingClientRect();

    // Display, position, and set styles for font
    tooltipEl.css({
      opacity: 1,
      width: tooltip.width ? (tooltip.width + 'px') : 'auto',
      left: position.left + tooltip.x + 'px',
      top: position.top + top + 'px',
      fontFamily: tooltip._fontFamily,
      fontSize: tooltip.fontSize,
      fontStyle: tooltip._fontStyle,
      padding: tooltip.yPadding + 'px ' + tooltip.xPadding + 'px',
    });
  };
  var randomScalingFactor = function() {
    return Math.round(Math.random() * 100);
  };
  var datalabel = <?php echo json_encode($labels); ?>;
  var lineChartData3 = {
    labels: [<?php echo $labels; ?>],
    datasets: [{
        label: "Noise",
        borderColor: "#808080",
        pointBorderColor: "#808080",
        pointBackgroundColor: "#808080",
        pointHoverBackgroundColor: "#808080",
        pointHoverBorderColor: "#808080",
        pointBorderWidth: 1,
        pointHoverRadius: 1,
        pointHoverBorderWidth: 1,
        pointRadius: 2,
        fill: false,
        borderWidth: 1,
        data: [<?php echo $tabbising; ?>]
    }]
  };

  
</script>