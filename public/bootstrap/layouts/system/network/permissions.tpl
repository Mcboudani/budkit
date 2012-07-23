<tpl:layout xmlns="http://www.w3.org/1999/xhtml" xmlns:tpl="http://tuiyo.co.uk/tpl">
    <?php $authorities = $this->get("authorities"); ?>
    <ul id="permissions-tab" class="nav nav-tabs admin-main-tabs">
        <li  class="active"><a data-target="#authorities" data-toggle="tab">Authorities</a></li>
        <li><a data-target="#permissions" data-toggle="tab">Access Permissions</a></li>       
        <li><a data-target="#roles" data-toggle="tab">Edit Roles</a></li>
    </ul>
    <div class="row-fluid">
        <div class="span8">
            <div class="tab-content">
                <div class="tab-pane" id="permissions">
                    <form class="form-horizontal"> 

                        <fieldset>
<!--                            <div class="alert alert-block alert-info">
                                <p><?php echo _('Note that by default, all un-defined permissions are denied. Where thesame permission is defined to the parent, it will be inherited. Also permission heiracchy is Special > Modify > Execute > View, implying an authority with Special permissions can View, Execute and Modify objects in an AoR. An authority with permission to Modify can, automatically View the Objects in this area, etc'); ?></p>
                                                        <a data-toggle="tab" data-target="#addauthorityrole" class="btn">Add a New Role-Based Permission</a>
                            </div>-->
                            <table class="table table-striped">
                                <tbody>
                                    <?php
                                    foreach ($this->get("authorities") as $e):
                                    if (is_array($e['authority']['permissions'])) :
                                    foreach ($e['authority']['permissions'] as $permission): ?>
                                    <tr>
                                        <td class="span1 permission-<?php echo $permission['permission'] ?>"><div ><?php echo _(ucfirst($permission['permission'])) ?></div></td>
                                        <td class="span6 authority-name"><?php echo str_repeat('|--', (int) $e['authority']['indent']) . sprintf(_("<span>%s</span>"), $e['authority']['authority_title']); ?></td>
                                        <td class="span1"><?php echo _(ucfirst($permission['permission_type'])) ?></td>
                                        <td class="span3"><a href="/system/admin/network/authorities.json" rel="modal" title="<?php echo _("Areas affected by this permission") ?>"><span title="<?php echo $permission['permission_area_uri'] ?>" rel="tooltip"><?php echo $permission['permission_title'] ?></span></a></td>             
                                        <td class="span1"><a href="#"><?php echo _('Revoke'); ?></a></td>
                                    </tr>
                                    <?php endforeach;
                                    endif;
                                    endforeach;
                                    ?>         
                                </tbody>
                            </table>
                        </fieldset>
                    </form>
                </div>
                <div class="tab-pane active" id="authorities">
<!--                    <div class="alert alert-block alert-info">
                        <p><?php echo _("An authority is a role in an area of responsibility (AoR). A curator is the head of an authority, who can create and grant permissions to users in that authority, or sub authority. A permission is an authorization to, access, modify or execute an object or operation, granted to an authority or user by a curator. Some authorities are automatically generated. For instance geographical and age authorities, can be used to limit permission by location, and age respectively.") ?></p>
                                        <a data-toggle="tab" data-target="#addauthority" class="btn">Add Authority Group</a>
                    </div>-->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="span11">Authority Name</th>
                                <th class="span1">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->get("authorities") as $i): ?>
                            <tr>
                                <td class="authority-name"><?php echo str_repeat('|--', (int) $i['authority']['indent']) . sprintf(_("<span>%s</span>"), $i['authority']['authority_title']); ?></td>
                                <td><a href="#"><?php echo _('Edit'); ?></a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
                <div class="tab-pane" id="roles">...</div>
                <div class="tab-pane" id="settings">...</div>


            </div>

        </div>
        <div class="span4">
            <div id="addauthority-widget" class="well">
                <h4 class="bottom-pad">Add New Authority Group</h4>
                <form method="POST" action="/system/admin/network/authorities/edit">
                    <fieldset class="no-margin">

                        <div class="control-group">
                            <label class="control-label" for="authority-title"> <?php echo _('Authority Name'); ?></label>
                            <div class="controls row-fluid">
                                <input type="text" name="authority-title" class="input-xxxlarge" placeholder="<?php echo _('e.g Global Investors'); ?>" />
                                <span class="help-block"><?php echo _('A name to identify this group of members'); ?></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="authority-description"> <?php echo _('Authority Description'); ?></label>
                            <div class="controls row-fluid">
                                <textarea name="authority-description" class="input-xxxlarge" placeholder="<?php echo _('e.g All the users who invested in our groups'); ?>" rows="8"></textarea>
                                <span class="help-block"><?php echo _('Optional description'); ?></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="authority-parent"> <?php echo _('Authority Parent'); ?></label>
                            <div class="controls row-fluid">
                                <select name="authority-parent" id="authority-parent" class="input-xxxlarge">
                                    <?php foreach ($authorities as $e): ?>
                                    <option value="<?php echo $e['authority']['authority_id'] ?>">
                                        <?php echo str_repeat(' - ', (int) $e['authority']['indent']) . ' ' . $e['authority']['authority_title'] ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="help-block"><?php echo _('Make this a sub-authority child of another to inherit parent permissions?'); ?></span>
                            </div>
                        </div>
                        <input type="hidden" name="authority-id"  value="" />

                        <div class="form-actions">
                            <button type="submit" class="btn">Add New Authority</button>
                            <button class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>
            </div> 
            <hr />
            <div  id="addauthorityrole-widget" class="well">
                <h4 class="bottom-pad">Add New Permission</h4>
                <form method="POST" action="/system/admin/network/authorities/permissions/add">

                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="area-authority"> <?php echo _('Authority (Group)'); ?></label>
                            <div class="controls">
                                <select name="area-authority"  class="input-xxxlarge">
                                    <?php foreach ($this->get("authorities") as $e): ?>
                                    <option value="<?php echo $e['authority']['authority_id'] ?>"><?php echo str_repeat('|--', (int) $e['authority']['indent']) . ' ' . $e['authority']['authority_title'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="area-title"> <?php echo _('Area of Responsibility (AoR)'); ?></label>
                            <div class="controls">
                                <input type="text" name="area-title" class="input-xxxlarge" placeholder="e.g Marketplace" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="area-uri"> <?php echo _('Area URI'); ?></label>
                            <div class="controls">
                                <input type="text" name="area-uri" class="input-xxxlarge" placeholder="e.g /marketplace/*" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><?php echo _('Role / Permission'); ?></label>
                            <div class="controls">
                                <div class="row-fluid">
                                    <select name="area-action" class="span5">
                                        <option value="view"><?php echo _('View'); ?></option>
                                        <option value="execute"><?php echo _('Execute'); ?></option>
                                        <option value="modify"><?php echo _('Modify'); ?></option>
                                        <option value="special"><?php echo _('Special'); ?></option>
                                    </select>
                                    <select name="area-permission" class="span5">
                                        <option value="inherit"><?php echo _('Inherited'); ?></option>
                                        <option value="allow"><?php echo _('Allowed'); ?></option>
                                        <option value="deny" selected="selected"><?php echo _('Denied'); ?></option>
                                    </select>
                                </div> 
                            </div>
                        </div>
                    </fieldset>
                    <input type="hidden" name="authority-id"  value="" />
                    <div class="form-actions">
                        <button type="submit" class="btn">Add New Permission</button>
                        <button class="btn">Cancel</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</tpl:layout>