<?php include('../connection/AdminHomeController.php'); ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CAPSTONE APP | HOME</title>
  <meta name="author" content="Hossein Donyadideh">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css'>
  <link rel="stylesheet" href="./style/admin-home-style.css">
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-grid.css">
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-theme-alpine.css">

</head>
<body>
<!-- partial:index.partial.html -->
<nav class="uk-navbar-container uk-light" uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle uk-visible@m" uk-navbar-toggle-icon
            uk-toggle="target: .toggle-animation-queued; animation: uk-animation-slide-left-small"></a>
        <a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon href="#offcanvas" uk-toggle></a>
        <div class="uk-navbar-item uk-visible@m">
            <!-- <a class="uk-logo"><img src="../assets/img/logo-icon.png" style="width:50%; content-align:center;" /></a> -->
        </div>
    </div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li>
                <a uk-tooltip="view website"><span class="uk-icon-button" uk-icon="desktop"></span></a>
            </li>
            <li>
                <a href="#modal-bell" uk-tooltip="notice" uk-toggle>
                    <div class="tm-ripple">
                        <div></div>
                        <div></div>
                    </div><span class="uk-icon-button" uk-icon="bell"></span><span class="tm-badge uk-badge">2</span>
                </a>
                <div id="modal-bell" uk-modal>
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <div class="uk-modal-header">
                            <h2 class="uk-modal-title"><span>1</span> new comments</h2>
                        </div>
                        <div class="uk-modal-body">
                            <table class="uk-table uk-table-divider uk-table-hover uk-table-middle uk-table-small">
                                <thead>
                                    <tr>
                                        <th class="uk-table-expand">author</th>
                                        <th class="uk-text-center uk-visible@m">date</th>
                                        <th class="uk-text-center">view</th>
                                    </tr>
                                </thead>
                                <tr class="uk-table-link">
                                    <td class="uk-text-truncate"><span class="uk-text-muted uk-margin-small-right"
                                            uk-icon="icon: user"></span>author</td>
                                    <td class="uk-text-center uk-visible@m">
                                        <small><small>
                                                2022-08-08
                                            </small></small>
                                    </td>
                                    <td class="uk-text-center">
                                        <a class="uk-button uk-button-primary uk-button-small">view</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="uk-modal-header">
                            <h2 class="uk-modal-title"><span>1</span> new messages</h2>
                        </div>
                        <div class="uk-modal-body">
                            <table class="uk-table uk-table-divider uk-table-hover uk-table-middle uk-table-small">
                                <thead>
                                    <tr>
                                        <th class="uk-table-expand">name</th>
                                        <th class="uk-text-center uk-visible@m">date</th>
                                        <th class="uk-text-center">view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="uk-text-truncate"><span class="uk-text-muted uk-margin-small-right"
                                                uk-icon="icon: user"></span>name</td>
                                        <td class="uk-text-center uk-visible@m">
                                            <small><small>
                                                    2022-08-08
                                                </small></small>
                                        </td>
                                        <td class="uk-text-center">
                                            <a href="" class="uk-button uk-button-primary uk-button-small">view</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a><span class="uk-icon-button" uk-icon="user"></span></a>
                <div class="uk-navbar-dropdown" uk-dropdown="pos: bottom-right">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li>
                            <p><span class="uk-margin-small-right" uk-icon="user"></span><?php echo strtoupper($userDetails[0]['fname']); ?> <?php echo strtoupper($userDetails[0]['mname']); ?></p>
                        </li>
                        <li class="uk-nav-divider"></li>
                        <li><a><span class="uk-margin-small-right" uk-icon="file-edit"></span>edit account</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a><span class="uk-margin-small-right" uk-icon="sign-out"></span>logout</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div id="offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <h3>MaxBlast</h3>
        <ul class="tm-menu uk-nav-default uk-nav-parent-icon" uk-nav>
            <li class="uk-active">
                <a><span class="uk-margin-small-right" uk-icon="home"></span>dashboard</a>
            </li>
            <li class="uk-nav-divider"></li>
            <li class="uk-parent">
                <a><span class="uk-margin-small-right" uk-icon="file-text"></span>blog</a>
                <ul class="uk-nav-sub">
                    <li>
                        <a><span class="uk-margin-small-right" uk-icon="file-text"></span>post</a>
                    </li>
                    <li>
                        <a><span class="uk-margin-small-right" uk-icon="folder"></span>category</a>
                    </li>
                    <li>
                        <a><span class="uk-margin-small-right" uk-icon="comments"></span>comments</a>
                    </li>
                </ul>
            </li>
            <li class="uk-nav-divider"></li>
            <li>
                <a><span class="uk-margin-small-right" uk-icon="image"></span>images</a>
            </li>
            <li class="uk-nav-divider"></li>
            <li>
                <a><span class="uk-margin-small-right" uk-icon="file"></span>pages</a>
            </li>
            <li class="uk-nav-divider"></li>
            <li>
                <a><span class="uk-margin-small-right" uk-icon="cog"></span>settings</a>
            </li>
        </ul>
        <div class="uk-margin-auto-top">
            <hr class="uk-margin-small-top">
            <div class="uk-grid-collapse uk-child-width-1-4 uk-text-center" uk-grid>
                <div><a class="uk-icon-link" uk-icon="home" uk-tooltip="dashboard"></a></div>
                <div><a class="uk-icon-link" uk-icon="comments" uk-tooltip="comments">
                        <span class="uk-badge tm-badge-m"><small>1</small></span>
                    </a></div>
                <div><a class="uk-icon-link" uk-icon="mail" uk-tooltip="messages">
                        <span class="uk-badge tm-badge-m"><small>1</small></span>
                    </a></div>
                <div><a class="uk-icon-link" uk-icon="sign-out" uk-tooltip="logout"></a></div>
            </div>
        </div>
    </div>
