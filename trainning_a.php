<?php 
require('inc/header.php'); 
require('inc/sidebar.php');
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
          
           <h3>Trainning: March 2015</h3>
           <div class="pull-left image">
              
           </div>
  
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Your Page Content Here -->
          <div class="nav-tabs-custom">
                
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    
                    <b>Trainning A:</b>
                    
                    <?php
                    error_reporting(E_ALL);

                    $mysqli = new mysqli("localhost", "root", "12OfAd9c6bNDfcBV", "zadmin_fitwiz");
                    if ($mysqli->connect_errno) {
                        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                    }


                    if ($result = $mysqli->query("SELECT * FROM EXERCICES")) {
                         while ( $exercices = mysqli_fetch_array($result)) {
                          $exercice = strtolower(str_replace(" ", "-", $exercices['TITLE']));
                          $title = $exercices['TITLE'];
                    ?>    
                          <div class="info-box">
                            <a onclick="open_container('supino_declinado');">
                              <span class="info-box-icon" style="background-color:#fff;background-image: url(dist/img/exercices/<?php echo $exercice;?>-small-1.png);background-position: center; background-repeat:no-repeat; background-size: contain;">
                            </a></span>
                            <div class="info-box-content">
                              <span class="info-box-text"><? echo "$title";?></span>
                              <span class="info-box-number">12-10-8-6</span>
                            </div><!-- /.info-box-content -->
                          </div>
                    <?php
                        }
                        /* free result set */
                        $result->close();
                    }
                    $mysqli->close();
                    ?>

                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <b>Stats:</b>
                    
                    <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="fa fa-trophy"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Weight Lifting</span>
                      <span class="info-box-number">25 Kgs/span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                      </div>
                      <span class="progress-description">
                        70% Increase in 30 Days
                      </span>
                    </div><!-- /.info-box-content -->
                  </div>

                  <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="fa fa-shield"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Stamina / Speed</span>
                      <span class="info-box-number">15</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                      </div>
                      <span class="progress-description">
                        23% Increase in 30 Days
                      </span>
                    </div><!-- /.info-box-content -->
                  </div>

                    <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Area Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="revenue-chart" style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="335" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="49.21875" y="263" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,263H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="203.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,203.5H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="144" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,144H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="84.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,84.5H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="24.99999999999997" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.249999999999972" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,24.99999999999997H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="264.4340051007493" y="275.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="154.0197432538477" y="275.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><path fill="#74a5c1" stroke="none" d="M61.71875,220.69946666666667C68.65735115431349,221.21513333333334,82.53455346294047,224.298225,89.47315461725395,222.76213333333334C96.41175577156744,221.22604166666667,110.2889580801944,210.69657400743944,117.2275592345079,208.41073333333333C124.08759832865026,206.15077400743945,137.807676516935,206.40573816773505,144.66771561107737,204.57893333333334C151.53403967003342,202.75045483440172,165.26668778794553,196.3534477312391,172.13301184690158,193.7896C179.07161300121507,191.19876439790576,192.94881530984202,183.85210833333332,199.8874164641555,183.9602C206.826017618469,184.06829166666665,220.70321992709597,205.70156594549456,227.64182108140946,194.65433333333334C234.50186017555183,183.73218261216124,248.22193836383656,102.59303868937998,255.08197745797892,96.08266666666665C261.8728819391707,89.63790535604664,275.4546909015543,136.06981394293126,282.24559538274605,142.8338C289.1841965370595,149.7448972762646,303.06139884568654,148.79569999999998,310,150.783L310,263L61.71875,263Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#3c8dbc" d="M61.71875,220.69946666666667C68.65735115431349,221.21513333333334,82.53455346294047,224.298225,89.47315461725395,222.76213333333334C96.41175577156744,221.22604166666667,110.2889580801944,210.69657400743944,117.2275592345079,208.41073333333333C124.08759832865026,206.15077400743945,137.807676516935,206.40573816773505,144.66771561107737,204.57893333333334C151.53403967003342,202.75045483440172,165.26668778794553,196.3534477312391,172.13301184690158,193.7896C179.07161300121507,191.19876439790576,192.94881530984202,183.85210833333332,199.8874164641555,183.9602C206.826017618469,184.06829166666665,220.70321992709597,205.70156594549456,227.64182108140946,194.65433333333334C234.50186017555183,183.73218261216124,248.22193836383656,102.59303868937998,255.08197745797892,96.08266666666665C261.8728819391707,89.63790535604664,275.4546909015543,136.06981394293126,282.24559538274605,142.8338C289.1841965370595,149.7448972762646,303.06139884568654,148.79569999999998,310,150.783" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="61.71875" cy="220.69946666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="89.47315461725395" cy="222.76213333333334" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="117.2275592345079" cy="208.41073333333333" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="144.66771561107737" cy="204.57893333333334" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="172.13301184690158" cy="193.7896" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="199.8874164641555" cy="183.9602" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="227.64182108140946" cy="194.65433333333334" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="255.08197745797892" cy="96.08266666666665" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="282.24559538274605" cy="142.8338" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="310" cy="150.783" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#eaf2f5" stroke="none" d="M61.71875,241.84973333333335C68.65735115431349,241.6276,82.53455346294047,243.18848333333332,89.47315461725395,240.9612C96.41175577156744,238.73391666666666,110.2889580801944,225.01780891216882,117.2275592345079,224.03146666666666C124.08759832865026,223.05629224550216,137.807676516935,234.99645486111112,144.66771561107737,233.11513333333335C151.53403967003342,231.23208819444446,165.26668778794553,210.85126134380454,172.13301184690158,208.974C179.07161300121507,207.07697801047118,192.94881530984202,216.04458333333332,199.8874164641555,218.018C206.826017618469,219.99141666666668,220.70321992709597,234.1390645107417,227.64182108140946,224.76133333333334C234.50186017555183,215.48978117740833,248.22193836383656,149.26844055785756,255.08197745797892,143.42086666666665C261.8728819391707,137.6322238911909,275.4546909015543,171.70165428015562,282.24559538274605,178.21646666666666C289.1841965370595,184.8729709468223,303.06139884568654,191.63371666666666,310,196.10613333333333L310,263L61.71875,263Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#a0d0e0" d="M61.71875,241.84973333333335C68.65735115431349,241.6276,82.53455346294047,243.18848333333332,89.47315461725395,240.9612C96.41175577156744,238.73391666666666,110.2889580801944,225.01780891216882,117.2275592345079,224.03146666666666C124.08759832865026,223.05629224550216,137.807676516935,234.99645486111112,144.66771561107737,233.11513333333335C151.53403967003342,231.23208819444446,165.26668778794553,210.85126134380454,172.13301184690158,208.974C179.07161300121507,207.07697801047118,192.94881530984202,216.04458333333332,199.8874164641555,218.018C206.826017618469,219.99141666666668,220.70321992709597,234.1390645107417,227.64182108140946,224.76133333333334C234.50186017555183,215.48978117740833,248.22193836383656,149.26844055785756,255.08197745797892,143.42086666666665C261.8728819391707,137.6322238911909,275.4546909015543,171.70165428015562,282.24559538274605,178.21646666666666C289.1841965370595,184.8729709468223,303.06139884568654,191.63371666666666,310,196.10613333333333" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="61.71875" cy="241.84973333333335" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="89.47315461725395" cy="240.9612" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="117.2275592345079" cy="224.03146666666666" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="144.66771561107737" cy="233.11513333333335" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="172.13301184690158" cy="208.974" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="199.8874164641555" cy="218.018" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="227.64182108140946" cy="224.76133333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="255.08197745797892" cy="143.42086666666665" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="282.24559538274605" cy="178.21646666666666" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="310" cy="196.10613333333333" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 70.7275592345079px; top: 128px; display: none;"><div class="morris-hover-row-label">2011 Q3</div><div class="morris-hover-point" style="color: #a0d0e0">
  Item 1:
  4,912
