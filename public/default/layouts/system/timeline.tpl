<tpl:layout  name="timeline" xmlns="http://www.w3.org/1999/xhtml" xmlns:tpl="http://tuiyo.co.uk/tpl">
    <div class="row-fluid">
        <div class="span5">
            <div class="border-right right-pad">
                <form action="/system/activity/create" method="POST">
                    <fieldset class="timeline-item-publisher no-margin">
                        <div class="btn-toolbar no-margin pull-left">

                            <div class="btn-group">
                                <button class="btn">Public timeline</button>
                                <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-toolbar no-margin pull-right">
                            <div class="btn-group">
                                <a class="btn" href="/system/commands/upload.raw" data-toggle="modal" data-target="#upload-tool"><i class="icon icon-picture"></i></a>
                                <button class="btn" type="button"><i class="icon icon-film"></i></button>
                                <button class="btn" type="button"><i class="icon icon-link"></i></button>
                                <button class="btn" type="button"><i class="icon icon-music"></i></button>
                                <button class="btn" type="button"><i class="icon icon-file"></i></button>
                                <button class="btn" type="button"><i class="icon icon-check"></i></button>
                                <button class="btn" type="button"><i class="icon icon-map-marker"></i></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <hr />
                <ol class="timeline-items" id="main-timeline">
                    <tpl:loop data="activities.items">
                        <li class="timeline-item-li">
                            <div class="timeline-item-container">
                                <div class="timeline-item-header">
                                    <a class="publisher-profile" href="/member/profile/view/${actor.uri}">
                                        <img class="profile-avatar" src="${actor.image.url}" alt="${actor.displayName}" />
                                        <strong class="profile-name"><tpl:element type="text" data="actor.displayName" /></strong>                                      
                                    </a>
                                    <a href="/system/activity/view/${uri}" title="${published}" class="published-time"><tpl:element type="time" data="published" /></a>
                                    <ul class="actions">
                                        <li class="action-like"><a href="/system/activity/favourite/${uri}"><span class="like" title="Like">Like</span></a></li>
                                        <li class="action-reply"><a href="/system/activity/reply/${uri}"><span class="reply" title="Reply">Reply</span></a></li>
                                        <li class="action-delete"><a href="/system/activity/delete/${uri}"><span class="delete" title="Delete">Delete</span></a></li>
                                    </ul>
                                </div>
                                <div class="timeline-item-body"><tpl:element type="text" data="content" /></div>
                                <!-- <div class="timeline-item-media">
                                     <div class="timeline-item-gallery carousel slide" id="item-slider-id">
                                         <div class="carousel-inner">
                                             <div class="item active">
                                                 <img src="http://lorempixel.com/550/300/city/6" />
                                                 <div class="carousel-caption">This is an interesing picture caption</div>
                                             </div>
                                         </div>
                                         <a class="left carousel-control" href="#item-slider-id" data-slide="prev"><i class="icon icon-chevron-left icon-32"></i></a>
                                         <a class="right carousel-control" href="#item-slider-id" data-slide="next"><i class="icon icon-chevron-right icon-32"></i></a>
                                     </div>
                                 </div>
                                 <div class="timeline-item-footer">
                                     <div class="context"><a class="profile-link" href="/#!/drstonyhills" data-user-id="15968381"><span>View 38 responses</span></a></div>
                                 </div>-->
                            </div>
                        </li>
                    </tpl:loop>   

                    <!--   
                       <li class="timeline-item-li">
                           <div class="timeline-item-container">
                               <div class="timeline-item-header">
                                   <a class="publisher-profile" href="#">
                                       <img class="profile-avatar" src="http://lorempixel.com/48/48/people/10" alt="Livingstone Fultang" />
            
                                       <strong class="profile-name">Livingstone Fultang</strong>
                                       <span class="profile-nameid">@drstonyhills</span>                      
                                   </a>
                                   <a class="timeline-item-source" href="#"><small class="label label-info">twitter</small></a>
                                   <a href="/#!/Torettox84/status/161005839744897025" title="8:42 AM - 22 Jan 12" class="published-time"><span class="_timestamp" data-time="1327221758000" data-long-form="true">1h ago</span></a>
            
                                   <ul class="actions">
                                       <li class="action-like"><a href="#"><span class="like" title="Like">Like</span></a></li>
                                       <li class="action-reply"><a href="#"><span class="reply" title="Reply">Reply</span></a></li>
            
                                       <li class="action-delete"><a href="/system/activity/delete"><span class="delete" title="Delete">Delete</span></a></li>
            
                                   </ul>
                               </div>
                               <div class="timeline-item-body">Is it just me or is the latest chrome having issues loading assets? whats that with all the Content-Type: null ? for css, js and most files</div>
                               <div class="timeline-item-media">
                                   <div class="timeline-item-gallery carousel slide" id="item-slider-id">
                                       <div class="carousel-inner">
                                           <div class="item active">
                                               <img src="http://lorempixel.com/550/300/city/6" />
                                               <div class="carousel-caption">This is an interesing picture caption</div>
                                           </div>
                                       </div>
                                       <a class="left carousel-control" href="#item-slider-id" data-slide="prev"><i class="icon icon-chevron-left icon-32"></i></a>
                                       <a class="right carousel-control" href="#item-slider-id" data-slide="next"><i class="icon icon-chevron-right icon-32"></i></a>
                                   </div>
                               </div>
                               <div class="timeline-item-footer">
                                   <div class="context"><a class="profile-link" href="/#!/drstonyhills" data-user-id="15968381"><span>View 38 responses</span></a></div>
                               </div>
                           </div>
                       </li>
                       <li class="timeline-item-li">
                           <div class="timeline-item-container">
                               <div class="timeline-item-header">
                                   <a class="publisher-profile" href="#">
                                       <img class="profile-avatar" src="http://lorempixel.com/48/48/people/5" alt="Livingstone Fultang" />
            
                                       <strong class="profile-name">Livingstone Fultang</strong>
                                       <span class="profile-nameid">@drstonyhills</span>
                                   </a>
                                   <small class="published-time">
                                       <a href="/#!/Torettox84/status/161005839744897025" title="8:42 AM - 22 Jan 12"><span class="_timestamp" data-time="1327221758000" data-long-form="true">1h ago</span></a>
                                   </small>
                                   <ul class="actions">
                                       <li class="action-like"><a href="#"><span class="like" title="Like">Like</span></a></li>
                                       <li class="action-reply"><a href="#"><span class="reply" title="Reply">Reply</span></a></li>
            
                                       <li class="action-delete"><a href="/system/activity/delete"><span class="delete" title="Delete">Delete</span></a></li>
            
                                   </ul>
                               </div>
                               <div class="timeline-item-body">Is it just me or is the latest chrome having issues loading assets? whats that with all the Content-Type: null ? for css, js and most files</div>
                               <div class="timeline-item-footer">
                                   <div class="context"><a class="profile-link" href="/#!/drstonyhills" data-user-id="15968381"><span>View 38 responses</span></a></div>
                               </div>
                           </div>
                       </li>
                       <li class="timeline-item-li">
                           <div class="timeline-item-container">
                               <div class="timeline-item-header">
                                   <a class="publisher-profile" href="#">
                                       <img class="profile-avatar" src="http://lorempixel.com/48/48/people/3" alt="Livingstone Fultang" />
                                       <strong class="profile-name">Livingstone Fultang</strong>
                                       <span class="profile-nameid">@drstonyhills</span>
                                   </a>
                                   <small class="published-time">
                                       <a href="/#!/Torettox84/status/161005839744897025" title="8:42 AM - 22 Jan 12"><span class="_timestamp" data-time="1327221758000" data-long-form="true">1h ago</span></a>
                                   </small>
                                   <ul class="actions">
                                       <li class="action-like"><a href="#"><span class="like" title="Like">Like</span></a></li>
                                       <li class="action-reply"><a href="#"><span class="reply" title="Reply">Reply</span></a></li>
            
                                       <li class="action-delete"><a href="/system/activity/delete"><span class="delete" title="Delete">Delete</span></a></li>
            
                                   </ul>
                               </div>
                               <div class="timeline-item-body">Is it just me or is the latest chrome having issues loading assets? whats that with all the Content-Type: null ? for css, js and most files</div>
                               <div class="timeline-item-media"></div>
                               <div class="timeline-item-footer">
                                   <div class="context"><a class="profile-link" href="/#!/drstonyhills" data-user-id="15968381"><span>View 38 responses</span></a></div>
                               </div>
            
                           </div>
                           <div class="timeline-item-interaction">
                               <ul class="timeline-items">
                                   <li class="timeline-item-li">
                                       <div class="timeline-item-container">
                                           <div class="timeline-item-header">
                                               <a class="publisher-profile" href="#">
                                                   <img class="profile-avatar" src="http://lorempixel.com/48/48/people/9" alt="Livingstone Fultang" />
                                                   <strong class="profile-name">Livingstone Fultang</strong>
                                                   <span class="profile-nameid">@drstonyhills</span>
                                               </a>
                                               <small class="published-time">
                                                   <a href="/#!/Torettox84/status/161005839744897025" title="8:42 AM - 22 Jan 12"><span class="_timestamp" data-time="1327221758000" data-long-form="true">1h ago</span></a>
                                               </small>
                                               <ul class="actions">
                                                   <li class="action-like"><a href="#"><span class="like" title="Like">Like</span></a></li>
                                                   <li class="action-reply"><a href="#"><span class="reply" title="Reply">Reply</span></a></li>
            
                                                   <li class="action-delete"><a href="/system/activity/delete"><span class="delete" title="Delete">Delete</span></a></li>
            
                                               </ul>
                                           </div>
                                           <div class="timeline-item-body">This is a comment</div>
                                           <div class="timeline-item-footer">
                                               <div class="context"></div>
                                           </div>
                                       </div>
                                   </li>
                                   <li class="timeline-item-li">
                                       <div class="timeline-item-container">
                                           <div class="timeline-item-header">
                                               <a class="publisher-profile" href="#">
                                                   <img class="profile-avatar" src="http://lorempixel.com/48/48/people/4" alt="Livingstone Fultang" />
                                                   <strong class="profile-name">Livingstone Fultang</strong>
                                                   <span class="profile-nameid">@drstonyhills</span>
                                               </a>
                                               <small class="published-time">
                                                   <a href="/#!/Torettox84/status/161005839744897025" title="8:42 AM - 22 Jan 12"><span class="_timestamp" data-time="1327221758000" data-long-form="true">1h ago</span></a>
                                               </small>
                                               <ul class="actions">
                                                   <li class="action-like"><a href="#"><span class="like" title="Like">Like</span></a></li>
                                                   <li class="action-reply"><a href="#"><span class="reply" title="Reply">Reply</span></a></li>
            
                                                   <li class="action-delete"><a href="/system/activity/delete"><span class="delete" title="Delete">Delete</span></a></li>
            
                                               </ul>
                                           </div>
                                           <div class="timeline-item-body">This is a comment</div>
                                           <div class="timeline-item-footer">
                                               <div class="context"></div>
                                           </div>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                       </li>
                       <li class="timeline-item-li">
                           <div class="timeline-item-container">
                               <div class="timeline-item-header">
                                   <a class="publisher-profile" href="#">
                                       <img class="profile-avatar" src="http://lorempixel.com/48/48/people/9" alt="Livingstone Fultang" />
                                       <strong class="profile-name">Livingstone Fultang</strong>
                                       <span class="profile-nameid">@drstonyhills</span>
                                   </a>
                                   <small class="published-time">
                                       <a href="/#!/Torettox84/status/161005839744897025" title="8:42 AM - 22 Jan 12"><span class="_timestamp" data-time="1327221758000" data-long-form="true">1h ago</span></a>
                                   </small>
                                   <ul class="actions">
                                       <li class="action-like"><a href="#"><span class="like" title="Like">Like</span></a></li>
                                       <li class="action-reply"><a href="#"><span class="reply" title="Reply">Reply</span></a></li>
            
                                       <li class="action-delete"><a href="/system/activity/delete"><span class="delete" title="Delete">Delete</span></a></li>
                                   </ul>
                               </div>
                               <div class="timeline-item-body">Is it just me or is the latest chrome having issues loading assets? whats that with all the Content-Type: null ? for css, js and most files</div>
                               <div class="timeline-item-media">
                                   <hr />
                                   <div class="row-fluid">  
                                       <div class="span3"><img src="http://lorempixel.com/120/120/sports/5" /></div> 
                                       <div class="span9">
                                           <blockquote>
                                               <h4><a href="#">Redknapp admits Modric may leave</a></h4>
                                               <div>Tottenham manager Harry Redknapp says Luka Modric may leave White Hart Lane when the transfer window opens.</div>
                                               <small class="author">Some Author</small>
                                           </blockquote>
                                       </div>
                                   </div>
                               </div>
                               <div class="timeline-item-footer">
                                   <div class="context"><a class="profile-link" href="/#!/drstonyhills" data-user-id="15968381"><span>View 38 responses</span></a></div>
                               </div>
                           </div>
                       </li>
                       <li class="timeline-item-li">
                           <div class="timeline-item-container">
                               <div class="timeline-item-header">
                                   <a class="publisher-profile" href="#">
                                       <img class="profile-avatar" src="http://lorempixel.com/48/48/people/8" alt="Livingstone Fultang" />
                                       <strong class="profile-name">Livingstone Fultang</strong>
                                       <span class="profile-nameid">@drstonyhills</span>
                                   </a>
                                   <small class="published-time">
                                       <a href="/#!/Torettox84/status/161005839744897025" title="8:42 AM - 22 Jan 12"><span class="_timestamp" data-time="1327221758000" data-long-form="true">1h ago</span></a>
                                   </small>
                                   <ul class="actions">
                                       <li class="action-like"><a href="#"><span class="like" title="Like">Like</span></a></li>
                                       <li class="action-reply"><a href="#"><span class="reply" title="Reply">Reply</span></a></li>
            
                                       <li class="action-delete"><a href="/system/activity/delete"><span class="delete" title="Delete">Delete</span></a></li>
            
                                   </ul>
                               </div>
                               <div class="timeline-item-body">Is it just me or is the latest chrome having issues loading assets? whats that with all the Content-Type: null ? for css, js and most files</div>
                               <div class="timeline-item-footer">
                                   <div class="context"><a class="profile-link" href="/#!/drstonyhills" data-user-id="15968381"><span>View 38 responses</span></a></div>
                               </div>
                           </div>
                       </li>
                       <li class="timeline-item-li">
                           <div class="timeline-item-container">
                               <div class="timeline-item-header">
                                   <a class="publisher-profile" href="#">
                                       <img class="profile-avatar" src="http://lorempixel.com/48/48/people/11" alt="Livingstone Fultang" />
                                       <strong class="profile-name">Livingstone Fultang</strong>
                                       <span class="profile-nameid">@drstonyhills</span>
                                   </a>
                                   <small class="published-time">
                                       <a href="/#!/Torettox84/status/161005839744897025" title="8:42 AM - 22 Jan 12"><span class="_timestamp" data-time="1327221758000" data-long-form="true">1h ago</span></a>
                                   </small>
                                   <ul class="actions">
                                       <li class="action-like"><a href="#"><span class="like" title="Like">Like</span></a></li>
                                       <li class="action-reply"><a href="#"><span class="reply" title="Reply">Reply</span></a></li>
            
                                       <li class="action-delete"><a href="/system/activity/delete"><span class="delete" title="Delete">Delete</span></a></li>
            
                                   </ul>
                               </div>
                               <div class="timeline-item-body">Is it just me or is the latest chrome having issues loading assets? whats that with all the Content-Type: null ? for css, js and most files</div>
                               <div class="timeline-item-footer">
                                   <div class="context"><a class="profile-link" href="/#!/drstonyhills" data-user-id="15968381"><span>View 38 responses</span></a></div>
                               </div>
                           </div>
                       </li>
                       <li class="timeline-item-li">
                           <div class="timeline-item-container">
                               <div class="timeline-item-header">
                                   <a class="publisher-profile" href="#">
                                       <img class="profile-avatar" src="http://lorempixel.com/48/48/people/2" alt="Livingstone Fultang" />
                                       <strong class="profile-name">Livingstone Fultang</strong>
                                       <span class="profile-nameid">@drstonyhills</span>
                                   </a>
                                   <small class="published-time">
                                       <a href="/#!/Torettox84/status/161005839744897025" title="8:42 AM - 22 Jan 12"><span class="_timestamp" data-time="1327221758000" data-long-form="true">1h ago</span></a>
                                   </small>
                                   <ul class="actions">
                                       <li class="action-like"><a href="#"><span class="like" title="Like">Like</span></a></li>
                                       <li class="action-reply"><a href="#"><span class="reply" title="Reply">Reply</span></a></li>
            
                                       <li class="action-delete"><a href="/system/activity/delete"><span class="delete" title="Delete">Delete</span></a></li>
                                   </ul>
                               </div>
                               <div class="timeline-item-body">Is it just me or is the latest chrome having issues loading assets? whats that with all the Content-Type: null ? for css, js and most files</div>
                               <div class="timeline-item-footer">
                                   <div class="context"><a class="profile-link" href="/#!/drstonyhills" data-user-id="15968381"><span>View 38 responses</span></a></div>
                               </div>
                           </div>
                       </li>
                       <li class="timeline-item-li">
                           <div class="timeline-item-container">
                               <div class="timeline-item-header">
                                   <a class="publisher-profile" href="#">
                                       <img class="profile-avatar" src="http://lorempixel.com/48/48/people/5" alt="Livingstone Fultang" />
                                       <strong class="profile-name">Livingstone Fultang</strong>
                                       <span class="profile-nameid">@drstonyhills</span>
                                   </a>
                                   <small class="published-time">
                                       <a href="/#!/Torettox84/status/161005839744897025" title="8:42 AM - 22 Jan 12"><span class="_timestamp" data-time="1327221758000" data-long-form="true">1h ago</span></a>
                                   </small>
                                   <ul class="actions">
                                       <li class="action-like"><a href="#"><span class="like" title="Like">Like</span></a></li>
                                       <li class="action-reply"><a href="#"><span class="reply" title="Reply">Reply</span></a></li>
            
                                       <li class="action-delete"><a href="/system/activity/delete"><span class="delete" title="Delete">Delete</span></a></li>
                                   </ul>
                               </div>
                               <div class="timeline-item-body">Is it just me or is the latest chrome having issues loading assets? whats that with all the Content-Type: null ? for css, js and most files</div>
                               <div class="timeline-item-footer">
                                   <div class="context"><a class="profile-link" href="/#!/drstonyhills" data-user-id="15968381"><span>View 38 responses</span></a></div>
                               </div>
                           </div>
                       </li>
                    -->
                </ol>
                <hr />
                <div class="row-fluid">
                    <button class="btn span12 btn-large">Load more</button>
                </div>
            </div>
        </div>
        <div class="span7">
            <tpl:import layout="input" />
            <hr class="no-bottom-margin" />
        </div>
    </div>
</tpl:layout>