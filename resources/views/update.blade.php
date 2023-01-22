<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>Update</title>
</head>

@foreach($data as $detail)
@endforeach


<body>


    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand ml-3" href="/">
                <svg width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#1DA1F2" fill-rule="evenodd" d="M24,4.3086 C23.117,4.7006 22.168,4.9646 21.172,5.0836 C22.188,4.4746 22.969,3.5096 23.337,2.3596 C22.386,2.9246 21.332,3.3336 20.21,3.5556 C19.312,2.5976 18.032,1.9996 16.616,1.9996 C13.897,1.9996 11.692,4.2046 11.692,6.9236 C11.692,7.3096 11.736,7.6856 11.82,8.0456 C7.728,7.8406 4.099,5.8806 1.671,2.9006 C1.247,3.6286 1.004,4.4736 1.004,5.3766 C1.004,7.0846 1.873,8.5926 3.195,9.4756 C2.388,9.4486 1.628,9.2276 0.964,8.8596 L0.964,8.9206 C0.964,11.3066 2.661,13.2966 4.914,13.7486 C4.501,13.8626 4.065,13.9216 3.617,13.9216 C3.299,13.9216 2.991,13.8906 2.69,13.8336 C3.317,15.7896 5.135,17.2136 7.29,17.2536 C5.604,18.5736 3.481,19.3606 1.175,19.3606 C0.777,19.3606 0.385,19.3376 0,19.2926 C2.179,20.6886 4.767,21.5046 7.548,21.5046 C16.605,21.5046 21.557,14.0016 21.557,7.4946 C21.557,7.2816 21.552,7.0696 21.543,6.8586 C22.505,6.1636 23.34,5.2966 24,4.3086" />
                </svg>
            </a>

        </nav>

        <!-- register form -->
        <div class="container mt-5 w-100">
            <form method="POST" enctype="multipart/form-data">
                <div class="row form-head">

                    <h1 class="text-center col-lg-12 p-1">Update</h1>
                </div>
                <div class="row form-body">

                    <div class="col-lg-6 ">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="first_name" class="">First Name</label>
                            <input class="form-control" type="text" name="firstName" id="first_name" value="{{$detail->first_name}}">
                            <small>@error('firstName'){{$message}} @enderror </small>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input class="form-control" type="text" name="lastName" id="last_name" value="{{$detail->last_name}}">
                            <small>@error('lastName'){{$message}} @enderror </small>
                        </div>

                        <label for="">Gender <small>@error('gender'){{$message}} @enderror </small>
                            <div class="form-check">
                                <label for="male" class="form-check-label">
                                    <input type="radio" value="male" class="form-check-input" id="male" name="gender" @if($detail->gender =='male' ) checked @endif> male
                                </label>
                            </div>
                            <div class="form-check">

                                <label for="female" class="form-check-label">

                                    <input type="radio" value="female" class="form-check-input" id="female" name="gender" @if($detail->gender =='female' ) checked @endif> female
                                </label>
                            </div>
                        </label>

                        <div class="form-group">
                            <label for="dob">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob" value="{{$detail->DOB}}">
                            <small>@error('dob'){{$message}} @enderror </small>
                        </div>



                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{$detail->email}}">
                            <small>@error('email'){{$message}} @enderror </small>
                        </div>

                    </div>


                    <div class="col-lg-6  ">


                        <div class="form-group">
                            <label for="mobile">Mobile No.</label>
                            <input type="text" class="form-control" name="mobile" id="mobile" value="{{$detail->mobile}}">
                            <small>@error('mobile'){{$message}} @enderror </small>
                        </div>

                        <!-- <div id="show-hobby">
                            <div class="form-group">
                                <label for="hobby">Hobby</label>
                                <input type="text" class="form-control" name="hobby" id="hobby" value="{{$detail->hobby}}" readonly>
                            </div>
                        </div> -->

                        <div id="update-hobby">
                            <label for=""> Hobby <small>@error('hobby'){{$message}} @enderror </small>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="hobby[]" id="reading" value="reading" @if(str_contains($detail->hobby, 'reading')) checked @endif >
                                    <label for="reading" class="form-check-label">Reading</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="hobby[]" id="dancing" value="dancing" @if(str_contains($detail->hobby, 'dancing')) checked @endif >
                                    <label for="dancing" class="form-check-label">Dancing</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="hobby[]" id="programming" value="programming" @if(str_contains($detail->hobby, 'programming')) checked @endif >
                                    <label for="programming" class="form-check-label">Programming</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="hobby[]" id="gaming" value="gaming" @if(str_contains($detail->hobby, 'gaming')) checked @endif >
                                    <label for="gaming" class="form-check-label">Gaming</label>
                                </div>

                            </label>
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Your Photo</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            <small> @error('image'){{$message}} @enderror </small>
                        </div>

                        <div>

                            <button class="btn btn-primary ">Update</button>
                            <a href="{{ url('admin_dashboard') }}" class="btn btn-warning">Back</a>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

</body>

</html>