</div><div class="morris-hover-point" style="color: #3c8dbc">
  Item 2:
  1,969
</div></div></div>
                </div><!-- /.box-body -->
              </div>


                    <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Donut Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="sales-chart" style="height: 300px; position: relative;"><svg height="300" version="1.1" width="335" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#3c8dbc" d="M167.5,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,255.72775519497708,180.44625304313007" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#3c8dbc" stroke="#ffffff" d="M167.5,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,258.56364732624417,181.4248826052307L295.1151459070204,194.03833029452744A135,135,0,0,1,167.5,285Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#f56954" d="M255.72775519497708,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,83.78484627831412,108.73398312817662" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#f56954" stroke="#ffffff" d="M258.56364732624417,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,81.09400205154564,107.40757544301087L46.412009795418626,90.31165416754118A135,135,0,0,1,295.1151459070204,194.03833029452744Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#00a65a" d="M83.78484627831412,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,167.47067846904883,243.333328727518" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#00a65a" stroke="#ffffff" d="M81.09400205154564,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,167.46973599126827,246.3333285794739L167.45601770357325,289.999993091277A140,140,0,0,1,41.927269417471166,88.10097469226493Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="167.5" y="140" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-stretch: normal; font-size: 15px; line-height: normal; font-family: Arial;" font-size="15px" font-weight="800" transform="matrix(1.4188,0,0,1.4188,-70.1564,-62.0936)" stroke-width="0.7047991071428571"><tspan dy="5.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mail-Order Sales</tspan></text><text x="167.5" y="160" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 14px; line-height: normal; font-family: Arial;" font-size="14px" transform="matrix(2.0072,0,0,2.0072,-168.7007,-153.3414)" stroke-width="0.4982142857142858"><tspan dy="4.75" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20</tspan></text></svg></div>
                </div><!-- /.box-body -->
              </div>


                    <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Line Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="line-chart" style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="335" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="49.21875" y="263" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,263H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="203.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">5,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,203.5H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="144" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">10,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,144H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="84.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,84.5H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="24.99999999999997" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.249999999999972" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,24.99999999999997H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="264.4340051007493" y="275.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="154.0197432538477" y="275.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><path fill="none" stroke="#3c8dbc" d="M61.71875,231.2746C68.65735115431349,230.9414,82.53455346294047,233.282725,89.47315461725395,229.9418C96.41175577156744,226.600875,110.2889580801944,206.02671336825324,117.2275592345079,204.5472C124.08759832865026,203.08443836825325,137.807676516935,220.99468229166666,144.66771561107737,218.1727C151.53403967003342,215.34813229166667,165.26668778794553,184.7768920157068,172.13301184690158,181.961C179.07161300121507,179.11546701570683,192.94881530984202,192.56687499999998,199.8874164641555,195.527C206.826017618469,198.487125,220.70321992709597,219.7085967661125,227.64182108140946,205.642C234.50186017555183,191.7346717661125,248.22193836383656,92.40266083678635,255.08197745797892,83.63129999999998C261.8728819391707,74.94833583678636,275.4546909015543,126.05248142023346,282.24559538274605,135.8247C289.1841965370595,145.80945642023346,303.06139884568654,155.95057500000001,310,162.6592" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="61.71875" cy="231.2746" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="89.47315461725395" cy="229.9418" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="117.2275592345079" cy="204.5472" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="144.66771561107737" cy="218.1727" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="172.13301184690158" cy="181.961" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="199.8874164641555" cy="195.527" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="227.64182108140946" cy="205.642" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="255.08197745797892" cy="83.63129999999998" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="282.24559538274605" cy="135.8247" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="310" cy="162.6592" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 153.387416464156px; top: 121px; display: none;"><div class="morris-hover-row-label">2012 Q2</div><div class="morris-hover-point" style="color: #3c8dbc">
  Item 1:
  5,670
