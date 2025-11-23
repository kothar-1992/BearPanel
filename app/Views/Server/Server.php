<?php
include('conn.php');
//include('mail.php');

// for maintainece mode
$sql1 ="select * from onoff where id=1";
$result1 = mysqli_query($conn, $sql1);
$userDetails1 = mysqli_fetch_assoc($result1);

// for ftext and status
$sql2 ="select * from _ftext where id=1";
$result2 = mysqli_query($conn, $sql2);
$userDetails2 = mysqli_fetch_assoc($result2);

// for Features Status
$sql3 = "SELECT * FROM Feature WHERE id=1";
$result3 = mysqli_query($conn, $sql3);
$ModFeatureStatus = mysqli_fetch_assoc($result3);

?>

<?= $this->extend('Layout/Starter') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <?= $this->include('Layout/msgStatus') ?>
    </div>
</div>
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
     <?php if($user->level != 2) : ?>
     <div class="col-lg-6">
             <div class="card mb-3">
            <div class="card-header h6 p-3 bg-dark text-white text-ceanter">𝐒𝐞𝐫𝐯𝐞𝐫 𝐁𝐚𝐬𝐞𝐝 𝐌𝐨𝐝</div>
            <div class="card-body">
                <?= form_open() ?>
                <input type="hidden" name="status_form" value="1">
                <div class="form-group mb-3">
                    <label for="status">Current Maintenance Mode : <font size="2" color ="#c31432"><?= $server_status ?></font></label>
                        <div class="input-group mb-3">
                            <label id="esp" class="hacks">
                                𝐌𝐚𝐢𝐧𝐭𝐞𝐧𝐚𝐧𝐜𝐞 𝐌𝐨𝐝𝐞
                                <div class="switch">
                                    <input type="checkbox" name="radios" id="radio" value="on" <?php if($server_status == "on"){?> checked="checked" <?php } ?>>
                                    <span class="slider round"/>
                                </div>
                            </label>
                        </div>
                        <label for="modname">𝑶𝒇𝒇𝒍𝒊𝒏𝒆 𝑴𝒔𝒈 : <font size="2" color ="#c31432"><?= $server_message ?></font></label>
                      <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Offline Msg</span>
                      </div>
                          <textarea class="form-control" placeholder="𝑆𝑒𝑟𝑣𝑒𝑟 𝑖𝑠 𝑈𝑛𝑑𝑒𝑟 𝑀𝑎𝑖𝑛𝑡𝑎𝑖𝑛𝑎𝑛𝑐𝑒" name = "myInput" id="myInput" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>
                    <?php if ($validation->hasError('modname')) : ?>
                        <small id="help-modname" class="text-danger"><?= $validation->getError('modname') ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-group my-2">
                    <button type="submit" class="btn btn-outline-primary text-dark">𝑼𝒑𝒅𝒂𝒕𝒆</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!----><!----><!----><!----><!----><!----><!----><!---->
   <div class="card mb-3">
            <div class="card-header h6 p-3 bg-dark text-white text-ceanter">𝐌𝐨𝐝 𝐅𝐞𝐚𝐭𝐮𝐫𝐞𝐬</div>
                <div class="card-body">
                    <?= form_open() ?>
                    
                      <input type="hidden" name="feature_form" value="1">
                        <div class="form-group mb-3">
                            <label for="status">Current Status : ESP - <font color ="#c31432"><?= $esp ?></font>  Items - <font color ="#c31432"><?= $item ?></font> AIM - <font color ="#c31432"><?= $aimbot ?></font> SilentAim - <font color ="#c31432"><?= $saim ?></font> BulletTrack - <font color ="#c31432"><?= $bt ?></font> Memory - <font color ="#c31432"><?= $memory ?></font> Floating Texts - <font color ="#c31432"><?= $floating ?></font> Setting - <font color ="#c31432"><?= $setting ?></font></label>
                        <label id="ESP" class="hacks">
                            𝐄𝐒𝐏
                            <div class="switch">
                                <input type="checkbox" name="ESP" id="ESP" value="on" <?php if($esp == "on"){?> checked="checked" <?php } ?>>
                                <span class="slider round"/>
                            </div>
                        </label>
                        <label id="Item" class="hacks">
                            𝐈𝐭𝐞𝐦𝐬
                            <div class="switch">
                                <input type="checkbox" name="Item" id="Item" value="on" <?php if($item == "on"){?> checked="checked" <?php } ?>>
                                <span class="slider round"/>
                            </div>
                        </label>
                        <label id="AIM" class="hacks">
                            𝐀𝐢𝐦-𝐁𝐨𝐭
                            <div class="switch">
                                <input type="checkbox" name="AIM" id="AIM" value="on" <?php if($aimbot == "on"){?> checked="checked" <?php } ?>>
                                <span class="slider round"/>
                            </div>
                        </label>
                        <label id="SilentAim" class="hacks">
                            𝐒𝐢𝐥𝐞𝐧𝐭 𝐀𝐢𝐦
                            <div class="switch">
                                <input type="checkbox" name="SilentAim" id="SilentAim" value="on" <?php if($saim == "on"){?> checked="checked" <?php } ?>>
                                <span class="slider round"/>
                            </div>
                        </label>
                        <label id="BulletTrack" class="hacks">
                            𝐁𝐮𝐥𝐥𝐞𝐭 𝐓𝐫𝐚𝐜𝐤
                            <div class="switch">
                                <input type="checkbox" name="BulletTrack" id="BulletTrack" value="on" <?php if($bt == "on"){?> checked="checked" <?php } ?>>
                                <span class="slider round"/>
                            </div>
                        </label>
                        <label id="Memory" class="hacks">
                         𝐌𝐞𝐦𝐨𝐫𝐲
                            <div class="switch">
                                <input type="checkbox" name="Memory" id="Memory" value="on" <?php if($memory == "on"){?> checked="checked" <?php } ?>>
                                <span class="slider round"/>
                            </div>
                        </label>
                        <label id="Floating" class="hacks">
                            𝐅𝐥𝐨𝐚𝐭𝐢𝐧𝐠 
                            <div class="switch">
                                <input type="checkbox" name="Floating" id="Floating" value="on" <?php if($floating == "on"){?> checked="checked" <?php } ?>>
                                <span class="slider round"/>
                            </div>
                        </label>
                        <label id="Setting" class="hacks">
                            𝐒𝐞𝐭𝐭𝐢𝐧𝐠𝐬
                            <div class="switch">
                                <input type="checkbox" name="Setting" id="Setting" value="on" <?php if ($setting == "on"){?> checked="checked" <?php } ?>>
                                <span class="slider round"/>
                            </div>
                        </label>
                        <div class="form-group my-2">
                           <button type="submit" class="btn btn-outline-danger text-dark">
                            𝐔𝐩𝐝𝐚𝐭𝐞
                           </button>
                        </div>
                    <?= form_close() ?>
                </div>
        </div>
    </div>
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
     <div class="card mb-3">
            <div class="card-header h6 p-3 bg-dark text-white text-ceanter">𝐂𝐡𝐚𝐧𝐠𝐞 𝐌𝐨𝐝 𝐍𝐚𝐦𝐞</div>
                <div class="card-body">
                <?= form_open() ?>
                <input type="hidden" name="modname_form" value="1">
                <div class="form-group mb-3">
                    <label for="modname">Current Mod Name: <font size="2" color ="#c31432"><?php echo $row['modname']; ?></font></label>
                    <input type="text" name="modname" id="modname" class="form-control mt-2" placeholder="𝐸𝑛𝑡𝑒𝑟 𝑌𝑜𝑢𝑟 𝑁𝑒𝑤 𝑀𝑜𝑑 𝑁𝑎𝑚𝑒" aria-describedby="help-modname" REQUIRED>
                    <?php if ($validation->hasError('modname')) : ?>
                        <small id="help-modname" class="text-danger"><?= $validation->getError('modname') ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-group my-2">
                 <button type="submit" class="btn btn-outline-danger text-dark">
                            𝐔𝐩𝐝𝐚𝐭𝐞
                           </button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
    
      <div class="card mb-3">
            <div class="card-header h6 p-3 bg-dark text-white text-ceanter">𝐌𝐨𝐝 𝐕𝐞𝐫𝐬𝐢𝐨𝐧</div>
                <div class="card-body">
                <?= form_open() ?>
                <input type="hidden" name="versionname_form" value="1">
                <div class="form-group mb-3">
                    <label for="versionname">Current Version Name: <font size="2" color ="#c31432"><?= $version ?></font></label>
                    <input type="text" name="versionname" id="versionname" class="form-control mt-2" placeholder="𝐸𝑛𝑡𝑒𝑟 𝑌𝑜𝑢𝑟 𝑁𝑒𝑤  𝑽𝒆𝒓𝒔𝒊𝒐𝒏 𝑁𝑎𝑚𝑒" aria-describedby="help-versionname" REQUIRED>
                    <?php if ($validation->hasError('versionname')) : ?>
                        <small id="help-versionname" class="text-danger"><?= $validation->getError('versionname') ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-group my-2">
               <button type="submit" class="btn btn-outline-danger text-dark">
                            𝐔𝐩𝐝𝐚𝐭𝐞
                           </button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
    
      <div class="card mb-3">
            <div class="card-header h6 p-3 bg-dark text-white text-ceanter">𝐓𝐞𝐥𝐞𝐠𝐫𝐚𝐦</div>
                <div class="card-body">
                <?= form_open() ?>
                <input type="hidden" name="telegram_form" value="1">
                <div class="form-group mb-3">
                    <label for="tg-name">Telegram Channel Name: <font size="2" color ="#c31432"><?= $tgname ?></font></label>
     <input type="text" name="tg-name" id="tg-name" class="form-control mt-2" placeholder="bear_mod" aria-describedby="help-tg-name" REQUIRED>
                    <?php if ($validation->hasError('tg-name')) : ?>
                        <small id="help-tg-name" class="text-danger"><?= $validation->getError('tg-name') ?></small>
                    <?php endif; ?>
                </div>
                
                <div class="form-group mb-3">
                    <label for="tg-dev">Bear Owner: <font size="2" color ="#c31432"><?= $tgdev ?></font></label>
     <input type="text" name="tg-dev" id="tg-dev" class="form-control mt-2" placeholder="kothar1992" aria-describedby="help-tg-dev" REQUIRED>
                    <?php if ($validation->hasError('tg-dev')) : ?>
                        <small id="help-tg-dev" class="text-danger"><?= $validation->getError('tg-dev') ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-group my-2">
            <button type="submit" class="btn btn-outline-danger text-dark">
                            𝐔𝐩𝐝𝐚𝐭𝐞
                           </button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
    
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
  <div class="card mb-3">
            <div class="card-header h6 p-3 bg-dark text-white text-ceanter">𝐂𝐡𝐚𝐧𝐠𝐞 𝐅𝐥𝐨𝐚𝐭𝐢𝐧𝐠 𝐓𝐞𝐱𝐭</div>
                <div class="card-body">
                <?= form_open() ?>
                    <input type="hidden" name="_ftext" value="1">
                    
                        <label for="status">
                            𝐂𝐮𝐫𝐫𝐞𝐧𝐭 𝐌𝐨𝐝 𝐒𝐭𝐚𝐭𝐮𝐬: 
                            <font size="2" color ="#c31432">
                                <?= $fstatus ?>
                            </font>
                        </label>
                        <div class="input-group mb-3">
                            <label id="esp" class="hacks">
                                𝐒𝐚𝐟𝐞 𝐌𝐨𝐝𝐞
                                    <div class="switch">
                                        <input type="checkbox" name="_ftextr" id="_ftextr" value="Safe" <?php if($fstatus == "Safe"){?> checked="checked" <?php } ?>>
                                        <span class="slider round"/>
                                    </div>
                            </label>
                        </div>
                        <div class="form-group mb-3">
                            <label for="_ftext">Current Floating Text: <font size="2" color ="#c31432"><?= $ftext ?></font></label>
                            <input type="text" name="_ftext" id="_ftext" class="form-control mt-2" placeholder="𝐺𝑖𝑣𝑒 𝐹𝑒𝑒𝑑𝑏𝑎𝑐𝑘 𝐸𝑙𝑠𝑒 𝐾𝑒𝑦 𝑅𝑒𝑚𝑜𝑣𝑒𝑑!" aria-describedby="help-_ftext" REQUIRED>
                            <?php if ($validation->hasError('_ftext')) : ?>
                                <small id="help-_ftext" class="text-danger"><?= $validation->getError('_ftext') ?></small>
                            <?php endif; ?>
                        </div>
                        <div class="form-group my-2">
                      <button type="submit" class="btn btn-outline-danger text-dark">
                            𝐔𝐩𝐝𝐚𝐭𝐞
                           </button>
                        </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
    </br>
</div>
<?= $this->endSection() ?>
<script>
document.getElementById("tg-name").addEventListener("input", function() {
    var tgNameValue = this.value;
    var defaultPrefix = "https://telegram.me/";
    document.getElementById("tg-link").value = defaultPrefix + tgNameValue;
});
</script>
