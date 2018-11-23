  <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div style="text-align: center;">
                                    <span style="font-size: 25px;"><b><i class="fa fa-info-circle"></i> Informasi Detail</b></span>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                    <label class="login2 pull-right pull-right-pro"><i class="fa fa-ticket"></i> Token Anda</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" disabled class="form-control" placeholder="<?php echo $_SESSION['token']; ?>" />
                                                </div>
                                            </div>
                                        </div>  
                                    </div> 
                                    <br><br><br>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                    <label class="login2 pull-right pull-right-pro"><i class="fa fa-dashboard"></i> Bayas Daya Rumah</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="batas_daya" value="<?php echo $_SESSION['batas_daya']?>">
                                                        <span class="input-group-addon">Watt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                    

                                </div>
                            </div>
                           
                            <div id="extra-area-chart" style="height: 100px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    


<!-- Pengaturan Watt/lampu -->
 <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div style="text-align: center;">
                                    <span style="font-size: 25px;"><b><i class="fa fa-lightbulb-o"></i> Detail Daya Lampu</b></span>
                                </div>
                                <br><br>
                                <div class="row">
                                    <form action="<?php echo base_url('Setting/update_daya');?>" method="POST">
                                    <?php foreach ($lampu as $key) { ?>   
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 10px;">
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
                                                    <label class="login2 pull-right pull-right-pro"><?php echo $key->nama_lampu; ?></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="input-group">
                                                        <input type="text" name="<?php echo $key->kode; ?>" class="form-control" value="<?php echo $key->daya; ?>" >
                                                        <span class="input-group-addon">Watt</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div> 
                                     <?php } ?>
                                     <div style="text-align: right;padding-top:15%;padding-right: 5%; ">
                                     <button type="submit" class="btn btn-custon-four btn-primary" style=""><i class="fa fa-refresh"></i> Update</button>
                                     </div>
                                     </form>
                                </div>
                            </div>
                           
                            <div id="extra-area-chart" style="height: 100px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    