</div></div></div>
                </div><!-- /.box-body -->
              </div>



<div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Bar Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart" style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="335" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.53125" y="263" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,263H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="203.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,203.5H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="144" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,144H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="84.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,84.5H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,25H310" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="291.0736607142857" y="275.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="177.515625" y="275.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="63.957589285714285" y="275.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><rect x="49.76283482142857" y="25" width="12.694754464285714" height="238" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="65.45758928571428" y="48.80000000000001" width="12.694754464285714" height="214.2" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="87.61551339285714" y="84.5" width="12.694754464285714" height="178.5" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="103.31026785714285" y="108.30000000000001" width="12.694754464285714" height="154.7" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="125.46819196428571" y="144" width="12.694754464285714" height="119" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="141.16294642857142" y="167.8" width="12.694754464285714" height="95.19999999999999" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="163.3208705357143" y="84.5" width="12.694754464285714" height="178.5" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="179.01562500000003" y="108.30000000000001" width="12.694754464285714" height="154.7" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="201.17354910714286" y="144" width="12.694754464285714" height="119" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="216.86830357142858" y="167.8" width="12.694754464285714" height="95.19999999999999" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="239.02622767857142" y="84.5" width="12.694754464285714" height="178.5" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="254.72098214285714" y="108.30000000000001" width="12.694754464285714" height="154.7" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="276.87890625" y="25" width="12.694754464285714" height="238" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="292.5736607142857" y="48.80000000000001" width="12.694754464285714" height="214.2" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="left: 106.662946428571px; top: 107px; display: none;"><div class="morris-hover-row-label">2008</div><div class="morris-hover-point" style="color: #00a65a">
  CPU:
  50
