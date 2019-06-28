<!-- head -->
@include('sub-views.head')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
@include('sub-views.sidenav')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('sub-views.topnav')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->

        <div class="container-fluid">
            <div class="app-content content">
                <div class="content-wrapper">
    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="content-header-title mb-0 d-inline-block"><i class="fas fa-chart-pie"></i> Driver Charts</h3>
                        </div>
                        <div class="card-body">
                            <section id="text-alignment">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card" style="box-shadow: 10px 10px 10px gainsboro;">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title text-center" style="color: black">Driver Signup Comparison Month Wise</h4><hr>
                                                    <div id="perf_div"></div>
                                                    <script type="text/javascript">/**
     * jvent.min.js
     *
     * Author:   Guille Paz
     * Email:    guille87paz@gmail.com
     * Github:   https://github.com/pazguille/jvent
     * Homepage: http://pazguille.me
     * License:  MIT
     */
    !function(t){"use strict";function e(){}e.prototype.on=function(t,e){return this._collection=this._collection||{},this._collection[t]=this._collection[t]||[],this._collection[t].push(e),this},e.prototype.once=function(t,e){function i(){o.off(t,i),e.apply(this,arguments)}var o=this;return i.listener=e,this.on(t,i),this},e.prototype.off=function(t,e){var i=this._collection[t],o=0;if(void 0!==i)for(o;o<i.length;o+=1)if(i[o]===e||i[o].listener===e){i.splice(o,1);break}return 0===i.length&&this.removeAllListeners(t),this},e.prototype.removeAllListeners=function(t){return this._collection=this._collection||{},delete this._collection[t],this},e.prototype.listeners=function(t){return this._collection=this._collection||{},this._collection[t]},e.prototype.emit=function(){if(void 0===this._collection)return this;var t,e=[].slice.call(arguments,0),i=e.shift(),o=this._collection[i],n=0;if(o)for(o=o.slice(0),t=o.length,n;t>n;n+=1)o[n].apply(this,e);return this},"function"==typeof t.define&&void 0!==t.define.amd?t.define("Jvent",[],function(){return e}):"undefined"!=typeof module&&void 0!==module.exports?module.exports=e:t.Jvent=e}(this);
    
    /**
     * Array.some polyfill for IE8
     *
     * Link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/some?redirectlocale=en-US&redirectslug=JavaScript%2FReference%2FGlobal_Objects%2FArray%2Fsome
     * Production steps of ECMA-262, Edition 5, 15.4.4.17
     * Reference: http://es5.github.io/#x15.4.4.17
     */
    if(!Array.prototype.some){Array.prototype.some=function(fun){'use strict';if(this==null){throw new TypeError('Array.prototype.some called on null or undefined');}if(typeof fun!=='function'){throw new TypeError();}var t=Object(this);var len=t.length>>>0;var thisArg=arguments.length>=2?arguments[1]:void 0;for(var i=0;i<len;i++){if(i in t&&fun.call(thisArg,t[i],i,t)){return true;}}return false;};}
    
    /**
     * lava.js
     *
     * Author:  Kevin Hill
     * Email:   kevinkhill@gmail.com
     * Github:  https://github.com/kevinkhill/lavacharts
     * License: MIT
     */
    var lava = lava || {};
    
    (function() {
      "use strict";
    
      this.charts            = [];
      this.dashboards        = [];
      this.registeredCharts  = [];
      this.readyCallback     = null;
      this.renderDashboards  = null;
    
      this.events = new Jvent();
    
      //var registeredActions = [];
    
      /**
       * LavaChart object.
       *
       * @constructor
       */
      this.Chart = function() {
        var self = this;
        this.data    = null;
        this.chart   = null;
        this.options = null;
        this.formats = [];
        this.render  = function(){};
        this.setData = function(){};
        this.redraw  = function(){};
        this.applyFormats = function (formatArr) {
          for(var a=0; a < formatArr.length; a++) {
            var formatJson = formatArr[a];
            var formatter = new google.visualization[formatJson.type](formatJson.config);
            formatter.format(self.data, formatJson.index);
          }
        };
      };
    
      /**
       * Dashboard object.
       *
       * @constructor
       */
      this.Dashboard = function() {
        this.render    = null;
        this.data      = null;
        this.bindings  = [];
        this.dashboard = null;
        this.callbacks = [];
      };
    
      this.Callback = function (label, func) {
        this.label = label;
        this.func  = func;
      };
    
      this.ready = function (callback) {
        if (typeof callback !== 'function') {
          throw new Error('[Lavacharts] ' + typeof callback + ' is not a valid callback.');
        } else {
          var callback = function(){};
        }
    
        lava.readyCallback = callback;
      };
    
      /**
       * Event wrapper for chart events.
       *
       *
       * Used internally when events are applied so the user event function has
       * access to the chart within the event callback.
       *
       * @param {object} event
       * @param {object} chart
       * @param {function} callback
       */
      this.event = function (event, chart, callback) {
        return callback(event, chart);
      };
    
      /**
       * Registers a chart as being on screen, accessible to redraws.
       */
      this.registerChart = function(type, label) {
        this.registeredCharts.push(type + ':' + label);
      };
    
      /**
       * Loads a new DataTable into the chart and redraws.
       *
       *
       * Used with an AJAX call to a PHP method returning DataTable->toJson(),
       * a chart can be dynamically update in page, without reloads.
       *
       * @param {string} chartLabel
       * @param {string} json
       * @param {function} callback
       */
      this.loadData = function (chartLabel, json, callback) {
        lava.getChart(chartLabel, function (chart, LavaChart) {
          if (typeof json.data != 'undefined') {
            LavaChart.setData(json.data);
          } else {
            LavaChart.setData(json);
          }
    
          if (typeof json.formats != 'undefined') {
            LavaChart.applyFormats(json.formats);
          }
    
          LavaChart.redraw();
    
          if (typeof callback == 'function') {
            callback(LavaChart.chart, LavaChart);
          }
        });
      };
    
      this.getDashboard = function (label, callback) {
        if (typeof lava.dashboards[label] === 'undefined') {
          throw new Error('[Lavacharts] Dashboard "' + label + '" was not found.');
        }
    
        var LavaDash = lava.dashboards[label];
    
        if (typeof callback !== 'function') {
          throw new Error('[Lavacharts] ' + typeof callback + ' is not a valid callback.');
        }
    
        callback(LavaDash.dashboard, LavaDash);
      };
    
      /**
       * Returns the GoogleChart and the LavaChart objects
       *
       *
       * The GoogleChart object can be used to access any of the available methods such as
       * getImageURI() or getChartLayoutInterface().
       * See https://google-developers.appspot.com/chart/interactive/docs/gallery/linechart#methods
       * for some examples relative to LineCharts.
       *
       * The LavaChart object holds all the user defined properties such as data, options, formats,
       * the google chart object, and relative methods for internal use.
       *
       * Just to clarify:
       *  - The first returned callback value is a property of the LavaChart.
       *    It was add as a shortcut to avoid chart.chart to access google's methods of the chart.
       *
       *  - The second returned callback value is the LavaChart, which holds the GoogleChart and other
       *    important information. It was added to not restrict the user to only getting the GoogleChart
       *    returned, and as the second value because it is less useful / rarely accessed.
       *
       * @param  {string}   chartLabel
       * @param  {function} callback
       */
      this.getChart = function (chartLabel, callback) {
        if (typeof chartLabel != 'string') {
          throw new Error('[Lavacharts] ' + typeof chartLabel + ' is not a valid chart label.');
        }
    
        if (typeof callback != 'function') {
          throw new Error('[Lavacharts] ' + typeof callback + ' is not a valid callback.');
        }
    
        var LavaChart, chartTypes;
    
        if (!Object.hasOwnProperty("keys")) {
          chartTypes = (function() {
            var k = [], p;
    
            for (p in lava.charts) {
              if (lava.charts.hasOwnProperty(p)) k[k.length] = p;
            }
    
            return k;
          })();
        } else {
          chartTypes = Object.keys(lava.charts);
        }
    
        var search = chartTypes.some(function (type) {
          if (typeof lava.charts[type][chartLabel] !== 'undefined') {
            LavaChart = lava.charts[type][chartLabel];
    
            return true;
          } else {
            return false;
          }
        });
    
        if (search === false) {
          throw new Error('[Lavacharts] Chart "' + chartLabel + '" was not found.');
        }
    
        callback(LavaChart.chart, LavaChart);
      };
    
      /**
       * Redraws all of the registered charts on screen.
       *
       *
       * This method is attached to the window resize event with a 300ms debounce
       * to make the charts responsive to the browser resizing.
       */
      this.redrawCharts = function() {
        var timer, delay = 300;
    
        clearTimeout(timer);
    
        timer = setTimeout(function() {
          for(var c = 0; c < lava.registeredCharts.length; c++) {
            var parts = lava.registeredCharts[c].split(':');
    
            lava.charts[parts[0]][parts[1]].redraw();
          }
        }, delay);
      };
    
      this.run = function (window) {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.src = 'https://www.google.com/jsapi';
        s.onload = s.onreadystatechange = function (event) {
          event = event || window.event;
    
          if (event.type === "load" || (/loaded|complete/.test(this.readyState))) {
            this.onload = this.onreadystatechange = null;
    
            lava.events.emit('jsapi:ready', window.google);
          }
        };
    
        document.getElementsByTagName('head')[0].appendChild(s);
      };
    
      /**
       * Adding the redraw listener so the charts are responsive
       *
       * @author: alex <http://stackoverflow.com/users/31671/alex>
       * @link: http://stackoverflow.com/questions/9743064/add-eventlistener-in-ie-javascript#9743107
       */
      this.attachRedrawHandler = function (window) {
        if (window.addEventListener) {
          window.addEventListener('resize', this.redrawCharts, false);
        } else if (window.attachEvent) {
          window.attachEvent('onresize', this.redrawCharts)
        } else {
          window['onresize'] = this.redrawCharts;
        }
      }
    
    }).apply(lava);
    
    /**
     * Adding the resize event listener for redrawing charts.
     */
    lava.attachRedrawHandler(window);
    lava.run(window);
    </script>
    <script type="text/javascript">
            lava.events.on('jsapi:ready', function (google) {
                /**
                 * If the object does not exist for a given chart type, initialize it.
                 * This will prevent overriding keys when multiple charts of the same
                 * type are being rendered on the same page.
                 */
                if ( typeof lava.charts.ColumnChart == "undefined" ) {
                    lava.charts.ColumnChart = {};
                }
    
                //Creating a new lavachart object
                lava.charts.ColumnChart["Finances"] = new lava.Chart();
    
                //Checking if output div exists
                if (! document.getElementById("perf_div")) {
                    throw new Error('[Lavacharts] No matching element was found with ID "perf_div"');
                }
    
                lava.charts.ColumnChart["Finances"].render = function (data) {
                    var $this = lava.charts.ColumnChart["Finances"];
    
                    $this.data = new google.visualization.DataTable({"cols":[{"type":"date","label":"Month"},{"type":"number","label":"Signup"}],"rows":[{"c":[{"v":"Date(2019,3,8,15,20,27)"},{"v":11}]},{"c":[{"v":"Date(2019,2,8,15,20,27)"},{"v":41}]},{"c":[{"v":"Date(2019,1,8,15,20,27)"},{"v":28}]},{"c":[{"v":"Date(2019,0,8,15,20,27)"},{"v":10}]}]}, 0.6);
    
                    $this.options = {"title":"Driver Signup Performance","titleTextStyle":{"color":"#eb6b2c","fontSize":14}};
    
                    $this.chart = new google.visualization.ColumnChart(document.getElementById("perf_div"));
    
                    
    
                    
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.charts.ColumnChart["Finances"].setData = function (data) {
                    var $this = lava.charts.ColumnChart["Finances"];
    
                    $this.data = new google.visualization.DataTable(data, 0.6);
                };
    
                lava.charts.ColumnChart["Finances"].redraw = function () {
                    var $this = lava.charts.ColumnChart["Finances"];
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.registerChart("ColumnChart", "Finances");
    
                google.load('visualization', '1', {
                    packages: ['corechart'],
                    callback: function() {
                        lava.charts.ColumnChart["Finances"].render();
                    }
                });
            });
    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card" style="box-shadow: 10px 10px 10px gainsboro;">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title text-center" style="color: black">Driver Growth Chart</h4><hr>
                                                    <div id="pop_div"></div>
                                                    
    <script type="text/javascript">
            lava.events.on('jsapi:ready', function (google) {
                /**
                 * If the object does not exist for a given chart type, initialize it.
                 * This will prevent overriding keys when multiple charts of the same
                 * type are being rendered on the same page.
                 */
                if ( typeof lava.charts.AreaChart == "undefined" ) {
                    lava.charts.AreaChart = {};
                }
    
                //Creating a new lavachart object
                lava.charts.AreaChart["Population"] = new lava.Chart();
    
                //Checking if output div exists
                if (! document.getElementById("pop_div")) {
                    throw new Error('[Lavacharts] No matching element was found with ID "pop_div"');
                }
    
                lava.charts.AreaChart["Population"].render = function (data) {
                    var $this = lava.charts.AreaChart["Population"];
    
                    $this.data = new google.visualization.DataTable({"cols":[{"type":"date","label":"Month"},{"type":"number","label":"Number of Driver"}],"rows":[{"c":[{"v":"Date(2019,3,8,0,0,0)"},{"v":11}]},{"c":[{"v":"Date(2019,2,8,0,0,0)"},{"v":41}]},{"c":[{"v":"Date(2019,1,8,0,0,0)"},{"v":28}]},{"c":[{"v":"Date(2019,0,8,0,0,0)"},{"v":10}]}]}, 0.6);
    
                    $this.options = {"title":"Driver Growth","legend":{"position":"in"}};
    
                    $this.chart = new google.visualization.AreaChart(document.getElementById("pop_div"));
    
                    
    
                    
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.charts.AreaChart["Population"].setData = function (data) {
                    var $this = lava.charts.AreaChart["Population"];
    
                    $this.data = new google.visualization.DataTable(data, 0.6);
                };
    
                lava.charts.AreaChart["Population"].redraw = function () {
                    var $this = lava.charts.AreaChart["Population"];
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.registerChart("AreaChart", "Population");
    
                google.load('visualization', '1', {
                    packages: ['corechart'],
                    callback: function() {
                        lava.charts.AreaChart["Population"].render();
                    }
                });
            });
    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card" style="box-shadow: 10px 10px 10px gainsboro;">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title text-center" style="color: black">Driver Area Wise Pie Chart</h4><hr>
                                                    <div id="chart-div"></div>
                                                    
    <script type="text/javascript">
            lava.events.on('jsapi:ready', function (google) {
                /**
                 * If the object does not exist for a given chart type, initialize it.
                 * This will prevent overriding keys when multiple charts of the same
                 * type are being rendered on the same page.
                 */
                if ( typeof lava.charts.PieChart == "undefined" ) {
                    lava.charts.PieChart = {};
                }
    
                //Creating a new lavachart object
                lava.charts.PieChart["IMDB"] = new lava.Chart();
    
                //Checking if output div exists
                if (! document.getElementById("chart-div")) {
                    throw new Error('[Lavacharts] No matching element was found with ID "chart-div"');
                }
    
                lava.charts.PieChart["IMDB"].render = function (data) {
                    var $this = lava.charts.PieChart["IMDB"];
    
                    $this.data = new google.visualization.DataTable({"cols":[{"type":"string","label":"Area Name"},{"type":"number","label":"number"}],"rows":[{"c":[{"v":"ma"},{"v":1}]},{"c":[{"v":"Gurugram"},{"v":4}]},{"c":[{"v":"Nairobi"},{"v":85}]}]}, 0.6);
    
                    $this.options = {"title":"Driver Comparison Area Wise","is3D":true};
    
                    $this.chart = new google.visualization.PieChart(document.getElementById("chart-div"));
    
                    
    
                    
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.charts.PieChart["IMDB"].setData = function (data) {
                    var $this = lava.charts.PieChart["IMDB"];
    
                    $this.data = new google.visualization.DataTable(data, 0.6);
                };
    
                lava.charts.PieChart["IMDB"].redraw = function () {
                    var $this = lava.charts.PieChart["IMDB"];
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.registerChart("PieChart", "IMDB");
    
                google.load('visualization', '1', {
                    packages: ['corechart'],
                    callback: function() {
                        lava.charts.PieChart["IMDB"].render();
                    }
                });
            });
    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
    
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card" style="box-shadow: 10px 10px 10px gainsboro;">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title text-center" style="color: black">Top Driver By Rating</h4><hr>
                                                    <div id="poll_div"></div>
                                                    
    <script type="text/javascript">
            lava.events.on('jsapi:ready', function (google) {
                /**
                 * If the object does not exist for a given chart type, initialize it.
                 * This will prevent overriding keys when multiple charts of the same
                 * type are being rendered on the same page.
                 */
                if ( typeof lava.charts.BarChart == "undefined" ) {
                    lava.charts.BarChart = {};
                }
    
                //Creating a new lavachart object
                lava.charts.BarChart["Rating"] = new lava.Chart();
    
                //Checking if output div exists
                if (! document.getElementById("poll_div")) {
                    throw new Error('[Lavacharts] No matching element was found with ID "poll_div"');
                }
    
                lava.charts.BarChart["Rating"].render = function (data) {
                    var $this = lava.charts.BarChart["Rating"];
    
                    $this.data = new google.visualization.DataTable({"cols":[{"type":"string","label":"Rating Wise"},{"type":"number","label":"Ratings"}],"rows":[{"c":[{"v":"Anthony "},{"v":"5"}]},{"c":[{"v":"Asmita "},{"v":"4.5"}]},{"c":[{"v":"philip kereri"},{"v":"0"}]},{"c":[{"v":"jatin singh"},{"v":"0"}]},{"c":[{"v":"clara kairu"},{"v":"0"}]},{"c":[{"v":"amuri olyro"},{"v":"0"}]},{"c":[{"v":"Anthony "},{"v":"0"}]},{"c":[{"v":"hosea kipruto "},{"v":"0"}]},{"c":[{"v":"Boniface Amuri "},{"v":"0"}]},{"c":[{"v":"kip hosea "},{"v":"0"}]}]}, 0.6);
    
                    $this.options = [];
    
                    $this.chart = new google.visualization.BarChart(document.getElementById("poll_div"));
    
                    
    
                    
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.charts.BarChart["Rating"].setData = function (data) {
                    var $this = lava.charts.BarChart["Rating"];
    
                    $this.data = new google.visualization.DataTable(data, 0.6);
                };
    
                lava.charts.BarChart["Rating"].redraw = function () {
                    var $this = lava.charts.BarChart["Rating"];
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.registerChart("BarChart", "Rating");
    
                google.load('visualization', '1', {
                    packages: ['corechart'],
                    callback: function() {
                        lava.charts.BarChart["Rating"].render();
                    }
                });
            });
    </script>                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card" style="box-shadow: 10px 10px 10px gainsboro;">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title text-center" style="color: black">Top Driver By Revenue</h4><hr>
                                                    <div id="rev-div"></div>
                                                    
    <script type="text/javascript">
            lava.events.on('jsapi:ready', function (google) {
                /**
                 * If the object does not exist for a given chart type, initialize it.
                 * This will prevent overriding keys when multiple charts of the same
                 * type are being rendered on the same page.
                 */
                if ( typeof lava.charts.BarChart == "undefined" ) {
                    lava.charts.BarChart = {};
                }
    
                //Creating a new lavachart object
                lava.charts.BarChart["Votes"] = new lava.Chart();
    
                //Checking if output div exists
                if (! document.getElementById("rev-div")) {
                    throw new Error('[Lavacharts] No matching element was found with ID "rev-div"');
                }
    
                lava.charts.BarChart["Votes"].render = function (data) {
                    var $this = lava.charts.BarChart["Votes"];
    
                    $this.data = new google.visualization.DataTable({"cols":[{"type":"string","label":"Driver Revenue"},{"type":"number","label":"Earning"}],"rows":[{"c":[{"v":"Anthony "},{"v":"849406.14"}]},{"c":[{"v":"Boniface Amuri "},{"v":"6988.42"}]},{"c":[{"v":"Anthony "},{"v":"59706.25"}]},{"c":[{"v":"hosea kipruto "},{"v":"3762.80"}]},{"c":[{"v":"Stephen "},{"v":"319.59"}]},{"c":[{"v":"Jeff Gitonga "},{"v":"293.68"}]},{"c":[{"v":"Anthony "},{"v":"2793.71"}]},{"c":[{"v":"Amuri Bonface "},{"v":"2273.96"}]},{"c":[{"v":"kip hosea "},{"v":"17111.53"}]},{"c":[{"v":"manas "},{"v":"1675.04"}]}]}, 0.6);
    
                    $this.options = {"colors":["red","#004411"]};
    
                    $this.chart = new google.visualization.BarChart(document.getElementById("rev-div"));
    
                    
    
                    
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.charts.BarChart["Votes"].setData = function (data) {
                    var $this = lava.charts.BarChart["Votes"];
    
                    $this.data = new google.visualization.DataTable(data, 0.6);
                };
    
                lava.charts.BarChart["Votes"].redraw = function () {
                    var $this = lava.charts.BarChart["Votes"];
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.registerChart("BarChart", "Votes");
    
                google.load('visualization', '1', {
                    packages: ['corechart'],
                    callback: function() {
                        lava.charts.BarChart["Votes"].render();
                    }
                });
            });
    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
    
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card" style="box-shadow: 10px 10px 10px gainsboro;">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title text-center" style="color: black">Driver Services</h4><hr>
                                                    <div id="temps_div"></div>
                                                    
    <script type="text/javascript">
            lava.events.on('jsapi:ready', function (google) {
                /**
                 * If the object does not exist for a given chart type, initialize it.
                 * This will prevent overriding keys when multiple charts of the same
                 * type are being rendered on the same page.
                 */
                if ( typeof lava.charts.GaugeChart == "undefined" ) {
                    lava.charts.GaugeChart = {};
                }
    
                //Creating a new lavachart object
                lava.charts.GaugeChart["Temps"] = new lava.Chart();
    
                //Checking if output div exists
                if (! document.getElementById("temps_div")) {
                    throw new Error('[Lavacharts] No matching element was found with ID "temps_div"');
                }
    
                lava.charts.GaugeChart["Temps"].render = function (data) {
                    var $this = lava.charts.GaugeChart["Temps"];
    
                    $this.data = new google.visualization.DataTable({"cols":[{"type":"string","label":"Service Name"},{"type":"number","label":"Value"}],"rows":[{"c":[{"v":"Normal"},{"v":78}]},{"c":[{"v":"Rental"},{"v":6}]}]}, 0.6);
    
                    $this.options = {"width":400,"greenFrom":0,"greenTo":1000,"yellowFrom":1001,"yellowTo":4999,"redFrom":5000,"redTo":10000,"majorTicks":["Start","Excllent"]};
    
                    $this.chart = new google.visualization.Gauge(document.getElementById("temps_div"));
    
                    
    
                    
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.charts.GaugeChart["Temps"].setData = function (data) {
                    var $this = lava.charts.GaugeChart["Temps"];
    
                    $this.data = new google.visualization.DataTable(data, 0.6);
                };
    
                lava.charts.GaugeChart["Temps"].redraw = function () {
                    var $this = lava.charts.GaugeChart["Temps"];
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.registerChart("GaugeChart", "Temps");
    
                google.load('visualization', '1', {
                    packages: ['gauge'],
                    callback: function() {
                        lava.charts.GaugeChart["Temps"].render();
                    }
                });
            });
    </script>                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card" style="box-shadow: 10px 10px 10px gainsboro;">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title text-center" style="color: black">Driver Vehicles</h4><hr>
                                                    <div id="ve-div"></div>
                                                    
    <script type="text/javascript">
            lava.events.on('jsapi:ready', function (google) {
                /**
                 * If the object does not exist for a given chart type, initialize it.
                 * This will prevent overriding keys when multiple charts of the same
                 * type are being rendered on the same page.
                 */
                if ( typeof lava.charts.DonutChart == "undefined" ) {
                    lava.charts.DonutChart = {};
                }
    
                //Creating a new lavachart object
                lava.charts.DonutChart["Vehicle"] = new lava.Chart();
    
                //Checking if output div exists
                if (! document.getElementById("ve-div")) {
                    throw new Error('[Lavacharts] No matching element was found with ID "ve-div"');
                }
    
                lava.charts.DonutChart["Vehicle"].render = function (data) {
                    var $this = lava.charts.DonutChart["Vehicle"];
    
                    $this.data = new google.visualization.DataTable({"cols":[{"type":"string","label":"Vehicle Type"},{"type":"number","label":"Number"}],"rows":[{"c":[{"v":"Basic"},{"v":66}]},{"c":[{"v":"Comfort"},{"v":9}]},{"c":[{"v":"Ordinary"},{"v":6}]}]}, 0.6);
    
                    $this.options = {"pieHole":0.5,"title":"Driver Vehicles Comparison"};
    
                    $this.chart = new google.visualization.PieChart(document.getElementById("ve-div"));
    
                    
    
                    
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.charts.DonutChart["Vehicle"].setData = function (data) {
                    var $this = lava.charts.DonutChart["Vehicle"];
    
                    $this.data = new google.visualization.DataTable(data, 0.6);
                };
    
                lava.charts.DonutChart["Vehicle"].redraw = function () {
                    var $this = lava.charts.DonutChart["Vehicle"];
    
                    $this.chart.draw($this.data, $this.options);
                };
    
                lava.registerChart("DonutChart", "Vehicle");
    
                google.load('visualization', '1', {
                    packages: ['corechart'],
                    callback: function() {
                        lava.charts.DonutChart["Vehicle"].render();
                    }
                });
            });
    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
    
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End of Main Content -->

      <!-- Footer -->
      @include('sub-views.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  @include('modals.logout_modal')

  <!-- Bootstrap core JavaScript-->
  @include('sub-views.scripts')

</body>

</html>
