<!DOCTYPE html>
<html>
    <title>Student Resume</title>
    <head><meta name=viewport content="width=device-width, initial-scale=1,user-scalable=no">
        <meta charset="utf8">
        <?php echo css_asset('bootstrap.min.css'); ?>
        <?php echo js_asset('jquery.min.js'); ?>
        <?php echo js_asset('bootstrap.min.js'); ?> 

        <script language="javascript">
            /* script java บังคับให้ผู้ใช้งานป้อนได้เฉพาะตัวเลขเท่านั้น
             * 
             */
            function chkNum() {
               
                if (isNaN(document.frm_login.uname.value)){
           
                    alert('รหัสประจำตัวนักศึกษาเท่านั้น');
                              return false;
                                }               
            }
        </script>

    </head>

    <body>
        <div class="container">
            <br><br>
            <center><?php echo image_asset('rru_logo.png', null, array('width' => 160, 'height' => 200)); ?></center>

            <br><br>
            <div class="container">

                <form name="frm_login" method="post" action="<?php echo site_url('login/chk_login'); ?>" OnSubmit="return chkNum();">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <!-- input uname ใช้ javascript func-> CheckNum() ในการตรวจสอบ -->
                        <input id="uname" type="text" class="form-control" name="uname" placeholder="ชื่อผู้ใช้งานรหัสประจำตัวนักศึกษา" >
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
                    </div>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-success">&nbsp; LOGIN &nbsp;</button>
                    </center>
                </form>

            </div>
            <br><br>
            <!-- ส่วนของปุ่ม ทำงานสมัครและลืมรหัสผ่าน -->
            <div class="container">
                <center>
                    <a href="<?php echo site_url('register_std'); ?>"> <button type="button" class="btn btn-primary">สมัครสมาชิก</button></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-danger">ลืมรหัสผ่าน</button>
                </center>
            </div>
        </div>
    </body>