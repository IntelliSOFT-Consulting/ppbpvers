<?php
$this->extend('/Reports/reports_manager_aefi');
$this->assign('aefi-summary', 'active');
$this->Html->css('summary', null, array('inline' => false));
?>

<?php $this->start('report'); ?>
<div class="row-fluid">
    <div class="span6">
        <h4>Geographical Distribution</h4>
        <div class="tab">
            <button class="tablinks" onclick="geoTab(event, 'geoChart')" id="geoOpen">
                <i class="fa fa-pie-chart"></i> Chart
            </button>

            <button class="tablinksgeo" onclick="geoTab(event, 'geoTable')">
                <i class="fa fa-table"></i> Table
            </button>
        </div>

        <div id="geoChart" class="tabcontentgeo">
            <div id="sadrs-geo"></div>

        </div>

        <div id="geoTable" class="tabcontentgeo">
            <?php $c = 0; ?>
            <table class="table table-condensed table-bordered" id="datatablegeo">
                <thead>
                    <tr>
                        <th>County</th>
                        <th>AEFIs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($geo as $key => $value) {
                        $count = $value[0]['cnt'];
                        $c += $count;
                        echo "<tr>";
                        echo "<th>" . $value['County']['county_name'] . "</th>";
                        echo "<td>" . $value[0]['cnt'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-condensed table-bordered">

                <tbody>
                    <tr>
                        <th>Total</th>
                        <th><?= $c; ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="span6">
        <h4>Gender Distribution</h4>
        <div class="tab">
            <button class="tablinks" onclick="sexTab(event, 'sexChart')" id="sexOpen">
                <i class="fa fa-pie-chart"></i> Chart
            </button>

            <button class="tablinks" onclick="sexTab(event, 'sexTable')">
                <i class="fa fa-table"></i> Table
            </button>
        </div>

        <div id="sexChart" class="tabcontentsex">
            <div id="sadrs-sex"></div>

        </div>

        <div id="sexTable" class="tabcontentsex">
        <?php $c = 0; ?>
            <table class="table table-condensed table-bordered" id="datatablesex">
                <thead>
                    <tr>
                        <th>Sex</th>
                        <th>ADRs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($sex as $key => $value) {
                        $count = $value[0]['cnt'];
                        $c += $count;
                        echo "<tr>";
                        echo "<th>" . $value['Aefi']['gender'] . "</th>";
                        echo "<td>" . $value[0]['cnt'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-condensed table-bordered">

                <tbody>
                    <tr>
                        <th>Total</th>
                        <th><?= $c; ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<div class="row-fluid">
    <div class="span6">
        <h4>Age Distribution</h4>

        <div class="tab">
            <button class="tablinks" onclick="ageTab(event, 'ageChart')" id="ageOpen">
                <i class="fa fa-pie-chart"></i> Chart
            </button>

            <button class="tablinksage" onclick="ageTab(event, 'ageTable')">
                <i class="fa fa-table"></i> Table
            </button>
        </div>

        <div id="ageChart" class="tabcontentage">
            <div id="sadrs-age"></div>

        </div>

        <div id="ageTable" class="tabcontentage">
        <?php $c = 0; ?>
            <table class="table table-condensed table-bordered" id="datatableage">
                <thead>
                    <tr>
                        <th>Age group</th>
                        <th>AEFIs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($age as $key => $value) {
                        $count = $value[0]['cnt'];
                        $c += $count;
                        echo "<tr>";
                        echo "<th>" . $value[0]['ager'] . "</th>";
                        echo "<td>" . $value[0]['cnt'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-condensed table-bordered">

                <tbody>
                    <tr>
                        <th>Total</th>
                        <th><?= $c; ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="span6">
        <h4>AEFIs Per Year</h4>
        <div class="tab">
            <button class="tablinks" onclick="yearTab(event, 'yearChart')" id="yearOpen">
                <i class="fa fa-pie-chart"></i> Chart
            </button>

            <button class="tablinksyear" onclick="yearTab(event, 'yearTable')">
                <i class="fa fa-table"></i> Table
            </button>
        </div>

        <div id="yearChart" class="tabcontentyear">
            <div id="sadrs-year"></div>

        </div>

        <div id="yearTable" class="tabcontentyear">
        <?php $c = 0; ?>
            <table class="table table-condensed table-bordered" id="datatableyear">
                <thead>
                    <tr>
                        <th>Age group</th>
                        <th>AEFIs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($year as $key => $value) {
                        $count = $value[0]['cnt'];
                        $c += $count;
                        echo "<tr>";
                        echo "<th>" . $value[0]['year'] . "</th>";
                        echo "<td>" . $value[0]['cnt'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-condensed table-bordered">

                <tbody>
                    <tr>
                        <th>Total</th>
                        <th><?= $c; ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<div class="row-fluid">
    <div class="span12">
        <h4>AEFIs per Vaccines</h4>
        <div class="tab">
            <button class="tablinks" onclick="vaccineTab(event, 'vaccineChart')" id="vaccineOpen">
                <i class="fa fa-pie-chart"></i> Chart
            </button>

            <button class="tablinksvaccine" onclick="vaccineTab(event, 'vaccineTable')">
                <i class="fa fa-table"></i> Table
            </button>
        </div>

        <div id="vaccineChart" class="tabcontentvaccine">
            <div id="sadrs-vaccine"></div>

        </div>

        <div id="vaccineTable" class="tabcontentvaccine">
        <?php $c = 0; ?>
            <table class="table table-condensed table-bordered" id="datatablevaccine">
                <thead>
                    <tr>
                        <th>Vaccine</th>
                        <th>AEFIs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($vaccine as $key => $value) {
                        $count = $value[0]['cnt'];
                        $c += $count;
                        echo "<tr>";
                        echo "<th>" . $value['Vaccine']['vaccine_name'] . "</th>";
                        echo "<td>" . $value[0]['cnt'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-condensed table-bordered">

                <tbody>
                    <tr>
                        <th>Total</th>
                        <th><?= $c; ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<div class="row-fluid">
    <div class="span12">
        <h4>AEFIs per Month</h4>
        <div class="tab">
            <button class="tablinks" onclick="monthTab(event, 'monthChart')" id="monthOpen">
                <i class="fa fa-pie-chart"></i> Chart
            </button>

            <button class="tablinksmonth" onclick="monthTab(event, 'monthTable')">
                <i class="fa fa-table"></i> Table
            </button>
        </div>

        <div id="monthChart" class="tabcontentmonth">
            <div id="sadrs-month"></div>

        </div>

        <div id="monthTable" class="tabcontentmonth">
        <?php $c = 0; ?>
            <table class="table table-condensed table-bordered" id="datatablemonth">
                <thead>
                    <tr>
                        <th>Month</th>
                        <th>AEFIs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($months as $key => $value) {
                        $count = $value[0]['cnt'];
                        $c += $count;
                        echo "<tr>";
                        echo "<th>" . $value[0]['month'] . "</th>";
                        echo "<td>" . $value[0]['cnt'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-condensed table-bordered">

                <tbody>
                    <tr>
                        <th>Total</th>
                        <th><?= $c; ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<script type="text/javascript">
    function vaccineTab(evt, vaccinetabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontentvaccine");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinksvaccine");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(vaccinetabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    function geoTab(evt, geotabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontentgeo");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinksgeo");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(geotabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    function sexTab(evt, sextabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontentsex");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinkssex");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(sextabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    function ageTab(evt, agetabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontentage");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinksage");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(agetabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    function yearTab(evt, yeartabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontentyear");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinksyear");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(yeartabName).style.display = "block";
        evt.currentTarget.className += " active";
    }


    function monthTab(evt, monthtabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontentmonth");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinksmonth");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(monthtabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it vaccine  reason serious outcome facility month
    document.getElementById("vaccineOpen").click();
    document.getElementById("geoOpen").click();
    document.getElementById("sexOpen").click();
    document.getElementById("ageOpen").click();
    document.getElementById("yearOpen").click();
    document.getElementById("monthOpen").click();
    Highcharts.chart('sadrs-month', {
        data: {
            table: 'datatablemonth'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: '',

        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
    Highcharts.chart('sadrs-vaccine', {
        data: {
            table: 'datatablevaccine'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: '',

        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
    Highcharts.chart('sadrs-geo', {
        data: {
            table: 'datatablegeo'
        },
        chart: {
            type: 'bar'
        },
        title: {
            text: '',

        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
    Highcharts.chart('sadrs-sex', {
        data: {
            table: 'datatablesex'
        },
        chart: {
            type: 'pie'
        },
        title: {
            text: ''
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f}%'
                }
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b><br/>Percentage: <b>{point.percentage:.1f}%</b>'
        }
    });
    Highcharts.chart('sadrs-age', {
        data: {
            table: 'datatableage'
        },
        chart: {
            type: 'bar'
        },
        title: {
            text: '',

        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
    Highcharts.chart('sadrs-year', {
        data: {
            table: 'datatableyear'
        },
        chart: {
            type: 'bar'
        },
        title: {
            text: '',

        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
</script>
<?php $this->end(); ?>