
<div class="header bg-dark p-5  ">
    <div class="container-fluid">
        <div class="header-body text-center">
            <h3 class="text-white">Available Limit</h3>

                @if($offdata)
                <h1 class="text-white display-2">N {{$loan_schedule->approved_ceiling}}</h1>

                <div class="container">
                    <a href="{{ route('user.loans')}}"  class="btn btn-warning text-center btn-lg shadow">Apply Now</a>
                </div>

                @else

                <h1 class="text-white display-2">Not Available</h1>

                <div class="container">
                    <a href="{{ route('user.profile')}}"  class="btn btn-secondary text-center btn-lg shadow">Update Profile</a>
                </div>

                @endif

            
        </div>
    </div>
</div>