</div>
<div class="uk-grid-match uk-grid-collapse" uk-height-viewport="expand: true" uk-grid>
    <div
        class="uk-width-auto@m toggle-animation-queued tm-sidebar uk-background-secondary uk-light uk-padding-small uk-visible@m">
        <ul class="tm-menu uk-nav-default uk-nav-parent-icon" uk-nav>
            <li class="uk-active">
                <a><span class="uk-margin-small-right" uk-icon="home"></span>dashboard</a>
            </li>
            <li class="uk-nav-divider"></li>
            <li class="uk-parent">
                <a><span class="uk-margin-small-right" uk-icon="file-text"></span>blog</a>
                <ul class="uk-nav-sub">
                    <li>
                        <a><span class="uk-margin-small-right" uk-icon="file-text"></span>post</a>
                    </li>
                    <li>
                        <a><span class="uk-margin-small-right" uk-icon="folder"></span>category</a>
                    </li>
                    <li>
                        <a><span class="uk-margin-small-right" uk-icon="comments"></span>comments</a>
                    </li>
                </ul>
            </li>
          
        </ul>
    </div>
    <div class="uk-width-expand@m uk-background-muted">
        <div class="uk-container uk-container-expand uk-margin-large-top uk-margin-bottom">

             <div class="uk-grid uk-grid-medium uk-grid-match" uk-grid>
                <div class="uk-width-12-12 uk-width-12-12@s uk-width-12-12@m uk-width-12-12@l uk-width-12-12@xl">
                    <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-border-rounded">
                        <div class="uk-card-header">
                            <span class="uk-text-muted">WELCOME ADMIN! <?php echo strtoupper($userSession[0]['email']); ?>,</span>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-overflow-auto">
                                NAME : <?php echo strtoupper($userDetails[0]['lname']); ?>, <?php echo strtoupper($userDetails[0]['fname']); ?> <?php echo strtoupper($userDetails[0]['mname']); ?>
                                <br />
                                CONTACT : <?php echo strtoupper($userSession[0]['phone']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="uk-grid uk-grid-row-medium uk-grid-column-small uk-grid-match uk-margin-medium-bottom" uk-grid>
                <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-3@m uk-width-1-6@l uk-width-1-6@xl report-box">
                    <div class="counter-container tm-item uk-card uk-card-default uk-card-body uk-padding-remove uk-card-hover"
                        data-number="200" data-percentage="100" data-radius="120" data-duration="2500"
                        data-uniqid="uk-counter-d">
                        <h2 class="el-number uk-margin-remove uk-padding-small uk-position-top-left"><?php echo strtoupper($bookToday[0]['total']); ?></h2>
                        <div class="uk-text-small uk-text-primary uk-padding-small uk-position-bottom-right">Appointment Today
                        </div>
                        <div class="uk-animation-toggle uk-cover-container" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246.033 99.303"
                                class="tm-image uk-animation-stroke uk-svg" style="--uk-animation-stroke:330;">
                                <g transform="translate(-525.578 -4365.5)">
                                    <g transform="translate(526.078 4366)">
                                        <path
                                            d="M0,98.066Q21.3,41.571,34.624,41.571c13.325,0,20.82,21.852,34.977,21.852,19.269,0,24.984-13.324,35.81-13.324,6.433,0,23.318-11.725,34.144-11.725,13.014,0,22.6,25.049,34.977,25.049,13.371,0,15.823-38.373,33.311-38.373S244.249,0,245.034,0"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="1"></path>
                                    </g>
                                    <g transform="translate(526.078 4389.984)">
                                        <path
                                            d="M0,74.318Q16.3,54.362,34.624,54.362c18.321,0,15.849-28.732,34.574-28.732s20.157,23.513,35.4,23.513C124.565,49.144,121.684,0,140.388,0c15.076,0,22.485,23.629,33.907,23.629s19.776,9.415,35.214,9.415c10.826,0,27.276-29.967,35.525-30.5"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-3@m uk-width-1-6@l uk-width-1-6@xl report-box">
                    <div class="counter-container tm-item uk-card uk-card-default uk-card-body uk-padding-remove uk-card-hover"
                        data-number="170" data-percentage="100" data-radius="120" data-duration="3000"
                        data-uniqid="uk-counter-d">
                        <h2 class="el-number uk-margin-remove uk-padding-small uk-position-top-left"><?php echo strtoupper($regClient[0]['total']); ?></h2>
                        <div class="uk-text-small uk-text-primary uk-padding-small uk-position-bottom-right">Client Users
                        </div>
                        <div class="uk-animation-toggle uk-cover-container" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246.033 99.303"
                                class="tm-image uk-animation-stroke uk-svg" style="--uk-animation-stroke:330;">
                                <g transform="translate(-525.578 -4365.5)">
                                    <g transform="translate(526.078 4366)">
                                        <path
                                            d="M0,98.066Q21.3,41.571,34.624,41.571c13.325,0,20.82,21.852,34.977,21.852,19.269,0,24.984-13.324,35.81-13.324,6.433,0,23.318-11.725,34.144-11.725,13.014,0,22.6,25.049,34.977,25.049,13.371,0,15.823-38.373,33.311-38.373S244.249,0,245.034,0"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="1"></path>
                                    </g>
                                    <g transform="translate(526.078 4389.984)">
                                        <path
                                            d="M0,74.318Q16.3,54.362,34.624,54.362c18.321,0,15.849-28.732,34.574-28.732s20.157,23.513,35.4,23.513C124.565,49.144,121.684,0,140.388,0c15.076,0,22.485,23.629,33.907,23.629s19.776,9.415,35.214,9.415c10.826,0,27.276-29.967,35.525-30.5"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-3@m uk-width-1-6@l uk-width-1-6@xl report-box">
                    <div class="counter-container tm-item uk-card uk-card-default uk-card-body uk-padding-remove uk-card-hover"
                        data-number="1400" data-percentage="100" data-radius="120" data-duration="3500"
                        data-uniqid="uk-counter-d">
                        <h2 class="el-number uk-margin-remove uk-padding-small uk-position-top-left"><?php echo strtoupper($regOwner[0]['total']); ?></h2>
                        <div class="uk-text-small uk-text-primary uk-padding-small uk-position-bottom-right">Owner Users</div>
                        <div class="uk-animation-toggle uk-cover-container" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246.033 99.303"
                                class="tm-image uk-animation-stroke uk-svg" style="--uk-animation-stroke:330;">
                                <g transform="translate(-525.578 -4365.5)">
                                    <g transform="translate(526.078 4366)">
                                        <path
                                            d="M0,98.066Q21.3,41.571,34.624,41.571c13.325,0,20.82,21.852,34.977,21.852,19.269,0,24.984-13.324,35.81-13.324,6.433,0,23.318-11.725,34.144-11.725,13.014,0,22.6,25.049,34.977,25.049,13.371,0,15.823-38.373,33.311-38.373S244.249,0,245.034,0"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="1"></path>
                                    </g>
                                    <g transform="translate(526.078 4389.984)">
                                        <path
                                            d="M0,74.318Q16.3,54.362,34.624,54.362c18.321,0,15.849-28.732,34.574-28.732s20.157,23.513,35.4,23.513C124.565,49.144,121.684,0,140.388,0c15.076,0,22.485,23.629,33.907,23.629s19.776,9.415,35.214,9.415c10.826,0,27.276-29.967,35.525-30.5"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-3@m uk-width-1-6@l uk-width-1-6@xl report-box">
                    <div class="counter-container tm-item uk-card uk-card-default uk-card-body uk-padding-remove uk-card-hover"
                        data-number="15000" data-percentage="100" data-radius="120" data-duration="4000"
                        data-uniqid="uk-counter-d">
                        <h2 class="el-number uk-margin-remove uk-padding-small uk-position-top-left"><?php echo strtoupper($totalBooking[0]['total']); ?></h2>
                        <div class="uk-text-small uk-text-primary uk-padding-small uk-position-bottom-right">Total Booking</div>
                        <div class="uk-animation-toggle uk-cover-container" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246.033 99.303"
                                class="tm-image uk-animation-stroke uk-svg" style="--uk-animation-stroke:330;">
                                <g transform="translate(-525.578 -4365.5)">
                                    <g transform="translate(526.078 4366)">
                                        <path
                                            d="M0,98.066Q21.3,41.571,34.624,41.571c13.325,0,20.82,21.852,34.977,21.852,19.269,0,24.984-13.324,35.81-13.324,6.433,0,23.318-11.725,34.144-11.725,13.014,0,22.6,25.049,34.977,25.049,13.371,0,15.823-38.373,33.311-38.373S244.249,0,245.034,0"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="1"></path>
                                    </g>
                                    <g transform="translate(526.078 4389.984)">
                                        <path
                                            d="M0,74.318Q16.3,54.362,34.624,54.362c18.321,0,15.849-28.732,34.574-28.732s20.157,23.513,35.4,23.513C124.565,49.144,121.684,0,140.388,0c15.076,0,22.485,23.629,33.907,23.629s19.776,9.415,35.214,9.415c10.826,0,27.276-29.967,35.525-30.5"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-3@m uk-width-1-6@l uk-width-1-6@xl report-box">
                    <div class="counter-container tm-item uk-card uk-card-default uk-card-body uk-padding-remove uk-card-hover"
                        data-number="30000" data-percentage="100" data-radius="120" data-duration="4500"
                        data-uniqid="uk-counter-d">
                        <h2 class="el-number uk-margin-remove uk-padding-small uk-position-top-left"><?php echo strtoupper($totalPromo[0]['total']); ?></h2>
                        <div class="uk-text-small uk-text-primary uk-padding-small uk-position-bottom-right">Total Promo</div>
                        <div class="uk-animation-toggle uk-cover-container" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246.033 99.303"
                                class="tm-image uk-animation-stroke uk-svg" style="--uk-animation-stroke:330;">
                                <g transform="translate(-525.578 -4365.5)">
                                    <g transform="translate(526.078 4366)">
                                        <path
                                            d="M0,98.066Q21.3,41.571,34.624,41.571c13.325,0,20.82,21.852,34.977,21.852,19.269,0,24.984-13.324,35.81-13.324,6.433,0,23.318-11.725,34.144-11.725,13.014,0,22.6,25.049,34.977,25.049,13.371,0,15.823-38.373,33.311-38.373S244.249,0,245.034,0"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="1"></path>
                                    </g>
                                    <g transform="translate(526.078 4389.984)">
                                        <path
                                            d="M0,74.318Q16.3,54.362,34.624,54.362c18.321,0,15.849-28.732,34.574-28.732s20.157,23.513,35.4,23.513C124.565,49.144,121.684,0,140.388,0c15.076,0,22.485,23.629,33.907,23.629s19.776,9.415,35.214,9.415c10.826,0,27.276-29.967,35.525-30.5"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-3@m uk-width-1-6@l uk-width-1-6@xl report-box">
                    <div class="counter-container tm-item uk-card uk-card-default uk-card-body uk-padding-remove uk-card-hover"
                        data-number="40000" data-percentage="100" data-radius="120" data-duration="5000"
                        data-uniqid="uk-counter-d">
                        <h2 class="el-number uk-margin-remove uk-padding-small uk-position-top-left"><?php echo strtoupper($totalService[0]['total']); ?></h2>
                        <div class="uk-text-small uk-text-primary uk-padding-small uk-position-bottom-right">Total Services</div>
                        <div class="uk-animation-toggle uk-cover-container" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246.033 99.303"
                                class="tm-image uk-animation-stroke uk-svg" style="--uk-animation-stroke:330;">
                                <g transform="translate(-525.578 -4365.5)">
                                    <g transform="translate(526.078 4366)">
                                        <path
                                            d="M0,98.066Q21.3,41.571,34.624,41.571c13.325,0,20.82,21.852,34.977,21.852,19.269,0,24.984-13.324,35.81-13.324,6.433,0,23.318-11.725,34.144-11.725,13.014,0,22.6,25.049,34.977,25.049,13.371,0,15.823-38.373,33.311-38.373S244.249,0,245.034,0"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="1"></path>
                                    </g>
                                    <g transform="translate(526.078 4389.984)">
                                        <path
                                            d="M0,74.318Q16.3,54.362,34.624,54.362c18.321,0,15.849-28.732,34.574-28.732s20.157,23.513,35.4,23.513C124.565,49.144,121.684,0,140.388,0c15.076,0,22.485,23.629,33.907,23.629s19.776,9.415,35.214,9.415c10.826,0,27.276-29.967,35.525-30.5"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-medium uk-grid-match" uk-grid>
                <div class="uk-width-1-1 uk-width-1-1@s uk-width-1-2@m uk-width-1-2@l uk-width-1-2@xl">
                    <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-border-rounded">
                        <div class="uk-card-header">
                            <span class="uk-text-muted">REGISTERED CLIENT</span>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-overflow-auto">
                               <div id="gridClient" class="ag-theme-alpine" style="width: 100%; height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-width-1-1@s uk-width-1-2@m uk-width-1-2@l uk-width-1-2@xl">
                    <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-border-rounded">
                        <div class="uk-card-header">
                            <span class="uk-text-muted">REGISTERED OWNER</span>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-overflow-auto">
                            <div id="gridOwner" class="ag-theme-alpine" style="width: 100%; height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-text-center uk-margin-top">
                
            </div>
        </div>
    </div>
</div>
<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/ag-grid-enterprise@30.0.6/dist/ag-grid-enterprise.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js'></script>
<script  src="./js/script.js"></script>
<script  src="./js/admin-client.js"></script>
<script  src="./js/admin-owner.js"></script>
</body>
</html>
