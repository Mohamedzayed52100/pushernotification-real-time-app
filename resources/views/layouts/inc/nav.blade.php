<!-- Navbar -->
<style>
    .mohamed{
        /* color: red; */
        display:none;


    }
</style>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
        <a href="" class="navbar-brand">{{ Str::ucfirst(Auth::user()->fname) }}</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="" class="nav-link active">Dashboard</a>
                </li>
            </ul>


            <ul class="navbar-nav mr-auto" >
                @foreach($notifications as $key)
                <li class="nav-item dropdown mr-2" id="{{ $key->id }}">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i  id="noty" class="fa fa-bell text-white">
                            @if($key->unread)
                            <span class="badge badge-danger pending">{{ $key->unread }}</span>
                            @endif
                        </i>
                    </a>
                </li>
                @endforeach
            </ul>
            {{-- <h1 id ="mohamed" class="mohamed">mohamed</h1> --}}
        

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link"><i class="fas fa-user-times"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Notification bell icon -->
{{-- <li class="nav-item dropdown mr-2" id="notification-bell">
    <a href="#" class="nav-link" data-toggle="dropdown" data-target="#notification-menu">
        <i class="fa fa-bell text-white">
            @if($notifications->is_read > 0)
                <span class="badge badge-danger pending">{{ $notifications->where('is_read', 0)->count() }}</span>
            @endif
        </i>
    </a>
    <div class="dropdown-menu" id="notification-menu">
        <h6 class="dropdown-header">Notifications</h6>
        <div id="notification-list"></div>
    </div>
</li> --}}

{{-- <script>
    var noty= document.getElementById('noty');
    var mohamed= document.getElementById('mohamed');
    noty.onclick=function(){
        // console.log('zayed');
        mohamed.classList.toggle('mohamed');

    }
</script> --}}

{{-- <script>
    $(document).ready(function() {
        $('#noty').on('click', function() {
            console.log('moahed');
            // var SectionId = $(this).val();
            // if (SectionId) {
                // $.ajax({
                //     url: "{{ URL::to('json_code') }}" ,
                //     type: "GET",
                //     dataType: "json",
                //     success: function(data) {

                //         $.each(data, function(key, value) {
                //             $('#ul').append('<li>' + value + '</li>');
                //         });
                //     },
                // });

            // }

        //     /  $products = DB::table("products")->where("section_id", $id)->pluck("Product_name", "id");
        // return json_encode($products);
        });

    });

</script>

<script>
    $(document).ready(function() {
        $('select[name="Section"]').on('change', function() {
            var SectionId = $(this).val();
            if (SectionId) {
                $.ajax({
                    url: "{{ URL::to('section') }}/" + SectionId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="product"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="product"]').append('<option value="' +
                                value + '">' + value + '</option>');
                        });
                    },
                });

            } else {
                console.log('AJAX load did not work');
            }
        });

    });

</script> --}}