</div><div class="morris-hover-point" style="color: #f56954">
  DISK:
  40
</div></div></div>
                </div><!-- /.box-body -->
              </div>


              
                  </div><!-- /.tab-pane -->
                
                </div><!-- /.tab-content -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Treino A</a></li>
                  <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-bar-chart-o"></i>Stats</a></li>
                  <li></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      Change trainning <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                      <li role="presentation" class="divider"></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                    </ul>
                  </li>
                  <li class="pull-right">
                  <table>
                    <tr>
                    <td>
                       <blockquote>
                      <small>Mantenha esse treino até abril / <cite title="Source Title">Ric Jorge.</cite>
                      </small>
                    </blockquote>
                    </td>
                    <td>
                      <img src="dist/img/user9-160x160.jpg" class="img-circle" alt="User Image" width="50">
                    </td></tr></table>
                    <a href="#" class="text-muted">
                    
                      
                    </a>
                  </li>
                </ul>
              </div>

              <!-- Modal form-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                      </div>
                      <div class="modal-body" id="modal-bodyku">
                      </div>
                      <div class="modal-footer" id="modal-footerq">
                      </div>
                    </div>
                  </div>
                </div>




        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      

    </div><!-- ./wrapper -->

    
    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
    <!-- Modal mobile devices enabled-->
    <script language="javascript">
        
        var videos = [];
            videos["supino_declinado"] = "nC3lwCEJUc4";
            videos["crucifixo"] = "O_FwRxa-hJo";
            videos["supino_inclinado"] = "BfXeistLPGE";
            videos["pullover"] = "_IjTiLhIqk8";
            videos["elevacao_frontal"] = "Ti3ILduWUdw";
            videos["desenvolvimento"] = "dgnvHzvNOIk";
            videos["triceps_corda"] = "OxsOGLqk8M0";
            videos["triceps_testa"] = "_N5keHckiec";
            videos["triceps_banco"] = "BbE-ikrlwBw";
            
            videos["barra_supinada"] = "flor";
            videos["pulley_barra_romana"] = "flor";
            videos["remada_maquina"] = "flor";
            videos["remada_curvada"] = "flor";
            videos["encolhimento"] = "flor";
            videos["deltoide_posterior"] = "flor";
            videos["rosca_scott"] = "flor";
            videos["rosca_maquina"] = "flor";
            videos["rosca_neutra"] = "flor";
            
            videos["cad_extensora"] = "flor";
            videos["agachamento_hack"] = "flor";
            videos["leg_press45"] = "flor";
            videos["mesa_flexora"] = "_IjTiLhIqk8";
            videos["cadeira_flexora"] = "flor";
            videos["abducao"] = "flor";
            videos["gemeos"] = "flor";
            videos["abd_obliquo"] = "flor";
            videos["abd_infra_paralela"] = "flor";

        function open_container(exercicio)
        {
            var content = '<iframe src="https://www.youtube-nocookie.com/embed/'+videos[exercicio]+'?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
            var title = capitalizeTitle(exercicio);
            setModalBox(title,content);
            $('#myModal').modal('show');
        }
        function capitalizeTitle(string) {
            var str = string.split("_");
            var title = "";
            for (var i = 0; i < str.length; i++) {
              title += ( (i==0) ? str[i].charAt(0).toUpperCase()+str[i].slice(1) : " "+str[i].charAt(0).toUpperCase()+str[i].slice(1) );
            }
            return title;
        }

        function setModalBox(title,content,$size)
        {
            document.getElementById('modal-bodyku').innerHTML=content;
            document.getElementById('myModalLabel').innerHTML=title;
        }
        </script>
<?php require('inc/footer.php');?>