

<?php $__env->startSection('content'); ?>
<div class="row">
    <style>

.emergency-btn {
      background-color: #dc3545; /* Bootstrap's danger color */
      color: #fff;
      padding: 15px 30px;
      font-size: 18px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(220, 53, 69, 0.6);
      transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out;
    }

    .emergency-btn:hover {
      background-color: #c82333; /* Darker shade on hover */
      transform: scale(1.05);
    }
      </style>
<button class="btn emergency-btn" onclick="showConfirmation()">Emergency Button</button>
    
    <div class="col-md-4">
        <div class="card" id="Water_Capacity" style="background-color: #D9D9D9; border-radius: 3%;">
            <div class="card-body">
                <div class="container-water">
                    <div class="circular-progress-water">
                        <div class="value-container-water" id="water-value-container">0L</div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted" style="background-color: #D9D9D9">
                <h4 style="text-align: center;color:black;font-family: 'Roboto Condensed',
                 sans-serif;font-weight:800">Water Capacity</h4>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" style="background-color: #D9D9D9; border-radius: 3%;">
            <div class="card-body">
                <div class="container-ambtemp">
                    <div class="circular-progress-ambtemp">
                        <div class="value-container-ambtemp" id="ambtemp-value-container">0%</div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted" style="background-color: #D9D9D9">
                <h4 style="text-align: center;color:black;font-family:
                'Roboto Condensed', sans-serif;font-weight:800">Amb Temp</h4>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" style="background-color: #D9D9D9; border-radius: 3%;">
            <div class="card-body">
                <div class="container-ambthum">
                    <div class="circular-progress-ambthum">
                        <div class="value-container-ambthum" id="ambthum-value-container">0%</div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted" style="background-color: #D9D9D9">
                <h4 style="text-align: center;color:black;font-family:
                    'Roboto Condensed', sans-serif;font-weight:800">Amb hum</h4>
            </div>
        </div>
    </div>

</div>

