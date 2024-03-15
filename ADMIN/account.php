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
                <a href="home.php"><span class="uk-margin-small-right" uk-icon="home"></span>dashboard</a>
            </li>
            <li class="uk-nav-divider"></li>
            <li class="uk-parent">
                <a><span class="uk-margin-small-right" uk-icon="file-text"></span>Setting</a>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="monthly.php"><span class="uk-margin-small-right" uk-icon="file-text"></span>Monthly Payment</a>
                    </li>
                    <li>
                        <a href="service.php"><span class="uk-margin-small-right" uk-icon="folder"></span>Client Account</a>
                    </li>
                    <li>
                        <a href="account.php"><span class="uk-margin-small-right" uk-icon="comments"></span>Customer Account</a>
                    </li>
                    <li>
                        <a href="payments.php"><span class="uk-margin-small-right" uk-icon="comments"></span>Payment Recieved</a>
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

            <div class="uk-grid uk-grid-medium uk-grid-match" uk-grid>
                <div class="uk-width-12-12 uk-width-12-12@s uk-width-12-12@m uk-width-12-12@l uk-width-12-12@xl">
                    <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-border-rounded">
                        <div class="uk-card-header">
                            <span class="uk-text-muted">CUSTOMER ACCOUNT CONFIGURATION</span>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-overflow-auto">
                               <iframe src="./client/" style="width:100%; height:500px;"></iframe>
                            </div>
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
