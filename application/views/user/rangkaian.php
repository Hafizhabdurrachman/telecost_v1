<style type="text/css">
    table td {
        width: 50px;
        height: 50px;
    }
    .atas {
        border-top: 2px solid;
    }
    .bawah {
        border-bottom: 2px solid;
    }
    .kanan {
        border-right: 2px solid;
    }
    .kiri {
        border-left: 2px solid;
    }

    .button1 {
        height: 50px;
        width: 100px;
    }
    .button2{
        height: 40px;
        width: 50px;
    }
</style>



 <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">

                                <div class="row">  
                                <!-- Rangkaian -->                         
                                       <div class="col-lg-6 col-md-6">
                                        <div id="extra-area-chart" style="height: 500px;">               
                                            <table>
                                                <tr style="height: 200px;">
                                                    <td colspan="3" class="atas kiri kanan" style="text-align: center" >

                                                        <?php 
                                                        if ($status_1 == '0') { ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_dapur');?>" method="POST">
                                                            <input type="hidden" name="status_1" value="<?php echo $status_1;?>">
                                                            <button class="btn btn-custon-rounded-two btn-danger" style="margin-bottom: 20px;"><i class="fa fa-times edu-checked-pro"></i> Lampu Dapur 
                                                            </button>
                                                            </form>
                                                        <?php }

                                                       else{ ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_dapur');?>" method="POST">
                                                            <input type="hidden" name="status_1" value="<?php echo $status_1;?>">
                                                            <button class="btn btn-custon-rounded-two btn-success" style="margin-bottom: 20px;box-shadow: 0px 10px 15px 10px #5cb85c;"><i class="fa fa-check edu-checked-pro"></i> Lampu Dapur 
                                                            </button>
                                                            </form>
                                                         <?php } ?>

                                                        <br>
                                                        <span>Kamar Tidur 1</span>
                                                        <br>

                                                        <?php 
                                                        if ($status_2 == '0') { ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_kt1');?>" method="POST">
                                                            <input type="hidden" name="status_2" value="<?php echo $status_2;?>">
                                                            <button class="btn btn-custon-rounded-two btn-danger"><i class="fa fa-times edu-checked-pro"></i> Lampu KT 1
                                                            </button>
                                                            </form>
                                                        <?php }

                                                       else{ ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_kt1');?>" method="POST">
                                                            <input type="hidden" name="status_2" value="<?php echo $status_2;?>">
                                                            <button class="btn btn-custon-rounded-two btn-success" style="box-shadow: 0px 10px 15px 10px #5cb85c;"><i class="fa fa-check edu-checked-pro"></i> Lampu KT 1
                                                            </button>
                                                            </form>
                                                         <?php } ?>

                                                    </td>
                                                    <td colspan="3" class="atas kanan" style="text-align: center">
                                                        <span>Kamar tidur 2</span><br><br>

                                                        <?php 
                                                        if ($status_3 == '0') { ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_kt2');?>" method="POST">
                                                            <input type="hidden" name="status_3" value="<?php echo $status_3;?>">
                                                            <button class="btn btn-custon-rounded-two btn-danger" style="margin-bottom: 20px;"><i class="fa fa-times edu-checked-pro"></i> Lampu KT 2
                                                            </button>
                                                            </form>
                                                        <?php }

                                                       else{ ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_kt2');?>" method="POST">
                                                            <input type="hidden" name="status_3" value="<?php echo $status_3;?>">
                                                            <button class="btn btn-custon-rounded-two btn-success" style="margin-bottom: 20px;box-shadow: 0px 10px 15px 10px #5cb85c;"><i class="fa fa-check edu-checked-pro"></i> Lampu KT 2
                                                            </button>
                                                            </form>
                                                         <?php } ?>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="kiri"></td>
                                                    <td class="atas">Ruang Makan</td>
                                                    <td class="atas"></td>
                                                    <td></td>
                                                    <td class="atas"></td>
                                                    <td class="atas kanan bawah" >

                                                        <?php 
                                                        if ($status_5 == '0') { ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_km');?>" method="POST">
                                                            <input type="hidden" name="status_5" value="<?php echo $status_5;?>">
                                                            <button class="btn btn-custon-rounded-two btn-danger" style="margin-right:2px;"><i class="fa fa-times edu-checked-pro"></i> KM 1
                                                            </button>
                                                            </form>
                                                        <?php }

                                                       else{ ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_km');?>" method="POST">
                                                            <input type="hidden" name="status_5" value="<?php echo $status_5;?>">
                                                            <button class="btn btn-custon-rounded-two btn-success" style="margin-right:2px;box-shadow: 0px 10px 15px 10px #5cb85c;"><i class="fa fa-check edu-checked-pro"></i> KM1
                                                            </button>
                                                            </form>
                                                         <?php } ?>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="kiri"></td>
                                                    <td>

                                                        <?php 
                                                        if ($status_4 == '0') { ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_rm');?>" method="POST">
                                                            <input type="hidden" name="status_4" value="<?php echo $status_4;?>">
                                                            <button class="btn btn-custon-rounded-two btn-danger" style="margin-bottom: 20px;"><i class="fa fa-times edu-checked-pro"></i> Lampu RM
                                                            </button>
                                                            </form>
                                                        <?php }

                                                       else{ ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_rm');?>" method="POST">
                                                            <input type="hidden" name="status_4" value="<?php echo $status_4;?>">
                                                            <button class="btn btn-custon-rounded-two btn-success" style="margin-bottom: 20px;box-shadow: 0px 10px 15px 10px #5cb85c;"><i class="fa fa-check edu-checked-pro"></i> Lampu RM
                                                            </button>
                                                            </form>
                                                         <?php } ?>

                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td style="text-align: center">Ruang Keluarga</td>
                                                    <td class="kanan"></td>

                                                </tr>
                                                <tr>
                                                    <td class="kiri bawah"></td>
                                                    <td class="bawah"></td>
                                                    <td class="bawah"></td>
                                                    <td class="kiri"></td>
                                                    <td>

                                                        <?php 
                                                        if ($status_6 == '0') { ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_rk');?>" method="POST">
                                                            <input type="hidden" name="status_6" value="<?php echo $status_6;?>">
                                                            <button class="btn btn-custon-rounded-two btn-danger" ><i class="fa fa-times edu-checked-pro"></i> Lampu RK
                                                            </button>
                                                            </form>
                                                        <?php }

                                                       else{ ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_rk');?>" method="POST">
                                                            <input type="hidden" name="status_6" value="<?php echo $status_6;?>">
                                                            <button class="btn btn-custon-rounded-two btn-success" style="box-shadow: 0px 10px 15px 10px #5cb85c;"><i class="fa fa-check edu-checked-pro"></i> Lampu RK
                                                            </button>
                                                            </form>
                                                         <?php } ?>

                                                    </td>
                                                    <td class="kanan"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td ></td>
                                                    <td class="kiri bawah"></td>
                                                    <td></td>
                                                    <td class="kanan bawah"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td rowspan="2" colspan="3" class="kanan kiri bawah" style="text-align: center; ">
                                                        Ruang Tamu
                                                        <br>

                                                        <?php 
                                                        if ($status_7 == '0') { ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_rt');?>" method="POST">
                                                            <input type="hidden" name="status_7" value="<?php echo $status_7;?>">
                                                            <button class="btn btn-custon-rounded-two btn-danger" ><i class="fa fa-times edu-checked-pro"></i> Lampu RT
                                                            </button>
                                                            </form>
                                                        <?php }

                                                       else{ ?>
                                                            <form action="<?php echo base_url('Rangkaian/lampu_rt');?>" method="POST">
                                                            <input type="hidden" name="status_7" value="<?php echo $status_7;?>">
                                                            <button class="btn btn-custon-rounded-two btn-success" style="box-shadow: 0px 10px 15px 10px #5cb85c;"><i class="fa fa-check edu-checked-pro"></i> Lampu RT
                                                            </button>
                                                            </form>
                                                         <?php } ?>
                                                        <!-- <button class="btn btn-custon-rounded-two btn-danger"><i class="fa fa-times edu-checked-pro"></i> Lampu RT</button> -->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Perhitungan Harga -->
                                    <div class="col-lg-6 col-md-6" >                          
                                        <div class="traffice-source-area mg-b-50">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                                                        <div class="white-box analytics-info-cs ">
                                                            <h3 class="box-title" style="font-size:40px;"><i class="fa fa-bolt"></i> Biaya Listrik</h3>
                                                            <ul class="list-inline two-part-sp">
                                                                <li>
                                                                    <div class="col-lg-6 col-md-6" > 
                                                                    <div id="sparklinedash"></div>
                                                                </div>
                                                                </li>
                                                                <li class="text-right sp-cn-r" style="font-size:40px;">Rp&ensp;<span class="counter text-success"><?php echo number_format($biaya_total,2);?></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: left;margin-top: 10%;">
                                                        <div class="white-box analytics-info-cs ">
                                                            <h3 class="box-title" style="font-size:20px;"><i class="fa fa-tasks"></i> Detail Biaya Listrik</h3>
                                                            <ol>
                                                                <li class="text-left sp-cn-r" style="font-size:20px;">Lampu Dapur =&ensp;Rp&ensp;<span class="counter text-success"><?php echo number_format($biaya_1,2);?></span>
                                                                </li>
                                                                <li class="text-left sp-cn-r" style="font-size:20px;">Lampu KT 1 =&ensp;Rp&ensp;<span class="counter text-success"><?php echo number_format($biaya_2,2);?></span>
                                                                </li>
                                                                <li class="text-left sp-cn-r" style="font-size:20px;">Lampu KT 2 =&ensp;Rp&ensp;<span class="counter text-success"><?php echo number_format($biaya_3,2);?></span>
                                                                </li>
                                                                <li class="text-left sp-cn-r" style="font-size:20px;">Lampu RM =&ensp;Rp&ensp;<span class="counter text-success"><?php echo number_format($biaya_4,2);?></span>
                                                                </li>
                                                                <li class="text-left sp-cn-r" style="font-size:20px;">Lampu KM 1 =&ensp;Rp&ensp;<span class="counter text-success"><?php echo number_format($biaya_5,2);?></span>
                                                                </li>
                                                                <li class="text-left sp-cn-r" style="font-size:20px;">Lampu RK =&ensp;Rp&ensp;<span class="counter text-success"><?php echo number_format($biaya_6,2);?></span>
                                                                </li>
                                                                <li class="text-left sp-cn-r" style="font-size:20px;">Lampu RT =&ensp;Rp&ensp;<span class="counter text-success"><?php echo number_format($biaya_7,2);?></span>
                                                                </li>
                                                            </ol>

                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="<?php echo base_url('Rangkaian/hitung_biaya');?>" method="POST">
                                                    <button type="submit">Hitung</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>

                           



                        </div>
                    </div>
                </div>
            </div>
        </div>

        