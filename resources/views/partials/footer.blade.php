<!-- JS Implementing Plugins -->

<!-- JS PLUGINS -->
<!-- Required plugins -->
<script src="https://cdn.jsdelivr.net/npm/preline/dist/index.js"></script>
<!-- Clipboard -->
<script src="https://cdn.jsdelivr.net/npm/clipboard/dist/clipboard.min.js"></script>
<script src="https://preline.co/assets/js/hs-copy-clipboard-helper.js"></script>

<!-- Apexcharts -->
<script src="https://cdn.jsdelivr.net/npm/lodash/lodash.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts/dist/apexcharts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/preline/dist/helper-shared.js"></script>
<script src="https://cdn.jsdelivr.net/npm/preline/dist/helper-apexcharts.js"></script>

<!-- JS INITIALIZATIONS -->
<script>
  window.addEventListener('load', () => {
    (function () {
      buildChart('#hs-pro-anvpch', (mode) => ({
        chart: {
          height: 300,
          type: 'bar',
          stacked: true,
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          },
        },
        series: [
          {
            name: 'Paid members',
            data: [16600, 20000, 15800, 14200, 17200, 22800, 21800, 29400, 22600, 22900]
          },
          {
            name: 'Free members',
            data: [-10900, -15800, -23700, -13500, -6750, -17900, -18700, -17300, -17100, -24300]
          }
        ],
        fill: {
          type: ['pattern', 'solid'],
          pattern: {
            style: ['slantedLines', 'none'],
            width: 6,
            height: 6,
            strokeWidth: 2
          }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '70%',
          }
        },
        legend: {
          show: false,
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          type: 'category',
          categories: [
            '1 Jun 2025',
            '2 Jun 2025',
            '3 Jun 2025',
            '4 Jun 2025',
            '5 Jun 2025',
            '6 Jun 2025',
            '7 Jun 2025',
            '8 Jun 2025',
            '9 Jun 2025',
            '10 Jun 2025',
          ],
          labels: {
            rotate: -45,
            style: {
              colors: varToColor('--chart-colors-xaxis-labels'),
              fontSize: '13px',
              fontFamily: cssVarToValue('--font-sans'),
              fontWeight: 400
            }
          },
          axisTicks: {
            show: false
          },
          axisBorder: {
            show: false
          }
        },
        yaxis: {
          labels: {
            align: 'right',
            minWidth: 0,
            maxWidth: 140,
            style: {
              colors: varToColor('--chart-colors-yaxis-labels'),
              fontSize: '12px',
              fontFamily: cssVarToValue('--font-sans'),
              fontWeight: 400
            },
            formatter: (value) => `${Math.abs(value) >= 1000 ? `${Math.abs(value / 1000)}k` : Math.abs(value)}`
          }
        },
        tooltip: {
          x: {
            format: 'MMMM yyyy'
          },
          y: {
            formatter: (value) => {
              const abs = Math.abs(value);
              return `$${abs >= 1000 ? `${abs / 1000}k` : abs}`;
            }
          },
          custom: function (props) {
            return buildTooltipCompareTwo(props, {
              title: 'Members',
              mode,
              hasCategory: false,
              hasTextLabel: true,
              wrapperExtClasses: 'min-w-36',
              isValueDivided: false,
              valuePrefix: '',
              labelDivider: ':',
              labelExtClasses: 'ms-2'
            });
          }
        },
        grid: {
          strokeDashArray: 2,
          borderColor: mode === 'dark' ? varToColor('--chart-colors-grid-border-inverse') : varToColor('--chart-colors-grid-border')
        },
        responsive: [{
          breakpoint: 568,
          options: {
            chart: {
              height: 280
            },
            xaxis: {
              labels: {
                show: false,
              },
              axisBorder: {
                show: false,
              }
            },
            yaxis: {
              labels: {
                style: {
                  colors: varToColor('--chart-colors-yaxis-labels'),
                  fontSize: '11px',
                  fontFamily: cssVarToValue('--font-sans'),
                  fontWeight: 400
                },
                formatter: (value) => `${Math.abs(value) >= 1000 ? `${Math.abs(value / 1000)}k` : Math.abs(value)}`
              },
              tooltip: {
                custom: function (props) {
                  const { w, dataPointIndex } = props;
                  const { categories } = w.config.xaxis;

                  return buildTooltipCompareTwo(props, {
                    title: `Members <br> <span class="text-xs">${categories[dataPointIndex]}</span>`,
                    mode,
                    hasCategory: false,
                    hasTextLabel: true,
                    wrapperExtClasses: 'min-w-36',
                    isValueDivided: false,
                    valuePrefix: '',
                    labelDivider: ':',
                    labelExtClasses: 'ms-2'
                  });
                }
              },
            }
          }]
        }), () => ({
          colors: [varToColor('--chart-colors-chart-3'), varToColor('--chart-colors-primary')],
          xaxis: {
            labels: {
              style: {
                colors: varToColor('--chart-colors-xaxis-labels'),
              }
            }
          },
          yaxis: {
            labels: {
              style: {
                colors: varToColor('--chart-colors-yaxis-labels'),
              }
            }
          },
        }), () => ({
          colors: [varToColor('--chart-colors-chart-3-inverse'), varToColor('--chart-colors-primary-inverse')],
          xaxis: {
            labels: {
              style: {
                colors: varToColor('--chart-colors-xaxis-labels-inverse'),
              }
            }
          },
          yaxis: {
            labels: {
              style: {
                colors: varToColor('--chart-colors-yaxis-labels-inverse')
              }
            }
          },
        }));
    })();
  });
