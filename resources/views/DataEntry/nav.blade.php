
<li> <a href="/editors/reports/" class="waves-effect"><i class="fa fa-book"></i>
        <span class="hide-menu">تقارير واحصائيات</span>
    </a>
</li>

<li> <a href="/editors/profile/" class="waves-effect"><i class="fa fa-user"></i>
        <span class="hide-menu">البروفايل الخاص بك</span>
    </a>
</li>

<li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-newspaper-o"></i>
        <span class="hide-menu">الأخبار<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="/editors/news"> <i class="fa fa-newspaper-o"></i>كل الأخبار </a> </li>
        <li> <a href="/editors/news/create"> <i class="fa fa-plus-circle"></i> اضافة خبر جديد </a><li>
    </ul>
</li>

@can('control videos')
<li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-file-video-o"></i>
        <span class="hide-menu">الفيديوهات<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="/editors/videos"> <i class="fa fa-file-video-o"></i> كل الفيديوهات </a> </li>
        <li> <a href="/editors/videos/create"> <i class="fa fa-plus-circle"></i> اضافة فيديو جديد </a><li>
    </ul>
</li>
@endcan
@can('control images')
<li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-file-image-o"></i>
        <span class="hide-menu">الانفوجراف<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="/editors/infographics"> <i class="fa fa-file-image-o"></i>كل الانفوجراف </a> </li>
        <li> <a href="/editors/infographics/create"> <i class="fa fa-plus-circle"></i> اضافة انفوجراف جديد </a><li>
    </ul>
</li>
@endcan





