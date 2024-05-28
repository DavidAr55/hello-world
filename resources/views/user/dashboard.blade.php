@extends('layouts.layout')

@section('title','Panel de usuario')

@section('content')

@include('layouts.user-stats')

<main class="dashboard-container">

    <img src="{{ asset('images/figures/square-1.png') }}" id="square-2">
    <img src="{{ asset('images/figures/square-1.png') }}" id="square-5">

    <div class="container-info-perfil">
        <div class="photo-container">
            <img src="{{ asset('images/avatars/cool-bread.jpg') }}" class="img-avatar" alt="Avatar del usuario">
            <div class="user-status-info">
                <ul>
                    <li><h5 class="fw-bolder">DavidAr55</h5></li>
                    <li><p class="fs-12-5 color-5">davidarturoloera@gmail.com</p></li>
                    <li class="li-separation-bar-1"></li>
                    <li><a href="" class="perfil-options"><h6 class="fw-bolder ff-Cascadia fs-15"><img src="{{ asset('images/assets/custom-icons/icon-learn-3.png') }}" class="asset-icon-1" alt=""> APRENDER</h6></a></li>
                    <li><a href="" class="perfil-options"><h6 class="fw-bolder ff-Cascadia fs-15"><img src="{{ asset('images/assets/custom-icons/icon-practice-3.png') }}" class="asset-icon-1" alt=""> PRACTICAR</h6></a></li>
                    <li><a href="" class="perfil-options"><h6 class="fw-bolder ff-Cascadia fs-15"><img src="{{ asset('images/assets/custom-icons/icon-challenges-3.png') }}" class="asset-icon-1" alt=""> DESAFIO</h6></a></li>
                    <li><a href="" class="perfil-options"><h6 class="fw-bolder ff-Cascadia fs-15"><img src="{{ asset('images/assets/custom-icons/icon-shop-3.png') }}" class="asset-icon-1" alt=""> TIENDA</h6></a></li>
                    <li><a href="" class="perfil-options"><h6 class="fw-bolder ff-Cascadia fs-15"><img src="{{ asset('images/assets/custom-icons/icon-profile-3.png') }}" class="asset-icon-1" alt=""> PERFIL</h6></a></li>
                    <li><canvas id="myChart" width="400" height="250"></canvas></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="lesson-branch-container">
        <canvas class="lesson-branch-canvas" id="branch-canvas"></canvas>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const labels = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    const shortLabels = ['D', 'L', 'Ma', 'Mi', 'J', 'V', 'S'];
    const data = {
        labels: shortLabels,
        datasets: [{
            label: '',
            data: [0, 100, 50, 150, 150, 250, 150],
            fill: true,
            borderColor: 'rgb(230, 26, 79)',
            backgroundColor: 'rgba(230, 26, 79, 0.05)',
            tension: 0.1
        }]
    };
    const config = {
        type: 'line',
        data: data,
        options: {
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const index = context.dataIndex;
                            const label = labels[index];
                            const value = context.raw;
                            return `${label} ${value} niveles de xp`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, config);
});
</script>

@endsection
