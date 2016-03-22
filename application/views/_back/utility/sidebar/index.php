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
                                <div class="input-field col s12">
                                    <input id="label" type="text" name="txtLabel" length="45"/>
                                    <label for="label">Label</label>
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
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="John Doe" id="name2" type="text">
                                    <label for="first_name">Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="john@domainname.com" id="email2" type="email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="YourPassword" id="password2" type="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea placeholder="Oh WoW! Let me check this one too." id="message2" class="materialize-textarea"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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