<div class="row">
    <div class="col-md-12">
        @if(session()->has('status'))
            {{session()->get('status')}}
        @endif
    </div>
</div>
