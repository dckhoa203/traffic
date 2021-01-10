@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Số lượng phương tiện</h3>
                        <a href="javascript:void(0);">View Report</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <p class="d-flex flex-column">
                            <span class="text-bold text-lg">820</span>
                            <span>Phương tiện</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                            <span class="text-success">
                                <i class="fas fa-arrow-up"></i> 12.5%
                            </span>
                            <span class="text-muted">Thời gian</span>
                        </p>
                    </div>
                    <!-- /.d-flex -->
        
                    <div class="position-relative mb-4">
                        <canvas id="visitors-chart" height="200"></canvas>
                    </div>
        
                    <div class="d-flex flex-row justify-content-end">
                        <span class="mr-2">
                            <i class="fas fa-square text-primary"></i> This Week
                        </span>
                        <span>
                            <i class="fas fa-square text-gray"></i> Last Week
                        </span>
                    </div>
                </div>
            </div>
        </div>sz
      <!-- /.col (RIGHT) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection

@section('script')
<script>
    $(function () {
        'use strict'
    
        var ticksStyle = {
        fontColor: '#495057',
        fontStyle: 'bold'
        }
    
        var mode      = 'index'
        var intersect = true
    
        var $visitorsChart = $('#visitors-chart')
        var visitorsChart  = new Chart($visitorsChart, {
        data   : {
            labels  : ['Motorcycle', 'Car', 'Bus', 'Truck', 'Container', 'Bicycle'],
            datasets: [{
            type                : 'line',
            data                : {{json_encode($quantity)}},
            backgroundColor     : 'transparent',
            borderColor         : '#007bff',
            pointBorderColor    : '#007bff',
            pointBackgroundColor: '#007bff',
            fill                : false
            }]
        },
        options: {
            maintainAspectRatio: false,
            tooltips           : {
            mode     : mode,
            intersect: intersect
            },
            hover              : {
            mode     : mode,
            intersect: intersect
            },
            legend             : {
            display: false
            },
            scales             : {
            yAxes: [{
                // display: false,
                gridLines: {
                display      : true,
                lineWidth    : '4px',
                color        : 'rgba(0, 0, 0, .2)',
                zeroLineColor: 'transparent'
                },
                ticks    : $.extend({
                beginAtZero : true,
                suggestedMax: {{$max}}
                }, ticksStyle)
            }],
            xAxes: [{
                display  : true,
                gridLines: {
                display: false
                },
                ticks    : ticksStyle
            }]
            }
        }
        })
    })
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@endsection
