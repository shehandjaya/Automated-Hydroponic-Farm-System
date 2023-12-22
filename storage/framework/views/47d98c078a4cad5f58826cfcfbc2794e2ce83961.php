
<?php $__env->startSection('content'); ?>


<div class="container">
    <canvas id="WaterTemperature" height="80"></canvas>
</div>


<div class="container">
    <canvas id="AmbientHumidity" height="80"></canvas>
</div>


<div class="container">
    <canvas id="Ph" height="80"></canvas>
</div>


<div class="container">
    <canvas id="Ec" height="80"></canvas>
</div>


<div class="container">
    <canvas id="AmbientLight" height="80"></canvas>
</div>

<script>
    var data = <?php echo json_encode($data, 15, 512) ?>;
    var labels = data.map(function (record) {
        return record.date;
    });

    // Water Temperature Chart
    var waterTemperatureValues = data.map(function (record) {
        return record.water_temperature;
    });
    const ctxWaterTemperatureChart = document.getElementById('WaterTemperature');
    new Chart(ctxWaterTemperatureChart, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Water Temperature (°C)',
                data: waterTemperatureValues,
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    ticks: {
                        color: 'white',
                        font: {
                            size: 14,
                        }
                    },
                    grid: {
                        color: 'white',
                        borderWidth: 1
                    }
                },
                x: {
                    ticks: {
                        color: 'white',
                        font: {
                            size: 14,
                        }
                    },
                    grid: {
                        color: 'white',
                        borderWidth: 1
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'Water Temperature Chart (°C)',
                    font: {
                        size: 16,
                    },
                    color: 'white',
                }
            },
            animation: {
                duration: 1000
            }
        }
    });

    // Ambient Humidity Chart
    var humidityValues = data.map(function (record) {
        return record.ambient_humidity;
    });
    const ctxHumidityChart = document.getElementById('AmbientHumidity');
    new Chart(ctxHumidityChart, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Ambient Humidity (%)',
                data: humidityValues,
                backgroundColor: 'rgba(255, 159, 64, 0.6)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    ticks: {
                        color: 'white',
                        font: {
                            size: 14,
                        }
                    },
                    grid: {
                        color: 'white',
                        borderWidth: 1
                    }
                },
                x: {
                    ticks: {
                        color: 'white',
                        font: {
                            size: 14,
                        }
                    },
                    grid: {
                        color: 'white',
                        borderWidth: 1
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'Ambient Humidity Chart (%)',
                    font: {
                        size: 16,
                    },
                    color: 'white',
                }
            },
            animation: {
                duration: 1000
            }
        }
    });

    // pH Chart
    var phValues = data.map(function (record) {
        return record.ph;
    });
    const ctxPhChart = document.getElementById('Ph');
    new Chart(ctxPhChart, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'pH',
                data: phValues,
                backgroundColor: 'rgba(255, 99, 132, 0.6)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    ticks: {
                        color: 'white',
                        font: {
                            size: 14,
                        }
                    },
                    grid: {
                        color: 'white',
                        borderWidth: 1
                    }
                },
                x: {
                    ticks: {
                        color: 'white',
                        font: {
                            size: 14,
                        }
                    },
                    grid: {
                        color: 'white',
                        borderWidth: 1
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'pH Chart',
                    font: {
                        size: 16,
                    },
                    color: 'white',
                }
            },
            animation: {
                duration: 1000
            }
        }
    });

    // EC Chart
    var ecValues = data.map(function (record) {
        return record.ec;
    });
    const ctxEcChart = document.getElementById('Ec');
    new Chart(ctxEcChart, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'EC',
                data: ecValues,
                backgroundColor: 'rgba(153, 102, 255, 0.6)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    ticks: {
                        color: 'white',
                        font: {
                            size: 14,
                        }
                    },
                    grid: {
                        color: 'white',
                        borderWidth: 1
                    }
                },
                x: {
                    ticks: {
                        color: 'white',
                        font: {
                            size: 14,
                        }
                    },
                    grid: {
                        color: 'white',
                        borderWidth: 1
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'EC Chart',
                    font: {
                        size: 16,
                    },
                    color: 'white',
                }
            },
            animation: {
                duration: 1000
            }
        }
    });

    // Ambient Light Chart
    var lightValues = data.map(function (record) {
        return record.ambient_light;
    });
    const ctxLightChart = document.getElementById('AmbientLight');
    new Chart(ctxLightChart, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Ambient Light (lux)',
                data: lightValues,
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    ticks: {
                        color: 'white',
                        font: {
                            size: 14,
                        }
                    },
                    grid: {
                        color: 'white',
                        borderWidth: 1
                    }
                },
                x: {
                    ticks: {
                        color: 'white',
                        font: {
                            size: 14,
                        }
                    },
                    grid: {
                        color: 'white',
                        borderWidth: 1
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'Ambient Light Chart  (lux)',
                    font: {
                        size: 16,
                    },
                    color: 'white',
                }
            },
            animation: {
                duration: 1000
            }
        }
    });
</script>

<br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\Final_Hydroponic_Farm\resources\views/admin/charts/meterIndex.blade.php ENDPATH**/ ?>