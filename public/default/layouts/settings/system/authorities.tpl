<tpl:layout xmlns="http://www.w3.org/1999/xhtml" xmlns:tpl="http://budkit.org/tpl">
    <tpl:condition data="gallery.hidetitle" test="boolean" value="0">
        <div class="navbar navbar-subnav no-margin">
            <div class="navbar-inner padding-left-half no-margin">
                <a class="topic"><tpl:element type="text" data="page.title">Authorities</tpl:element></a>
            </div>
        </div>
    </tpl:condition>
    <div class="padding">  
        <div class="clearfix">
            <form class="pull-right no-margin form-horizontal" action="/settings/system/permissions/authorities/edit" method="POST">   
                <input type="text" name="authority-title" class="span2" placeholder="Group Name" />
                <select name="authority-parent" id="authority-parent">
                    <option value="">Select Parent</option>
                    <tpl:loop data="authorities" id="authorities">
                        <option value="${authority_id}">
                            <tpl:loop limit="indent"><span class="indenter">|--</span></tpl:loop>
                            <span><tpl:element type="text" data="authority_title" /></span>
                        </option>
                    </tpl:loop>
                </select>
                <input type="hidden" name="authority-description" />
                <button type="submit" class="btn">Add New Group</button>
            </form>
            <ul class="nav nav-pills no-margin">
                <li class="highlighted"><a href="/settings/system/permissions/add" >Add Permission Rule</a></li>
            </ul>
        </div>
        <hr />
        <div class="widget">
            <div class="widget-head"><span class="widget-title">Groups</span></div>
            <div class="widget-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="span10">Name</th>    
                            <th class="span1" align="center">Members</th>
                            <th class="span1" align="center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tpl:loop data="authorities" id="authority-groups">
                            <tr>
                                <td class="authority-name">
                                    <tpl:loop limit="indent"><span class="indenter">|--</span></tpl:loop>
                                    <a href="#"><tpl:element type="text" data="authority_title" /></a>
                                </td>
                                <td align="center">0 members</td>
                                <td align="center"><a href="#">Edit</a></td>
                            </tr> 
                        </tpl:loop>
                    </tbody>
                </table>
            </div>            
        </div>
    </div>
</tpl:layout>
