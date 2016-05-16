                    @foreach(info->$links as $link)
                    <ul class="nav nav-sidebar">
                        @foreach($link as $li)
                        <li class={{ $li['active'] }}><a href={{ $li['link']}}>{{ $li['name'] }}</a></li>
                        @endforeach
                    </ul>
                    @endforeach