</script>
<script>
	window.addEventListener('load', () => {
	  // Apex Area Chart
	  (function () {
	    buildChart('#hs-pro-atatpvch', (mode) => ({
	      chart: {
	        height: 90,
	        type: 'area',
	        toolbar: {
	          show: false
	        },
	        sparkline: {
	          enabled: true
	        },
	        zoom: {
	          enabled: false
	        }
	      },
	      series: [
            {
  						name: 'Total views',
  						data: [780, 770, 760, 790, 775, 765, 755, 870, 880, 890, 875, 870, 860, 975, 990, 965, 960, 970, 975, 1085, 1070, 1060, 1080, 1075, 1065, 1070, 1060, 1080, 1075, 1065, 1071],
  						valuePostfix: ''
            },
            {
  						name: 'Total posts',
  						data: [25, 26, 27, 22, 25, 26, 37, 36, 35, 33, 35, 36, 37, 35, 44, 46, 47, 46, 45, 44, 46, 47, 45, 45, 46, 46, 47, 45, 45, 46, 48],
              valuePostfix: ''
            }
          ],
	      legend: {
	        show: false
	      },
	      dataLabels: {
	        enabled: false
	      },
	      stroke: {
	        curve: 'straight',
	        width: 2
	      },
	      fill: {
	        type: 'gradient',
	        gradient: {
	          type: 'vertical',
	          shadeIntensity: 1,
	          opacityFrom: 0.2,
	          opacityTo: 0.8
	        }
	      },
	      xaxis: {
            type: 'category',
            categories: [
              '1 Jun 2025',
              '2 Jun 2025',
              '3 Jun 2025',
              '4 Jun 2025',
              '5 Jun 2025',
              '6 Jun 2025',
              '7 Jun 2025',
              '8 Jun 2025',
              '9 Jun 2025',
              '10 Jun 2025',
              '11 Jun 2025',
              '12 Jun 2025',
              '13 Jun 2025',
              '14 Jun 2025',
              '15 Jun 2025',
              '16 Jun 2025',
              '17 Jun 2025',
              '18 Jun 2025',
              '19 Jun 2025',
              '20 Jun 2025',
              '21 Jun 2025',
              '22 Jun 2025',
              '23 Jun 2025',
              '24 Jun 2025',
              '25 Jun 2025',
              '26 Jun 2025',
              '27 Jun 2025',
              '28 Jun 2025',
              '29 Jun 2025',
              '30 Jun 2025',
              '31 Jun 2025',
            ],
            crosshairs: {
              show: false
            }
          },
	      tooltip: {
	        x: {
	          format: 'MMMM yyyy'
	        },
	        y: {
	          formatter: (value) => `$${value >= 1000 ? `${value / 1000}k` : value}`
	        },
	        custom: function (props) {
	          return buildTooltipCompareTwoAlt(props, {
	            title: 'Members',
	            mode,
                hasCategory: false,
                hasTextLabel: true,
                wrapperExtClasses: 'min-w-36',
                isValueDivided: false,
                valuePrefix: '',
                labelDivider: ':',
                labelExtClasses: 'ms-2'
	          });
	        }
	      },
	      responsive: [{
	        breakpoint: 568,
	        options: {
	          labels: {
	            style: {
	              colors: varToColor('--chart-colors-labels'),
	              fontSize: '11px',
	              fontFamily: cssVarToValue('--font-sans'),
	              fontWeight: 400
	            },
	            offsetX: -2,
	            formatter: (title) => title.slice(0, 3)
	          },
	          yaxis: {
	            labels: {
	              align: 'left',
	              minWidth: 0,
	              maxWidth: 140,
	              style: {
	                colors: varToColor('--chart-colors-yaxis-labels'),
	                fontSize: '11px',
	                fontFamily: cssVarToValue('--font-sans'),
	                fontWeight: 400
	              },
	              formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
	            }
	          },
	        },
	      }]
	    }), () => ({
	      colors: [varToColor('--chart-colors-primary-hex'), varToColor('--chart-colors-chart-5-hex')],
	      fill: {
	        gradient: {
	          stops: [0, 90, 100]
	        }
	      },
	      grid: {
	        strokeDashArray: 2,
	        borderColor: varToColor('--chart-colors-grid-border'),
	        padding: {
	          bottom: 4
	        }
	      }
	    }), () => ({
	      colors: [varToColor('--chart-colors-primary-hex-inverse'), varToColor('--chart-colors-chart-5-hex-inverse')],
	      fill: {
	        gradient: {
	          stops: [100, 90, 0]
	        }
	      },
	      grid: {
	        strokeDashArray: 2,
	        borderColor: varToColor('--chart-colors-grid-border-inverse'),
	        padding: {
	          bottom: 4
	        }
	      }
	    }));
	  })();
	});
</script>

<!-- JS THIRD PARTY PLUGINS -->
<!-- Google Analytics. Global site tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B73TDMXKF5"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }

  gtag('js', new Date());
  gtag('config', 'G-B73TDMXKF5');
</script>
</body>
</html>