@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse" style="background: #F2F5F5">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">

            <!-- <li class="{{ $request->segment(1) == 'tests' ? 'active' : '' }}">
                <a href="{{ route('tests.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.test.new')</span>
                </a>
            </li> -->

            <li class="{{ $request->segment(1) == 'results' ? 'active' : '' }}">
                <a href="{{ route('results.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title" style="color: black">Hasil Ujian</span>
                </a>
            </li>

            @if(Auth::user()->isAdmin())
            <li class="{{ $request->segment(1) == 'topics' ? 'active' : '' }}">
                <a href="{{ route('topics.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title" style="color: black">@lang('quickadmin.topics.title')</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'questions' ? 'active' : '' }}">
                <a href="{{ route('questions.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title" style="color: black">@lang('quickadmin.questions.title')</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'class' ? 'active' : '' }}">
                <a href="{{ route('class.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title" style="color: black">Kelas</span>
                </a>
            </li>
           <!--  <li class="{{ $request->segment(1) == 'questions_options' ? 'active' : '' }}">
                <a href="{{ route('questions_options.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.questions-options.title')</span>
                </a>
            </li> -->
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title" style="color: black">@lang('quickadmin.user-management.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ $request->segment(1) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title" style="color: black">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(1) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title" style="color: black">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(1) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title" style="color: black">
                                @lang('quickadmin.user-actions.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
                <li class="{{ $request->segment(1) == 'lucky_draw' ? 'active active-sub' : '' }}">
                    <a href="{{ route('lucky_draw') }}">
                        <i class="fa fa-th-list"></i>
                        <span class="title" style="color: black">
                                @lang('quickadmin.lucky_draw')
                            </span>
                    </a>
                </li>
                <li class="{{ $request->segment(1) == 'box_page' ? 'active active-sub' : '' }}">
                    <a href="{{ route('box_page') }}">
                        <i class="fa fa-th-list"></i>
                        <span class="title" style="color: black">
                                @lang('quickadmin.box_page')
                            </span>
                    </a>
                </li>
                <li class="{{ $request->segment(1) == 'upload' ? 'active active-sub' : '' }}">
                    <a href="{{ route('uploads.index') }}">
                        <i class="fa fa-th-list"></i>
                        <span class="title" style="color: black">
                                @lang('quickadmin.uploads.title')
                            </span>
                    </a>
                </li>

                <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title" style="color: black">@lang('quickadmin.logout')</span>
                </a>
            </li>
        </ul>

            </div>
</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
