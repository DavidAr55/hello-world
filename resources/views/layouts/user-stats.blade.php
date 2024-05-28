<style>
    .container-user-stats {
        width: 100%;
        height: 100px;

        background-color: var(--color-12);
        position: fixed;

        z-index: 1000;
        top: 120px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.25);

        display: flex;
    }

    .user-stats {
        width: 1500px;
        height: auto;

        margin: auto;
        padding: 25px 0;
        color: var(--color-1);
        line-height: 5px;
    }

    .left-user-stats {
        float: left;
    }

    .right-user-stats {
        float: right;
    }

    .right-user-stats ul {
        list-style: none;
        padding: 0;
    }

    .right-user-stats ul li {
        display: inline-block;
        margin: 10px;
    }

    .lifes-grid-column {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .progress-sm {
        height: 5px;
       margin-top: 11.5px;
    }

    .progress-bar {
        background-image: linear-gradient(to right, #70DBFF, #6066FE);
    }
</style>
<div style="height: 100px;"></div><!-- Temporary div -->
<div class="container-user-stats">
    <div class="user-stats">
        <div class="left-user-stats">
            <p class="ff-Helvetica color-7">Desarrolla tu destreza en</p>
            <h3>Lógica de programación</h3>
        </div>
        <div class="right-user-stats">
            <ul>
                <li><h6 class="fw-bolder"><img src="{{ asset('images/assets/flame-1.png') }}" class="asset-icon-2" alt=""> 26</h6></li>
                <li>
                    <div class="lifes-grid-column">
                        <div>
                            <h6 class="fw-bolder"><img src="{{ asset('images/assets/pixel-heart.png') }}" class="asset-icon-2" alt=""> 3 / 5 vidas</h6>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>        
                </li>
                <li><h6 class="fw-bolder"><img src="{{ asset('images/assets/gem.png') }}" class="asset-icon-2" alt=""> 1,250 gemas</h6></li>
            </ul>
        </div>
    </div>
</div>