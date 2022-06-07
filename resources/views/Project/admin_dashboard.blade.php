<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>ADMIN</title>
</head>

<body>
    <div class="container-fluid h-100 p-0">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand ml-3" href="/">
                <svg width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#1DA1F2" fill-rule="evenodd" d="M24,4.3086 C23.117,4.7006 22.168,4.9646 21.172,5.0836 C22.188,4.4746 22.969,3.5096 23.337,2.3596 C22.386,2.9246 21.332,3.3336 20.21,3.5556 C19.312,2.5976 18.032,1.9996 16.616,1.9996 C13.897,1.9996 11.692,4.2046 11.692,6.9236 C11.692,7.3096 11.736,7.6856 11.82,8.0456 C7.728,7.8406 4.099,5.8806 1.671,2.9006 C1.247,3.6286 1.004,4.4736 1.004,5.3766 C1.004,7.0846 1.873,8.5926 3.195,9.4756 C2.388,9.4486 1.628,9.2276 0.964,8.8596 L0.964,8.9206 C0.964,11.3066 2.661,13.2966 4.914,13.7486 C4.501,13.8626 4.065,13.9216 3.617,13.9216 C3.299,13.9216 2.991,13.8906 2.69,13.8336 C3.317,15.7896 5.135,17.2136 7.29,17.2536 C5.604,18.5736 3.481,19.3606 1.175,19.3606 C0.777,19.3606 0.385,19.3376 0,19.2926 C2.179,20.6886 4.767,21.5046 7.548,21.5046 C16.605,21.5046 21.557,14.0016 21.557,7.4946 C21.557,7.2816 21.552,7.0696 21.543,6.8586 C22.505,6.1636 23.34,5.2966 24,4.3086" />
                </svg>
            </a>
            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active ml-3 prLabel">
                        Per Page Records :
                    </li>
                    <li class="nav-item active ml-3 mt-1">
                        <select name="department" class="form-control" id="department" onchange="noOfRecords(this)">
                            <option id="5records" value="{{url('admin_dashboard/5')}}">5</option>
                            <option id="10records" value="{{url('admin_dashboard/10')}}">10</option>
                            <option id="15records" value="{{url('admin_dashboard/15')}}">15</option>
                            <option id="20records" value="{{url('admin_dashboard/20')}}">20</option>
                        </select>
                    </li>

                    <li class="nav-item active ml-3 signIn mt-1 admin-logout">
                        <a class="btn btn-danger" href="{{ url('logout') }}">Logout </a>
                    </li>


                </ul>

            </div>
        </nav>

        <div class="table-responsive">
            <table class="table  text-center">

                <thead>

                    <tr>
                        <th class="bg-dark text-white">Id</th>
                        <th class="bg-dark text-white">First Name</th>
                        <th class="bg-dark text-white">Last Name</th>
                        <th class="bg-dark text-white">Gender</th>
                        <th class="bg-dark text-white">Date Of Birth</th>
                        <th class="bg-dark text-white">Email</th>
                        <th class="bg-dark text-white">Mobile No.</th>
                        <th class="bg-dark text-white">Hobby</th>
                        <th class="bg-dark text-white">Photo</th>
                        <th class="bg-dark text-white">Delete</th>
                        <th class="bg-dark text-white">Update</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($records as $record)
                    <tr>
                        <td class="bg-light" title="Id : {{$record->id}}">{{$record->id}}</td>
                        <td class="bg-light">{{$record->first_name}}</td>
                        <td class="bg-light">{{$record->last_name}}</td>
                        <td class="bg-light">{{$record->gender}}</td>
                        <td class="bg-light">{{$record->DOB}}</td>
                        <td class="bg-light">{{$record->email}}</td>
                        <td class="bg-light">{{$record->mobile}}</td>
                        <td class="bg-light">{{$record->hobby}}</td>
                        <td class="bg-light"><img src="{{ asset($record->image) }}" width="75" height="75" alt=""> </td>
                        <td class="bg-light"><button type="button" onclick="delete_record('{{$record->id}}')" class="btn btn-danger">Delete</button></td>
                        <td class="bg-light"><a href='{{url("edit/$record->id")}}' class="btn btn-warning">Update</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="container pagination">

                {{$records->links()}}
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        let record5 = document.getElementById('5records');
        let record10 = document.getElementById('10records');
        let record15 = document.getElementById('15records');
        let record20 = document.getElementById('20records');

        function delete_record(id) {

            let confirmation = confirm('Are you sure to delete this record?');

            if (confirmation === true) {
                window.location = '{{url("delete")}}/' + id;
            }
        }

        function noOfRecords(num) {
            window.location = num.value;
        }

        let number = window.location.pathname;
        console.log(number);
        switch (number) {
            case '/admin_dashboard/10':
                record10.setAttribute('selected', true);
                break;
            case '/admin_dashboard/15':
                record15.setAttribute('selected', true);
                break;
            case '/admin_dashboard/20':
                record20.setAttribute('selected', true);
                break;
        }
    </script>



</body>

</html>