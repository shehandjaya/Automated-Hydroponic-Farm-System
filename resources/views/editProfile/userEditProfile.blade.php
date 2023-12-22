@component('website.component.navbar')
@endcomponent

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"
                    alt="{{ Auth::user()->fname }}">
                <span class="font-weight-bold">{{ Auth::user()->fname }}</span>
                <span class="text-black-50">{{ Auth::user()->email }}</span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="{{route('userProfileEdit.UpdateUserProfileFunc')}}" method="POST">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname"
                                    placeholder="Enter your first name" value="{{ Auth::user()->fname }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name"
                                    value="{{ Auth::user()->lname }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Phone">Mobile Number</label>
                                <input type="text" class="form-control" id="Phone" name="Phone"
                                    placeholder="Enter your mobile number" value="{{ Auth::user()->Phone }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address1">Address Line 1</label>
                                <input type="text" class="form-control" id="address1" name="address1"
                                    placeholder="Enter address line 1" value="{{ Auth::user()->address1 }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address2">Address Line 2</label>
                                <input type="text" class="form-control" id="address2" name="address2"
                                    placeholder="Enter address line 2" value="{{ Auth::user()->address2 }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address3">address3</label>
                                <input type="text" class="form-control" id="address3" name="address3" placeholder="Enter your city"
                                    value="{{ Auth::user()->address3 }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="B_date">Birthday</label>
                                <input type="date" class="form-control" id="B_date" name="B_date"
                                    value="{{ Auth::user()->B_date }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="male" name="gender"
                                            value="M" @if(Auth::user()->gender == 'M') checked @endif>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="female" name="gender"
                                            value="F" @if(Auth::user()->gender == 'F') checked @endif>
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@component('website.component.footer')
@endcomponent