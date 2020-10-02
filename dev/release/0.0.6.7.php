<?php require_once $_SERVER['DOCUMENT_ROOT'].'/assets/page.php'; ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>

                    <div class="row">
                        <div class="col-md-3">
                            <?php include $_SERVER['DOCUMENT_ROOT'].'/dev/assets/sidebar.php'; ?>
                        </div>
                        <div class="col-md-9">

                            <div class="card rouded">

                                <div class="card-header bg-primary text-white">
                                    <h5>Community Development Updated <b>0.0.6.7</b></h5>
                                    <h6>Release Date: </h6>
                                </div>

                                <div class="card-body">

                                    <div class="col-md-1"></div>
                                    
                                    <div class="col-md-10">
                                        <br>
                                        <div class="tabbable">
                                            <div class="btn-group" role="group">
                                                <button class="btn btn-success" type="button" href="#tab1" data-toggle="tab">Additions</button>
                                                <button class="btn btn-warning" type="button" href="#tab2" data-toggle="tab">Updates</button>
                                                <button class="btn btn-danger" type="button" href="#tab3" data-toggle="tab">Removals</button>
                                                <button class="btn btn-info" type="button" href="#tab4" data-toggle="tab">Tips</button>
                                            </div>
                                            
                                            <br><br>

                                            <div class="tab-content">
                                                <!-- ADDITIONS -->
                                                <div class="tab-pane active" id="tab1">

                                                    <div class="card border border-10 border-success rounded">
                                                        <div class="card-body">
                                                            
                                                            <div class="row">

                                                                <div class="col-md-1">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-square text-success" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                                        <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h10a1.5 1.5 0 0 0 1.5-1.5V8a.5.5 0 0 0-1 0v5a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 3v10z"/>
                                                                    </svg>
                                                                </div>

                                                                <div class="col-md-11">
                                                                    LSPD Vehicle Package
                                                                    

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- UPDATES -->
                                                <div class="tab-pane" id="tab2">

                                                </div>

                                                <!-- REMOVALS -->
                                                <div class="tab-pane" id="tab3">

                                                </div>

                                                <!-- TPIS -->
                                                <div class="tab-pane" id="tab4">

                                                </div>
                                            </div>

                                            <br>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div> 
	</div>
</div>

