<a href="{{route('projects.bill',$ids)}}" class="list-group-item list-group-item-action border-0 {{ (request()->is('*bill') ? 'active' : '')}}">{{__('Bill')}} <div class="float-end"><i class="ti ti-chevron-right"></i></div></a>