<div class="row">
    
    <div class="col-md-4">
        <div class="card" style="background-color: #D9D9D9; border-radius: 3%;">
            <div class="card-body">
                <div class="container-wtemp">
                    <div class="circular-progress-wtemp">
                        <div class="value-container-wtemp" id="wtemp-value-container">0%</div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted" style="background-color: #D9D9D9">
                <h4 style="text-align: center;color:black;font-family: 'Roboto Condensed',
                 sans-serif;font-weight:800">Water Temp</h4>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card" style="background-color: #D9D9D9; border-radius: 3%;">
            <div class="card-body">
                <div class="container-ph">
                    <div class="circular-progress-ph">
                        <div class="value-container-ph" id="ph-value-container">0%</div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted" style="background-color: #D9D9D9">
                <h4 style="text-align: center;color:black;font-family:
                'Roboto Condensed', sans-serif;font-weight:800">PH</h4>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" id="ec" style="background-color: #D9D9D9; border-radius: 3%;">
            <div class="card-body">
                <div class="container-ec">
                    <div class="circular-progress-ec">
                        <div class="value-container-ec" id="ec-value-container">0%</div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted" style="background-color: #D9D9D9">
                <h4 style="text-align: center;color:black;font-family:
                    'Roboto Condensed', sans-serif;font-weight:800">EC</h4>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-4">
        <div class="card" style="background-color: #D9D9D9; border-radius: 3%;">
            <div class="card-body">
                <div class="container-amblight">
                    <div class="circular-progress-amblight">
                        <div class="value-container-amblight" id="amblight-value-container">0%</div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted" style="background-color: #D9D9D9">
                <h4 style="text-align: center;color:black;font-family:
            'Roboto Condensed', sans-serif;font-weight:800">Amb Light</h4>
            </div>
        </div>
    </div>

    <div class="card" id="buttons-container"
        style="background-color: rgb(217, 217, 217); border-radius: 3%;height:335px;">
        <div class="card-body" style="margin: 5% 5% 5% 9%;">
            <div class="row">
                
                <?php $__currentLoopData = $reading_update; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reading_update_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-4 ">
                    <?php if($reading_update_item->water_motor == "ON" ): ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck" type="checkbox" role="switch" id="onCheckBox"
                            onchange="onCheckBox('water_motor')" checked>
                        <label class="form-check-label myLable myLable" for="flexSwitchCheckDefault">Water Motor</label>
                    </div>
                    <?php else: ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input  myCheck" type="checkbox" onchange="offCheckBox('water_motor')"
                            role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">Water Motor</label>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    
                    <?php if($reading_update_item->nutrition_pump_1 =="ON"): ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck " type="checkbox" role="switch" id="onCheckBox"
                            onchange="onCheckBox('nutrition_pump_1')" checked>
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">Nutrition Pump 1</label>
                    </div>
                    <?php else: ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck  " type="checkbox"
                            onchange="offCheckBox('nutrition_pump_1')" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">Nutrition Pump 1</label>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    
                    <?php if($reading_update_item->nutrition_pump_2 == "ON"): ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck " type="checkbox" role="switch" id="onCheckBox"
                            onchange="onCheckBox('nutrition_pump_2')" checked>
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">Nutrition Pump 2</label>
                    </div>
                    <?php else: ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck  " type="checkbox"
                            onchange="offCheckBox('nutrition_pump_2')" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">Nutrition Pump 2</label>
                    </div>
                    <?php endif; ?>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4 mt-3">
                    
                    <?php if($reading_update_item->fan =="ON" ): ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck " type="checkbox" role="switch" id="onCheckBox"
                            onchange="onCheckBox('fan')" checked>
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">Fan</label>
                    </div>
                    <?php else: ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck  " type="checkbox" onchange="offCheckBox('fan')"
                            role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">Fan</label>
                    </div>
                    <?php endif; ?>

                </div>
                <div class="col-md-4 mt-3">

                    
                    <?php if($reading_update_item->growing_light =="ON" ): ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck " type="checkbox" role="switch" id="onCheckBox"
                            onchange="onCheckBox('growing_light')" checked>
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">Growing Light</label>
                    </div>
                    <?php else: ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck  " type="checkbox"
                            onchange="offCheckBox('growing_light')" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">Growing Light</label>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-4 mt-3">
                    
                    <?php if($reading_update_item->normal_light == "ON"): ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck " type="checkbox" role="switch" id="onCheckBox"
                            onchange="onCheckBox('normal_light')" checked>
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">Normal Light</label>
                    </div>
                    <?php else: ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck  " type="checkbox" onchange="offCheckBox('normal_light')"
                            role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">Normal Light</label>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mt-3">
                    
                    <?php if($reading_update_item->ph_control_motor == "ON"): ?>

                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck " type="checkbox" role="switch" id="onCheckBox"
                            onchange="onCheckBox('ph_control_motor')" checked>
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">PH Control Motor</label>
                    </div>
                    <?php else: ?>
                    <div class="form-check form-switch mt-4">
                        <input class="form-check-input myCheck " type="checkbox"
                            onchange="offCheckBox('ph_control_motor')" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label myLable" for="flexSwitchCheckDefault">PH Control Motor</label>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <br>

            </div>
        </div>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <script>
        // Function to refresh the buttons container
        function refreshButtons() {
            $('#buttons-container').load(location.href + ' #buttons-container');
        }

        // Toggle buttons on/off function
        function onCheckBox(name) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatusWMOff',
                data: {
                    id: 1,
                    name: name
                },
                success: function (data) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Switched Off.',
                        icon: 'error',
                        confirmButtonColor: '#f50000',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Refresh only the buttons container
                            refreshButtons();
                        }
                    });
                }
            });
        }

        function offCheckBox(name) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatusWMOn',
                data: {
                    'id': 1,
                    name: name
                },
                success: function (data) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Switched On.',
                        icon: 'success',
                        confirmButtonColor: '#72B22B',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Refresh only the buttons container
                            refreshButtons();
                        }
                    });
                }
            });
        }

    </script>
    
    <script>
        let progressBarwater = document.querySelector('.circular-progress-water');
        let valueContainerwater = document.querySelector('.value-container-water');
        let progressValuewater = 0;
        let progressEndValuewater = 0; // Initialize to zero
        <?php $__currentLoopData = $reading_update; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reading_update_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        progressEndValuewater += parseFloat("<?php echo e($reading_update_item->water_capacity); ?>");
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        let speedwater = 0.3;
        let progresswater = setInterval(() => {
            progressValuewater++;
            valueContainerwater.textContent = `${progressValuewater.toFixed(1)}L`;

            if (progressValuewater == 3000) {
                progressBarwater.style.background = `conic-gradient(
#85CE36 ${progressValuewater * 3.6 }deg,
#85CE36 ${progressValuewater* 3.6 }deg
)`;
            } else if (progressValuewater < 3000 && progressValuewater >= 1000) {
                progressBarwater.style.background = `conic-gradient(
            #FFCE00  ${progressValuewater * 3.6 }deg,
#daf0c2 ${progressValuewater* 3.6 }deg
)`;
            } else if (progressValuewater < 999) {
                progressBarwater.style.background = `conic-gradient(
#FF5733   ${progressValuewater/3000 *100*  3.6 }deg,
#daf0c2 ${progressValuewater/3000 *100*  3.6 }deg
)`;
            }
            if (progressValuewater >= progressEndValuewater) {
                clearInterval(progresswater);
            }
        }, speedwater);

        // ambtemp
        let progressBarambtemp = document.querySelector('.circular-progress-ambtemp');
        let valueContainerambtemp = document.querySelector('.value-container-ambtemp');
        let progressValueambtemp = 0;
        let progressEndValueambtemp = 0; // Initialize to zero
        <?php $__currentLoopData = $reading_update; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reading_update_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        progressEndValueambtemp += parseFloat("<?php echo e($reading_update_item->ambient_temperature); ?>");
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        let speedambtemp = 0.3;
        let progressambtemp = setInterval(() => {
            progressValueambtemp++;
            valueContainerambtemp.textContent = `${progressValueambtemp.toFixed(1)}°C`;
            progressBarambtemp.style.background = `conic-gradient(
#85CE36 ${progressValueambtemp * 3.6 }deg,
#daf0c2 ${progressValueambtemp* 3.6 }deg
)`;


            if (!localStorage.getItem('ambientTemperatureAlertShown') && progressValueambtemp >= 35) {
                // Display a SweetAlert popup
                Swal.fire({
                    icon: 'error',
                    title: 'High Ambient Temperature',
                    text: 'The ambient temperature is greater than 35°C!',
                    confirmButtonText: 'OK',
                    customClass: {
                        popup: 'swal-danger-popup',
                        title: 'swal-danger-title',
                        confirmButton: 'swal-danger-button'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {

                        updateAmbientTemperatureInDatabase();

                    }
                });
                localStorage.setItem('ambientTemperatureAlertShown', 'true');
                clearInterval(progressambtemp);
            }else if(localStorage.getItem('ambientTemperatureAlertShown') && progressValueambtemp < 35){
                localStorage.removeItem('ambientTemperatureAlertShown');
            }


            if (progressValueambtemp >= progressEndValueambtemp) {
                clearInterval(progressambtemp);
            }
        }, speedambtemp);

        function updateAmbientTemperatureInDatabase() {
            $.ajax({
                url: 'updateButtonsToZero',
                method: 'get',
                data: {
                    sensorId: 1
                },
                success: function (response) {
                    Swal.fire({
                        title: 'All equipment is turned off because of the high ambient temperature.!',
                        text: 'Switched Off.',
                        icon: 'error',
                        confirmButtonColor: '#f50000',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            refreshButtons();
                        }
                    });
                }
            });
        }
        // ambthum
        let progressBarambthum = document.querySelector('.circular-progress-ambthum');
        let valueContainerambthum = document.querySelector('.value-container-ambthum');
        let progressValueambthum = 0;
        let progressEndValueambthum = 0; // Initialize to zero
        <?php $__currentLoopData = $reading_update; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reading_update_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        progressEndValueambthum += parseFloat("<?php echo e($reading_update_item->ambient_humidity); ?>");
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        let speedambthum = 0.3;
        let progressambthum = setInterval(() => {
            progressValueambthum++;
            valueContainerambthum.textContent = `${progressValueambthum.toFixed(1)}%`;
            progressBarambthum.style.background = `conic-gradient(
#85CE36 ${progressValueambthum * 3.6 }deg,
#daf0c2 ${progressValueambthum* 3.6 }deg
)`;
            if (progressValueambthum >= progressEndValueambthum) {
                clearInterval(progressambthum);
            }
        }, speedambthum);




        // wtemp
        let progressBarwtemp = document.querySelector('.circular-progress-wtemp');
        let valueContainerwtemp = document.querySelector('.value-container-wtemp');
        let progressValuewtemp = 0;
        let progressEndValuewtemp = 0; // Initialize to zero
        <?php $__currentLoopData = $reading_update; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reading_update_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        progressEndValuewtemp += parseFloat("<?php echo e($reading_update_item->water_temperature); ?>");
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        let speedwtemp = 0.3;
        let progresswtemp = setInterval(() => {
            progressValuewtemp++;
            valueContainerwtemp.textContent = `${progressValuewtemp.toFixed(1)}°C`;
            progressBarwtemp.style.background = `conic-gradient(
#85CE36 ${progressValuewtemp * 3.6 }deg,
#daf0c2 ${progressValuewtemp* 3.6 }deg
)`;
            if (progressValuewtemp >= progressEndValuewtemp) {
                clearInterval(progresswtemp);
            }
        }, speedwtemp);




        // ph
        let progressBarph = document.querySelector('.circular-progress-ph');
        let valueContainerph = document.querySelector('.value-container-ph');
        let progressValueph = 0;
        let progressEndValueph = 0; // Initialize to zero

        <?php $__currentLoopData = $reading_update; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reading_update_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        progressEndValueph += parseFloat("<?php echo e($reading_update_item->ph); ?>"); // Use parseFloat to convert to double
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        let speedph = 0.003;
        let progressph = setInterval(() => {
            progressValueph++;
            valueContainerph.textContent =
                `${progressValueph.toFixed(1)}PH`; // Use toFixed to display two decimal places
            progressBarph.style.background = `conic-gradient(
#85CE36 ${progressValueph * 360/14 }deg,
#daf0c2 ${progressValueph* 360/14 }deg
)`;

            if (progressValueph >=
                progressEndValueph) { // Use >= to handle potential floating-point precision issues
                clearInterval(progressph);
            }
        }, speedph);


        //ec
        let progressBarec = document.querySelector('.circular-progress-ec');
        let valueContainerec = document.querySelector('.value-container-ec');
        let progressValueec = 0;
        let progressEndValueec = 0; // Initialize to zero
        <?php $__currentLoopData = $reading_update; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reading_update_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        progressEndValueec += parseFloat("<?php echo e($reading_update_item->ec); ?>");
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        let speedec = 0.3;
        let progressec = setInterval(() => {
            progressValueec++;
            valueContainerec.textContent = `${progressValueec.toFixed(1)} σ`;
            progressBarec.style.background = `conic-gradient(
#85CE36 ${progressValueec * 3.6 }deg,
#daf0c2 ${progressValueec* 3.6 }deg
)`;
            if (progressValueec >= progressEndValueec) {
                clearInterval(progressec);
            }
        }, speedec);


        //amblight
        let progressBaramblight = document.querySelector('.circular-progress-amblight');
        let valueContaineramblight = document.querySelector('.value-container-amblight');
        let progressValueamblight = 0;
        let progressEndValueamblight = 0; // Initialize to zero
        <?php $__currentLoopData = $reading_update; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reading_update_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        progressEndValueamblight += parseFloat("<?php echo e($reading_update_item->ambient_light); ?>");
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        let speedamblight = 0.3;
        let progressamblight = setInterval(() => {
            progressValueamblight++;
            valueContaineramblight.textContent = `${progressValueamblight.toFixed(1)}lux`;
            progressBaramblight.style.background = `conic-gradient(
#85CE36 ${progressValueamblight * 3.6 }deg,
#daf0c2 ${progressValueamblight* 3.6 }deg
)`;
            if (progressValueamblight >= progressEndValueamblight) {
                clearInterval(progressamblight);
            }
        }, speedamblight);

    </script>



    <script>
        function refreshValues() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/getUpdatedValues',
                success: function (data) {
                    $('#water-value-container').text(data.water_capacity + 'L');
                    $('#ambtemp-value-container').text(data.ambient_temperature + '°C');
                    $('#ambthum-value-container').text(data.ambient_humidity + '%');
                    $('#wtemp-value-container').text(data.water_temperature + '°C');
                    $('#ph-value-container').text(data.ph + 'PH');
                    $('#ec-value-container').text(data.ec + 'σ');
                    $('#amblight-value-container').text(data.ambient_light + 'LUX');
                    setTimeout(refreshValues, 5000);
                },
            });
        }
        refreshValues();

    </script>

    <style>
        /* Custom styles for the danger popup */
        .swal-danger-popup {
            background-color: #f8d7da;
            color: #721c24;
        }

        .swal-danger-title {
            color: #721c24;
        }

        .swal-danger-button {
            background-color: #dc3545;
            color: #fff;
        }

        .swal-danger-button {
            background-color: #dc3545 !important;
            color: #fff !important;
        }

    </style>





<script>
    function showConfirmation() {
      Swal.fire({
        title: 'Are you sure?',
        text: 'This will update the Emergency_button column in the reading_updates table.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, update it!',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.isConfirmed) {
          updateEmergencyButton();
        }
      });
    }

    function updateEmergencyButton() {
      fetch('/updateEmergencyButton', {
        method: 'GET',
      })
      .then(response => {
        if (response.ok) {
          // Update successful
          Swal.fire('Updated!', 'Emergency_button column has been updated.', 'success');
        } else {
          // Update failed
          Swal.fire('Error', 'Failed to update Emergency_button column.', 'error');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        Swal.fire('Error', 'An error occurred while updating.', 'error');
      });
    }
  </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\Final_Hydroponic_Farm\resources\views/dashboard/admin.blade.php ENDPATH**/ ?>