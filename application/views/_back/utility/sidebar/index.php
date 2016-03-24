<div class="section">
    <p class="caption">Includes predefined classes for easy layout options.</p>

    <div class="divider"></div>
    <!--Basic Form-->
    <div id="basic-form" class="section">
        <div class="row">
            <div class="col s12 m12 l6">
                <div class="card-panel">
                    <h4 class="header2">Setting Side Bar</h4>
                    <div class="row">
                        <form class="col s12" method="POST" action="<?php echo site_url('back/utility/insertMenuBack');?>">
                            <div class="row">
                                <div class="input-field col s8">
                                    <input id="label" type="text" name="txtLabel" length="45"/>
                                    <label for="label">Label</label>
                                </div>
                                
                                <div class="input-field col s4">
                                    <input id="serial" type="text" name="txtSerialNum" />
                                    <label for="serial">Serial</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s11">
                                    <select id="icon" name="selIcon" onchange="iconChange(this.value)">
                                        <option value="0" disabled selected>Choose icon</option>
                                        <?php foreach ($_mdiList as $li): $mdiLi = ucwords(strtolower(str_replace('-', ' ', str_replace('mdi-', '', $li))));?>
                                        <option value="<?php echo $li;?>"><?php echo $mdiLi;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="icon">Icon</label>
                                </div>
                                <div class="input-field col s1">
                                    <i id="reviewIcon" class="mdi-hardware-keyboard-alt"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="link" type="text" name="txtLink"/>
                                    <label for="link">Link/URL</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select id="header_id" name="selHeader">
                                        <option value="0" disabled selected>Choose header</option>
                                        <option value="0">Top Level</option>
                                        <?php foreach($_getMenu as $row): ?>
                                        <option value="<?php echo $row->id_menu;?>"><?php echo $row->label_menu;?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <label for="header_id">Header</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Form with placeholder -->
            <div class="col s12 m12 l6">
                <div class="card-panel">
                    <h4 class="header2">Form with placeholder</h4>
                    <div class="row">
                        <div class="col s12">
                            <table class="hoverable striped" style="height: 10px; overflow-y: scroll;">
                                <thead>
                                    <tr>
                                        <th style="width: 15px;">Icon</th>
                                        <th style="width: 50%;">Label</th>
                                        <th class="center-align">Serial Number</th>
                                        <th class="center-align">Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_getMenu1 as $row1): ?>
                                    <tr>
                                        <td><i class="<?php echo $row1->icon_menu;?>"></i></td>
                                        <td><?php echo $row1->label_menu;?></td>
                                        <td class="center-align"><?php echo $row1->serial_number;?></td>
                                        <td class="center-align"><?php echo $row1->level_menu;?></td>
                                    </tr>
                                        <?php foreach ($_getMenu2 as $row2): ?>
                                            <?php if($row2->header_menu == $row1->id_menu): ?>
                                            <tr style="font-size: smaller;">
                                                <td><i class="<?php echo $row2->icon_menu;?>"></i></td>
                                                <td><?php echo $row2->label_menu;?></td>
                                                <td class="center-align"><?php echo $row2->serial_number;?></td>
                                                <td class="center-align"><?php echo $row2->level_menu;?></td>
                                            </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script>
    function iconChange(val){
        document.getElementById('reviewIcon').className = val;
    }
</script>