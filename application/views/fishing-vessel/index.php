<div class="row">
   <!--
    <div class="col-4"></div>
    <h1 class="col-4">Hello, Fisherman.</h1>
    <div class="col-4"></div>
-->
<!-- คือการใช้คำสั่งสำหรับแบ่งหน้าขนาดเล็ก ให้มี 12 คอลัมภ์-->
<!--
    <div class="col-lg-4 col-sm-12" style="background-color:blue"></div>
    <h1 class="col-lg-4 col-sm-12">Hello, Fisherman.</h1>
    <div class="col-lg-4 col-sm-12" style="background-color:green"></div>
    -->
<!--  
    <div class="col-lg-4 col-sm-12 col-md-1" style="background-color:blue"></div>
    <h1 class="col-lg-4 col-sm-12 col-md-10">Hello, Fisherman.</h1>
    <div class="col-lg-4 col-sm-12 col-md-1" style="background-color:green"></div>
-->
<?php
    foreach($vessels as $ship): //วันตัวแรกใน array  $data['vessels'] = $result; จนถึงตัวสุดท้านใน array

?>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <?php echo $ship['Name'] ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"> 
                    <?php echo $ship['Country_ID'] ?>
                </h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                
            <?php
                $hidden['vesselID'] = $ship['id'];
                echo form_open('fishingvessel/delete_vessel','',$hidden);
            ?>
                <input type="submit" name="submit" value="ลบ" class="btn-primary">
            </form>
            </div>
            
        </div>
    </div>
<?php
 endforeach 

?>


</div>